<?php
echo"
<!-- BEGIN HEADER -->
   <div id='header' class='navbar navbar-inverse navbar-fixed-top'>
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class='navbar-inner'>
           <div class='container-fluid'>
               <!-- BEGIN LOGO -->
               <a class='brand' href='index.php'>
                   <img src='img/logo.png' alt='Admin Lab' />
               </a>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class='btn btn-navbar collapsed' id='main_menu_trigger' data-toggle='collapse' data-target='.nav-collapse'>
                   <span class='icon-bar'></span>
                   <span class='icon-bar'></span>
                   <span class='icon-bar'></span>
                   <span class='arrow'></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
               <div id='top_menu' class='nav notify-row'>
                   <!-- BEGIN NOTIFICATION -->
                   <ul class='nav top-menu'>
                       
                       <!-- BEGIN NOTIFICATION DROPDOWN -->
                       <li class='dropdown' id='header_notification_bar'>
                           <a href='#' class='dropdown-toggle' data-toggle='dropdown'>

                               <i class='icon-bell-alt'></i>
                               
                           </a>
                           <ul class='dropdown-menu extended notification'>
                               <li>
                                   <p>You have 2 new notifications</p>
                               </li>
                               <li>
                                   <a href='delegate.php'>
                                       <span class='label label-important'><i class='icon-bolt'></i></span>
                                       Delegation Registration are now open
								   </a>
                               </li>
							   <li>
                                   <a href='#'>
                                       <span class='label label-important'><i class='icon-bolt'></i></span>
                                       Welcome To Munik Portal              
                                   </a>
                               </li>
                               
                               <li>
                                   <a href='#'>See all notifications</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END NOTIFICATION DROPDOWN -->

                   </ul>
               </div>
               <!-- END  NOTIFICATION -->
               <div class='top-nav '>
                   <ul class='nav pull-right top-menu' >
                       <!-- BEGIN SUPPORT -->
                     
                       <li class='dropdown mtop5'>
                           <a class='dropdown-toggle element' data-placement='bottom' data-toggle='tooltip' href='helpdesk.php' data-original-title='Help'>
                               <i class='icon-headphones'></i>
                           </a>
                       </li>
                       <!-- END SUPPORT -->
                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       <li class='dropdown'>
                           <a href='#' class='dropdown-toggle' data-toggle='dropdown'>
                               <img src='img/avatar1_small.jpg' alt=''>
                                             
                               <span class='username'>  ".strtoupper($username)." </span>
                               <b class='caret'></b>
                           </a>
                           <ul class='dropdown-menu'>
                               <li><a href='invoice.php'><i class='icon-file'></i> Invoice</a></li>
                               <li><a href='password.php'><i class='icon-asterisk'></i> Password</a></li>
                               <li class='divider'></li>
                               <li><a href='login.php?logout=true'><i class='icon-key'></i> Log Out</a></li>
                           </ul>
                       </li>
                       <!-- END USER LOGIN DROPDOWN -->
                   </ul>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   
   <!-- BEGIN CONTAINER -->
   
   <div id='container' class='row-fluid'>
      <!-- BEGIN SIDEBAR -->
      <div id='sidebar' class='nav-collapse collapse'>

         <div class='sidebar-toggler hidden-phone'></div>   

         <!-- BEGIN SIDEBAR MENU -->
          <ul class='sidebar-menu'>
              <li><a class='' href='register_form.php'><span class='icon-box'><i class='icon-user'></i></span>Registration</a></li>
			  <li><a class='' href=''><span class='icon-box'><i class='icon-cogs'></i></span>Member Discounts</a></li>
              <li class='has-sub'><a href='javascript:;' class=''><span class='icon-box'> <i class='icon-book'></i></span> Negotiation Update</a></li>
              <li class='has-sub'><a href='javascript:;' class=''><span class='icon-box'> <i class='icon-dashboard'></i></span> Union News</a></li>
              <li><a class='' href='about.php'><span class='icon-box'><i class='icon-user'></i></span>Upcoming Events</a></li>
          </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->";
	  
?>
