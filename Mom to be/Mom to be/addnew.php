
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>Medecine</title>
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
  <link rel="shortcut icon" type="image/x-icon" href="images/w.png">
  <link rel="apple-touch-icon" href="images/w.png">

  <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <section class="w-section mobile-wrapper">

    <div class="page-content" id="main-stack">
      <div class="w-nav navbar" data-collapse="all" data-animation="over-left" data-duration="400" data-contain="1" data-easing="ease-out-quint" data-no-scroll="1">
        <div class="w-container">
          <div class="wrapper-mask" data-ix="menu-mask"></div>
          <div class="navbar-title">Add New Medecine</div>
          <a class="w-inline-block navbar-button right bigger" href="todo-list.html" data-load="1">
            <div class="navbar-button-icon icon ion-ios-checkmark-empty"></div>
          </a>
          <a class="w-inline-block navbar-button" href="todo-list.html" data-load="1">
            <div class="navbar-button-icon icon ion-ios-close-empty"></div>
          </a>
        </div>
      </div>
      <div class="body padding">
        <div class="w-form">
          <form id="email-form" name="email-form" method="post" action="test.php">
            <div class="separator-fields"></div>
            <div class="separator-fields"></div>
            <div class="background-grey"></div>
            <div class="row-input-list">
              <label class="label-form" for="title">MEDECINE NAME</label>
              <input class="w-input input-form in-grey" id="title" type="text" name="title"  required="required">
              <div class="separator-fields"></div>
            </div>
            <div class="background-grey last"></div>
            <div class="row-input-list">
              <label class="label-form" for="description-2">DESCRIPTION</label>
              <input class="w-input input-form in-grey-last" id="description-2" type="text" name="description"  required="required">
              <div class="separator-fields"></div>
            </div>
            <div class="row-input-list">
              <label class="label-form" for="birthday-field">START DATE</label>
              <input class="w-input input-form" id="medecine-field" type="date" name="startday"  required="required">
              <div class="separator-fields"></div>
            </div>
            <div class="w-clearfix">
              <div class="row-input-list w50">
                <label class="label-form" for="birthday-field">DURATION</label>
                <input class="w-input input-form" id="birthday-field" type="text" name="duration" required="required">
                <div class="separator-fields"></div>
              </div>
              <div class="row-input-list w50 left">
                <label class="label-form" for="birthday-field">TIME</label>
                <input class="w-input input-form" id="medecine-field" type="time" name="time"  required="required">
                <div class="separator-fields"></div>
              </div>
            </div>
            <div class="row-input-list">
                <label class="label-form middle" for="email">TIMES A DAY </label>
                <div class="w-clearfix radios-container">
                  <div class="w-radio w-clearfix radio-button">
                    <div class="radio-bullet-replacement girl"></div>
                    <input class="w-radio-input radio-bullet" id="node-9" type="radio" name="q1" value="1" data-name="Radio3">
                    <label class="w-form-label" for="node-9">3</label>
                  </div>
                  <div class="w-radio w-clearfix radio-button">
                    <div class="radio-bullet-replacement girl checked"></div>
                    <input class="w-radio-input radio-bullet" id="node-6" type="radio" name="q1" value="2" data-name="Radio3">
                    <label class="w-form-label" for="node-6">2</label>
                  </div>
                  <div class="w-radio w-clearfix radio-button">
                    <div class="radio-bullet-replacement girl "></div>
                    <input class="w-radio-input radio-bullet" id="node-5" type="radio" name="q1" value="3" data-name="Radio3">
                    <label class="w-form-label" for="node-5">1</label>
                  </div>
                </div>
              </div>
              <div class="separator-fields"></div>
            </div>
            <div class="row-input-list">
              <div class="w-clearfix input-form one-line">
                <label class="label-form middle" for="email">EVREY</label>
                <div class="w-clearfix radios-container">
                  <div class="w-radio w-clearfix radio-button">
                    <div class="radio-bullet-replacement girl"></div>
                    <input class="w-radio-input radio-bullet" id="node-9" type="radio" name="q2" value="12 H"data-name="Radio3">
                    <label class="w-form-label" for="node-9">12 H</label>
                  </div>
                  <div class="w-radio w-clearfix radio-button">
                    <div class="radio-bullet-replacement girl checked"></div>
                    <input class="w-radio-input radio-bullet" id="node-6" type="radio" name="q2" value="8 H" data-name="Radio3">
                    <label class="w-form-label" for="node-6">8 H</label>
                  </div>
                  <div class="w-radio w-clearfix radio-button">
                    <div class="radio-bullet-replacement girl "></div>
                    <input class="w-radio-input radio-bullet" id="node-5" type="radio" name="q2" value="6 H" data-name="Radio3">
                    <label class="w-form-label" for="node-5">6 H</label>
                  </div>
                </div>
              </div>
              <div class="separator-fields"></div>
            </div>
            <div class="row-input-list">
              <div class="separator-fields"></div>
            </div>
              <div class="w-clearfix input-form one-line last">
                <label class="label-form middle" for="email">REPEAT</label>
                <div class="w-clearfix radios-container">
                  <div class="w-checkbox w-clearfix checkbox-field">
                    <div class="checkbox-handle"></div>
                    <input class="w-checkbox-input checkbox-input" id="checkbox-2" type="checkbox" name="checkbox-2" data-name="Checkbox 2">
                    <label class="w-form-label checkbox-label" for="checkbox-2"></label>
                  </div>
                </div>
              </div>
              <div class="separator-fields"></div>
            </div>
            <input type="submit" class="navbar-button-icon icon ion-ios-checkmark-empty">
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
