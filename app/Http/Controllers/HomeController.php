<?php 
namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Item;


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


    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function home()

    {

        return view('home');

    }

    public function search_player()

    {

        return view('search_player');

    }

    public function store(Request $request)
    {

        
    }




 }