<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title>Login</title>
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
  <script type="text/javascript" src="js/modernizr.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="images/W.png">
  <link rel="apple-touch-icon" href="images/W.png">

  <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <section class="w-section mobile-wrapper">

    <div class="page-content" id="main-stack" data-scroll="0">
      <div class="w-nav navbar"></div>
      <div class="body padding">
        <div class="logo-login"></div>
        <div class="bottom-section padding">
          <div class="w-form">
            <form  action="wlogcheck.php" method="post" >
              <div>
                <label class="label-form" for="Nid-field">USERNAME</label>
                <input class="w-input input-form" id="Nid-field" type="number" name="username" data-name="Nid" required="required">
                <div class="separator-fields"></div>
              </div>
              <div>
                <label class="label-form" for="Nid">PASSWORD</label>
                <div class="w-clearfix block-input-combined">
                  <input class="w-input input-form left" id="password-field" type="password"name="password" data-name="password" required="required"><a class="right-input-link" href="forgot.html" data-load="1">Forgot Password</a>
                </div>
                <div class="separator-button-input"></div>
              </div>
              <input class="w-button action-button" type="submit" value="Sign In" data-wait="Please wait...">
              <div class="separator-button"></div><a class="link-upper" data-load="1">© 2017 W-Hospital <strong>!</strong></a>
            </form>
            <div class="w-form-done">
              <p>Thank you! Your submission has been received!</p>
            </div>
            <div class="w-form-fail">
              <p>Oops! Something went wrong while submitting the form</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page-content loading-mask" id="new-stack">
      <div class="loading-icon">
        <div class="navbar-button-icon icon ion-load-d"></div>
      </div>
    </div>
    <div class="shadow-layer"></div>
  </section>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/framework.js"></script>
  <!--[if lte IE 9]><script src="js/placeholders.min.js"></script><![endif]-->
</body>
</html>
