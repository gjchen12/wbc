<?php
/**
 * Template Name: Chart Page
 *
 * @package White-child
 */
require("dbinfo.php");

// Opens a connection to a MySQL server

$connection=mysql_connect ('localhost', $username, $password);
if (!$connection) {  die('Not connected : ' . mysql_error());}

// Set the active MySQL database

$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}


get_header(); ?>

        <div id="primary-mono" class="content-area col-md-8">
                <main id="main" class="site-main" role="main">

                        <?php while ( have_posts() ) : the_post(); ?>

                                <?php get_template_part( 'content', 'page' ); ?>
<!DOCTYPE html >
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Month');
        data.addColumn('number', '# of Accidents');
        data.addColumn('number', '# of Injuries');
        data.addColumn('number', '# of Killed');
	//while ($row = @mysql_fetch_assoc($result)){
        data.addRows([
	  ['March',3,1,1],
	  ['Jan',3,1,1],
	
        // [$row['MONTH(date)'], $row[COUNT(*)'], $row['SUM(injured)'], $row['SUM(killed)']],
        ]);
	//}

        // Set chart options
        var options = {'title':'Cupertino Collisions Per Month (2014)',
                       'width':500,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>


                        <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->
        </div><!-- #primary -->

<?php get_footer(); ?>
~                       
