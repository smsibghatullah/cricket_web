@extends('default')
@section('content')
<div class="holder point">
    	<div class="container p-sm-0">
        	<div class="point-table-all sch">
            <div class="series-drops">
            	<div class="row series-drop">
                	<div class="col-sm-6 col-xs-12">
                    	<div class="border-heading" style="margin-bottom: 0px;">
                            <h5 style="text-align: left!important;">Match Results: 2022 - Boom Boom T10</h5>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                     <table style="width: 100%">
						
						<tbody><tr class="text-right">
						<td style="display: inline-flex;
						" class="hidden-phone icon-fixture">
							<button type="button" id="list-view" title="List View" class="btn btn-md hidden-phone" style="font-size:18px;margin-right: 10px;"><i class="fa fa-list" aria-hidden="true"></i></button>
							<button type="button" id="grid-view" title="Grid View" class="btn btn-md hidden-phone" style="font-size:18px;"><i class="fa fa-th" aria-hidden="true"></i></button>
						</td>
						
						
							<td style="display: inline-block;
						margin-left: 15px;"><div class="addthis_sharing_toolbox hidden-phone" style="height: 24px; text-align: right; clear: both;" data-url="https://www.mississaugacricketleague.ca/MississaugaCricketLeague/listMatches.do?league=116&amp;year=null&amp;clubId=2565" data-title="2022 - Boom Boom T10: Match Results - Mississauga Cricket League" data-description="20 Teams, 5 Group(s), Start Date: 10/08/2022"><div id="atstbx" class="at-share-tbx-element addthis-smartlayers addthis-animated at4-show" aria-labelledby="at-aab876de-62a8-4f46-a78b-aee5f62c6c9f" role="region"><span id="at-aab876de-62a8-4f46-a78b-aee5f62c6c9f" class="at4-visually-hidden">AddThis Sharing Buttons</span><div class="at-share-btn-elements"><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-facebook" style="background-color: rgb(59, 89, 152); border-radius: 0%;"><span class="at4-visually-hidden">Share to Facebook</span><span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-facebook-1" class="at-icon at-icon-facebook" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;"><title id="at-svg-facebook-1">Facebook</title><g><path d="M22 5.16c-.406-.054-1.806-.16-3.43-.16-3.4 0-5.733 1.825-5.733 5.17v2.882H9v3.913h3.837V27h4.604V16.965h3.823l.587-3.913h-4.41v-2.5c0-1.123.347-1.903 2.198-1.903H22V5.16z" fill-rule="evenodd"></path></g></svg></span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-twitter" style="background-color: rgb(29, 161, 242); border-radius: 0%;"><span class="at4-visually-hidden">Share to Twitter</span><span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-twitter-2" class="at-icon at-icon-twitter" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;"><title id="at-svg-twitter-2">Twitter</title><g><path d="M27.996 10.116c-.81.36-1.68.602-2.592.71a4.526 4.526 0 0 0 1.984-2.496 9.037 9.037 0 0 1-2.866 1.095 4.513 4.513 0 0 0-7.69 4.116 12.81 12.81 0 0 1-9.3-4.715 4.49 4.49 0 0 0-.612 2.27 4.51 4.51 0 0 0 2.008 3.755 4.495 4.495 0 0 1-2.044-.564v.057a4.515 4.515 0 0 0 3.62 4.425 4.52 4.52 0 0 1-2.04.077 4.517 4.517 0 0 0 4.217 3.134 9.055 9.055 0 0 1-5.604 1.93A9.18 9.18 0 0 1 6 23.85a12.773 12.773 0 0 0 6.918 2.027c8.3 0 12.84-6.876 12.84-12.84 0-.195-.005-.39-.014-.583a9.172 9.172 0 0 0 2.252-2.336" fill-rule="evenodd"></path></g></svg></span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-print" style="background-color: rgb(115, 138, 141); border-radius: 0%;"><span class="at4-visually-hidden">Share to Print</span><span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-print-3" class="at-icon at-icon-print" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;"><title id="at-svg-print-3">Print</title><g><path d="M24.67 10.62h-2.86V7.49H10.82v3.12H7.95c-.5 0-.9.4-.9.9v7.66h3.77v1.31L15 24.66h6.81v-5.44h3.77v-7.7c-.01-.5-.41-.9-.91-.9zM11.88 8.56h8.86v2.06h-8.86V8.56zm10.98 9.18h-1.05v-2.1h-1.06v7.96H16.4c-1.58 0-.82-3.74-.82-3.74s-3.65.89-3.69-.78v-3.43h-1.06v2.06H9.77v-3.58h13.09v3.61zm.75-4.91c-.4 0-.72-.32-.72-.72s.32-.72.72-.72c.4 0 .72.32.72.72s-.32.72-.72.72zm-4.12 2.96h-6.1v1.06h6.1v-1.06zm-6.11 3.15h6.1v-1.06h-6.1v1.06z"></path></g></svg></span></a><a role="button" tabindex="0" class="at-icon-wrapper at-share-btn at-svc-compact" style="background-color: rgb(255, 101, 80); border-radius: 0%;"><span class="at4-visually-hidden">Share to More</span><span class="at-icon-wrapper" style="line-height: 32px; height: 32px; width: 32px;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" version="1.1" role="img" aria-labelledby="at-svg-addthis-4" class="at-icon at-icon-addthis" style="fill: rgb(255, 255, 255); width: 32px; height: 32px;"><title id="at-svg-addthis-4">AddThis</title><g><path d="M18 14V8h-4v6H8v4h6v6h4v-6h6v-4h-6z" fill-rule="evenodd"></path></g></svg></span></a></div></div></div>
							<table style="width: 100%; margin-bottom: 10px;text-align: center;">
	<tbody><tr>
		<td><a class="show-phone" href="#" onclick="javascript:mobileFacebookShare();return false;"> <img src="/utilsv2/images/fb_new.png"></a></td>
		<td><a class="show-phone" href="#" onclick="javascript:mobileTwitterShare();return false;"><img src="/utilsv2/images/twi.png"></a></td>
		<td><a class="show-phone" href="#" onclick="javascript:mobileGoogleShare(); return false;"><img src="/utilsv2/images/goo.png"></a></td>
		<td><a class="show-phone" href="#" onclick="javascript:mobileMailShare(); return false;"><img width="40" src="/utilsv2/images/mail.png"></a></td>
		<td><a class="show-phone whatsapp"><img src="/utilsv2/images/whatsapp.png"></a></td>
	</tr>
</tbody></table></td>
						</tr>
					</tbody></table>
                    </div>
                    </div>
<form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('result-form-submit')}}">
                @csrf
                    <div style="margin-top: 15px;" class="row series-drop">
                    
                    <div class="col-sm-3">
                    <div class="dropdown">
                    <select name="year" id="year" class="form-control" >
                                 		<option value=""> Select Year(s)</option>
                                         @for ($year = date('Y'); $year >= 2015; $year--)
                                        <option value="{{ $year }}" >{{ $year }}</option>
                                        @endfor
									</select>
                                    </div>
<!-- 
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle btn-align" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="false">
            Select Year(s) <span class="caret"></span>
        </button>
        <ul id="year-dropdown" class="dropdown-menu dropdown-height" role="menu" aria-labelledby="dropdownMenu1">
            @for ($year = date('Y'); $year >= 2015; $year--)
            <li role="presentation"><a class="dropdown-year" role="menuitem" tabindex="-1" href="#">{{ $year }}</a></li>
            @endfor
        </ul>
    </div> -->
</div>


                    <div class="col-xs-6 col-sm-3">
						<div class="dropdown">
							<button class="btn btn-default dropdown-toggle btn-align" type="button" id="dropdownMenu1" data-toggle="dropdown">
							<p>2022 - Boom Boom T10</p>	<span class="caret"></span>
							</button>
							<ul class="dropdown-menu dropdown-height" role="menu" aria-labelledby="dropdownMenu1">
						   <li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=0&amp;year=null&amp;clubId=2565">All Series</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;year=null&amp;clubId=2565">2022 - Boom Boom T10</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=114&amp;year=null&amp;clubId=2565">2022 MCLT12 Winter League</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=108&amp;year=null&amp;clubId=2565">MCL vs Singapore</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=100&amp;year=null&amp;clubId=2565">2022 MCLT25</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=93&amp;year=null&amp;clubId=2565">2022 MCLT20</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=92&amp;year=null&amp;clubId=2565">2022 - MCL50 SUPER 7</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=91&amp;year=null&amp;clubId=2565">2022 MCL100 - Super 8</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=90&amp;year=null&amp;clubId=2565">2021 MCL Tapeball Winter League</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=89&amp;year=null&amp;clubId=2565">2021 MCLT12 Winter League</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=86&amp;year=null&amp;clubId=2565">2021 MCL100</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=85&amp;year=null&amp;clubId=2565">2021 MCLT20 Day/Night</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=80&amp;year=null&amp;clubId=2565">2021 MCLT20</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=79&amp;year=null&amp;clubId=2565">2021 MCL50 Super 9</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=71&amp;year=null&amp;clubId=2565">2021 MCLT25</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=70&amp;year=null&amp;clubId=2565">2021 - BOOM BOOM T10 BLAST</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=66&amp;year=null&amp;clubId=2565">2020 MCL Winter</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=65&amp;year=null&amp;clubId=2565">RGILL Corporation &amp; Phat Sportsplex -Boom Boom T10 Blast</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=64&amp;year=null&amp;clubId=2565">September Boom Boom T10 Blast</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=59&amp;year=null&amp;clubId=2565">2020 MCLT20</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=52&amp;year=null&amp;clubId=2565">2020 MCLT25</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=51&amp;year=null&amp;clubId=2565">2020 MCL100</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=50&amp;year=null&amp;clubId=2565">2020 MCL50 Super 8</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=49&amp;year=null&amp;clubId=2565">2019 MCL 100</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=46&amp;year=null&amp;clubId=2565">2018 T25&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=45&amp;year=null&amp;clubId=2565">2018 T20&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=44&amp;year=null&amp;clubId=2565">2018 - T25 Playoffs&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=43&amp;year=null&amp;clubId=2565">2018 - T25 Finals&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=42&amp;year=null&amp;clubId=2565">2018 - T20 Playoffs&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=41&amp;year=null&amp;clubId=2565">2018 - T20 Finals&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=40&amp;year=null&amp;clubId=2565">2017 T25&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=39&amp;year=null&amp;clubId=2565">2017 T20&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=38&amp;year=null&amp;clubId=2565">2017 - T25 Playoffs&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=37&amp;year=null&amp;clubId=2565">2017 - T25 Finals&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=36&amp;year=null&amp;clubId=2565">2017 - T20 Playoffs&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=35&amp;year=null&amp;clubId=2565">2017 - T20 Finals&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=34&amp;year=null&amp;clubId=2565">2016 T25&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=33&amp;year=null&amp;clubId=2565">2016 T20&nbsp;&nbsp;&nbsp;</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=32&amp;year=null&amp;clubId=2565">2015 T20&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=31&amp;year=null&amp;clubId=2565">2015 T20 Playoffs&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=20&amp;year=null&amp;clubId=2565">2019 MCL T20</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=15&amp;year=null&amp;clubId=2565">2019 MCL T25</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=11&amp;year=null&amp;clubId=2565">2016 T25 Playoffs</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=10&amp;year=null&amp;clubId=2565">2016 T25 Final</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=8&amp;year=null&amp;clubId=2565">2016 T20 Div2 Playoffs</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=7&amp;year=null&amp;clubId=2565">2016 T20 Div2 Final</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=6&amp;year=null&amp;clubId=2565">2016 T20 Div1 Playoffs</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=5&amp;year=null&amp;clubId=2565">2016 T20 Div1 Final</a></li>
								</ul>
						</div>
                    </div>
                 	<div class="col-xs-6 col-sm-3" title="Change internal club">
                    <div class="dropdown">
								<button class="btn btn-default btn-align dropdown-toggle selection-dropdown" type="button" id="dropdownMenu2" data-toggle="dropdown">
									All Clubs<span class="caret"></span>
								</button>
								<ul class="dropdown-menu dropdown-height" role="menu" aria-labelledby="dropdownMenu2">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;year=null&amp;clubId=2565">All</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=96&amp;year=null&amp;clubId=2565">Brampton Pacers</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=160&amp;year=null&amp;clubId=2565">Markhor Raiders</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=161&amp;year=null&amp;clubId=2565">Jarry Strikers</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=130&amp;year=null&amp;clubId=2565">Kitchener Bulls Cricket Club</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=162&amp;year=null&amp;clubId=2565">Melbourne Cricket Club</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=99&amp;year=null&amp;clubId=2565">Patiala Shahi Panthers</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=100&amp;year=null&amp;clubId=2565">Punjab United</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=164&amp;year=null&amp;clubId=2565">Sonu's Battalion cricket club</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=165&amp;year=null&amp;clubId=2565">Watan Warriors</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=102&amp;year=null&amp;clubId=2565">Jammu Kings XI</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=166&amp;year=null&amp;clubId=2565">6ixers CC</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=8&amp;year=null&amp;clubId=2565">Punjab Cricket Club</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=136&amp;year=null&amp;clubId=2565">Northern Stars United</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=106&amp;year=null&amp;clubId=2565">AZAAD Cricket Club</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=142&amp;year=null&amp;clubId=2565">Canada Blasters</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=84&amp;year=null&amp;clubId=2565">Yorkshire Cricket Club</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=148&amp;year=null&amp;clubId=2565">Gujarat Giants Cricket Club</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=94&amp;year=null&amp;clubId=2565">Islanders</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=127&amp;year=null&amp;clubId=2565">Dhurham Maple Leaf</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=null&amp;internalClubId=159&amp;year=null&amp;clubId=2565">Jammu Elite</a></li>
									</ul>
							</div>
                    </div>
                    <div class="col-xs-6 col-sm-3">
                  
							<div class="dropdown">
								<button class="btn btn-default dropdown-toggle btn-align" type="button" id="dropdownMenu2" data-toggle="dropdown">
									All Teams<span class="caret"></span>
								</button>
								<ul class="dropdown-menu dropdown-height" role="menu" aria-labelledby="dropdownMenu2">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;internalClubId=null&amp;year=null&amp;clubId=2565">All Teams</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1044&amp;internalClubId=null&amp;year=null&amp;clubId=2565">6ixers</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1045&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Azaad CC</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1064&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Brampton Pacers</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1060&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Canada Blasters</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1061&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Dhurham Maple Leaf</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1062&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Gujarat Giants</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1056&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Islanders</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1048&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Jammu Elite</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1049&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Jammu Kings XI</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1057&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Jarry Strikers</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1050&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Kitchener Bulls</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1065&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Markhor Raiders</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1046&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Melbourne Cricket Club</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1058&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Northern Stars United</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1051&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Patiala Shahi Cricket Association</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1063&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Punjab CC</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1059&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Punjab United</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1066&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Sonu's Battalion cricket club</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1067&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Watan Warriors</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="/MississaugaCricketLeague/listMatches.do?league=116&amp;teamId=1047&amp;internalClubId=null&amp;year=null&amp;clubId=2565">Yorkshire</a></li>
									</ul>
							</div>
							
                    </div>
                     <div class="col-sm-12 admins-drop text-right hidden-phone" style="display:flex; justify-content: flex-end;">
               
						</div>
                
            </div>
            <div class="series-drop">
            	<div class="row">
					<div class="col-sm-3 col-xs-4" title="From Date">
                    	<input type="text" name="fromDate" autocomplete="off" placeholder="From Date" value="" align="top" class="calendarBox form-control hasDatepicker" id="fromDate">
					</div>
					<div class="col-sm-3 col-xs-4" title="To Date">
                    	<input type="text"  name="created_at" autocomplete="off" placeholder="To Date" value="" align="top" class="calendarBox form-control hasDatepicker" id="created_at">
					</div>
					<div class="col-sm-2 col-xs-4" title="Search Dates"> 
                    	<button class="btn btn-primary" id="datesSearch">Search Dates</button>
                            </div>
					</div>
            	</div>
            </div>
            </form>
        

                    
<table style="width: 100%; margin-bottom: 10px;text-align: center;">
	<tbody><tr>
		<td><a class="show-phone" href="#" onclick="javascript:mobileFacebookShare();return false;"> <img src="/utilsv2/images/fb_new.png"></a></td>
		<td><a class="show-phone" href="#" onclick="javascript:mobileTwitterShare();return false;"><img src="/utilsv2/images/twi.png"></a></td>
		<td><a class="show-phone" href="#" onclick="javascript:mobileGoogleShare(); return false;"><img src="/utilsv2/images/goo.png"></a></td>
		<td><a class="show-phone" href="#" onclick="javascript:mobileMailShare(); return false;"><img width="40" src="/utilsv2/images/mail.png"></a></td>
		<td><a class="show-phone whatsapp"><img src="/utilsv2/images/whatsapp.png"></a></td>
	</tr>
</tbody></table><style>


  #schedule-table_filter{
    text-align: right;
  }
  .list-table tbody tr td a, .list-table tbody tr td{
  line-height: 26px!important;
  font-size: 13px!important;
  }
  
  .table>thead>tr>th {
    text-align: center;
}
  .list-table tbody tr td a{
      /*display: table-row!important;*/
      padding: 0px!Important;
      }
      .list-drop .dropdown-menu-right .dropdown-menu a {
    margin-right: 0px!important;
    display: block!important;
    background: #fff!important;
    padding: 1px 10px!important;
        text-transform: capitalize;
    border-bottom: 1px solid #ddd;
    cursor: pointer;
}

.dropdown-menu {
    padding: 5px 5px;
}

.display-actions{
    background-color: transparent !important;
}

#schedule-table1 thead tr th:last-child{
text-align:center!important
}
#schedule-table1 tbody tr td:last-child{
text-align:center!important
}


#schedule-table1 tbody tr td{
text-align:left!important;
padding: 10px 20px !important;
}
#schedule-table1 thead tr th{
text-align:left!important
}
#schedule-table1 thead tr th:first-child{
text-align:center !important;
}  
#schedule-table1 tbody tr td:first-child{
text-align:center !important;
}  
       
</style>

<script>
$(document).ready(function() {	
	
	
	  $('.gridView').hide();
      $('.listView').show();
	
	
	$("#dialog-confirm" ).dialog({
	      resizable: false,
	      autoOpen: false,
	      modal: true,
	      buttons: {
	        "Delete": function() {
	        	var matchId = $("#deleteId").val();
	        	var ajaxUrl = '/MississaugaCricketLeague/deleteMatch.do?clubId=2565&matchId=' + matchId;
	        	$.ajax({url:ajaxUrl,
	        		success:function(result){
	        			$("#deleteRow"+matchId).remove();
	        			$('#displyMessage').html("Scorecard Deleted");
	        			$('#displyMessage').dialog("open");
	        			window.location.reload(true);
	        			//window.location.href=window.location.href;
	        			//window.location.reload();
	        	  }});
	          $( this ).dialog( "close" );
	        },
	        Cancel: function() {
	          var matchId = $("#deleteId").val();
	          //$("#deleteButton"+matchId).button( "enable" );
	          $( this ).dialog( "close" );
	        }
	      }
	    });
	
	  $( "#displyMessage" ).dialog({
			autoOpen: false,
		    modal: true
		    });

	$("#dialog-confirm1" ).dialog({
	      resizable: false,
	      autoOpen: false,
	      modal: true,
	      buttons: {
	        "Lock": function() {
	        	var matchId = $("#lockId").val();
	        	var ajaxUrl = '/MississaugaCricketLeague/lockMatch.do?clubId=2565&matchId=' + matchId;
	        	$.ajax({url:ajaxUrl,success:function(result){
	        			if(result == 'success'){
	        				 $("#lockLink"+matchId).attr('href', "javascript:unLockMatch("+matchId+",\""+ $("#lockMessage").html() + "\");");
	        				 $("#lockLink"+matchId).text('Unlock');
	        				 window.location.href=window.location.href;	        				
	        				// $(".linkAsButton").button();
	        			}else{
	        				alert("We could not process your request please contact support@cricclubs.com");
	        			}
	        			
	        	  }});
	          $( this ).dialog( "close" );
	        },
	        Cancel: function() {
	          var matchId = $("#lockId").val();
	         // $("#lockButton"+matchId).button( "enable" );
	          $( this ).dialog( "close" );
	        }
	      }
	    });

	$("#dialog-confirm2" ).dialog({
	      resizable: false,
	      autoOpen: false,
	      modal: true,
	      buttons: {
	        "UnLock": function() {
	        	var matchId = $("#unLockId").val();
	        	var ajaxUrl = '/MississaugaCricketLeague/unLockMatch.do?clubId=2565&matchId=' + matchId;
	        	$.ajax({url:ajaxUrl,success:function(result){

	        		if(result == 'success'){
        				 $("#lockLink"+matchId).attr("href", "javascript:lockMatch("+matchId+",\""+ $("#unLockMessage").html() + "\");");
        				 $("#lockLink"+matchId).text('Lock');
        				 window.location.href=window.location.href;
        				 //$(".linkAsButton").button();
	       			}else{
	       				alert("We could not process your request please contact support@cricclubs.com");
	       			}
	        			
	        	  }});
	          $( this ).dialog( "close" );
	        },
	        Cancel: function() {
	          var matchId = $("#unLockId").val();
	         // $("#unLockButton"+matchId).button( "enable" );
	          $( this ).dialog( "close" );
	        }
	      }
	    });
	
	$( "#dialogOpenVideoLink" ).dialog({
		autoOpen: false,
	    modal: true,
	    width:700,
	    height:450,
	    close:function(){
	    	enable = 1;
	    $("#playVideo")[0].src="";
		}
	    });
	
});

function openLiveVideoLink(livevideolink){
	enable = 0;
	$(".dialogOpenVideoLink").dialog("option","title","Live Streaming...");
	var videoid = livevideolink.split("/watch?v=");
	$("#playVideo")[0].src="//www.youtube.com/embed/"+videoid[1]+"?autoplay=1";
	$("#dialogOpenVideoLink").dialog("open");
}

function deleteMatch(matchId,name){
	
	$("#deleteMessage").html(name);
	$("#deleteId").val(matchId);
	$("#dialog-confirm" ).dialog("open");
}

function lockMatch(matchId,name){
	
	$("#lockMessage").html(name);
	$("#lockId").val(matchId);
	$("#dialog-confirm1" ).dialog("open");
}

function unLockMatch(matchId,name){
	
	$("#unLockMessage").html(name);
	$("#unLockId").val(matchId);
	$("#dialog-confirm2" ).dialog("open");
}




</script>
@php
    if(count($results) > 0){
@endphp
                         @foreach($results as $player)
                         {{$player['created_at']}}
<div class="month-all sp">
<div class="month-all listView">
       <div class="schedule-all">
           <div class="row team-data" id="deleteRow3257">
               <div class="col-xs-3 col-sm-1 sp mobile-b">
                   <div class="sch-time text-center h-90">
                       <h5><strong>Final</strong></h5>
                       <h2>10</h2>
                       <h5>Oct 2022</h5>
                   </div>
               </div>
               <div class="col-xs-9 col-sm-4 p-sm-0 mobile-b">
                   <div class="schedule-logo text-center h-90">
                   <ul class="list-inline">
		                           <li class="lose"><span>74/9</span> <br> 
		                           <p>10.0/10</p>
		                           </li>
		                           <li><a href="/MississaugaCricketLeague/viewTeam.do?teamId=1067&amp;clubId=2565">
		                           <img src="https://cricclubs.com/documentsRep/teamLogos/f5e11e68-50cb-4926-8cd8-711f991d9ea2.jpg" class="img-responsive img-circle" style="width: 70px;height: 70px;"></a></li>
		                           <li><a href="/MississaugaCricketLeague/viewTeam.do?teamId=1046&amp;clubId=2565">
		                           <img src="https://cricclubs.com/documentsRep/teamLogos/c13fab4c-3cbb-4805-9c9f-bcba623a5a39.jpg" class="img-responsive img-circle" style="width: 70px;height: 70px;"></a></li>
		                          <li class="win">
		                          		<span>76/3</span> <br> 
		                          			<p>8.1/10</p>
				                           </li>
	                      	 </ul>	
                         </div>
               </div>
             <div class="col-xs-12 col-sm-4">
                   <div class="schedule-text">
                   <h4>2022 - Boom Boom T10</h4>
                       <h3>Watan Warriors<span class="v"> v </span>  Melbourne Cricket Club</h3>
                       <h4>Melbourne Cricket Club won by 7 Wkt(s)</h4>
                        </div>
               </div>
               <div class="col-xs-12 col-sm-3 ball-score" style="padding-right: 22px;">
               
               
                   <div class="live-score text-center ">
                  
                       <h5 class="text-right">
                      
                        
                        
								&nbsp;
								 <img src="/utilsv2/theme2-static/images/cric-ball.png"> Ball By Ball </h5>
                   </div>
                  
                   <div class="score-share text-right" style="display: inline-block;">
                   
                       <ul class="list-inline">
                           <li>
                          
                           <a href="/MississaugaCricketLeague/viewScorecard.do?matchId=3257&amp;clubId=2565" class="btn btn-sc"><i class="fa fa-calendar-check-o"></i>Scorecard</a>
                       			
								
							</li>
                       </ul>
                   </div>
                   			</div>
           </div>
       </div>
       </div>
        
    
       </div>
        
       <div class="month-all gridView" style="display: none;">
<table id="schedule-table1" class="table list-table table-hover" style="color: #fff!important; background: #423256;">
	<thead>
		<tr>
			<th>&nbsp;#</th>
			<th nowrap="nowrap">Match Type</th>
			<th style="text-align:center!important">Date</th>
			<th>Team One</th>
			<th>Team two</th>
			<th>Result</th>
			<th>Scores Summary</th>
			<th>Points</th>
			</tr>
	</thead>
	<tbody>
<tr id="row3257">
			<td id="rowCount" align="center">39</td>
			<td align="center">Final</td>
			<td align="center" style="text-align:center!important">10/10/2022</td>
			<td align="center"><a href="/MississaugaCricketLeague/viewTeam.do?teamId=1067&amp;clubId=2565">Watan Warriors</a></td>
			<td align="center"><a href="/MississaugaCricketLeague/viewTeam.do?teamId=1046&amp;clubId=2565">Melbourne Cricket Club</a></td>
			<td align="center">Melbourne Cricket Club won by 7 Wkt(s)</td>
			<td align="center">
				<a href="/MississaugaCricketLeague/viewScorecard.do?matchId=3257&amp;clubId=2565">
				Watan Warriors: 74/9(10.0)<br>Melbourne Cricket Club: 76/3(8.1)<img alt="Ball By Ball Coverage" title="Ball By Ball Coverage" src="/utilsv2/images/bowler.png"></a>
				<img alt="Unlock" title="Unlock" src="/utilsv2/images/lock.png">
				</td>
			
			<td align="center">6</td>
					</tr>
		
		</tbody>
</table>
@endforeach
 
 @php
}
@endphp

       </div>
        </div>
      
                             

                      




<script>
  $('#list-view').click(function() {
	  $('.gridView').hide();
      $('.listView').show();
  })
  $('#grid-view').click(function() {
	  $('.gridView').show();
      $('.listView').hide();
  })

</script></div>
</div>
</div>
</div>
           @stop