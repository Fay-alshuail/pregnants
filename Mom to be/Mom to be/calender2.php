<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>Appointment Booking</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/framework.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="js/webfont.js"></script>
  <script>
    WebFont.load({
      google: {
        families: ["Montserrat:400,700"]
      }
    });
  </script>
  <script>
function goBack() {
    window.history.back()
}
</script>
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/logoStandford32.ico">
  <link rel="apple-touch-icon" href="images/logoStandford32.ico">

  <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <section class="w-section mobile-wrapper">

    <div class="page-content" id="main-stack">
      <div class="w-nav navbar" data-collapse="all" data-animation="over-left" data-duration="400" data-contain="1" data-no-scroll="1" data-easing="ease-out-quint">
        <div class="w-container">

          <div class="wrapper-mask" data-ix="menu-mask"></div>
          <a class="w-inline-block navbar-button"  onclick="goBack()" data-load="1">
            <div class="navbar-button-icon icon ion-ios-arrow-thin-left"></div>
          </a>
        </div>
          </div>
        </div>
      </div>
      <div class="body">
        <div class="news-container item-new">
          <div>
            <div class="grey-header">
              <h2 class="grey-heading-title">Appointment Booking</h2>
            </div>


  <form method="post" action="calender.php" >
    <div class="container">
      <div class="row">
        <div class="col-xss-4">
          <div id="glob-data" data-toggle="calendar"></div>
          <br>
          <input class="w-button action-button" type="submit" value="send" data-wait="Please wait...">
        </div>
        <div class="col-xss-8">

        </div>

      </div>

  </form>

      </div>
          </div>
      </div>
    </div>

  </section>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/dateTimePicker.min.js"></script>
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
