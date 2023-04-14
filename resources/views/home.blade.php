@extends('default')
@section('content')
<div class="holder">
	<div class="container">
		<div class="row">
			<div class="col-sm-7 p-sm-0">
				<div id="newsDiv">
				<div class="banner-slider-list"
						style="background-color: #fff; padding: 15px">
						<div class="banner-content" style="height:inherit !important">
							<div id="carousel-banner" class="carousel slide" style="heigth:inherit"
								data-ride="carousel">
								<div class="carousel-inner">
									<div class="item active">
										<iframe width="100%" height="347"
											src="https://www.youtube.com/embed/TeiYu22dcT8" frameborder="0"
											allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
											allowfullscreen> </iframe>
										<div class="carousel-content ">
											<div class="container">
												<div class="carousel-content-panels">
													<h3>EOSCL Junior Cricket Academy & League</h3>
												</div>
												<div class="carousel-content-panel content-sp" style="width: 100%">
												<p>EOSCL is Launching Junior Cricket Academy and League, inauguration in Mid March, all junior clubs and kids are invited to meet and greet with EOSCL executives and Coach Rizwan Cheema. Stay Tune for detai...<a
															href="EOSCLCricketLeague/viewNews.do%3FnewsId=17&amp;clubId=2565.html"
															class="btn btn-ban pull-right">Read more <i
															class="fa fa-arrow-circle-o-right"></i></a><br>
														<br>
														<br>
													</p>

												</div>
											</div>
										</div>
									</div>
									<div class="item ">
										<a
												href="EOSCLCricketLeague/viewNews.do%3FnewsId=8&amp;clubId=2565.html"><img
												src="http://eoscl.com/AdminPanel/App_Upload/TeamGroupPhotos/636995903787196807.jpg" width="100%"  alt=".. ."
												class="box">
											</a>
										<div class="carousel-content ">
											<div class="container">
												<div class="carousel-content-panels">
													<h3>EOSCL Cricket League is a Registered Community Group of Canada</h3>
												</div>
												<div class="carousel-content-panel content-sp" style="width: 100%">
												<p>EOSCL is Registered Community Group of city of EOSCL<a
															href="EOSCLCricketLeague/viewNews.do%3FnewsId=8&amp;clubId=2565.html"
															class="btn btn-ban pull-right">Read more <i
															class="fa fa-arrow-circle-o-right"></i></a><br>
														<br>
														<br>
													</p>

												</div>
											</div>
										</div>
									</div>
									</div>
								<div class="carousel-nav">
									<ol class="carousel-indicators">
										<li data-target="#carousel-banner" data-slide-to="0"
											class="active"></li>
										<li data-target="#carousel-banner" data-slide-to="1"
											class=""></li>
										</ol>
								</div>
								<div class="carousel-nav">
									<a class="carousel-nav-prev" href="index.html#carousel-banner"
										data-slide="prev">Prev</a> <a class="carousel-nav-next"
										href="index.html#carousel-banner" data-slide="next">Next</a>
									</div>
							</div>
							<br />
						</div>
					</div>
					</div>
				
				<div class="all-tab-table all-row-holder">

					<div id="parentHorizontalTab">
							<ul class="resp-tabs-list hor_1 common__slider">
								@foreach($tournament as $tour_name)

								<li>{{$tour_name['name']}}</li>
								 @endforeach
								 

							</ul>
									
						<div class="resp-tabs-container hor_1">
							<div class="about-player-all"
											id="92">
											<img alt="Leagues Summary" title="Leagues Summary" src="utilsv2/images/loading.gif" />
											<br>Loading league summary data...
										</div>
									<div class="about-player-all"
											id="93">
											<img alt="Leagues Summary" title="Leagues Summary" src="utilsv2/images/loading.gif" />
											<br>Loading league summary data...
										</div>
									<div class="about-player-all"
											id="91">
											<img alt="Leagues Summary" title="Leagues Summary" src="utilsv2/images/loading.gif" />
											<br>Loading league summary data...
										</div>
									<div class="about-player-all"
											id="100">
											<img alt="Leagues Summary" title="Leagues Summary" src="utilsv2/images/loading.gif" />
											<br>Loading league summary data...
										</div>
									</div>
					</div>

				</div>
<style>

.common__slider .slick-prev:before, .common__slider .slick-next:before{
color:#333;
}
.common__slider .slick-prev {
    left: -15px;
}
.common__slider .slick-next {
    right: 5px !important;
}

</style>
<script>
$('.common__slider').slick({
	  dots: false,
	  arrows:true,
	  infinite: false,
	  speed: 300,
	  slidesToShow: 1,
	  variableWidth: true
	});
</script>

				<div class="articles all-row-holder">
					<div class="head-top">
						<div class="row">
							<div class="col-sm-6 col-xs-6">
								<div class="border-heading">
									<h5>ARTICLES</h5>
								</div>
							</div>
							<div class="col-sm-6 col-xs-6">
								<div class="view text-right">
									<a
										href="EOSCLCricketLeague/articles.do%3FclubId=2565.html">View
										ALL <i class="fa fa-arrow-circle-o-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="article-row">
						<div class="row">
							<p class="col-sm-12">No Articles Found.</p>
							</div>
					</div>
				</div>
			</div>
			
			
			<div class="col-sm-5 p-sm-0">
			<div id="resultsDiv">
					<div class="complete-list">
						<div class="panel with-nav-tabs panel-default list-tab-mobile">
							<div class="panel-heading">
								<ul class="nav nav-tabs">
									<li class=""
										style="margin-right: 2px;"><a href="index.html#tab1default"
										data-toggle="tab">Live</a></li>
									<li class="center active"
										style="margin-left: 2px; margin-right: 2px;"><a
										href="index.html#tab2default" data-toggle="tab">Results</a></li>
									<li class=""
										style="margin-left: 2px; margin-right: 2px;"><a
										href="index.html#tab3default" data-toggle="tab">Schedule</a></li>
								</ul>
							</div>
							<div class="panel-body">
								<div class="tab-content">
									<div class="tab-pane fade "
										id="tab1default">
										<center><br><br>There are no Live matches available now <br><br><br></center><div class="complete text-center">
											<a
												href="EOSCLCricketLeague/listMatches.do%3FclubId=2565.html">Complete
												list</a>
										</div>
									</div>
									<div class="tab-pane fade in active"
										id="tab2default">
									@foreach($match_results as $match_result)



										<div class="team-vs-team">
											<div class="row list-slign">
												<div class="col-sm-4 col-xs-4">
													<div class="vsteam-image">
														<a
															title="03/19/2023"
															href="EOSCLCricketLeague/viewScorecard.do%3FmatchId=3311&amp;clubId=2565.html">
															<ul class="list-inline">
																<li><img
																	src="https://cricclubs.com/documentsRep/teamLogos/9deaa818-6154-4a1a-8eaf-89bb6e54f83d.jpg"
																	class="img-responsive img-circle"
																	style="width: 40px; height: 40px;" /></li>
																<li><img
																	src="https://cricclubs.com/documentsRep/teamLogos/57dddf01-13bf-48f5-bb38-bffc5faa2d67.jpeg"
																	class="img-responsive img-circle"
																	style="width: 40px; height: 40px;" /></li>
															</ul>
														</a>
													</div>
												</div>
												<div class="col-sm-8 col-xs-8">
													<div class="vsteam-text">
														<h4>
															<a class="list-score" style="color: inherit;"
																href="EOSCLCricketLeague/viewScorecard.do%3FmatchId=3311&amp;clubId=2565.html">L:
																{{$teams[$match_result->team_id_a]}} - vs - {{$teams[$match_result->team_id_b]}}</a>
															<img alt="Ball by Ball" title="Ball by Ball" style="float: right;
margin-right: 10px;
    margin-top: -3px; cursor: pointer;
     "
																src="utilsv2/theme2-static/images/cric-ball.png" width="15px" height="15px"/>
															</h4>
														<h5>
															<a class="list-score" 
																href="EOSCLCricketLeague/viewScorecard.do%3FmatchId=3311&amp;clubId=2565.html">
																{{$match_result->match_result_description}}</a>
														<a style="float: right;font-size: 0.85rem;background: #2098d1;
    padding: 4px 9px;
    border-radius: 5px;
    color: #fff;
    margin-right: 1rem;" href="EOSCLCricketLeague/viewScorecard.do%3FmatchId=3311&amp;clubId=2565.html"> Scorecard</a>
														</h5>
														
														
													</div>
												</div>
											</div>
										</div>

 @endforeach

										<div class="complete text-center">
											<a
												href="EOSCLCricketLeague/listMatches.do%3FclubId=2565.html">Complete
												list</a>
										</div>

									</div>
									<div class="tab-pane fade "
										id="tab3default">
										<div class="team-vs-team">
											<div class="row list-slign">
												<div class="col-sm-4 col-xs-4">
													<div class="vsteam-image">
														<ul class="list-inline">
															<li><img
																src="https://cricclubs.com/documentsRep/teamLogos/95c38746-679e-45d2-804d-2971933b0169.jpg"
																class="img-responsive img-circle"
																style="width: 40px; height: 40px;" /></li>
															<li><img
																src="https://cricclubs.com/documentsRep/teamLogos/a2530a09-334e-4d16-9206-1dfb63857ac8.jpg"
																class="img-responsive img-circle"
																style="width: 40px; height: 40px;" /></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-8 col-xs-8">
													<div class="vsteam-text">
														<h4>L:
															<a
																href="EOSCLCricketLeague/viewTeam.do%3FteamId=1092&amp;clubId=2565.html">
																Titans</a>
															
															- vs -
															<a
																href="EOSCLCricketLeague/viewTeam.do%3FteamId=1075&amp;clubId=2565.html">
																Toronto Metro Cricket Club</a>
															</h4>
														<h5>
															
															at <a
																href="EOSCLCricketLeague/viewGround.do%3FgroundId=43&amp;clubId=2565.html"
																target="_new">WnW Pitch 1</a>
															<span><i class="fa fa-clock-o"></i> 03/26/2023 8:30 PM</span>
														</h5>
													</div>
												</div>
											</div>
										</div>
										<div class="team-vs-team">
											<div class="row list-slign">
												<div class="col-sm-4 col-xs-4">
													<div class="vsteam-image">
														<ul class="list-inline">
															<li><img
																src="https://cricclubs.com/documentsRep/teamLogos/f5320271-5186-4f51-af7a-f18eb7133175.jpg"
																class="img-responsive img-circle"
																style="width: 40px; height: 40px;" /></li>
															<li><img
																src="https://cricclubs.com/documentsRep/teamLogos/9deaa818-6154-4a1a-8eaf-89bb6e54f83d.jpg"
																class="img-responsive img-circle"
																style="width: 40px; height: 40px;" /></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-8 col-xs-8">
													<div class="vsteam-text">
														<h4>L:
															<a
																href="EOSCLCricketLeague/viewTeam.do%3FteamId=1091&amp;clubId=2565.html">
																Whitby ASCA</a>
															
															- vs -
															<a
																href="EOSCLCricketLeague/viewTeam.do%3FteamId=1103&amp;clubId=2565.html">
																Royal Tigers</a>
															</h4>
														<h5>
															
															at <a
																href="EOSCLCricketLeague/viewGround.do%3FgroundId=44&amp;clubId=2565.html"
																target="_new">WnW Pitch 2</a>
															<span><i class="fa fa-clock-o"></i> 03/26/2023 8:30 PM</span>
														</h5>
													</div>
												</div>
											</div>
										</div>
										<div class="team-vs-team">
											<div class="row list-slign">
												<div class="col-sm-4 col-xs-4">
													<div class="vsteam-image">
														<ul class="list-inline">
															<li><img
																src="https://cricclubs.com/documentsRep/teamLogos/4685129f-1e36-40fd-ab4e-df7a0fedad03.jpg"
																class="img-responsive img-circle"
																style="width: 40px; height: 40px;" /></li>
															<li><img
																src="https://cricclubs.com/documentsRep/teamLogos/28ad19bf-4cad-4325-a8e6-d15b9d46f533.jpg"
																class="img-responsive img-circle"
																style="width: 40px; height: 40px;" /></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-8 col-xs-8">
													<div class="vsteam-text">
														<h4>L:
															<a
																href="EOSCLCricketLeague/viewTeam.do%3FteamId=1085&amp;clubId=2565.html">
																Asian Hawks</a>
															
															- vs -
															<a
																href="EOSCLCricketLeague/viewTeam.do%3FteamId=1086&amp;clubId=2565.html">
																EOSCL Cricket Club</a>
															</h4>
														<h5>
															
															at <a
																href="EOSCLCricketLeague/viewGround.do%3FgroundId=45&amp;clubId=2565.html"
																target="_new">WnW Pitch 3</a>
															<span><i class="fa fa-clock-o"></i> 03/26/2023 8:30 PM</span>
														</h5>
													</div>
												</div>
											</div>
										</div>
										<div class="team-vs-team">
											<div class="row list-slign">
												<div class="col-sm-4 col-xs-4">
													<div class="vsteam-image">
														<ul class="list-inline">
															<li><img
																src="https://cricclubs.com/documentsRep/teamLogos/3de1d6b0-210e-490c-b111-2038ec3e0c8d.jpeg"
																class="img-responsive img-circle"
																style="width: 40px; height: 40px;" /></li>
															<li><img
																src="https://cricclubs.com/documentsRep/teamLogos/57dddf01-13bf-48f5-bb38-bffc5faa2d67.jpeg"
																class="img-responsive img-circle"
																style="width: 40px; height: 40px;" /></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-8 col-xs-8">
													<div class="vsteam-text">
														<h4>L:
															<a
																href="EOSCLCricketLeague/viewTeam.do%3FteamId=1069&amp;clubId=2565.html">
																Kitchener Bulls</a>
															
															- vs -
															<a
																href="EOSCLCricketLeague/viewTeam.do%3FteamId=1078&amp;clubId=2565.html">
																GTA United</a>
															</h4>
														<h5>
															
															at <a
																href="EOSCLCricketLeague/viewGround.do%3FgroundId=43&amp;clubId=2565.html"
																target="_new">WnW Pitch 1</a>
															<span><i class="fa fa-clock-o"></i> 04/02/2023 8:30 PM</span>
														</h5>
													</div>
												</div>
											</div>
										</div>
										<div class="team-vs-team">
											<div class="row list-slign">
												<div class="col-sm-4 col-xs-4">
													<div class="vsteam-image">
														<ul class="list-inline">
															<li><img
																src="https://cricclubs.com/documentsRep/teamLogos/9deaa818-6154-4a1a-8eaf-89bb6e54f83d.jpg"
																class="img-responsive img-circle"
																style="width: 40px; height: 40px;" /></li>
															<li><img
																src="https://cricclubs.com/documentsRep/teamLogos/8c45d0e8-b2c3-4d50-bb8b-70573b533552.jpg"
																class="img-responsive img-circle"
																style="width: 40px; height: 40px;" /></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-8 col-xs-8">
													<div class="vsteam-text">
														<h4>L:
															<a
																href="EOSCLCricketLeague/viewTeam.do%3FteamId=1103&amp;clubId=2565.html">
																Royal Tigers</a>
															
															- vs -
															<a
																href="EOSCLCricketLeague/viewTeam.do%3FteamId=1072&amp;clubId=2565.html">
																Toronto Jaguars</a>
															</h4>
														<h5>
															
															at <a
																href="EOSCLCricketLeague/viewGround.do%3FgroundId=44&amp;clubId=2565.html"
																target="_new">WnW Pitch 2</a>
															<span><i class="fa fa-clock-o"></i> 04/02/2023 8:30 PM</span>
														</h5>
													</div>
												</div>
											</div>
										</div>
										<div class="team-vs-team">
											<div class="row list-slign">
												<div class="col-sm-4 col-xs-4">
													<div class="vsteam-image">
														<ul class="list-inline">
															<li><img
																src="https://cricclubs.com/documentsRep/teamLogos/a2530a09-334e-4d16-9206-1dfb63857ac8.jpg"
																class="img-responsive img-circle"
																style="width: 40px; height: 40px;" /></li>
															<li><img
																src="https://cricclubs.com/documentsRep/teamLogos/28ad19bf-4cad-4325-a8e6-d15b9d46f533.jpg"
																class="img-responsive img-circle"
																style="width: 40px; height: 40px;" /></li>
														</ul>
													</div>
												</div>
												<div class="col-sm-8 col-xs-8">
													<div class="vsteam-text">
														<h4>L:
															<a
																href="EOSCLCricketLeague/viewTeam.do%3FteamId=1075&amp;clubId=2565.html">
																Toronto Metro Cricket Club</a>
															
															- vs -
															<a
																href="EOSCLCricketLeague/viewTeam.do%3FteamId=1086&amp;clubId=2565.html">
																EOSCL Cricket Club</a>
															</h4>
														<h5>
															
															at <a
																href="EOSCLCricketLeague/viewGround.do%3FgroundId=45&amp;clubId=2565.html"
																target="_new">WnW Pitch 3</a>
															<span><i class="fa fa-clock-o"></i> 04/02/2023 8:30 PM</span>
														</h5>
													</div>
												</div>
											</div>
										</div>
										<div class="complete text-center">
											<a
												href="EOSCLCricketLeague/fixtures.do%3FclubId=2565.html">Complete
												list</a>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div style="text-align: center;background: #fff; padding-bottom: 15px;" class="col-sm-12">
					<!-- Hot Star Changes -->
					<!-- Hot star chagnes ends -->
					<!-- cric stores Changes -->
					<!-- Cric Stores chagnes ends -->
					</div>
				<div class="articles">
					<div class="head-top">
						<div class="row">
							<div class="col-sm-6 col-xs-6">
								<div class="border-heading">
									<h5>Gallery</h5>
								</div>
							</div>
							<div class="col-sm-6 col-xs-6">
								<div class="view text-right">
									<a href="EOSCLCricketLeague/albums.do%3FclubId=2565.html">View
										ALL <i class="fa fa-arrow-circle-o-right"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="gallery-image-row">
						<div class="row">
							<div class="col-sm-6 sp">
								<div class="gallery-image-all">
									<a title="EOSCL AWARDS 2018"
										href="EOSCLCricketLeague/viewAlbum.do%3FalbumId=1&amp;clubId=2565.html">
										<div class="gallery-image">
											<img
												src='http://eoscl.com/AdminPanel/App_Upload/TeamGroupPhotos/636995904247192654.jpg'
												class="img-responsive center-block" />
										</div>
										
									</a>
									<div class="gallery-text">

											<!-- <i class="fa fa-camera-retro" style="font-size: 14px;"></i> --> <b
												style="font-size: 14px;">EOSCL AWARDS 2022</b>

											
										</div>
								</div>

									<div class="gallery-image-all">
									<a title="EOSCL AWARDS 2018"
										href="EOSCLCricketLeague/viewAlbum.do%3FalbumId=1&amp;clubId=2565.html">
										<div class="gallery-image">
											<img
												src='http://eoscl.com/AdminPanel/App_Upload/TeamGroupPhotos/636995903787196807.jpg'
												class="img-responsive center-block" />
										</div>
										
									</a>
									<div class="gallery-text">

											<!-- <i class="fa fa-camera-retro" style="font-size: 14px;"></i> --> <b
												style="font-size: 14px;">EOSCL AWARDS 2023</b>

											
										</div>
								</div>
							</div>
							</div>						
					</div>
				</div>
				<!-- <div class="app-in">				
					<div class="border-heading">
						<h5>DOWNLOAD</h5>
					</div>
				
					<div class="sponser-content">
						<div class="row">
							<div class="col-sm-1 col-xs-1">
							</div>
							<div class="col-sm-5 col-xs-5">
                               <div class="spon-image">
									<a href="https://play.google.com/store/apps/details?id=com.cricclubs" target="_blank" >
                                        <img src="https://cricclubs-static.s3.amazonaws.com/cricclubshotstar/images_jul_7_2020/google.png"
                                        class="img-responsive center-block" />
                                    </a>                               	
                               </div>
                            </div>
                            <div class="col-sm-5 col-xs-5">
                                <div class="spon-image">
									<a href="https://apps.apple.com/us/app/cricclubs/id978682715" target="_blank" >
                                        <img src="https://cricclubs-static.s3.amazonaws.com/cricclubshotstar/images_jul_7_2020/apple.png"
                                        class="img-responsive center-block" />
                                    </a>                               	
                               </div>
                           </div>
					</div>
				</div>
				</div> -->
				<div class="facebook">
					<div class="border-heading sp">
						<h5>Facebook</h5>
					</div>
					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FEOSCLcricketleague%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=745734118815722" target="_top" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
				</div>
				<div class="facebook">
					<div class="border-heading sp">
						<h5>Twitter</h5>
					</div>
					<div style=" overflow-y: scroll; max-height: 500px; ">
					<a class="twitter-timeline" href="https://twitter.com/EEoscl?ref_src=twsrc%5Etfw%7Ctwcamp%5Etweetembed%7Ctwterm%5E1003005776129150976%7Ctwgr%5E2eef71c9b1181f3aed0a5fb71c24b561abaad9b9%7Ctwcon%5Es1_&ref_url=http%3A%2F%2Fwww.eoscl.com%2FDefault.aspx">Tweets by MissCricLeague</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
				</div>
				</div>
		
		
	</div>
</div>
<div id="content" style="display: none; visible: false;">

	<a id="example7"
		href="https://cricclubs.com/documentsRep/startup/2565-startup.JPG"
		title="Welcome to EOSCL"></a>
	<div id="inline1" style="width: 500px; height: 300px; overflow: auto;">
		Welcome to EOSCL</div>

</div>

<div id="dialogOpenVideoLink" class="dialogOpenVideoLink"
	title="Ball Video" style="display: none;">
	<center>

		<iframe class="playVideo" id="playVideo" src="index.html" width="640px"
			height="360px" allowfullscreen></iframe>

	</center>
</div>

<script>
	$(document).ready(function() {
		$("div [class='slick-list draggable'").last().css("width","95%")
		debugger;
		
					var ajaxUrl92 = '/homePageLeagues.do?clubId='+2565+'&leagueId='+92;
			    	$.ajax({url:ajaxUrl92,
			    		success:function(result){	    		
			    			$("#92").html(result);
			    	}});
			    	
    	
    	(function($){
    		  $.fn.extend({ 
    		    onShow: function(callback, unbind){
    		      return this.each(function(){
    		        var _this = this;
    		        var bindopt = (unbind==undefined)?true:unbind; 
    		        if($.isFunction(callback)){
    		          if($(_this).is(':hidden')){
    		            var checkVis = function(){
    		              if($(_this).is(':visible')){
    		                callback.call(_this);
    		                if(bindopt){
    		                  $('body').unbind('click keyup keydown', checkVis);
    		                }
    		              }                         
    		            }
    		            $('body').bind('click keyup keydown', checkVis);
    		          }
    		          else{
    		            callback.call(_this);
    		          }
    		        }
    		      });
    		    }
    		  });
    		})(jQuery);
    	    	
    	
        			$('#92').onShow(function() { loadLeagueData(92 ); });
        		
        			$('#93').onShow(function() { loadLeagueData(93 ); });
        		
        			$('#91').onShow(function() { loadLeagueData(91 ); });
        		
        			$('#100').onShow(function() { loadLeagueData(100 ); });
        		
	});
</script>

<script type="text/javascript">
	function loadLeagueData(leagueid) {	
		
		
				var ajaxUrl = '/homePageLeagues.do?clubId=' +2565+ '&leagueId=' + leagueid;
		
		
		$.ajax({
			url : ajaxUrl,
			success : function(result) {
				$("#" + leagueid).html(result);
				$(".panel").on("click", function(e) {
					var $_target = $(e.currentTarget);
					var $_panelBody = $_target.find(".panel-collapse");
					if ($_panelBody) {
						$_panelBody.collapse('toggle')
					}
				});
			}
		});
	}
</script><style >
				.footer-bottom{
					width: 100%;
   			  position: fixed;
   			  bottom: 0;
				}
			</style>
@stop
