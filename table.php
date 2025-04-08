
<!-- =========================================================
* Paper Dashboard - v1.2.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE.md)

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Paper Dashboard by Creative Tim</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/paper-dashboard"/>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  
  <!-- Animation library for notifications -->
  <link href="assets/css/animate.min.css" rel="stylesheet"/>

  <!--  CSS for Demo Purpose, don't include it in your project     -->
  <link href="assets/css/paper-dashboard.css" rel="stylesheet" />
  <link href="assets/css/demo.css" rel="stylesheet"/>


 <!--  Fonts and icons     -->
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
 <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" href="assets/css/themify-icons.css">

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
          new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
  <!-- End Google Tag Manager -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="wrapper">
  <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    <div class="sidebar-wrapper">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text">
          Creative Tim
        </a>
      </div>

      <ul class="nav">
        <li>
          <a href="dashboard.php">
            <i class="ti-panel"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li>
          <a href="user.php">
            <i class="ti-user"></i>
            <p>User Profile</p>
          </a>
        </li>
        <li class="active">
          <a href="table.php">
            <i class="ti-view-list-alt"></i>
            <p>Table List</p>
          </a>
        </li>
        <li>
          <a href="typography.php">
            <i class="ti-text"></i>
            <p>Typography</p>
          </a>
        </li>
        <li>
          <a href="icons.php">
            <i class="ti-pencil-alt2"></i>
            <p>Icons</p>
          </a>
        </li>
        <li>
          <a href="maps.php">
            <i class="ti-map"></i>
            <p>Maps</p>
          </a>
        </li>
        <li>
          <a href="notifications.php">
            <i class="ti-bell"></i>
            <p>Notifications</p>
          </a>
        </li>
        <li class="active-pro">
          <a href="upgrade.html">
            <i class="ti-export"></i>
            <p>Upgrade to PRO</p>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="main-panel">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar bar1"></span>
            <span class="icon-bar bar2"></span>
            <span class="icon-bar bar3"></span>
          </button>
          <a class="navbar-brand" href="#">Table List</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="ti-panel"></i>
                <p>Stats</p>
              </a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="ti-bell"></i>
                <p class="notification">5</p>
                <p>Notifications</p>
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#">Notification 1</a></li>
                <li><a href="#">Notification 2</a></li>
                <li><a href="#">Notification 3</a></li>
                <li><a href="#">Notification 4</a></li>
                <li><a href="#">Another notification</a></li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class="ti-settings"></i>
                <p>Settings</p>
              </a>
            </li>
          </ul>

        </div>
      </div>
    </nav>


    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="header">
                <h4 class="title">Striped Table</h4>
                <p class="category">Here is a subtitle for this table</p>
              </div>
              <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                  <thead>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Salary</th>
                  <th>Country</th>
                  <th>City</th>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Dakota Rice</td>
                    <td>$36,738</td>
                    <td>Niger</td>
                    <td>Oud-Turnhout</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Minerva Hooper</td>
                    <td>$23,789</td>
                    <td>Curaçao</td>
                    <td>Sinaai-Waas</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Sage Rodriguez</td>
                    <td>$56,142</td>
                    <td>Netherlands</td>
                    <td>Baileux</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Philip Chaney</td>
                    <td>$38,735</td>
                    <td>Korea, South</td>
                    <td>Overland Park</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Doris Greene</td>
                    <td>$63,542</td>
                    <td>Malawi</td>
                    <td>Feldkirchen in Kärnten</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Mason Porter</td>
                    <td>$78,615</td>
                    <td>Chile</td>
                    <td>Gloucester</td>
                  </tr>
                  </tbody>
                </table>

              </div>
            </div>
          </div>


          <div class="col-md-12">
            <div class="card card-plain">
              <div class="header">
                <h4 class="title">Table on Plain Background</h4>
                <p class="category">Here is a subtitle for this table</p>
              </div>
              <div class="content table-responsive table-full-width">
                <table class="table table-hover">
                  <thead>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Salary</th>
                  <th>Country</th>
                  <th>City</th>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>Dakota Rice</td>
                    <td>$36,738</td>
                    <td>Niger</td>
                    <td>Oud-Turnhout</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Minerva Hooper</td>
                    <td>$23,789</td>
                    <td>Curaçao</td>
                    <td>Sinaai-Waas</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Sage Rodriguez</td>
                    <td>$56,142</td>
                    <td>Netherlands</td>
                    <td>Baileux</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Philip Chaney</td>
                    <td>$38,735</td>
                    <td>Korea, South</td>
                    <td>Overland Park</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Doris Greene</td>
                    <td>$63,542</td>
                    <td>Malawi</td>
                    <td>Feldkirchen in Kärnten</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Mason Porter</td>
                    <td>$78,615</td>
                    <td>Chile</td>
                    <td>Gloucester</td>
                  </tr>
                  </tbody>
                </table>

              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

    <footer class="footer">
      <div class="container-fluid">
        <nav class="pull-left">
          <ul>

            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/blog">
                Blog
              </a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/license">
                Licenses
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright pull-right">
          &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="https://www.creative-tim.com">Creative Tim</a>
        </div>
      </div>
    </footer>


  </div>
</div>


<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"92c74c3ca851ce49","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.3.0","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>
</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<script src="assets/js/jquery.sharrre.js"></script>

<script>
    // Facebook Pixel Code Don't Delete
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','//connect.facebook.net/en_US/fbevents.js');

    try{
        fbq('init', '111649226022273');
        fbq('track', "PageView");

    }catch(err) {
        console.log('Facebook Track Error:', err);
    }
</script>
<noscript>
  <img height="1" width="1" style="display:none"
       src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1"
    />
</noscript>

</html>
