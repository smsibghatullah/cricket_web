<?php 
namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Item;

use App\Models\Player;
use App\Models\Tournament;
use App\Models\Fixture;
use App\Models\FixtureScore;
use App\Models\Team;

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
        $match_results = Fixture::query();
        $match_results->where('running_inning','=',3);
        $match_results = $match_results->orderBy('id')->get();
        $teams = Team::query()->get()->pluck(
          'name',
          'id'
        );

        return view('home',compact('tournament', 'match_results','teams'));
    }

    public function fullScorecard(int $id)
    {

        $result = [];

        $card =FixtureScore::Where('fixture_id','=',$id)
                ->selectRaw("sum(runs) as total_runs")
                ->selectRaw("count(isfour) as total_fours")
                ->selectRaw("count(issix) as total_six")
                ->selectRaw("playerId")
                ->groupBy('playerId')
                ->get();


        // dd($card);
        return view('score_card',compact('result'));

    }

    public function search_player()
    {

        $result = [];
        return view('search_player',compact('result'));

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