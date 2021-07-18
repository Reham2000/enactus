<?php 
  ob_start(); 
  session_start();
  $page_name = "Enactus Dashboard";
  $style = "dash.css";
  $script = "dash.js";
  include "init.php";
?>
    <div class="container">
      <h1 class="pt-5 pb-3">Hollo .... Ahmed</h1>
      <h3>My Trust 1</h3>
    </div>
    <nav >
      <div class="fixed-top bar d-flex justify-content-end bg-light py-2 px-5 col-sm-12  ">
         
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="#">
        <i class="fa fa-power-off"></i>
      </a>
   
      </div>
    </nav>

    
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fa fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">ENACTUS</a>
        <div id="close-sidebar">
          <i class="fa fa-times"></i>
        </div>
      </div>
      
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar-dropdown">
            <a class="s" href="#">
              <i class="fa fa-pie-chart "></i>
              <span>Dashboard</span>
              <span class="badge badge-pill badge-warning">New</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Dashboard 1
                    <span class="badge badge-pill badge-success">Pro</span>
                  </a>
                </li>
                <li>
                  <a href="#">Dashboard 2</a>
                </li>
                <li>
                  <a href="#">Dashboard 3</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>E-commerce</span>
              <span class="badge badge-pill badge-danger">3</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Products

                  </a>
                </li>
                <li>
                  <a href="#">Orders</a>
                </li>
                <li>
                  <a href="#">Credit cart</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-diamond "></i>
              <span>Components</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">General</a>
                </li>
                <li>
                  <a href="#">Panels</a>
                </li>
                <li>
                  <a href="#">Tables</a>
                </li>
                <li>
                  <a href="#">Icons</a>
                </li>
                <li>
                  <a href="#">Forms</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-line-chart "></i>
              <span>Charts</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Pie chart</a>
                </li>
                <li>
                  <a href="#">Line chart</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Maps</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Google maps</a>
                </li>
                <li>
                  <a href="#">Open street map</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Documentation</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Examples</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
   
  </nav>
  <!-- sidebar-wrapper  -->


    <!-- ///////////////// -->
    <section class=" container py-5">
      <div class="row dashBody  ">
        <div class="dashItem color1  rounded">
          <h3 class="itemNum">150</h3>
          <h4 class="itemName">High Board</h4>
          <a href="hosters.php" class="lets">Lets Go <i class="fa fa-arrow-circle-o-right "></i></a>
          <i class="fa fa-users fa-2x icon"></i>
        </div><!-- ./dashItem -->
        <div class="dashItem color4  rounded">
          <h3 class="itemNum">150</h3>
          <h4 class="itemName">Members</h4>
          <a href="members.php" class="lets">Lets Go <i class="fa fa-arrow-circle-o-right "></i></a>
          <i class="fa fa-users fa-2x icon"></i>
        </div><!-- ./dashItem -->
        <div class="dashItem color2  rounded">
          <h3 class="itemNum">70</h3>
          <h4 class="itemName">About US</h4>
          <a href="about.php" class="lets">Lets Go <i class="fa fa-arrow-circle-o-right "></i></a>
          <i class="fa fa-users fa-2x icon"></i>
        </div><!-- ./dashItem -->
        <div class="dashItem color3 changColor rounded">
          <h3 class="itemNum">30</h3>
          <h4 class="itemName">Event</h4>
          <a href="event.php" class="lets changColor">Lets Go <i class="fa fa-arrow-circle-o-right "></i></a>
          <i class="fa fa-users fa-2x icon"></i>
          
        </div><!-- ./dashItem -->
        <div class="dashItem color4  rounded">
          <h3 class="itemNum">40</h3>
          <h4 class="itemName">Old Board</h4>
          <a href="#" class="lets">Lets Go <i class="fa fa-arrow-circle-o-right "></i></a>
          <i class="fa fa-graduation-cap fa-2x icon"></i>
        </div><!-- ./dashItem -->
        <div class="dashItem color3 changColor rounded">
          <h3 class="itemNum">150</h3>
          <h4 class="itemName">Messages</h4>
          <a href="#" class="lets changColor">Lets Go <i class="fa fa-arrow-circle-o-right "></i></a>
          <i class="fa fa-users fa-2x icon"></i>
          
        </div><!-- ./dashItem -->
        <div class="dashItem color4  rounded">
          <h3 class="itemNum">150</h3>
          <h4 class="itemName">Opinion</h4>
          <a href="#" class="lets">Lets Go <i class="fa fa-arrow-circle-o-right "></i></a>
          <i class="fa fa-users fa-2x icon"></i>
        </div><!-- ./dashItem -->
        <div class="dashItem color2  rounded">
          <h3 class="itemNum">150</h3>
          <h4 class="itemName">Commities</h4>
          <a href="#" class="lets">Lets Go <i class="fa fa-arrow-circle-o-right "></i></a>
          <i class="fa fa-users fa-2x icon"></i>
        </div><!-- ./dashItem -->
      </div><!-- ./dashItem -->

      </div><!-- ./row -->
    </section>