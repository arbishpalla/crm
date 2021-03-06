<?php
include 'headers/connect_to_mysql.php';
include 'headers/session.php';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from thevectorlab.net/adminlab/blank.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 04 Nov 2014 07:58:59 GMT -->

<head>
<meta charset="utf-8" />
<title>Dashboard</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<link href="stylesheet/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="stylesheet/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link href="stylesheet/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
<link href="stylesheet/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/style_responsive.css" rel="stylesheet" />
<link href="css/style_default.css" rel="stylesheet" id="style_color" />
<link href="stylesheet/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="stylesheet/uniform/css/uniform.default.css" />


</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<?php
include 'headers/menu-top-navigation.php'; 
?>
<!-- BEGIN PAGE -->
<div id="main-content"> 
  <!-- BEGIN PAGE CONTAINER-->
  <div class="container-fluid"> 
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
      <div class="span12"> 
        
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title"> Dashboard </h3>
        <ul class="breadcrumb">
          <li> <a href="index.php"><i class="icon-home"></i></a><span class="divider">&nbsp;</span> </li>
          <li> <a href="index.php">My Home></a> <span class="divider-last">&nbsp;</span> </li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB--> 
      </div>
    </div>
    <!-- END PAGE HEADER--> 
    <!-- BEGIN PAGE CONTENT-->
    <div class="row-fluid">
      <div class="span12"> 
        <!-- BEGIN RECENT ORDERS PORTLET-->
        <div class="widget">
          <div class="widget-title">
            <h4><i class="icon-tags"></i> MUNIK Notification</h4>
            <span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a> <a href="javascript:;" class="icon-remove"></a> </span> </div>
          <div class="widget-body">
          <div class="alert alert-success">
                                        <button class="close" data-dismiss="alert">×</button>
                                        <strong>Welcome to Munik Registraion Portal</strong> 
                                    </div>

          
           </div>
        </div>
      </div>
    </div>
    <div class="row-fluid">
      <div class="span12"> 
        <!-- BEGIN RECENT ORDERS PORTLET-->
        <div class="widget">
          <div class="widget-title">
            <h4><i class="icon-tags"></i> MUNIK Registration Task</h4>
            <span class="tools"> <a href="javascript:;" class="icon-chevron-down"></a></span> </div>
          <div class="widget-body">
            
            <table class="table table-striped table-bordered table-advance table-hover">
              <thead>
                <tr>
                  <th width="10%"><i class="icon-leaf"></i> <span class="hidden-phone">S No</span></th>
                  <th width="75%"><i class="icon-user"></i> <span class="hidden-phone ">Task</span></th>
                  <th width="10%"><i class="icon-tags"> </i><span class="hidden-phone">Status</span></th>
                  <th width="5%"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="highlight"><a href="#">1</a></td>
                  <td><a href="institutionDetail.php">Filling out Institution Information</a></td>
                  <td>
                    <a href="institutionDetail.php" class="btn btn-mini visible-phone hidden-tablet">View</a></td>
                <td><a href="institutionDetail.php" class="btn btn-mini">View</a></td>
                </tr>
                <tr>
                  <td class="highlight"><a href="#">2</a></td>
                  <td><a href="facultyAdvisor.php">Filling out Faculty Advisor Information</a></td>
                  <td>              
              
                </tr>
                <tr>
                  <td class="highlight"><a href="#">3</a></td>
                  <td><a href="delegate.php">Delegates Registration</a></td>
                  <td>
                    <a href="delegate.php" class="btn btn-mini visible-phone hidden-tablet">View</a></td>
                    <td><a href="delegate.php" class="btn btn-mini">View</a></td>
                </tr>
                
                
                <tr>
                  <td class="highlight"><a href="#">4</a></td>
                  <td><a href="invoice.php">Submit Bank Deposit Slip</a></td>
                  <td>
                    <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a></td>
                     <td><a href="#" class="btn btn-mini">View</a></td>
                </tr>
              </tbody>
            </table>
            <div class="space7"></div>
          </div>
        </div>
        <!-- END RECENT ORDERS PORTLET--> 
      </div>
    </div>
  </div>
  
  <!-- END PAGE CONTENT--> 
</div>
<!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
</div>
<!-- END CONTAINER --> 
<!-- BEGIN FOOTER -->
<div id="footer"> <a href ="https://www.facebook.com/avialdo.inc">2014-15 &copy; Avialdo.</a>
  <div class="span pull-right"> <span class="go-top"><i class="icon-arrow-up"></i></span> </div>
</div>
<!-- END FOOTER --> 
<!-- BEGIN JAVASCRIPTS --> 
<!-- Load javascripts at bottom, this will reduce page load time --> 
<script src="script/jquery-1.8.3.min.js"></script> 
<script src="stylesheet/bootstrap/js/bootstrap.min.js"></script> 
<script src="script/jquery.blockui.js"></script> 
<!-- ie8 fixes --> 
<!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]--> 
<script type="text/javascript" src="stylesheet/chosen-bootstrap/chosen/chosen.jquery.min.js"></script> 
<script type="text/javascript" src="stylesheet/uniform/jquery.uniform.min.js"></script> 
<script src="script/scripts.js"></script> 
<script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
      });
   </script> 
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

<!-- Mirrored from thevectorlab.net/adminlab/blank.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 04 Nov 2014 07:58:59 GMT -->
</html>