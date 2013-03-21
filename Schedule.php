
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <title>6th  Atlantic Paddling Symposium - Schedule</title>

    <link rel="stylesheet" href="css/menu.css" type="text/css" />
    <script src="js/jquery/jquery-1.6.1.min.js" type="text/javascript"></script>
    <script src="js/apstemplate.js" type="text/javascript"></script>
    <script src="js/schedule.js" type="text/javascript"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
    <link rel="stylesheet" href="css/schedule.css" />
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" media="screen,print" href="css/aps.css" />
    <!--[if lt IE 8]><link rel='stylesheet' type='text/css' media='screen,print' href='Home_files/HomeIE.css'/><![endif]-->
    <!--[if gte IE 8]><link rel='stylesheet' type='text/css' media='screen,print' href='Media/IE8.css'/><![endif]-->
    <script>
      $(function() {
        $( "#tabs" ).tabs();
      });
    </script>
  </head>

  <body style="background: rgb(255, 255, 255) url(Home_files/abg.jpg) " >
    <div style="text-align: center; ">
      <div id="body_content">
        <div  id="navbar"> </div>

        <div id="logo_layer">
          <hr />
          <img src="logos/APS2013.png" alt="" style="border: none; height: 140px;  " />
          <hr />
        </div>

        <div id="discipline_buttons">
          <button style="color:white; background-color:#00628b; font-weight:bold;"target="all" class="session_select">All Programs</button>
          <button target="seakayak" class="session_select">Sea Kayak Sessions</button>
          <button target="canoe" class="session_select">Canoe Sessions</button>
          <button target="ww_sup" class="session_select">White Water/SUP Sessions</button>
          <button target="family" class="session_select">Family Activities</button>
        </div>

        <div style="margin-left: 0px; position: relative; padding:2%; " id="body_layer">
          <div id="tabs" style ="padding:0; margin:2">
            <ul>
              <li class="day_select"><a href="#tabs-1">Friday</a></li>
              <li class="day_select"><a href="#tabs-2">Saturday</a></li>
              <li class="day_select"><a href="#tabs-3">Sunday</a></li>
              <li class="day_select"><a href="#tabs-4">Monday</a></li>
            </ul>
            <div id="tabs-1"> <?php include('ScheduleSnippets/Friday.php'); ?></div>
            <div id="tabs-2"><?php include('ScheduleSnippets/Saturday.php'); ?></div>
            <div id="tabs-3"> <?php include('ScheduleSnippets/Sunday.php'); ?></div>
            <div id="tabs-4"><?php include('ScheduleSnippets/Monday.php'); ?></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>


