<link href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet">

<?php include '../EWSDcoursework/Top.php' ?>
<body>
    <!-- our -->
    <div id="txtarea" class="our">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Student Form</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 margin_bottom">
                    <div class="row">

                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                            <div class="two-box">
                                <figure><img style="width:300px;height:250px;" src="../EWSDcoursework/Layout/mainpage/images/gradurate.jpg" alt="#" /></figure>
                            </div>
                        </div>

                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">

                            <div class="txtarea">
                            
                                    <div class="container">
                                        <div class="infobody">

                                            <table id="table_id" class="display">
                                                <thead>
                                                    <tr>
                                                        <th>Column 1</th>
                                                        <th>Column 2</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Row 1 Data 1</td>
                                                        <td>Row 1 Data 2</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Row 2 Data 1</td>
                                                        <td>Row 2 Data 2</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>

                                    <div id="piechart"></div>

                                    <form>
                                    <div class="row">
                                        <div class="col" style="padding-top:20px;">
                                         <label for="floatingTextarea">Comments</label>
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row" style="float:right;">
                                        <button type="button" class="btn btn-primary" onclick="location.href='Register.php'">Create New Student</button>
                                        <button style="margin-left:20px;" type="button" class="btn btn-success">Upload</button>
                                    </div>

                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
   
    <!-- end our -->

</body>


<script src="../EWSDcoursework/Layout/mainpage/js/jquery-3.3.1.js"></script>
<script src="../EWSDcoursework/Layout/mainpage/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript"  src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
    $(document).ready(function () {
        $('#table_id').DataTable();
    });
</script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Work', 8],
  ['Friends', 2],
  ['Eat', 2],
  ['TV', 2],
  ['Gym', 2],
  ['Sleep', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

<?php include '../EWSDcoursework/footer.php' ?>


