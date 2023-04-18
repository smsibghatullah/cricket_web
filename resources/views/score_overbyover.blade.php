@extends('default')
@section('content')

<div class="container">
       
       <table style="width: 100%; margin-bottom: 10px;text-align: center;">
	<tbody><tr>
		<td><a class="show-phone" href="#" onclick="javascript:mobileFacebookShare();return false;"> <img src="/utilsv2/images/fb_new.png"></a></td>
		<td><a class="show-phone" href="#" onclick="javascript:mobileTwitterShare();return false;"><img src="/utilsv2/images/twi.png"></a></td>
		<td><a class="show-phone" href="#" onclick="javascript:mobileGoogleShare(); return false;"><img src="/utilsv2/images/goo.png"></a></td>
		<td><a class="show-phone" href="#" onclick="javascript:mobileMailShare(); return false;"><img width="40" src="/utilsv2/images/mail.png"></a></td>
		<td><a class="show-phone whatsapp"><img src="/utilsv2/images/whatsapp.png"></a></td>
	</tr>
</tbody></table><div class="show-phone">
			</div>

       	<div class="score-tab">            
           	<div class="complete-list">
           	 	<div class="panel with-nav-tabs panel-default">
                       <div class="panel-heading score-tabs">
                           <ul class="nav nav-tabs">
  							<li><a href="#tab1default" role="tab" data-toggle="tab" onclick="loadView('ballbyball');">Ball By Ball</a></li>
							<li><a href="#tab2default" role="tab" data-toggle="tab" onclick="loadView('fullScorecard');">Full Scorecard</a></li>
							<li class="active"><a href="#tab5default" role="tab" data-toggle="tab" onclick="loadView('overbyoverscoreview');">Over by Over Score</a></li>
							<li><a href="#tab4default" role="tab" data-toggle="tab" onclick="loadView('graphsView');">Charts</a></li>
							</ul>
                       </div>
                       <div class="panel-body">
                           <div class="tab-content">
                               <div class="tab-pane fade " id="tab1default">
                              
											Loading ...
									</div>
                               <div class="tab-pane fade " id="tab2default">
                               
                               
									Loading ...
									</div>
                               <div class="tab-pane fade " id="tab3default">
								
								Loading ...
								</div>
       						   <div class="tab-pane fade " id="tab4default">
								
								Loading ...
								</div>
       					<div class="tab-pane fade in active" id="tab5default">
								<br>
								<div>
	<div class="match-content">
		<div class="row">
		 <!-- <div class="panel-body match-summary-tab">
		        <div class="tab-content summary-list"> -->
						<div class="col-sm-6">
							<div class="match-table-innings">
								<div class="about-table  table-responsive" id="tab1default">
									<table class="table table-bordered">
										<thead>
											<tr style="font-weight: bold; text-align: left;">
												<th colspan="4">Royal Tigers
													Batting</th>
											</tr>
											<tr style="font-weight: bold; text-align: center;">
												<td>#</td>
												<td class="text-left">Bowler</td>
												<td>Runs</td>
												<td>Score</td>
											</tr>


											 @php $currnet_over = $scores[0]['overnumber'];
											 $last_over = $scores[0]['overnumber'];
											 $sum_score = 0;
											 $sum_run = 0;  @endphp
											<tr style="text-align: center;">
													<td>{{$scores[0]['overnumber']}} </td>												
													<td class="text-left">Rohit M Khan<br>
														<ul class="overballsec">
											@foreach($scores as $score)
												@if($currnet_over !== $score['overnumber'])
												
													</ul>
													</td>
													
													<td>{{$sum_run}}</td>
													<td>{{$sum_score}}/0</td>
												</tr>

												<tr style="text-align: center;">
													<td>{{$score['overnumber']}}</td>												
													<td class="text-left">Rohit M Khan<br>
														<ul class="overballsec">
															@php $sum_run = 0; @endphp
													@endif
															<li class="runs">{{$score['runs']}} </li>
													@php $sum_score +=$score['runs'];
														 $sum_run +=$score['runs'];
													     $currnet_over = $score['overnumber'] @endphp

											@endforeach 
</ul>
													</td>
													
													<td>{{$sum_run}}</td>
													<td>{{$sum_score}}/0</td>
												</tr>
											
											</thead>
									</table>
								</div>
							</div>
						</div>
						
						
						<div class="col-sm-6">
							<div class="match-table-innings">
								<div class="about-table  table-responsive" id="tab1default">
									<table class="table table-bordered">
										<thead>
											<tr style="font-weight: bold;">
												<th colspan="4">820 CC
													Batting</th>
											</tr>
											
											<tr style="font-weight: bold; text-align: center;">
												<td>#</td>
												<td class="text-left">Bowler</td>
												<td>Runs</td>
												<td>Score</td>
											</tr>
											<tr style="text-align: center;">
												<td>1</td>
												<td class="text-left">Irfan S<br>
											<ul class="overballsec text-left">
												<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs" style="padding: 11px 10px;">1wd</li>
                                	<li class="runs">1</li>
                                	<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="wicket">W</li>
                                	<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		</ul>
												</td>
												<td>2</td>
												<td>2/1</td>
											</tr>
											<tr style="text-align: center;">
												<td>2</td>
												<td class="text-left">Imran S<br>
											<ul class="overballsec text-left">
												<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">2</li>
                                	<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="wicket">W</li>
                                	<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		</ul>
												</td>
												<td>2</td>
												<td>4/2</td>
											</tr>
											<tr style="text-align: center;">
												<td>3</td>
												<td class="text-left">Irfan S<br>
											<ul class="overballsec text-left">
												<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="wicket">W</li>
                                	<li class="runs" style="padding: 11px 10px;">1wd</li>
                                	<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="wicket">W</li>
                                	<li class="runs" style="padding: 11px 10px;">1wd</li>
                                	<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="wicket">W</li>
                                	</ul>
												</td>
												<td>2</td>
												<td>6/5</td>
											</tr>
											<tr style="text-align: center;">
												<td>4</td>
												<td class="text-left">Imran S<br>
											<ul class="overballsec text-left">
												<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">6</li>
                                	<li class="runs">2</li>
                                	<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">6</li>
                                	</ul>
												</td>
												<td>14</td>
												<td>20/5</td>
											</tr>
											<tr style="text-align: center;">
												<td>5</td>
												<td class="text-left">Manik S<br>
											<ul class="overballsec text-left">
												<li class="runs">1</li>
                                	<li class="runs">2</li>
                                	<li class="runs" style="padding: 11px 10px;">1wd</li>
                                	<li class="runs">2</li>
                                	<li class="runs">2</li>
                                	<li class="runs" style="padding: 11px 10px;">1wd</li>
                                	<li class="runs">1</li>
                                	<li class="runs">1</li>
                                	</ul>
												</td>
												<td>11</td>
												<td>31/5</td>
											</tr>
											<tr style="text-align: center;">
												<td>6</td>
												<td class="text-left">Abdullah A<br>
											<ul class="overballsec text-left">
												<li class="runs" style="padding: 11px 10px;">1wd</li>
                                	<li class="runs">6</li>
                                	<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">1</li>
                                	<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		</ul>
												</td>
												<td>8</td>
												<td>39/5</td>
											</tr>
											<tr style="text-align: center;">
												<td>7</td>
												<td class="text-left">Saood P<br>
											<ul class="overballsec text-left">
												<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">6</li>
                                	<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">1</li>
                                	<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		</ul>
												</td>
												<td>7</td>
												<td>46/5</td>
											</tr>
											<tr style="text-align: center;">
												<td>8</td>
												<td class="text-left">Abdullah A<br>
											<ul class="overballsec text-left">
												<li class="runs" style="padding: 11px 10px;">1wd</li>
                                	<li class="runs">1</li>
                                	<li class="runs">4</li>
                                	<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">1</li>
                                	</ul>
												</td>
												<td>7</td>
												<td>53/5</td>
											</tr>
											<tr style="text-align: center;">
												<td>9</td>
												<td class="text-left">Muhammad Salm<br>
											<ul class="overballsec text-left">
												<li class="runs">2</li>
                                	<li class="runs">1</li>
                                	<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">6</li>
                                	</ul>
												</td>
												<td>9</td>
												<td>62/5</td>
											</tr>
											<tr style="text-align: center;">
												<td>10</td>
												<td class="text-left">Saood P<br>
											<ul class="overballsec text-left">
												<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">6</li>
                                	<li class="wicket">W</li>
                                	<li class="wicket">W</li>
                                	<li class="runs">1</li>
                                	<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		</ul>
												</td>
												<td>7</td>
												<td>69/7</td>
											</tr>
											<tr style="text-align: center;">
												<td>11</td>
												<td class="text-left">Irfan S<br>
											<ul class="overballsec text-left">
												<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="runs">1</li>
                                	<li class="runs">0<!-- <i class="fa fa-dot-circle-o"></i> --></li>
                            		<li class="wicket">W</li>
                                	</ul>
												</td>
												<td>1</td>
												<td>70/8</td>
											</tr>
											</thead>
									</table>
								</div>
							</div>
						</div>
						
						
						
						
						
					</div>
				</div>
				<!-- </div>
				</div> -->
				
</div>

<style>
<!--

-->
.table td{
      vertical-align: middle!important;
          padding: 10px 15px!important;
}
.about-table thead tr th{
 padding: 10px 15px!important;
}
.about-table{
margin: 0px!important;
}
.overballsec{
  margin:3px 0 0 0;
  padding:0;
  text-align: left;
}
.overballsec li{
	display: inline-block;
    background-color: #1f78ad;
    border-radius: 15px;
    padding: 2px 6px !important;
    /* width: 15px; 
    height: 20px;*/
    line-height: 14px;
    text-align: center;
    font-size: 12px;
    font-weight: bold;
    color: white;
   
}
.overballsec li.wicket{
  background-color:#d60f0fcc;
}
</style>


</div>
       				</div>
       			</div>
       		</div>
            </div>
            </div>
            </div>
@stop
