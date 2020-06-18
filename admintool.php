<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard 1 &middot; Elephant Template &middot; The fastest way to build Modern Admin APPS for any platform, browser, or device.</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta property="og:url" content="http://demo.madebytilde.com/elephant">
    <meta property="og:type" content="website">
    <meta property="og:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
    <meta property="og:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta property="og:image" content="http://demo.madebytilde.com/elephant.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@madebytilde">
    <meta name="twitter:creator" content="@madebytilde">
    <meta name="twitter:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
    <meta name="twitter:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta name="twitter:image" content="http://demo.madebytilde.com/elephant.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f1595d">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/elephant.min.css">
    <link rel="stylesheet" href="css/application.min.css">
  </head>
   <div class="layout-sidebar">
        <div class="layout-sidebar-backdrop"></div>
        <div class="layout-sidebar-body">
          <div class="custom-scrollbar">
            <nav id="sidenav" class="sidenav-collapse collapse">
              <ul class="sidenav level-1">
                <li class="sidenav-search">
                  <form class="sidenav-form" action="../../demo_madebytilde_default_2.html">
                    <div class="form-group form-group-sm">
                      <div class="input-with-icon">
                        <input class="form-control" type="text" placeholder="Search…">
                        <span class="icon icon-search input-icon"></span>
                      </div>
                    </div>
                  </form>
                </li>
                <li class="sidenav-heading">Navigation</li>
               <li class="sidenav-item">
                  <a href="dashboard.html">
                   
                    <span class="sidenav-icon icon icon-works">&#40;</span>
                    <span class="sidenav-label">Dashboard</span>
                  </a>
                </li>

                <li class="sidenav-item">
                  <a href="#">
                    
                    <span class="sidenav-icon icon icon-works">&#40;</span>
                    <span class="sidenav-label">Media</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="news.php">

                    <span class="sidenav-icon icon icon-works">&#40;</span>
                    <span class="sidenav-label">News</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="admintool.php">
                   
                    <span class="sidenav-icon icon icon-works">&#40;</span>
                    <span class="sidenav-label">Admin Tools</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="#">
                    
                    <span class="sidenav-icon icon icon-works">&#40;</span>
                    <span class="sidenav-label">Event</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="#">
                   
                    <span class="sidenav-icon icon icon-works">&#40;</span>
                    <span class="sidenav-label">Pages</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="#">
                   
                    <span class="sidenav-icon icon icon-works">&#40;</span>
                    <span class="sidenav-label">Seetings</span>
                  </a>
                </li>
                
              </ul>
            </nav>
          </div>
        </div>
      </div>
    <body>
          <div class="row gutter-xs" style="padding-top: 0px;" >
            <div class="col-xs-12">
              <div class="card" >
                <div class="card-body" >
                  <table style="margin-top: 0px;" id="demo-datatables-2" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Location</th>
                        <th>Lesson</th>
                        <th>Booking Date</th>
                        <th>Time</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <tr>
                        <td>Ashik</td>
                        <td>Ashik</td>
                        <td>Ashik</td>
                        <td>Ashik</td>
                        <td>Ashik</td>
                        <td>Ashik</td>
                        <td>Ashik</td>
                        <td class="btn btn-danger btnCancel">Cancel Request </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
       
      
      
      <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Registration</h4>
      </div>
      <div class="modal-body">
        
        
        <form data-toggle="validator" action="#" method="post">
            <div class="">
                <div class="row">
                    <div class="form-group">
                        <label for="location">Location</label>
                        <select  class="custom-select" name="ddlLocation" id="ddlLocation" required>
                            
                            <option value='<?php echo $locationrow["location"] ?>'><?php echo $locationrow["location"] ?></option>
                            
                        </select>
                    </div>
                    <div class="form-group">
                       <label for="">Lesson</label>
                       <select  class="custom-select" name="ddlVehicle" id="" required>
                            <option value="" disabled="disabled" selected="selected">Select your lesson</option>
                            <option value='Car'>Car</option>
                            <option value='Bike'>Bike</option>
                        </select>
                    </div>
                    <div class="form-group">
                       <label for="">Date</label>
                       <select  class="custom-select" name="ddlDate" id="ddlDate" required>
                            <option value="" disabled="disabled" selected="selected">Select Vehicle</option>
                            
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                       <label for="">Name</label>
                       <input id="" class="form-control" type="text" name="txtStudentName" spellcheck="false" autocomplete="off" data-msg-required="Please enter your name." required>
                    </div>
                    <div class="form-group">
                       <label for="email">Email</label>
                       <input id="email" class="form-control" type="email" name="txtEmail" spellcheck="false" autocomplete="off" data-msg-required="Please enter your email address." required>
                    </div>
                </div>    
                
              
                <button class="btn btn-primary btn-block" name="btnsignup" type="submit">Sign up</button>
                
          </form>
        
      </div>
    </div>

  </div>
</div>
      
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-83990101-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>