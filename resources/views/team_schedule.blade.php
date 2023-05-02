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
												(<a href="/MississaugaCricketLeague/viewLeague.do?league=114&amp;clubId=2565">{{$tournament[$tournamentData]}}</a>)
												</h4>
											<!--  <p><span>Team Code </span>      :   <span style="text-transform: uppercase">kbu</span></p>-->
											<p>
												<span>Captain </span> :
												{{$player[$teamCaptain -> player_id]}}</p>
											<p>
												<span>Vice Captain</span> :
												Gurpreet Singh</p>
											<p>
												<span>Player Count</span> :
												{{$playerCount}}</p>
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

<div class="all-tab-table team">
			<div class="container p-sm-0">
				<div class="score-tab">
					<div class="complete-list">
						<div class="panel with-nav-tabs panel-default">
								<div class="panel-heading tabs-team">
                                <ul class="nav nav-tabs">
										<li ><a href="{{ url('team-view', $team_id_data)  }}"  >Team
												Info</a></li>
										<li ><a href="{{ url('team_result', $team_id_data)  }}">Results</a></li>
										<li class="active"><a href="{{ url('team_schedule', $team_id_data)  }}">Schedule</a></li>
										<li><a href="#umpiringSchedule" role="tab" data-toggle="tab" onclick="loadView('teamUmpiringSchedule');">Umpiring</a></li>
										<li><a href="#batting" role="tab" data-toggle="tab" onclick="loadView('teamBatting');">Batting</a></li>
										<li><a href="#bowling" role="tab" data-toggle="tab" onclick="loadView('teamBowling');">Bowling</a></li>
										<li><a href="#fielding" role="tab" data-toggle="tab" onclick="loadView('teamFielding');">Fielding</a></li>
										<li><a href="#ranking" role="tab" data-toggle="tab" onclick="loadView('teamRanking');">Ranking</a></li>
										</ul>
								</div>
								<div class="panel-body">
									<div class="tab-content">
						<div class="tab-pane fade " id="team">
											
											<p></p>
											
											Loading ...
											</div>
										<div class="tab-pane fade " id="results">
											
											Loading ...
											</div>
										<div class="tab-pane fade in active point-table-all btn-earth" id="schedule">
											<script type="text/javascript" src="/utilsv2/js/pdf-excel-plugin/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/utilsv2/js/pdf-excel-plugin/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="/utilsv2/js/pdf-excel-plugin/jszip.min.js"></script>
<script type="text/javascript" src="/utilsv2/js/pdf-excel-plugin/pdfmake.min.js"></script>
<script type="text/javascript" src="/utilsv2/js/pdf-excel-plugin/vfs_fonts.js"></script>
<script type="text/javascript" src="/utilsv2/js/pdf-excel-plugin/buttons.html5.min.js"></script>
<script type="text/javascript" src="/utilsv2/js/pdf-excel-plugin/buttons.print.min.js"></script>       
        
        <script>
        function deleteMatch(matchId,name){
          
          $("#deleteMessage").html(name);
          $("#deleteId").val(matchId);
          $("#dialog-confirm-delete" ).dialog("open");
          
        }
        
        function deleteMatchScorecard(fixtureId,matchId,name){          
          $("#deleteMessage").html(name);
          $("#deleteId").val(fixtureId);
          $("#deleteId1").val(matchId);
          $("#dialog-confirm-deleteScorecard" ).dialog("open");         
        }
        
        function fnDeleteMultipleFixtures(matchtype)
        {
          var counter=document.getElementsByName(matchtype+"_selected").length;
          var selectedCount=0;
          var selectedFixtures="";
          for(var i=0;i<counter;i++)
          {
            
              selectedCount++;
              selectedFixtures = selectedFixtures + document.getElementsByName(matchtype+"_selected")[i].value + "," ;
            
          }
          if(selectedCount<1){
            
            if (matchtype == 'removeumpire'){
              $('#errorMessage').text("No Fixture to remove umpire.")
            }else{
              $('#errorMessage').text("No unplayed Matches.")
            }
            
            $('#errorMessage').dialog("open");
            return;
          } else if (matchtype == "upcoming" || matchtype == "past"){
            $("#deleteMessage").html(" "+selectedCount+" match(s)");
            $("#deleteId").val(selectedFixtures);
            $("#dialog-confirm").dialog("open");
                var urllocation = '/MississaugaCricketLeague/deleteMultipleFixtures.do?fixtureId=&clubId=2565';
                urllocation = urllocation.replace("?fixtureId=", "?fixtureId="+selectedFixtures); 
          } else if (matchtype == 'removeumpire'){
            $("#deleteMessage-removeumpire").html(" "+selectedCount+" fixture(s)");
            $("#removeUmpireId").val(selectedFixtures);
            $("#dialog-confirm-removeumpire").dialog("open");
                var urllocation = '/MississaugaCricketLeague/removeMultipleUmpireFixtures.do?fixtureId=&clubId=2565';
                urllocation = urllocation.replace("?fixtureId=", "?fixtureId="+selectedFixtures); 
          }
        }
        
        $(document).ready(function() {
          $('.loader').hide();
        $("#dialog-confirm-removeumpire").dialog({
              resizable: false,
              autoOpen: false,
              modal: true,
              buttons: {
                "Remove": function() {
                  var teamId = $("#removeUmpireId").val();
                  var ajaxUrl = '/MississaugaCricketLeague/removeMultipleUmpireFixtures.do?fixtureId=&clubId=2565';
                  ajaxUrl = ajaxUrl.replace("?fixtureId=", "?fixtureId="+teamId);
                  $(window).attr('location',ajaxUrl);
                  $( this ).dialog( "close" );                 
                },
                Cancel: function() {
                  $( this ).dialog( "close" );
                }
              }
            });
        
        $("#dialog-confirm").dialog({
              resizable: false,
              autoOpen: false,
              modal: true,
              buttons: {
                "Delete": function() {
                  var teamId = $("#deleteId").val();
                  var ajaxUrl = '/MississaugaCricketLeague/deleteMultipleFixtures.do?fixtureId=&clubId=2565';
                  ajaxUrl = ajaxUrl.replace("?fixtureId=", "?fixtureId="+teamId);
                  $(window).attr('location',ajaxUrl);
                  $( this ).dialog( "close" );                 
                },
                Cancel: function() {
                  $( this ).dialog( "close" );
                }
              }
            });
        
        //delete
        
        $("#dialog-confirm-delete" ).dialog({
              resizable: false,
              autoOpen: false,
              modal: true,
              buttons: {
                "Delete": function() {                  
                  var matchId = $("#deleteId").val();
                  var ajaxUrl = '/MississaugaCricketLeague/deleteFixture.do?clubId=2565&fixtureId=' + matchId;
                  $.ajax({
                    url:ajaxUrl,
                    success:function(result){
                      $("#deleteRow"+matchId).remove(); 
                      $('#displyMessage').html(result);
                      $('#displyMessage').dialog("open");
                      window.location.reload(true);
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
        
        //end of delete
        
        
        //delete Scorecard
        
        $("#dialog-confirm-deleteScorecard" ).dialog({
              resizable: false,
              autoOpen: false,
              modal: true,
              buttons: {
                "Delete": function() {                  
                  var matchId = $("#deleteId1").val();
                  var fixtureId = $("#deleteId").val();
                  var ajaxUrl = '/MississaugaCricketLeague/deleteMatch.do?clubId=2565&matchId=' + matchId;
                  $.ajax({
                    url:ajaxUrl,
                    success:function(result){
                        $('#displyMessage').html("scorecard deleted");
                      $('#displyMessage').dialog("open");
                      window.location.reload(true);
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
        
        //end of delete
        
         $( "#displyMessage" ).dialog({
          autoOpen: false,
            modal: true
            });
        
        $( "#errorMessage" ).dialog({
          autoOpen: false,
            modal: true
            });
          });
        
        </script>
<style>
.btn-earth{
display: inline-block;
}
.admins-drop{
margin-top: 15px;}
  #schedule-table_length{
    text-align: right;
  }
  #schedule-table_filter{
    text-align: right;
  }
  .list-table tbody tr td a, .list-table tbody tr td{
  line-height: 26px!important;
  font-size: 13px!important;
  }
  .list-table tbody tr td a{
     /* display: table-row!important;*/
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

.display-actions{
	background-color: transparent !important;
}
       
</style>


@foreach($team_scheduleData as $data)
@if($data['match_startdate'])
        <div class="loader" style="display: none;"></div>
                <div class="month-all listView">
                </div>
          
          <!-- Table View for Upcomming Matches Starts -->
          <div class="month-all gridView" style="display: none;">
                </div>
          
          <!-- Table View for Upcomming Matches Ends -->
          
          
          
          <div class="month-all listView">
          <div class="row">
          <div class="col-sm-9 col-xs-9">
          </div>
                <div class="col-sm-3 col-xs-3 admins-drop text-right">
                  </div>
                </div>
          <input type="hidden" name="removeumpire_selected" value="3469">
                      <div class="schedule-all">
                      <div class="row team-data deleteRow3469" id="deleteRow3469">
                          <div class="col-xs-4 col-sm-1 sp mobile-b h-90" style="padding-right: 15px;text-align: center;">
                              <div class="sch-time text-center">
                              <h4>Sunday</h4>
                              <h2>{{date('d', strtotime($data['match_startdate']))}}</h2>
                               <h5>{{date('M Y', strtotime($data['match_startdate']))}}</h5>
                          <h5>12:30 PM</h5>
                              </div>
                            </div>
                            <div class="col-xs-8 col-sm-3 p-sm-0 mobile-b">
                              <div class="schedule-logo text-center h-90">
                                  <ul class="list-inline" style="color: #fff;">
                                  <li><a href="/MississaugaCricketLeague/viewTeam.do?teamId=827&amp;clubId=2565">
                                  <img src="https://cricclubs.com/documentsRep/teamLogos/61443e16-7f18-452a-a807-040ce00e712d.jpg" class="img-responsive img-circle" style="width: 80px;height: 80px;"></a></li>
                                        v 
                                  <li><a href="/MississaugaCricketLeague/viewTeam.do?teamId=828&amp;clubId=2565">
                                  <img src="https://cricclubs.com/documentsRep/teamLogos/6f5eb596-2586-4481-b2aa-9f1534df25da.jpg" class="img-responsive img-circle" style="width: 80px;height: 80px;"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-5">
                              <div class="schedule-text">
                               <p style="color: #fff; margin-bottom: 3px;">{{$tournament[$data['tournament_id']]}}</p>
                                  <h3><a style="color: inherit;" href="/MississaugaCricketLeague/viewTeam.do?teamId=827&amp;clubId=2565">{{$teams[$data->team_id_a]}}</a> <span class="v"> v </span>  <a style="color: inherit;" href="/MississaugaCricketLeague/viewTeam.do?teamId=828&amp;clubId=2565">{{$teams[$data->team_id_b]}}</a> </h3>

                                    <h4>L @  <a style="color: inherit;" href="/MississaugaCricketLeague/viewGround.do?groundId=9&amp;clubId=2565" target="_new">Danville South</a>
                    
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Umpires: , ,, </h4>
                  
                  <p style="color:#fff;font-size:13px"> </p>
                  <p style="color:#fff;font-size:13px"> </p>
                   </div>
                            </div>
                            <div class="col-xs-12 col-sm-3 ball-score">
                                 <div class="score-share text-center hidden-phone">
                                </div>
                                <div class="score-share text-center" style="display: inline-block;">
                                  <ul class="list-inline">
                                      <li><a href="{{ url('fullScorecard/' . $data['id']) }}" class="btn btn-sc"><i class="fa fa-calendar-check-o"></i>  Scorecard</a></li>
                                    </ul>
                                </div>
                                </div>
                        </div>
                    </div>
                    
                    </div>
                    @endif
          @endforeach
        
  <div class="table-responsive" style="display:none;">
  <iframe id="txtArea1" style="display: none"></iframe>
  <div id="attTable_wrapper" class="dataTables_wrapper no-footer"><div id="attTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="attTable"></label></div><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 0px; padding-right: 0px;"><table class="table table-striped dataTable no-footer" role="grid" style="margin-left: 0px; width: 0px;"></div></div><div class="dataTables_info" id="attTable_info" role="status" aria-live="polite">Showing 1 to 14 of 14 entries</div></div>
</div>
<script>
  $('.gridView').hide();
  $('.listView').show();
  $('#list-view').click(function() {
    localStorage.setItem("view", "list");
    gridList();
  })
  $('#grid-view').click(function() {
    localStorage.setItem("view", "grid");
    gridList();
  })
  function gridList() {
    if (localStorage.view == "grid") {
      $('.gridView').show();
      $('.listView').hide();
    } else if (localStorage.view == "list") {
      $('.gridView').hide();
      $('.listView').show();
    }
  }
  gridList();
</script>

<script>

$(document).ready(function() {
  $('#attTable').DataTable({
  paging : false,
  scrollX : true,
  aaSorting : []
});
});

function fnExcelReport()
{
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange; var j=0;
    tab = document.getElementById('attTable'); // id of table

    for(j = 0 ; j < tab.rows.length ; j++) 
    {     
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        //tab_text=tab_text+"</tr>";
    }

    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE "); 

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
    {
        txtArea1.document.open("txt/html","replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"TeamViewPlayers.xlsx");
    }  
    else                 //other browser not tested on IE 11
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

    return (sa);
}

//export csv
$('#excel-download').click(function() {
  var titles = [];
  var data = [];

  /*
   * Get the table headers, this will be CSV headers
   * The count of headers will be CSV string separator
   */
  $('#attTable th').each(function() {
    titles.push($(this).text());
  });

  /*
   * Get the actual data, this will contain all the data, in 1 array
   */
  $('#attTable td').each(function() {
    var pushdata = $.trim($(this).text());
    data.push(pushdata);
  });
  
  /*
   * Convert our data to CSV string
   */
  var CSVString = prepCSVRow(titles, titles.length, '');
  CSVString = prepCSVRow(data, titles.length, CSVString);

  /*
   * Make CSV downloadable
   */
  var downloadLink = document.createElement("a");
  var blob = new Blob(["\ufeff", CSVString]);
  var url = URL.createObjectURL(blob);
  downloadLink.href = url;
  
	  downloadLink.download = "2022 - MCL50 SUPER 7.xls";
  
  
 

  /*
   * Actually download CSV
   */
  document.body.appendChild(downloadLink);
  downloadLink.click();
  document.body.removeChild(downloadLink);
});

   /*
* Convert data array to CSV string
* @param arr {Array} - the actual data
* @param columnCount {Number} - the amount to split the data into columns
* @param initial {String} - initial string to append to CSV string
* return {String} - ready CSV string
*/
function prepCSVRow(arr, columnCount, initial) {
  var row = ''; // this will hold data
  var delimeter = ','; // data slice separator, in excel it's `;`, in usual CSv it's `,`
  var newLine = '\r\n'; // newline separator for CSV row

  /*
   * Convert [1,2,3,4] into [[1,2], [3,4]] while count is 2
   * @param _arr {Array} - the actual array to split
   * @param _count {Number} - the amount to split
   * return {Array} - splitted array
   */
  function splitArray(_arr, _count) {
    var splitted = [];
    var result = [];
    _arr.forEach(function(item, idx) {
      if ((idx + 1) % _count === 0) {
        splitted.push(item);
        result.push(splitted);
        splitted = [];
      } else {
        splitted.push(item);
      }
    });
    return result;
  }
  var plainArr = splitArray(arr, columnCount);
  // don't know how to explain this
  // you just have to like follow the code
  // and you understand, it's pretty simple
  // it converts `['a', 'b', 'c']` to `a,b,c` string
  plainArr.forEach(function(arrItem) {
    arrItem.forEach(function(item, idx) {
      row += item + ((idx + 1) === arrItem.length ? '' : delimeter);
    });
    row += newLine;
  });
  return initial + row;
}

//csv ends 


if($('#schedule-table').length >= 1){
     
  /* $('#schedule-table').DataTable(); */
     
     
     $(function () {
         $("#schedule-table").DataTable({"bPaginate": false, "bFilter": false, "bInfo": false });
     });
     
     
   }
if($('#schedule-table1').length >= 1){
  
     /* $('#schedule-table1').DataTable(); */
     
     
     $(function () {
         $("#schedule-table1").DataTable({"bPaginate": false, "bFilter": false, "bInfo": false });
     });
     
     
   }
   

   
   
</script>       
        
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
		</div>
        @stop