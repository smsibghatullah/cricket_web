<?php 
namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Item;

use App\Models\Player;
use App\Models\Tournament;
use App\Models\Fixture;
use App\Models\FixtureScore;
use App\Models\Team;
use App\Models\Ground;
use App\Models\TeamPlayer;
use App\Models\Plan;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        //

    }


    public function home()
    {


        $tournament = Tournament::query();
        $tournament = $tournament->orderBy('id')->get();
        $ground = Ground::query();
        $ground = $ground->orderBy('id')->get();
        $match_results = Fixture::query();
        $match_results->where('running_inning','=',3);
        $match_results = $match_results->orderBy('id')->get();;
        $upcoming_match = Fixture::query();
        $upcoming_match->where('running_inning','=',0);
        $upcoming_match = $upcoming_match->skip(5)->take(5)->orderBy('id')->get();;
        $teams = Team::query()->get()->pluck(
          'name',
          'id'
        );
        $ground = Ground::query()->get()->pluck(
            'name',
            'id'
          );

          $plan = Plan::query()->get()->pluck(
            'name',
            'id'
          )->first();
  
          session()->put('plan', $plan);
          $plan = session('plan');
      
          return view('home',compact('tournament', 'match_results','teams','upcoming_match','ground' , 'plan'));

        
    }


public function balltoballScorecard(int $id)
{


  $match_results = Fixture::query();
  $match_results->where('id','=',$id);
  $match_results = $match_results->orderBy('id')->get();
  
  $match_data = $match_results->find($id); 
  // dd($match_data[0]->match_result_description);
  $teams = Team::query()->get()->pluck(
    'name',
    'id'
  );
  
  $tournament = Tournament::query()->get()->where('id', '=', $match_results[0]->tournament_id)->pluck(
    'name',
    'id'
  )->first();
  $teams_one = Team::query()->get()->where('id', '=', $match_results[0]->first_inning_team_id)->pluck(
    'name',
    'id'
  )->first();
  $teams_two = Team::query()->get()->where('id', '=', $match_results[0]->second_inning_team_id)->pluck(
    'name',
    'id'
  )->first(); 

 
  $teams_two_player = TeamPlayer::query()->get()->where('team_id', '=', $match_results[0]->second_inning_team_id)->pluck(
    'player_id',
    'id'
  ); 


  $teams_one_player = TeamPlayer::query()->get()->where('team_id', '=', $match_results[0]->first_inning_team_id)->pluck(
    'player_id',
    'id'
  ); 
  

  $player = Player::query()->get()->pluck(
    'fullname',
    'id'
  );
 
  $total_run =FixtureScore::Where('fixture_id','=',$id)
    ->selectRaw("sum(runs) as total_runs")
    ->selectRaw("inningnumber")
    ->groupBy('inningnumber')
    ->get();

  $total_wickets = FixtureScore::where('fixture_id', '=', $id)
  ->selectRaw("SUM(CASE WHEN balltype = 'Wicket' THEN 1 ELSE 0 END) as total_wickets")
  ->selectRaw("inningnumber")
  ->groupBy('inningnumber')
  ->get();

  $match_total_overs = FixtureScore::where('fixture_id', '=', $id)
  ->selectRaw('max(overnumber) as max_over')
  ->first()
  ->max_over;

  $overs = floor($match_total_overs);
  $balls = ($match_total_overs - $overs) * 10;
  $total_balls = ($overs * 6) + $balls;
  $match_total_overs = $total_balls / 6;
  $match_total_overs = round($match_total_overs, 2);


  $innings = FixtureScore::where('fixture_id', '=', $id)
  ->selectRaw('inningnumber, max(overnumber) as max_over')
  ->groupBy('inningnumber')
  ->get();

  $total_overs = array();

  foreach ($innings as $inning) {
    $overs = $inning->max_over;
    $balls = ($overs - floor($overs)) * 10;
    $total_balls = ($overs * 6) + $balls;
    $total_over = $total_balls / 6;
    $total_overs[$inning->inningnumber] = round($total_over, 2);
  }


  $match_detail = FixtureScore::Where('fixture_id','=',$id)
    ->selectRaw("playerId")
    ->selectRaw("balltype")
    ->selectRaw("runs")
    ->selectRaw("overnumber")
    ->selectRaw("ballnumber")
    ->selectRaw("bowlerId")
    ->selectRaw("inningnumber")
    ->get();

    $team_one_runs = FixtureScore::where('fixture_id', '=', $id)
    ->where('inningnumber', '=', 1)
    ->sum('runs');
  
  $team_one_overs = $total_overs[1];
  
  $team_one_run_rate = ($team_one_runs / $team_one_overs);
  
  $team_two_runs = FixtureScore::where('fixture_id', '=', $id)
    ->where('inningnumber', '=', 2)
    ->sum('runs');
  
  $team_two_overs = $total_overs[2];
  
  $team_two_run_rate = ($team_two_runs / $team_two_overs);
  return view('ballbyballscorecard',compact('team_one_run_rate','team_two_run_rate','teams_one','match_total_overs' ,'match_data', 'teams_two','match_detail','match_results','teams','player','total_run','total_wickets','total_overs','tournament','teams_two_player','teams_one_player')); 
}

    
    public function fullScorecard_overbyover(int $id)
    {
      $match_results = Fixture::query();
      $match_results->where('id','=',$id);
      $match_results = $match_results->orderBy('id')->get();
      $teams = Team::query()->get()->pluck(
        'name',
        'id'
      );
      $teams_one = Team::query()->get()->where('id', '=', $match_results[0]->first_inning_team_id)->pluck(
        'name',
        'id'
      )->first();
      $teams_two = Team::query()->get()->where('id', '=', $match_results[0]->second_inning_team_id)->pluck(
        'name',
        'id'
      )->first(); 
      $player = Player::query()->get()->pluck(
        'fullname',
        'id'
      );
        $scores = FixtureScore::query();
        $scores->where('fixture_id','=',$id);
        $scores = $scores->orderBy('id')->get();
      

        return view('score_overbyover', compact('scores','match_results','teams','player','teams_one','teams_two'));

    }

    public function fullScorecard(int $id)
    {
        $ground = Ground::query();
        $ground = $ground->orderBy('id')->get();
        $ground = Ground::query()->get()->pluck(
          'name',
          'id'
        );
        $match_results = Fixture::query();
        $match_results->where('id','=',$id);
        $match_results = $match_results->orderBy('id')->get();
        $result = [];
        $match_data = $match_results->find($id); 
        $tournamentId = $match_results->first()->tournament_id;
        $tournament = Tournament::query()->where('id','=',$tournamentId)->get()->pluck(
            'name'
          );
        $teams = Team::query()->get()->pluck(
          'name',
          'id'
        );
        $player = Player::query()->get()->pluck(
            'fullname',
            'id'
          );
          $teams_one = Team::query()->get()->where('id', '=', $match_results[0]->first_inning_team_id)->pluck(
            'name',
            'id'
          )->first();
          $teams_two = Team::query()->get()->where('id', '=', $match_results[0]->second_inning_team_id)->pluck(
            'name',
            'id'
          )->first(); 
        

        $player_runs =FixtureScore::Where('fixture_id','=',$id)
                ->selectRaw("sum(runs) as total_runs")
                ->selectRaw("count(isfour) as total_fours")
                ->selectRaw("count(issix) as total_six")
                ->selectRaw("playerId")
                ->selectRaw("inningnumber")
                ->groupBy('playerId')
                ->groupBy('inningnumber')
                ->get();

        $variable1 = 'R';
        $variable2 = 'Wicket';       
        $player_balls = FixtureScore::where('fixture_id','=',$id)
               ->where(function($query) use ($variable1,$variable2){
                    $query->where('balltype','=',$variable1)
                   ->orWhere('balltype','=',$variable2);
               })->selectRaw("count(id) as balls")
                ->selectRaw("playerId")->groupBy('playerId')
                ->get()->pluck('balls','playerId');;


        return view('score_card',compact('player_runs', 'teams_one','teams_two','player_balls','match_results','teams','player','tournament','ground','match_data'));

    }

    public function search_player()
    {
        $match_results = Fixture::query();
        $match_results->where('running_inning','=',3);
        $teams = Team::query()->get()->pluck(
            'name',
            'id'
          );
        $match_results = $match_results->orderBy('id')->get();;
        $result = [];
        return view('search_player',compact('result','match_results','teams'));

    }

    public function searchplayer_form_submit(Request $request)
    {
      $match_results = Fixture::query();
      $match_results->where('running_inning','=',3);
      $teams = Team::query()->get()->pluck(
          'name',
          'id'
        );
        $player = Player::query();

        $term = $request;
        if(!empty($term->fullname)){
            $player->where('fullname','=',$term['fullname']);
        }
        if(!empty($term['sex'])){
            $player->where('sex','=',$term['sex']);
        }
        if(!empty($term['radius'])){
            $player->where('radius','=',$term['radius']);
        }

        $result = $player->orderBy('id')->get();

        // dd($result);
        return view('search_player',compact('result','match_results'));
    }
    
    public function result()
    {
        $match_results = Fixture::query();
        $match_results->where('running_inning','=',3);
        $teams = Team::query()->get()->pluck(
            'name',
            'id'
          );
          // dd($teams);
        $match_results = $match_results->orderBy('id')->get();;
        $results = [];
        $tournament = Tournament::query()->pluck(
          'name',
          'id'
      );
        return view('result',compact('results','match_results','teams','tournament','teams'));
    }

    public function result_form_submit(Request $request)
    {
      DB::enableQueryLog();

        if ($request->method() !== 'POST') {
            abort(405, 'Method Not Allowed');
        }
        $years = DB::table('fixtures')
            ->select(DB::raw('YEAR(created_at) as year'))
            ->groupBy(DB::raw('YEAR(created_at)'))
            ->orderBy(DB::raw('YEAR(created_at)'), 'desc')
            ->pluck('year');
    
        $match_results = Fixture::query()->orderBy('id')->get();
        $data = Fixture::query();
        $term = $request;
        if (!empty($term->created_at)) {
          $data->whereRaw("DATE(match_startdate) >= Date('$term->created_at')");
        }
        if (!empty($term->end_at)) {
          $data->whereRaw("DATE(match_enddate) <= Date('$term->end_at')");
        }
        // dd($data);
        if (!empty($term['year'])) {
            $year = $term['year'];
            $data->whereRaw("YEAR(created_at) = $year");
        }
        if (!empty($term['teams'])) {
            $team = $term['teams'];
            $data->where('team_id_a', '=', $team)
            ->oRWhere('team_id_b', '=', $team);
        }
        if (!empty($term['tournament'])) {
          $tournaments = $term['tournament'];
          $data->where('tournament_id', '=', $tournaments);
      }
    
        $teams = Team::query()->get()->pluck(
            'name',
            'id'
        );

        $results = $data->get();
        // dd($results);
//         $query = DB::getQueryLog();
//         $query = DB::getQueryLog();
// dd($query);
        $tournament = Tournament::query()->pluck(
                'name',
                'id'
            );

        $total_runs = [];
         $total_wicket_fixture = [];
         $total_run_fixture = [];
         foreach ($results as $result) {
          $match_summary = FixtureScore::where('fixture_id', '=', $result->id)
          ->selectRaw("SUM(CASE WHEN balltype = 'Wicket' THEN 1 ELSE 0 END) as total_wickets")
          ->selectRaw('inningnumber, max(overnumber) as max_over')
          ->selectRaw('SUM(runs) as total_runs')
          ->selectRaw("inningnumber")
          ->groupBy('inningnumber')
          ->get();
      
          if(count($match_summary)== 2)
          {
              $total_wicket_fixture[$result->id] = [$match_summary[0]['total_wickets'], $match_summary[1]['total_wickets']];
              $total_run_fixture[$result->id] = [$match_summary[0]['max_over'], $match_summary[1]['max_over'] ] ;
              $total_runs[$result->id] = [$match_summary[0]['total_runs'], $match_summary[1]['total_runs']];

             }   
        } 
       
       
        return view('result', compact('results', 'teams', 'match_results', 'years', 'tournament','total_run_fixture','total_runs', 'total_wicket_fixture'));
    }
    
    public function live_score(Request $request)
    {
        $fixture_id = [176, 177, 178]; 
        
        $match_results = Fixture::query();
        $match_results->orWhere('running_inning', '=', 1);
        $match_results->orWhere('running_inning', '=', 2);  // for inning 1 or 2 
        // $match_results->whereDate('match_startdate', Carbon::today()->toDateString());
        $data = $match_results->take(5)->pluck('id')->all();
        
        $player_runs = FixtureScore::whereIn('fixture_id', $data)
            ->selectRaw("fixture_id, inningnumber, sum(runs) as total_runs")
            ->selectRaw("tournament.name as tournaments_name")
            ->selectRaw("team_a.name as team_a_name, team_b.name as team_b_name")
            ->selectRaw("team_id_a,team_id_b")
            ->selectRaw("match_startdate")
            ->selectRaw("numberofover")
            ->selectRaw("SUM(CASE WHEN balltype = 'Wicket' THEN 1 ELSE 0 END) as total_wickets")
            ->groupBy('fixture_id', 'inningnumber')
            ->selectRaw('inningnumber, max(overnumber) as max_over')
            ->join('fixtures', 'fixtures.id', '=', 'fixture_id')
            ->Join('teams as team_a', 'team_a.id', '=', 'fixtures.team_id_a')
            ->Join('teams as team_b', 'team_b.id', '=', 'fixtures.team_id_b')
            ->Join('tournaments as tournament', 'tournament.id', '=', 'fixtures.tournament_id')
            ->orderBy('fixture_id')->get();
            
        return response()->json($player_runs);
    }
    
 }