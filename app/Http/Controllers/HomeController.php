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
        // dd($match_results);
        // $match_results = $match_results
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

        return view('home',compact('tournament', 'match_results','teams','upcoming_match','ground'));
    }
public function balltoballScorecard(int $id)
{
  $match_results = Fixture::query();
  $match_results->where('id','=',$id);
  $match_results = $match_results->orderBy('id')->get();
  $match_data = $match_results->find($id); 
  // dd($match_results );
 
  $match_result_description = Fixture::query()->get()->where($match_results[0]->match_result_description)->first(); 
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

  $total_overs = FixtureScore::where('fixture_id', '=', $id)
  ->get()
  ->sum(function ($item) {
      $overs = floor($item->overnumber);
      return $overs/6;
  });


  $match_detail = FixtureScore::Where('fixture_id','=',$id)
    ->selectRaw("playerId")
    ->selectRaw("balltype")
    ->selectRaw("runs")
    ->selectRaw("overnumber")
    ->selectRaw("ballnumber")
    ->selectRaw("bowlerId")
    ->selectRaw("inningnumber")
    ->get();

  return view('ballbyballscorecard',compact('teams_one' ,'match_data','match_result_description', 'teams_two','match_detail','match_results','teams','player','total_run','total_wickets','total_overs')); 
}

    
    public function fullScorecard_overbyover(int $id)
    {

        $scores = FixtureScore::query();
        $scores->where('fixture_id','=',$id);
        $scores = $scores->orderBy('id')->get();
        // dd($scores);

        return view('score_overbyover', compact('scores'));

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


        return view('score_card',compact('player_runs', 'player_balls','match_results','teams','player','tournament','ground','match_data'));

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
        return view('search_player',compact('result'));
    }




 }