<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/dateTimePicker.css">
  </head>
  <body>
    <div class="container">
      <div class="row">

      <hr>
      <h2>Recurring unavailable dates</h2>
      <div class="row">
        <div class="col-xss-4">
          <div id="glob-data" data-toggle="calendar" onclick="do()"></div>
        </div>
      </div>

      </div>

  </div>
    <script type="text/javascript" src="scripts/components/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/dateTimePicker.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function()
    {
      $('#basic').calendar();
      $('#glob-data').calendar(
      {
        unavailable: ['*-*-8', '*-*-10']
      });
    });
    </script>

  </body>
</html>
<?php
$message="thank you "
function do() {

  echo "<script type='text/javascript'>alert('$message');</script>";

}

?>
