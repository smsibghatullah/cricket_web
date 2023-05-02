@extends('default')
@section('content')
<!-- head section 1 start -->
<div class="score-top text-center">
			<div class="container">
				<div class="match-summary">
					<div class="row">
						<div class="col-sm-12">
							<div class="match-in-summary">
								<div class="row">
									<div class="col-sm-2">
										<div class="row">
											<div class="col-sm-12">
												
												<div class="summ-image" id="teamLogo">

													<img src="https://cricclubs.com/documentsRep/teamLogos/3de1d6b0-210e-490c-b111-2038ec3e0c8d.jpeg" class="img-responsive img-circle center-block" style="width: 120px; height: 120px;">

												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-10">
										<div class="team-text-in text-left">
											<h4 style="margin-top: 0px;">{{$teamData[0]->name}}
												(<a href="/MississaugaCricketLeague/viewLeague.do?league=114&amp;clubId=2565">2022 MCLT12 Winter League</a>)
												Kitchener Bulls Cricket Club</h4>
											<!--  <p><span>Team Code </span>      :   <span style="text-transform: uppercase">kbu</span></p>-->
											<p>
												<span>Captain </span> :
												Sahilpreet Dhiman</p>
											<p>
												<span>Vice Captain</span> :
												Gurpreet Singh</p>
											<p>
												<span>Player Count</span> :
												26</p>
											<p>
												<span>Home Ground</span> : <b><a href="/MississaugaCricketLeague/viewGround.do?groundId=43&amp;clubId=2565">Wet n Wild</a></b>
											</p>
											</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- head section 1 end -->

<!-- section 2 start -->

<div class="all-tab-table team">
			<div class="container p-sm-0">
				<div class="score-tab">
					<div class="complete-list">
						<div class="panel with-nav-tabs panel-default">
								<div class="panel-heading tabs-team">
									<ul class="nav nav-tabs">
										<li class="active"><a href="#team" role="tab" data-toggle="tab" onclick="loadView('viewTeam');">Team
												Info</a></li>
										<li><a href="#results" role="tab" data-toggle="tab" onclick="loadView('teamResults');">Results</a></li>
										<li><a href="#schedule" role="tab" data-toggle="tab" onclick="loadView('teamSchedule');">Schedule</a></li>
										<li><a href="#umpiringSchedule" role="tab" data-toggle="tab" onclick="loadView('teamUmpiringSchedule');">Umpiring</a></li>
										<li><a href="#batting" role="tab" data-toggle="tab" onclick="loadView('teamBatting');">Batting</a></li>
										<li><a href="#bowling" role="tab" data-toggle="tab" onclick="loadView('teamBowling');">Bowling</a></li>
										<li><a href="#fielding" role="tab" data-toggle="tab" onclick="loadView('teamFielding');">Fielding</a></li>
										<li><a href="#ranking" role="tab" data-toggle="tab" onclick="loadView('teamRanking');">Ranking</a></li>
										</ul>
								</div>
								<div class="panel-body">
									<div class="tab-content">
						<div class="tab-pane fade in active" id="team">
											
											<p></p>
											<div class="row" style="margin-top: 15px;">
											<div class="border-heading col-sm-6">
												<h5 style="cursor: pointer; background: rgb(253, 126, 93);" id="playerTeamTab" onclick="showPlayerDiv('allPlayersDiv', 'allTeamOfficialDiv', 'playerTeamTab', 'OfficialTeamTab')">Players</h5>
										<h5 style="cursor: pointer; background: gray;" id="OfficialTeamTab" onclick="showPlayerDiv('allTeamOfficialDiv', 'allPlayersDiv', 'OfficialTeamTab', 'playerTeamTab')">Team Officials</h5>
												</div>
											<div class="col-sm-6 col-xs-12">
													 <div class="search-play" style="margin-left: 65px; width: 50%;">
					  <input type="text" class="form-control" onkeyup="searchPlayer()" id="searchplayer" name="searchplayer" placeholder="Search Player">
						</div>
							<div class="text-right" style="margin-top :-32px;">
						<div class="btn-group btn-group-sm" role="group">
						<img alt="Download as PDF" title="Download as PDF" class="pdfBtn" style="cursor:pointer;" width="32" height="32" src="/utilsv2/images/pdf.png">&nbsp;
						<img alt="Download as CSV" title="Download as CSV" class="csvBtn" style="cursor:pointer;" width="32" height="32" src="/utilsv2/images/csvicon.png">&nbsp;
				<img alt="Download as Excel" title="Download as Excel" class="excelBtn" style="cursor:pointer;" width="32" height="32" src="/utilsv2/images/excel.png">	
				<img alt="Print" title="Print" class="printBtn" style="cursor:pointer;" width="32" height="32" src="/utilsv2/images/print.png">&nbsp;
						</div>
					</div>
						<div>					
<div id="myTable_wrapper" class="dataTables_wrapper no-footer"><div class="dt-buttons">      <button class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="myTable" type="button"><span>CSV</span></button> <button class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="myTable" type="button"><span>Excel</span></button> <button class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="myTable" type="button"><span>PDF</span></button> <button class="dt-button buttons-print" tabindex="0" aria-controls="myTable" type="button"><span>Print</span></button> </div><table id="myTable" align="center;" hidden="" class="dataTable no-footer" role="grid">
<thead>
<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="CC Player Id: activate to sort column descending" style="width: 0px;">CC Player Id</th><th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Player Name: activate to sort column ascending" style="width: 0px;">Player Name</th><th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Series And Division: activate to sort column ascending" style="width: 0px;">Series And Division</th><th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Team Name: activate to sort column ascending" style="width: 0px;">Team Name</th><th class="sorting" tabindex="0" aria-controls="myTable" rowspan="1" colspan="1" aria-label="Jersey Number: activate to sort column ascending" style="width: 0px;">Jersey Number</th></tr></thead>
<tbody>


























<tr role="row" class="odd">
<td class="sorting_1">1375894</td>
<td>Harjeet Singh</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="even">
<td class="sorting_1">1375981</td>
<td>Rajwant Singh</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="odd">
<td class="sorting_1">1388071</td>
<td>Charanjeet Gill</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="even">
<td class="sorting_1">1509481</td>
<td>Bhagwan Singh</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="odd">
<td class="sorting_1">1751052</td>
<td>Kuljeet Sidhu</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="even">
<td class="sorting_1">1751543</td>
<td>Sandeep Singh</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="odd">
<td class="sorting_1">1998180</td>
<td>Sahilpreet Dhiman</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="even">
<td class="sorting_1">2139525</td>
<td>Gursimran Sandhu</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="odd">
<td class="sorting_1">2142509</td>
<td>Gurpreet Singh</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="even">
<td class="sorting_1">2420705</td>
<td>Anmolpreet Singh</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="odd">
<td class="sorting_1">2422269</td>
<td>Lupinderpreet Singh</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="even">
<td class="sorting_1">2446231</td>
<td>Yug Rao</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="odd">
<td class="sorting_1">2700254</td>
<td>Himanshu Abrol</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="even">
<td class="sorting_1">2853813</td>
<td>Gurpal Sidhu</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="odd">
<td class="sorting_1">2968564</td>
<td>Sukhesh Kalra</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="even">
<td class="sorting_1">3047132</td>
<td>Lovepreet Singh</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="odd">
<td class="sorting_1">3071613</td>
<td>Ajmer S</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="even">
<td class="sorting_1">3071882</td>
<td>Shahzad Chaudhry</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="odd">
<td class="sorting_1">3083285</td>
<td>Lakhwinder Singh</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="even">
<td class="sorting_1">3092649</td>
<td>Sahil Patel</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="odd">
<td class="sorting_1">3094135</td>
<td>Harpreet Singh</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="even">
<td class="sorting_1">3094136</td>
<td>Gagandeep Singh</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="odd">
<td class="sorting_1">3094159</td>
<td>Daljinder Virk</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="even">
<td class="sorting_1">3103736</td>
<td>Navdeep Singh</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="odd">
<td class="sorting_1">3133920</td>
<td>Rakshit Chhabra</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr><tr role="row" class="even">
<td class="sorting_1">3133921</td>
<td>Jagdeep Singh</td>
<td>2022 MCLT12 Winter League</td>
<td>Kitchener Bulls</td>
<td></td>
</tr></tbody>
</table></div>
						</div>
						<div id="playersearchdiv">
											</div>
											</div>
											</div>
											<div class="row" id="allPlayersDiv">
												<div class="col-sm-3 col-xs-6" id="Ajmer S">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/no_image.png" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Ajmer S<img alt="Not Verified" title="Not Verified" src="/utilsv2/images/question.png" style="width: 16px;height: 16px;margin: 0px;"> </h4>
                                                   <h5>Batter</h5>
                                             <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=3071613&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Anmolpreet Singh">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/4636f1f7-6166-4877-87a5-cfbb87ea72be.png" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Anmolpreet Singh<img alt="Verified" title="Verified" src="/utilsv2/images/ok.png" style="width: 16px;height: 16px;margin: 0px;"></h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=2420705&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Bhagwan Singh">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/4e561535-4d0c-4113-8c09-86f50ce87f76.png" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Bhagwan Singh<img alt="Verified" title="Verified" src="/utilsv2/images/ok.png" style="width: 16px;height: 16px;margin: 0px;"></h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=1509481&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Charanjeet Gill">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/a013ad90-9721-4cc6-a6e2-fcffb0c32bda.png" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Charanjeet Gill<img alt="Verified" title="Verified" src="/utilsv2/images/ok.png" style="width: 16px;height: 16px;margin: 0px;"></h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=1388071&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Daljinder Virk">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/no_image.png" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Daljinder Virk<img alt="Not Verified" title="Not Verified" src="/utilsv2/images/question.png" style="width: 16px;height: 16px;margin: 0px;"> </h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=3094159&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Gagandeep Singh">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/no_image.png" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Gagandeep Singh<img alt="Not Verified" title="Not Verified" src="/utilsv2/images/question.png" style="width: 16px;height: 16px;margin: 0px;"> </h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=3094136&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Gurpal Sidhu">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/no_image.png" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Gurpal Sidhu<img alt="Verified" title="Verified" src="/utilsv2/images/ok.png" style="width: 16px;height: 16px;margin: 0px;"></h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=2853813&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Gurpreet Singh">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/324b8495-3040-4620-a668-a0ee9e033b93.jpeg" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    <div class="team-player-pos">
                                                    	<h3>VC</h3>
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Gurpreet Singh<img alt="Verified" title="Verified" src="/utilsv2/images/ok.png" style="width: 16px;height: 16px;margin: 0px;"></h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=2142509&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Gursimran Sandhu">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/c94c618d-c0b0-438b-90b6-ec88723fde43.jpeg" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Gursimran Sandhu<img alt="Verified" title="Verified" src="/utilsv2/images/ok.png" style="width: 16px;height: 16px;margin: 0px;"></h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=2139525&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Harjeet Singh">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/no_image.png" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Harjeet Singh<img alt="Verified" title="Verified" src="/utilsv2/images/ok.png" style="width: 16px;height: 16px;margin: 0px;"></h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=1375894&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Harpreet Singh">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/no_image.png" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Harpreet Singh<img alt="Verified" title="Verified" src="/utilsv2/images/ok.png" style="width: 16px;height: 16px;margin: 0px;"></h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=3094135&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Himanshu Abrol">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/023aed88-048c-416d-8405-e1a8ff58fb07.jpeg" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Himanshu Abrol<img alt="Verified" title="Verified" src="/utilsv2/images/ok.png" style="width: 16px;height: 16px;margin: 0px;"></h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=2700254&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Jagdeep Singh">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/no_image.png" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Jagdeep Singh<img alt="Not Verified" title="Not Verified" src="/utilsv2/images/question.png" style="width: 16px;height: 16px;margin: 0px;"> </h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=3133921&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Kuljeet Sidhu">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/254d77ed-24a4-4e3b-aa90-bb3198a044bc.jpeg" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Kuljeet Sidhu<img alt="Verified" title="Verified" src="/utilsv2/images/ok.png" style="width: 16px;height: 16px;margin: 0px;"></h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=1751052&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Lakhwinder Singh">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/no_image.png" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Lakhwinder Singh<img alt="Verified" title="Verified" src="/utilsv2/images/ok.png" style="width: 16px;height: 16px;margin: 0px;"></h4>
                                                   <h5>Batter</h5>
                                             <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=3083285&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Lovepreet Singh">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/no_image.png" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Lovepreet Singh<img alt="Verified" title="Verified" src="/utilsv2/images/ok.png" style="width: 16px;height: 16px;margin: 0px;"></h4>
                                                   <h5>Batter</h5>
                                             <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=3047132&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Lupinderpreet Singh">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/492cdf67-1bd8-4568-9073-7dc117e9b777.jpeg" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Lupinderpreet Singh<img alt="Verified" title="Verified" src="/utilsv2/images/ok.png" style="width: 16px;height: 16px;margin: 0px;"></h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=2422269&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Navdeep Singh">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/no_image.png" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Navdeep Singh<img alt="Not Verified" title="Not Verified" src="/utilsv2/images/question.png" style="width: 16px;height: 16px;margin: 0px;"> </h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=3103736&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Rajwant Singh">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/08b87072-6cb0-445a-a454-8900cb8a438d.jpeg" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Rajwant Singh<img alt="Verified" title="Verified" src="/utilsv2/images/ok.png" style="width: 16px;height: 16px;margin: 0px;"></h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=1375981&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Rakshit Chhabra">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/no_image.png" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Rakshit Chhabra<img alt="Not Verified" title="Not Verified" src="/utilsv2/images/question.png" style="width: 16px;height: 16px;margin: 0px;"> </h4>
                                                   <h5>Batter</h5>
                                             <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=3133920&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Sahil Patel">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/no_image.png" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Sahil Patel<img alt="Not Verified" title="Not Verified" src="/utilsv2/images/question.png" style="width: 16px;height: 16px;margin: 0px;"> </h4>
                                                   <h5>Batter</h5>
                                             <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=3092649&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Sahilpreet Dhiman">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/eedb8b5d-2907-4ffc-a873-d4ba06b6d97a.jpeg" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    <div class="team-player-pos">
                                                    	<h3>C</h3>
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Sahilpreet Dhiman<img alt="Verified" title="Verified" src="/utilsv2/images/ok.png" style="width: 16px;height: 16px;margin: 0px;"></h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=1998180&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Sandeep Singh">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/4f4dbba5-9c72-4ad5-9e83-17bf845455cd.jpeg" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Sandeep Singh<img alt="Verified" title="Verified" src="/utilsv2/images/ok.png" style="width: 16px;height: 16px;margin: 0px;"></h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=1751543&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Shahzad Chaudhry">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/no_image.png" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Shahzad Chaudhry<img alt="Not Verified" title="Not Verified" src="/utilsv2/images/question.png" style="width: 16px;height: 16px;margin: 0px;"> </h4>
                                                   <h5>Batter</h5>
                                             <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=3071882&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Sukhesh Kalra">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/no_image.png" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Sukhesh Kalra<img alt="Verified" title="Verified" src="/utilsv2/images/ok.png" style="width: 16px;height: 16px;margin: 0px;"></h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=2968564&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												<div class="col-sm-3 col-xs-6" id="Yug Rao">
                                        	<div class="team-player-all" style="height: 340px;">
                                            	<div class="team-player-image-all">
                                                	<div class="team-player-image">
                                                   		<img src="https://cricclubs.com/documentsRep/profilePics/no_image.png" class="img-responsive center-block" style="width:240px; height:200px; object-fit: cover;">	
                                                    	
                                                    </div>
                                                    </div>
                                                <div class="team-player-text text-center">
                                                	<h4>Yug Rao<img alt="Verified" title="Verified" src="/utilsv2/images/ok.png" style="width: 16px;height: 16px;margin: 0px;"></h4>
                                                   <h5>All Rounder</h5>
                                                    <a href="/MississaugaCricketLeague/viewPlayer.do?playerId=2446231&amp;clubId=2565" class="btn btn-team">View Profile <i class="fa fa-chevron-circle-right"></i></a>
														</div>
													</div>
												</div>
												</div>
												</div>
											<div class="row" id="allTeamOfficialDiv" style="display: none;">
												</div>
										
											</div>
										<div class="tab-pane fade " id="results">
											
											Loading ...
											</div>
										<div class="tab-pane fade  point-table-all btn-earth" id="schedule">
											
											Loading ...
											</div>
										<div class="tab-pane fade " id="umpiringSchedule">
											
											Loading ...
											</div>
										<div class="tab-pane fade " id="batting">
											
											Loading ...
											</div>
										<div class="tab-pane fade " id="bowling">
											
											Loading ...
											</div>
										<div class="tab-pane fade " id="fielding">
											
											Loading ...
											</div>
										<div class="tab-pane fade " id="ranking">
											
											Loading ...
											</div>
										 <div class="tab-pane fade " id="stats">
											
											Loading ...
											</div> 
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
<!-- section 2 end -->
@stop