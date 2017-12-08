<?php

include 'config.php';
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8');
$result=mysql_query("SELECT * FROM `patients`");
while($row=mysql_fetch_array($result))
{?>

<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>Profile</title>
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
          <nav class="w-nav-menu nav-menu" role="navigation">
            <div class="nav-menu-header">
              <div class="logo">Washington</div>
              <div class="slogan">All you need is here.</div>
            </div>
            <a class="w-clearfix w-inline-block nav-menu-link" href="index.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-home-outline"></div>
              </div>
              <div class="nav-menu-titles">Splash Screen</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="login.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-download-outline"></div>
              </div>
              <div class="nav-menu-titles">Login</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="signup.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-cloud-upload-outline"></div>
              </div>
              <div class="nav-menu-titles">Sign Up</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="forgot.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-unlocked-outline"></div>
              </div>
              <div class="nav-menu-titles">Remember Password</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="todo-list.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-list-outline"></div>
              </div>
              <div class="nav-menu-titles">To Do List</div>
              <div class="nav-menu-text-right">8</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="addnew.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-checkmark-outline"></div>
              </div>
              <div class="nav-menu-titles">New To Do</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="messages.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-albums-outline"></div>
              </div>
              <div class="nav-menu-titles">Messages</div>
              <div class="nav-menu-text-right">8</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="chat.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-chatboxes-outline"></div>
              </div>
              <div class="nav-menu-titles">Chat</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="groups.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-keypad-outline"></div>
              </div>
              <div class="nav-menu-titles">News Groups</div>
              <div class="nav-menu-text-right">12</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="news.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-paper-outline"></div>
              </div>
              <div class="nav-menu-titles">News List</div>
              <div class="nav-menu-text-right">14</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="newitem.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-compose-outline"></div>
              </div>
              <div class="nav-menu-titles">News Post</div>
              <div class="nav-menu-text-right">14</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="about-us.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-person-outline"></div>
              </div>
              <div class="nav-menu-titles">About the App</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="maps.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-location-outline"></div>
              </div>
              <div class="nav-menu-titles">Maps</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="elements.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-box-outline"></div>
              </div>
              <div class="nav-menu-titles">Elements</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link" href="settings.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-gear-outline"></div>
              </div>
              <div class="nav-menu-titles">Settings</div>
            </a>
            <a class="w-clearfix w-inline-block nav-menu-link last" href="terms.html" data-load="1">
              <div class="icon-list-menu">
                <div class="icon ion-ios-bookmarks-outline"></div>
              </div>
              <div class="nav-menu-titles">Terms and Conditions</div>
            </a>
            <div class="separator-bottom"></div>
            <div class="separator-bottom"></div>
            <div class="separator-bottom"></div>
          </nav>
          <div class="wrapper-mask" data-ix="menu-mask"></div>
          <div class="navbar-title">PROFILE</div>
          <div class="w-nav-button navbar-button left" id="menu-button" data-ix="hide-navbar-icons">
            <div class="navbar-button-icon home-icon">
              <div class="bar-home-icon"></div>
              <div class="bar-home-icon"></div>
              <div class="bar-home-icon"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="body padding">
        <div class="logo-login smaller"></div>
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form" action="#">
            <div>
              <label class="label-form" for="recoredno-field">MEDICAL RECORED NO.</label>
              <input class="w-input input-form" id="recoredno-field" type="number" name="recoredno" data-name="recoredno" required="required" value="<?php echo $row["medical_record_NO"];?>">
              <div class="separator-fields"></div>
            </div>
            <div>
              <label class="label-form" for="full-name-field">FULL NAME</label>
              <input class="w-input input-form" id="full-name-field" type="text" name="full-name" data-name="full-name" required="required"value="<?php echo $row["patient_name"];?>">
              <div class="separator-fields"></div>
            </div>
            <div>
              <label class="label-form" for="phone-field">PHONE</label>
              <input class="w-input input-form" id="phone-field" type="number" name="phone" data-name="phone" required="required"value="<?php echo $row["Patient_phone"];?>">
              <div class="separator-fields"></div>
            </div>
            <div>
              <label class="label-form" for="birthday-field">BIRTHDAY</label>
              <input class="w-input input-form" id="birthday-field" type="text" name="birthday" data-name="birthday" required="required"value="<?php echo $row["birthday"];?>">
              <div class="separator-fields"></div>
            </div>
            <div>
              <label class="label-form" for="duedate-field">EXPECTED DATE OF BIRTH</label>
              <input class="w-input input-form" id="duedate-field" type="text" name="duedate" data-name="duedate" required="required"value="<?php echo $row["expected_do"];?>">
              <div class="separator-fields"></div>
            </div>
            <div>
              <label class="label-form" for="baby-Name-field">MY BABY'S NAME</label>
              <input class="w-input input-form" id="baby-Name-field" type="text" name="baby-Name" data-name="baby-Name" required="required"value="<?php echo $row["baby_name"];?>">
              <div class="separator-fields"></div>
            </div>
            <div>
              <div class="w-clearfix input-form one-line">
                <label class="label-form middle" for="email">GENDER</label>
                <div class="w-clearfix radios-container">
                  <div class="w-radio w-clearfix radio-button">
                    <div class="radio-bullet-replacement "></div>
                    <input class="w-radio-input radio-bullet" id="node" type="radio" name="Radio1" value="1" data-name="Radio1">
                    <label class="w-form-label" for="node">BOY</label>
                  </div>
                  <div class="w-radio w-clearfix radio-button">
                    <div class="radio-bullet-replacement girl  ckecked"></div>
                    <input class="w-radio-input radio-bullet" id="node-2" type="radio" name="Radio1" value="0" data-name="Radio1">
                    <label class="w-form-label" for="node-2">GIRL</label>
                  </div>
                  <div class="w-radio w-clearfix radio-button">
                    <div class="radio-bullet-replacement twins "></div>
                    <input class="w-radio-input radio-bullet" id="node-2" type="radio" name="Radio1" value="0" data-name="Radio1">
                    <label class="w-form-label" for="node-2">TWINS</label>
                  </div>
                </div>
              </div>
              <div class="separator-fields"></div>
            </div>
            <div>
              <label class="label-form" for="email-field">EMAIL</label>
              <input class="w-input input-form" id="email-field" type="email" name="email" data-name="email" required="required"value="<?php echo $row["email"];?>">
              <div class="separator-fields"></div>
            </div>
            <div>
              <label class="label-form" for="password-ield">PASSWORD</label>
              <input class="w-input input-form" id="password-ield" type="password" name="password" data-name="password" required="required"value="<?php echo $row["password"];?>">
              <div class="separator-fields"></div>
            </div>

            <div>
              <div class="w-clearfix input-form one-line">
                <label class="label-form middle" for="email">NOTIFICATIONS</label>
                <div class="w-clearfix radios-container">
                  <div class="w-checkbox w-clearfix checkbox-field">
                    <div class="checkbox-handle"></div>
                    <input class="w-checkbox-input checkbox-input" id="checkbox" type="checkbox" name="checkbox" data-name="Checkbox">
                    <label class="w-form-label checkbox-label" for="checkbox"></label>
                  </div>
                </div>
              </div>
              <div class="separator-fields"></div>
            </div>
              <?php }?>
            <div>
              <div class="w-clearfix input-form one-line last">
                <label class="label-form middle" for="email">UPDATES</label>
                <div class="w-clearfix radios-container">
                  <div class="w-checkbox w-clearfix checkbox-field">
                    <div class="checkbox-handle checked"></div>
                    <input class="w-checkbox-input checkbox-input" id="checkbox-2" type="checkbox" name="checkbox-2" data-name="Checkbox 2" checked="checked">
                    <label class="w-form-label checkbox-label checked" for="checkbox-2"></label>
                  </div>
                </div>
              </div>
              <div class="separator-fields"></div>
            </div>
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
