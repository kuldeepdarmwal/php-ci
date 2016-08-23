jQuery("document").ready(function(){
var jsonData1;
var jsonData1;
$(function() {
    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages':['corechart'],"callback" : pageLoaded});
	 
	function pageLoaded(){
		 $.ajax({
		 type: "POST",
        url: "adminResponse.php",
        dataType:"json",
        //async: false ,
        success: function(data) {
         jsonData1 = parseInt(data[1].active);
		 jsonData2 = parseInt(data[0].active);			
          // Create our data table out of JSON data loaded from server.
		  var x = "[['Task', 'Hours per Day'],['Active',"+ jsonData2+"]]";
		  console.log(x);
          var data1 = new google.visualization.DataTable();
		  data1.addColumn('string', 'Users'); // Implicit domain label col.
		  data1.addColumn('number', 'Active/Inactive');
		data1.addRows([
  ['Active Users',jsonData1],
  ['Inactive Users',  jsonData2]  
]);
          // Instantiate and draw our chart, passing in some options.
          var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
		  //alert(chart);
          chart.draw(data1, {width: 500, height: 240});
        }    
  });
}  
		
  
  
	
  
 });
 });