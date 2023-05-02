<?php 
namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Item;

use App\Models\Player;
use App\Models\Tournament;
use App\Models\Fixture;
use App\Models\TournamentGroup;
use App\Models\FixtureScore;
use App\Models\Team;
use App\Models\Ground;
use App\Models\TeamPlayer;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; 



class ApiController extends Controller

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


 
    
    public function live_score(Request $request)
    {
        $match_results = Fixture::query();
        $match_results->orWhere('running_inning', '=', 1);
        $match_results->orWhere('running_inning', '=', 2);  // for inning 1 or 2 
        $data = $match_results->pluck('id')->all();
        
        $today = Carbon::now()->toDateString(); 
        $now = Carbon::now();
        $currentTime = Carbon::createFromFormat('H:i:s', $now->format('H:i:s'), 'UTC');
        $localTime = $currentTime->addHours(5);
        
        $player_runs = FixtureScore::whereIn('fixture_id', $data)
            ->selectRaw("fixture_id, inningnumber, sum(runs) as total_runs")
            ->selectRaw("tournament.name as tournaments_name")
            ->selectRaw("ground.name as ground_name")
            ->selectRaw("team_a.name as team_a_name, team_b.name as team_b_name")
            ->selectRaw("team_id_a,team_id_b")
            ->selectRaw("match_startdate")
            ->selectRaw("numberofover")
            ->selectRaw("SUM(CASE WHEN balltype = 'Wicket' THEN 1 ELSE 0 END) as total_wickets")
            ->groupBy('fixture_id', 'inningnumber')
            ->selectRaw('inningnumber, max(overnumber) as max_over ')
            ->selectRaw('inningnumber, max(ballnumber) as max_ball ')
            ->join('fixtures', 'fixtures.id', '=', 'fixture_id')
            ->Join('teams as team_a', 'team_a.id', '=', 'fixtures.team_id_a')
            ->Join('teams as team_b', 'team_b.id', '=', 'fixtures.team_id_b')
            ->Join('tournaments as tournament', 'tournament.id', '=', 'fixtures.tournament_id')
            ->Join('grounds as ground', 'ground.id', '=', 'fixtures.ground_id')
            ->whereDate('match_startdate', $today)
            ->whereTime('match_starttime', '<=', $localTime)
            ->whereTime('match_endtime', '>=', $localTime)
            ->orderBy('fixture_id')
            ->get();
    
        return response()->json($player_runs);
    }
    
    public function get_point_table(int $id)
    {
        $get_point_table_data = TournamentGroup::where('tournament_id', '=', $id)
            ->selectRaw("team_name.name as teams_name")
            ->selectRaw("team_name.id as teams_id")
            ->Join('teams as team_name', 'team_name.id', '=', 'tournament_groups.team_id')
            ->get()->pluck('teams_name', 'teams_id');
    
        $match_count_team_a = Fixture::where('tournament_id', '=', $id)
            ->selectRaw("COUNT(id)")
            ->selectRaw("team_id_a")
            ->groupby('team_id_a')
            ->get()->pluck('COUNT(id)', 'team_id_a');
    
        $match_count_team_b = Fixture::where('tournament_id', '=', $id)
            ->selectRaw("COUNT(id)")
            ->selectRaw("team_id_b")
            ->groupby('team_id_b')
            ->get()->pluck('COUNT(id)', 'team_id_b');
    
        $match_count_winning_team = Fixture::where('tournament_id', '=', $id)
            ->selectRaw("COUNT(id)")
            ->selectRaw("winning_team_id")
            ->groupby('winning_team_id')
            ->get()->pluck('COUNT(id)', 'winning_team_id');
    
        $match_count_loss_team = Fixture::where('tournament_id', '=', $id)
            ->selectRaw("COUNT(id)")
            ->selectRaw("lossing_team_id")
            ->groupby('lossing_team_id')
            ->get()->pluck('COUNT(id)', 'lossing_team_id');


            $match_get_players = Fixture::where('tournament_id', '=', $id)
            ->selectRaw("COUNT(team_players.id) as player_count")
            ->selectRaw("team_name.name as team_name")
            ->selectRaw("team_name.id as team_id")
            ->selectRaw("players.name as player_name")
            ->join('team_players', 'team_players.team_id', '=', 'fixtures.lossing_team_id')
            ->join('players', 'players.id', '=', 'team_players.player_id')
            ->join('teams as team_name', 'team_name.id', '=', 'team_players.team_id')
            ->where('team_players.team_id', '=', $team_id)
            ->groupBy('team_name.id')
            ->get();
    
        $result = array();
        foreach ($get_point_table_data as $team_id => $team_name) {
            $team_wins = isset($match_count_winning_team[$team_id]) ? $match_count_winning_team[$team_id] : 0;
            $team_losses = isset($match_count_loss_team[$team_id]) ? $match_count_loss_team[$team_id] : 0;
            $team_total_matches = isset($match_count_team_a[$team_id]) ? $match_count_team_a[$team_id] : 0;
            if (isset($match_count_team_b[$team_id])) {
                $team_total_matches += $match_count_team_b[$team_id];
            }
            $team_players_count = isset($team_players[$team_id]) ? $team_players[$team_id] : 0;
            $result[] = [
                'team_id' => $team_id,
                'team_name' => $team_name,
                'total_matches' => $team_total_matches,
                'wins' => $team_wins,
                'losses' => $team_losses,
                'draws' => $team_total_matches - $team_wins - $team_losses,
                'players_count' => $team_players_count
            ];
        }
        
    
        return response()->json($result);
    }
    
  
    
    
 }