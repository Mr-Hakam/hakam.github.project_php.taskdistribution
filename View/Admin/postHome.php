<?php
session_start();
$message="";
if($_SESSION['id']==NULL){
    header('Location:index.php');
}


if(isset($_GET['logout'])){
    require_once '../../method/login.php';
    $login=new login();
    $login->logoutdiv();
}

if(isset($_POST['btn'])){
    require_once '../../method/SaveCommonHomeContent.php';
    $postc = new SaveCommonHomeContent();
    $message = $postc->save_Common_home_content($_POST);
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="../../Bootstrap/AdminBootstrap/img/favicon.png">

  <title>Admin|Home</title>

  <!-- Bootstrap CSS -->
  <link href="../../Bootstrap/AdminBootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../../Bootstrap/AdminBootstrap/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../../Bootstrap/AdminBootstrap/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../../Bootstrap/AdminBootstrap/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="../../Bootstrap/AdminBootstrap/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="../../Bootstrap/AdminBootstrap/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="../../Bootstrap/AdminBootstrap/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="../../Bootstrap/AdminBootstrap/css/owl.carousel.css" type="text/css">
  <link href="../../Bootstrap/AdminBootstrap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="../../Bootstrap/AdminBootstrap/css/fullcalendar.css">
  <link href="../../Bootstrap/AdminBootstrap/css/widgets.css" rel="stylesheet">
  <link href="../../Bootstrap/AdminBootstrap/css/style.css" rel="stylesheet">
  <link href="../../Bootstrap/AdminBootstrap/css/style-responsive.css" rel="stylesheet" />
  <link href="../../Bootstrap/AdminBootstrap/css/xcharts.min.css" rel=" stylesheet">
  <link href="../../Bootstrap/AdminBootstrap/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="#" class="logo">Nice <span class="lite">Admin</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
          <li>
            <form class="navbar-form">
              <input class="form-control" placeholder="Search" type="text">
            </form>
          </li>
        </ul>
        <!--  search form end -->
      </div>
<a href="#" class="logo">Hakam <span class="lite">Information Technology</span></a>
      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
          
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="image/me01.jpg">
                            </span>
                <span class="username"><strong><?php echo $_SESSION['name']; ?></strong></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> My Profile</a>
              </li>
              <li>
                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
              </li>
              <li>
                <a href="#"><i class="icon_clock_alt"></i> Timeline</a>
              </li>
              <li>
                <a href="#"><i class="icon_chat_alt"></i> Chats</a>
              </li>
              <li>
                  <a href="?logout=logout"><i class="icon_key_alt"></i> Log Out</a>
              </li>
              <li>
                <a href="#"><i class="icon_key_alt"></i> Documentation</a>
              </li>
              <li>
                <a href="#"><i class="icon_key_alt"></i> Documentation</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
              <a class="" href="../../admin_home.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Task Distribution</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
                <li><a class="" href="newTaskDistribution.php">New Distribution</a></li>
                <li><a class="" href="total_distribution.php">Total Distributed</a></li>
                <li><a class="" href="PendingJob_taskDistribution.php">Pending For Me</a></li>
                <li><a class="" href="pendingToOthers.php">Pending To Others</a></li>
                <li><a class="" href="done.php">Done</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fa fa-usd"></i>
                          <span>Salary</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
                <li><a class="" href="salary.php">Salary</a></li>
                <li><a class="" href="Bonus.php">Bonus</a></li>
            </ul>
          </li>
          <li>
              <a class="" href="employee_list.php">
                          <i class="fa fa-list-alt"></i>
                          <span>Employee List</span>
                      </a>
          </li>
          <li>
              <a class="" href="registration.php">
                          <i class="fa fa-plus-square"></i>
                          <span>Registration</span>

                      </a>

          </li>
          <li class="sub-menu">
              <a href="javascript:;" class="">
                  <i class="fa fa-circle-o-notch"></i>
                  <span>Post</span>
                  <span class="menu-arrow arrow_carrot-right"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="postHome.php">Post to Home</a></li>
                      <li><a class="" href="postNoticeBoard.php">Post to Notice Board</a></li>
                  </ul>
          </li>
          <li class="sub-menu">
              <a href="javascript:;" class="">
                  <i class="fa fa-eye"></i>
                  <span>View</span>
                  <span class="menu-arrow arrow_carrot-right"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="viewCommonPost.php">View common post</a></li>
                      <li><a class="" href="viewNoticeBoard.php">View Notice Board</a></li>
                  </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fa fa-h-square"></i>
                          <span>Help Desk</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
                <li><a class="" href="helpDesk.php">Help Desk</a></li>
                <li><a class="" href="complain.php">Complain</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="fa fa-thumbs-o-up"></i>
                          <span>Rating</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
                <li><a class="" href="Rating_timing.php">Timing</a></li>
                <li><a class="" href="Rating_Quality.php"><span>Quality</span></a></li>
                <li><a class="" href="Rating_Ethic.php"><span>Ethic</span></a></li>
            </ul>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i>Post to Home</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="#">Home</a></li>
              <li><i class="fa fa-laptop"></i><a href="#">Post</a></li>
              <li><i class="fa fa-laptop"></i>Post to Home</li>
            </ol>
          </div>
        </div>

        

        <!-- Today status end -->
        <div class="container">
            <div class="row">
                <h3 class="text-center text-success"><?php echo $message;?></h3>
                <div class="well">
                    <h3 class="text-center text-info"><strong>Post To Common<span style="color: sandybrown;"> Home </span>Page</strong></h3>
                    <form class="form-horizontal" action="" method="POST">
                        <div class="form-group">
                            <label class="control-label col-md-3">Title:</label>
                            <div class="col-md-9">
                                <input type="text" name="title" required="" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Sub-title:</label>
                            <div class="col-md-9">
                                <input type="text" name="subtitle" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Details:</label>
                            <div class="col-md-9">
                                <textarea class="form-control" rows="5" name="details" required="">
                                    
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-offset-9">
                                <button type="submit" name="btn" class="btn btn-success btn-block">Post to Home</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        

        
      </section>
      <div class="text-right">
        <div class="credits">
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="../../Bootstrap/AdminBootstrap/js/jquery.js"></script>
  <script src="../../Bootstrap/AdminBootstrap/js/jquery-ui-1.10.4.min.js"></script>
  <script src="../../Bootstrap/AdminBootstrap/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="../../Bootstrap/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="../../Bootstrap/AdminBootstrap/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="../../Bootstrap/AdminBootstrap/js/jquery.scrollTo.min.js"></script>
  <script src="../../Bootstrap/AdminBootstrap/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="../../Bootstrap/AdminBootstrap/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="../../Bootstrap/AdminBootstrap/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="../../Bootstrap/AdminBootstrap/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="../../Bootstrap/AdminBootstrap/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="../../Bootstrap/AdminBootstrap/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="../../Bootstrap/AdminBootstrap/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="../../Bootstrap/AdminBootstrap/js/calendar-custom.js"></script>
    <script src="../../Bootstrap/AdminBootstrap/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="../../Bootstrap/AdminBootstrap/js/jquery.customSelect.min.js"></script>
    <script src="../../Bootstrap/AdminBootstrap/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="../../Bootstrap/AdminBootstrap/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="../../Bootstrap/AdminBootstrap/js/sparkline-chart.js"></script>
    <script src="../../Bootstrap/AdminBootstrap/js/easy-pie-chart.js"></script>
    <script src="../../Bootstrap/AdminBootstrap/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../../Bootstrap/AdminBootstrap/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../Bootstrap/AdminBootstrap/js/xcharts.min.js"></script>
    <script src="../../Bootstrap/AdminBootstrap/js/jquery.autosize.min.js"></script>
    <script src="../../Bootstrap/AdminBootstrap/js/jquery.placeholder.min.js"></script>
    <script src="../../Bootstrap/AdminBootstrap/js/gdp-data.js"></script>
    <script src="../../Bootstrap/AdminBootstrap/js/morris.min.js"></script>
    <script src="../../Bootstrap/AdminBootstrap/js/sparklines.js"></script>
    <script src="../../Bootstrap/AdminBootstrap/js/charts.js"></script>
    <script src="../../Bootstrap/AdminBootstrap/js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>



