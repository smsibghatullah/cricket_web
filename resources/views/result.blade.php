@extends('default')
@section('content')
<div class="holder point">
    	<div class="container p-sm-0">
        	<div class="point-table-all sch">
            <div class="series-drops">
            	<div class="row series-drop">
                	<div class="col-sm-6 col-xs-12">
                    	<div class="border-heading" style="margin-bottom: 0px;">
                            <h5 style="text-align: left!important;">Match Results</h5>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                
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
                        <select name="tournament" id="tournament" class="form-control" >
                                 		<option value=""> Select tournament(s)</option>
                                        @foreach($tournament as $tournament_id => $tournament_name)
                                    <option value="{{ $tournament_id }}">{{ $tournament_name }}</option>
                                       @endforeach
									</select>
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
                            <select name="teams" id="teams" class="form-control">
                                <option value="">Select team(s)</option>
                                @foreach($teams as $team_id => $team_name)
                                    <option value="{{ $team_id }}">{{ $team_name }}</option>
                                @endforeach
                            </select>
							</div>
							
                    </div>
                     <div class="col-sm-12 admins-drop text-right hidden-phone" style="display:flex; justify-content: flex-end;">
               
						</div>
                
            </div>
            <div class="series-drop">
            	<div class="row">
					<div class="col-sm-3 col-xs-4" title="From Date">
                    	<input type="text" name="created_at" autocomplete="off" placeholder="From Date" value="" align="top" class="calendarBox form-control hasDatepicker" id="created_at">
					</div>
					<div class="col-sm-3 col-xs-4" title="To Date">
                    	<input type="text"  name="end_at" autocomplete="off" placeholder="To Date" value="" align="top" class="calendarBox form-control hasDatepicker" id="end_at">
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
                         @foreach($results as $data)

                       	@if($data['running_inning'] == 3)
                       	
<div class="month-all sp">
<div class="month-all listView">
       <div class="schedule-all">
           <div class="row team-data" id="deleteRow3257">
               <div class="col-xs-3 col-sm-1 sp mobile-b">
                   <div class="sch-time text-center h-90">
                       <h5><strong>Final</strong></h5>
                       <h2>{{date('d', strtotime($data['created_at']))}}</h2>
                       <h5>{{date('M Y', strtotime($data['created_at']))}}</h5>
                   </div>
               </div>
               <div class="col-xs-9 col-sm-4 p-sm-0 mobile-b">
                   <div class="schedule-logo text-center h-90">
                   <ul class="list-inline">
		                           <li class="lose"><span>{{ $total_runs[$data->id][0] }}/{{ $total_wicket_fixture[$data->id][0] }}</span> <br> 
		                           <p>{{ $total_run_fixture[$data->id][0] }}/{{$data['numberofover']}}</p>
		                           </li>
		                           <li><a href="/MississaugaCricketLeague/viewTeam.do?teamId=1067&amp;clubId=2565">
		                           <img src="https://cricclubs.com/documentsRep/teamLogos/f5e11e68-50cb-4926-8cd8-711f991d9ea2.jpg" class="img-responsive img-circle" style="width: 70px;height: 70px;"></a></li>
		                           <li><a href="/MississaugaCricketLeague/viewTeam.do?teamId=1046&amp;clubId=2565">
		                           <img src="https://cricclubs.com/documentsRep/teamLogos/c13fab4c-3cbb-4805-9c9f-bcba623a5a39.jpg" class="img-responsive img-circle" style="width: 70px;height: 70px;"></a></li>
		                          <li class="win">
		                          		<span>{{ $total_runs[$data->id][1] }}/{{ $total_wicket_fixture[$data->id][1] }}</span> <br> 
		                          			<p>{{ $total_run_fixture[$data->id][0] }}/{{$data['numberofover']}}
											</p>
				                           </li>
	                      	 </ul>	
                         </div>
               </div>
             <div class="col-xs-12 col-sm-4">
                   <div class="schedule-text">
                   <h4>{{$tournament[$data['tournament_id']]}}</h4>
                       <h3>{{ $teams[$data['team_id_a']]}}<span class="v"> v </span> {{ $teams[$data['team_id_b']]}}</h3>
                       <h4>{{$data['match_result_description']}}</h4>
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
                          
                           <a  href="{{ url('fullScorecard/' . $data['id']) }}" class="btn btn-sc"><i class="fa fa-calendar-check-o"></i>Scorecard</a>
                       			
								
							</li>
                       </ul>
                   </div>
                   			</div>
           </div>
       </div>
       </div>
        
    
       </div>
	   @endif
       							@endforeach
        
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
			<td align="center"><a href="/MississaugaCricketLeague/viewTeam.do?teamId=1067&amp;clubId=2565">Watan Warriors {{ $data['team_one'] }}</a></td>
			<td align="center"><a href="/MississaugaCricketLeague/viewTeam.do?teamId=1046&amp;clubId=2565">Melbourne Cricket Club {{ $data['team_two'] }}</a></td>
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