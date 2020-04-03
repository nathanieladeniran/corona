
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 CORONAVIRUS OUTBREAK DASHBOARD</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <!-- you need to include the shieldui css and js assets in order for the charts to work -->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
    <link id="gridcss" rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/dark-bootstrap/all.min.css" />

    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
    <script type="text/javascript" src="http://www.prepbootstrap.com/Content/js/gridData.js"></script>
</head>
<body>
    <div id="wrapper">
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><i class="fa fa-bar-chart-o"></i>Report Board</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul id="active" class="nav navbar-nav side-nav">
                    <li class="selected"><a href="index.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <!--li><a href="portfolio.html"><i class="fa fa-tasks"></i> Portfolio</a></li>
                    <li><a href="blog.html"><i class="fa fa-globe"></i> Blog</a></li>
                    <li><a href="signup.html"><i class="fa fa-list-ol"></i> SignUp</a></li>
                    <li><a href="register.html"><i class="fa fa-font"></i> Register</a></li>
                    <li><a href="timeline.html"><i class="fa fa-font"></i> Timeline</a></li>
                    <li><a href="forms.html"><i class="fa fa-list-ol"></i> Forms</a></li>
                    <li><a href="typography.html"><i class="fa fa-font"></i> Typography</a></li>
                    <li><a href="bootstrap-elements.html"><i class="fa fa-list-ul"></i> Bootstrap Elements</a></li>
                    <li><a href="bootstrap-grid.html"><i class="fa fa-table"></i> Bootstrap Grid</a></li-->
                </ul>
                <!--ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Messages <span class="badge">2</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">2 New Messages</li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li class="message-preview">
                                <a href="#">
                                    <span class="avatar"><i class="fa fa-bell"></i></span>
                                    <span class="message">Security alert</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Go to Inbox <span class="badge">2</span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Steve Miller<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>

                        </ul>
                    </li>
                    <<li class="divider-vertical"></li>
                    <li>
                        <form class="navbar-search">
                            <input type="text" placeholder="Search" class="form-control">
                        </form>
                    </li>
                </ul-->
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Dashboard <small>Statistics and more</small></h1>
                    <div class="alert alert-dismissable alert-warning">
                        <button data-dismiss="alert" class="close" type="button">&times;</button>
                        Welcome to the COVID-19 dashboard! All the figures you need are here. 
                        <br />
                        This dashboard is regularly updated with data from the WHO.  <!--<a href="https://www.shieldui.com">ShieldUI</a>--> The coronavirus COVID-19 has been confirmed in 110 countries and territories around the world and 1 international conveyance (the Diamond Princess cruise ship harboured in Yokohama, Japan).
                    </div>
                </div>
            </div>
            <!--div class="row">
                <div class="col-md-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Visits Based on a 10 days data</h3>
                        </div>
                        <div class="panel-body">
                            <div id="shieldui-chart1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-rss"></i> Feed</h3>
                        </div>
                        <div class="panel-body feed">
                            <section class="feed-item">
                                <div class="icon pull-left">
                                    <i class="fa fa-comment"></i>
                                </div>
                                <div class="feed-item-body">
                                    <div class="text">
                                        <a href="#">John Doe</a> commented on <a href="#">What Makes Good Code Good</a>.
                                    </div>
                                    <div class="time pull-left">
                                        3 h
                                    </div>
                                </div>
                            </section>
                            <section class="feed-item">
                                <div class="icon pull-left">
                                    <i class="fa fa-check"></i>
                                </div>
                                <div class="feed-item-body">
                                    <div class="text">
                                        <a href="#">Merge request #42</a> has been approved by <a href="#">Jessica Lori</a>.
                                    </div>
                                    <div class="time pull-left">
                                        10 h
                                    </div>
                                </div>
                            </section>
                            <section class="feed-item">
                                <div class="icon pull-left">
                                    <i class="fa fa-plus-square-o"></i>
                                </div>
                                <div class="feed-item-body">
                                    <div class="text">
                                        New user <a href="#">Greg Wilson</a> registered.
                                    </div>
                                    <div class="time pull-left">
                                        Today
                                    </div>
                                </div>
                            </section>
                            <section class="feed-item">
                                <div class="icon pull-left">
                                    <i class="fa fa-bolt"></i>
                                </div>
                                <div class="feed-item-body">
                                    <div class="text">
                                        Server fail level raises above normal. <a href="#">See logs</a> for details.
                                    </div>
                                    <div class="time pull-left">
                                        Yesterday
                                    </div>
                                </div>
                            </section>
                            <section class="feed-item">
                                <div class="icon pull-left">
                                    <i class="fa fa-archive"></i>
                                </div>
                                <div class="feed-item-body">
                                    <div class="text">
                                        <a href="#">Database usage report</a> is ready.
                                    </div>
                                    <div class="time pull-left">
                                        Yesterday
                                    </div>
                                </div>
                            </section>
                            <section class="feed-item">
                                <div class="icon pull-left">
                                    <i class="fa fa-shopping-cart"></i>
                                </div>
                                <div class="feed-item-body">
                                    <div class="text">
                                        <a href="#">Order #233985</a> needs additional processing.
                                    </div>
                                    <div class="time pull-left">
                                        Wednesday
                                    </div>
                                </div>
                            </section>
                            <section class="feed-item">
                                <div class="icon pull-left">
                                    <i class="fa fa-arrow-down"></i>
                                </div>
                                <div class="feed-item-body">
                                    <div class="text">
                                        <a href="#">Load more...</a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div-->
             <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Nigeria: Confirmed Cases, Recoveries and Deaths by State and Geopolitical Zone
 </h3>
                        </div>
                        <div class="panel-body">
                           <?php
                                $api_url = 'https://2019ncov.asia/api/country_region';

                                // Read JSON file
                                $json_data = file_get_contents($api_url);
                                $data = json_decode($json_data,true);
                               // var_dump($data)
                                print_r(each($data[1]));
                          //     $allKeys = array_keys($data);
                        //        echo $allKeys[0];

                             $data=   $data[1]['results'];
                            foreach($data as $x=>$x_value)
                                      {
                                      echo "Key=" . $x . ", Value=" . $x_value;
                                      echo "<br>";
                                      }
                                ?>

                                    <table class="table table-bordered">
                                  <tbody>
                                    <tr>                                     
                                      <td>Confirmed</td>
                                      <td><?php print_r ($data[1]['results'][73]['confirmed']) ?></td>                                  
                                    </tr>
                                    <tr>
                                      <td>Deaths</td>
                                      <td><?php print_r ($data[1]['results'][73]['deaths']) ?></td>                                  
                                    </tr>
                                    <tr>
                                      <td>Recovered</td>
                                      <td><?php print_r ($data[1]['results'][73]['recovered']) ?></td>                                  
                                    </tr>
                                  </tbody>

                                   </table>

                               
                                 
                             
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Confirmed Cases, Recoveries and Deaths by Country, Territory, or Conveyance
 </h3>
                        </div>
                        <div class="panel-body">                            <!--div id="shieldui-grid1"></div-->
                            
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th scope="col">Country/Conveyance</th>
                                  <th scope="col">Confirmed cases</th>
                                  <th scope="col">Deaths</th>
                                  <th scope="col">Recovered</th>
                                </tr>
                              </thead>
                              <?php
                                $api_url = 'https://2019ncov.asia/api/country_region';

                                // Read JSON file
                                $json_data = file_get_contents($api_url);
                                $data = json_decode($json_data,true);
                                //echo count($data[1]['results']);
                                for($i=0; $i<count($data[0]['results']); $i++) {
                            ?>

                              <tbody>
                                <tr>
                                  <th scope="row"><?php print_r ($data[0]['results'][$i]['country_region']) ?></th>
                                  <td><?php print_r ($data[0]['results'][$i]['confirmed']) ?></td>
                                  <td><?php print_r ($data[0]['results'][$i]['deaths']) ?></td>
                                  <td><?php print_r ($data[0]['results'][$i]['recovered']) ?></td>
                                </tr>                               
                              </tbody>
                              <?php
                                }
                              ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
           
            <!--<div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Logins per week</h3>
                        </div>
                        <div class="panel-body">
                            <div id="shieldui-chart2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-magnet"></i> Server Overview</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="server-stats">
                                <li>
                                    <div class="key pull-right">CPU</div>
                                    <div class="stat">
                                        <div class="info">60% / 37°C / 3.3 Ghz</div>
                                        <div class="progress progress-small">
                                            <div style="width: 70%;" class="progress-bar progress-bar-danger"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="key pull-right">Mem</div>
                                    <div class="stat">
                                        <div class="info">29% / 4GB (16 GB)</div>
                                        <div class="progress progress-small">
                                            <div style="width: 29%;" class="progress-bar"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="key pull-right">LAN</div>
                                    <div class="stat">
                                        <div class="info">6 Mb/s <i class="fa fa-caret-down"></i>&nbsp; 3 Mb/s <i class="fa fa-caret-up"></i></div>
                                        <div class="progress progress-small">
                                            <div style="width: 48%;" class="progress-bar progress-bar-inverse"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>-->
                <div class="col-lg-4">
                    <header>
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#stats">News from Around the World</a>
                            </li>
                            <!--<li class="">
                                <a data-toggle="tab" href="#report">Favorites</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#dropdown1">Commenters</a>
                            </li>-->
                        </ul>
                    </header>
                    <div class="body tab-content">
                        <div class="tab-pane clearfix active" id="stats">
                            <h5 class="tab-header"><i class="fa fa-calendar-o fa-2x"></i> Latest Reports and Comments</h5>
                            <ul class="news-list">
                                <li>
                                    <i class="fa fa-user fa-4x pull-left"></i>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">Ivan Gorge</a></div>
                                        <div class="position">Software Engineer</div>
                                        <div class="time">Last logged-in: Mar 12, 11:11</div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-user fa-4x pull-left"></i>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">Roman Novak</a></div>
                                        <div class="position">Product Designer</div>
                                        <div class="time">Last logged-in: Mar 12, 19:02</div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-user fa-4x pull-left"></i>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">Teras Uotul</a></div>
                                        <div class="position">Chief Officer</div>
                                        <div class="time">Last logged-in: Jun 16, 2:34</div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-user fa-4x pull-left"></i>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">Deral Ferad</a></div>
                                        <div class="position">Financial Assistant</div>
                                        <div class="time">Last logged-in: Jun 18, 4:20</div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-user fa-4x pull-left"></i>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">Konrad Polerd</a></div>
                                        <div class="position">Sales Manager</div>
                                        <div class="time">Last logged-in: Jun 18, 5:13</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="report">
                            <h5 class="tab-header"><i class="fa fa-star fa-2x"></i> Popular contacts</h5>
                            <ul class="news-list news-list-no-hover">
                                <li>
                                    <i class="fa fa-user fa-4x pull-left"></i>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">Pol Johnsson</a></div>
                                        <div class="options">
                                            <button class="btn btn-xs btn-success">
                                                <i class="fa fa-phone"></i>
                                                Call
                                            </button>
                                            <button class="btn btn-xs btn-warning">
                                                <i class="fa fa-envelope-o"></i>
                                                Message
                                            </button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-user fa-4x pull-left"></i>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">Terry Garel</a></div>
                                        <div class="options">
                                            <button class="btn btn-xs btn-success">
                                                <i class="fa fa-phone"></i>
                                                Call
                                            </button>
                                            <button class="btn btn-xs btn-warning">
                                                <i class="fa fa-envelope-o"></i>
                                                Message
                                            </button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-user fa-4x pull-left"></i>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">Eruos Forkal</a></div>
                                        <div class="options">
                                            <button class="btn btn-xs btn-success">
                                                <i class="fa fa-phone"></i>
                                                Call
                                            </button>
                                            <button class="btn btn-xs btn-warning">
                                                <i class="fa fa-envelope-o"></i>
                                                Message
                                            </button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-user fa-4x pull-left"></i>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">Remus Reier</a></div>
                                        <div class="options">
                                            <button class="btn btn-xs btn-success">
                                                <i class="fa fa-phone"></i>
                                                Call
                                            </button>
                                            <button class="btn btn-xs btn-warning">
                                                <i class="fa fa-envelope-o"></i>
                                                Message
                                            </button>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-user fa-4x pull-left"></i>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">Lover Lund</a></div>
                                        <div class="options">
                                            <button class="btn btn-xs btn-success">
                                                <i class="fa fa-phone"></i>
                                                Call
                                            </button>
                                            <button class="btn btn-xs btn-warning">
                                                <i class="fa fa-envelope-o"></i>
                                                Message
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="dropdown1">
                            <h5 class="tab-header"><i class="fa fa-comments fa-2x"></i> Top Commenters</h5>
                            <ul class="news-list">
                                <li>
                                    <i class="fa fa-user fa-4x pull-left"></i>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">Edin Garey</a></div>
                                        <div class="comment">
                                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur 
                                            aut odit aut fugit,sed quia
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-user fa-4x pull-left"></i>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">Firel Lund</a></div>
                                        <div class="comment">
                                            Duis aute irure dolor in reprehenderit in voluptate velit
                                             esse cillum dolore eu fugiat.
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-user fa-4x pull-left"></i>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">Jessica Desingter</a></div>
                                        <div class="comment">
                                            Excepteur sint occaecat cupidatat non proident, sunt in
                                             culpa qui officia deserunt.
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-user fa-4x pull-left"></i>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">Novel Forel</a></div>
                                        <div class="comment">
                                            Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque.
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <i class="fa fa-user fa-4x pull-left"></i>
                                    <div class="news-item-info">
                                        <div class="name"><a href="#">Wedol Reier</a></div>
                                        <div class="comment">
                                            Laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis
                                            et quasi.
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#wrapper -->
     
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    

    
</body>
</html>
