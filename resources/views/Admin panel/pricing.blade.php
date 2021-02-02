<!DOCTYPE html>
<html lang="en">
   

<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Blood Bank Admin Panel</title>
      <!-- Favicon and touch icons -->
     <link rel="shortcut icon" href="public/images/bloodbank/assets/uploads/favicon.png" type="image/x-icon">
      <!-- Start Global Mandatory Style
         =====================================================================-->
      <!-- jquery-ui css -->
      <link href="public/images/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap -->
      <link href="public/images/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap rtl -->
      <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
      <!-- Lobipanel css -->
      <link href="public/images/assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pace css -->
      <link href="public/images/assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
      <!-- Font Awesome -->
      <link href="public/images/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <!-- Pe-icon -->
      <link href="public/images/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
      <!-- Themify icons -->
      <link href="public/images/assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
      <!-- dataTables css -->
      <link href="public/images/assets/plugins/datatables/dataTables.min.css" rel="stylesheet" type="text/css"/>
      <!-- End Global Mandatory Style
         =====================================================================-->
      <!-- Start Theme Layout Style
         =====================================================================-->
      <!-- Theme style -->
      <link href="public/images/assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
      <!-- Theme style rtl -->
      <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
      <!-- End Theme Layout Style
         =====================================================================-->
   </head>
   <body class="hold-transition sidebar-mini">
   <!--preloader-->
      <div id="preloader">
         <div id="status"></div>
      </div>
      <!-- Site wrapper -->
      <div class="wrapper">
         <header class="main-header">
            <a href="{{route('index')}}" class="logo">
               <!-- Logo -->
               <span class="logo-mini">
               <img src="public/images/assets/dist/img/mini-logo.png" alt="">
               </span>
               <span class="logo-lg">
               <img src="public/images/bloodbank/assets/uploads/logo.png" alt="">
               </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top">
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <!-- Sidebar toggle button-->
                  <span class="sr-only">Toggle navigation</span>
                  <span class="pe-7s-angle-left-circle"></span>
               </a>
               <!-- searchbar-->
               <a href="#search"><span class="pe-7s-search"></span></a>
               <div id="search">
                  <button type="button" class="close">×</button>
                  <form>
                     <input type="search" value="" placeholder="type keyword(s) here" />
                     <button type="submit" class="btn btn-add">Search...</button>
                  </form>
               </div>
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                     
                     <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="public/images/assets/dist/img/avatar5.png" class="img-circle" width="45" height="45" alt="user"></a>
                        <ul class="dropdown-menu" >
                          
                           <li><a href="{{route('Admin')}}"> 
                              <i class="fa fa-sign-out"></i> Signout</a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </nav>
         </header>
         <!-- =============================================== -->
         <!-- Left side column. contains the sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
               <!-- sidebar menu -->
               <ul class="sidebar-menu">
                  <li class="active">
                     <a href="{{route('index')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li class="treeview">
                     <a href="{{route('set')}}">
                     <i class="fa fa-users"></i><span>Setting</span>
                     <span class="pull-right-container">
                     <!--<i class="fa fa-angle-left pull-right"></i>-->
                     </span>
                     </a>
                     <!--<ul class="treeview-menu">
                        <li><a href="add-customer.html">Add Customer</a></li>
                        <li><a href="clist.html">List</a></li>
                        <li><a href="group.html">Groups</a></li>
                     </ul>-->
                  </li>
                  <li class="treeview">
                     <a href="{{ route('page')}}">
                     <i class="fa fa-shopping-basket"></i><span>page</span>
                     <span class="pull-right-container">
                     <!--<i class="fa fa-angle-left pull-right"></i>-->
                     </span>
                     </a>
                     
                  </li>
                  <li class="treeview">
                     <a href="{{ route('Menu')}}">
                     <i class="fa fa-shopping-cart"></i><span>Menu</span>
                     <span class="pull-right-container">
                     <!--<i class="fa fa-angle-left pull-right"></i>-->
                     </span>
                     </a>
                     
                  </li>
                  <li class="treeview">
                     <a href="{{route('blood')}}">
                     <i class="glyphicon glyphicon-heart"></i><span>Blood Group</span>
                     <span class="pull-right-container">
                     <!--<i class="fa fa-angle-left pull-right"></i>-->
                     </span>
                     </a>
                     
                  </li>
                  <li class="treeview">
                     <a href="{{route('agent')}}">
                     <i class="fa fa-shopping-bag"></i><span>Agent Section</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>  
                     <ul class="treeview-menu">
                        <li><a href="{{route('AllA')}}">All Agent</a></li>
                        <li><a href="{{route('payment')}}">Agents Payments</a></li>
                        <!-- <li><a href="ecategory.html">Expense Category</a></li> -->
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="{{route('sek')}}">
                     <i class="fa fa-file-text"></i><span>Seeker Section</span>
                     <span class="pull-right-container">
                     <!-- <i class="fa fa-angle-left pull-right" ></i>-->
                     </span>
                     </a>
                     
                  </li>
                  <li class="treeview">
                     <a href="{{route('don')}}">
                     <i class="fa fa-file-text"></i><span>Donor Section</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{route('pending')}}">Pending Donor</a></li>
                        <li><a href="{{route('approve')}}">Approved Donor</a></li>
                        <li><a href="{{route('Rel')}}">Religion</a></li>
                        <!-- <li><a href="incomexp.html">Income expense comparesion</a></li> -->
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="{{route('new')}}">
                     <i class="fa fa-bell"></i><span>News Section</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{route('cat')}}">Category</a></li>
                        <li><a href="{{route('new')}}">News</a></li>
                        <li><a href="{{route('com')}}">comments</a></li>
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="{{route('test')}}">
                     <i class="fa fa-edit"></i><span>Testimonial Section</span>
                     <span class="pull-right-container">
                     <!-- <i class="fa fa-angle-left pull-right"></i> -->
                     </span>
                     </a>
                     <!-- <ul class="treeview-menu">
                        <li><a href="jpost.html">Jobs Posted</a></li>
                        <li><a href="japp.html">Jobs Application</a></li>
                     </ul> -->
                  </li>
                  <li class="treeview">
                     <a href="{{route('faq')}}">
                     <i class="fa fa-shopping-basket"></i><span>FAQ Section</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{route('faqc')}}">Faq category</a></li>
                        <li><a href="{{route('faqs')}}">FAQ</a></li>
                        <!-- <li><a href="managesal.html">Manage salary</a></li>
                        <li><a href="empsallist.html">Employee salary list</a></li>
                        <li><a href="mpayment.html">Make payment</a></li>
                        <li><a href="generatepay.html">Generate payslip</a></li>
                        <li><a      href="paysum.html">Payroll summary</a></li> -->
                     </ul>
                  </li>
                  <li class="treeview">
                     <a href="{{route('price')}}">
                     <i class="fa fa-bitbucket-square"></i><span>Pricing Plan</span>
                     <span class="pull-right-container">
                     <!-- <i class="fa fa-angle-left pull-right"></i> -->
                     </span>
                     </a>
                     
                  </li>
                  <li class="treeview">
                     <a href="{{route('file')}}">
                     <i class="fa fa-ticket"></i><span>File Upload</span>
                     <span class="pull-right-container">
                     <!-- <i class="fa fa-angle-left pull-right"></i> -->
                     </span>
                     </a>
                     
                  </li>
                  <li class="treeview">
                     <a href="{{route('social')}}">
                     <i class="fa fa-list"></i>
                     <span>Social Media</span>
                     <span class="pull-right-container">
                     <!-- <i class="fa fa-angle-left pull-right"></i> -->
                     </span>
                     </a>
                     
                  </li>
                  <li class="treeview">
                     <a href="{{route('sub')}}">
                     <i class="fa fa-bar-chart"></i><span>Subscribers</span>
                     <span class="pull-right-container">
                     <!-- <i class="fa fa-angle-left pull-right"></i> -->
                     </span>
                     </a>
                     
                  </li>
                  
               </ul>
            </div>
            <!-- /.sidebar -->
         </aside>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-group"></i>
               </div>
               <div class="header-title">
                  <h1>Seekers</h1>
                  <small>Seeker List</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                          <div class="btn-group buttonexport">
                              <a href="#">
                                 <h4>Seeker details</h4>
                              </a>
                           </div> 
                        </div>
                        <div class="panel-body">
                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="btn-group">
                           <!--<div class="buttonexport" id="buttonlist"> 
                              <a class="btn btn-add" href="#" data-toggle="modal" data-target="#addcustom"> <i class="fa fa-plus"></i> Add new group
                              </a>  
                           </div>-->
                              <button class="btn btn-exp btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i>Explore Seeker Table</button>
                             
                           </div>
                           <!-- ./Plugin content:powerpoint,txt,pdf,png,word,xl -->
                           <div class="table-responsive">
                              <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                 <thead>
                                    <tr>
                                       <th>Customer Name</th>
                                       <th>CID</th>
                                       <th>Price</th>
                                       <th>Description</th>
                                       <th>Date</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>MD.Alimul Alrazy</td>
                                       <td>Adn4541</td>
                                       <td>$454</td>
                                       <td>Testing</td>
                                       <td>27th April,2017</td>
                                       <td><span class="label-danger label label-default">Inative</span></td>
                                       <td>
                                          <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button>
                                          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>MD.Alimul Alrazy</td>
                                       <td>Adn4541</td>
                                       <td>$454</td>
                                       <td>Testing</td>
                                       <td>27th April,2017</td>
                                       <td><span class="label-custom label label-default">Active</span></td>
                                       <td>
                                          <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button>
                                          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>MD.Alimul Alrazy</td>
                                       <td>Adn4541</td>
                                       <td>$454</td>
                                       <td>web design</td>
                                       <td>27th April,2017</td>
                                       <td><span class="label-danger label label-default">Inactive</span></td>
                                       <td>
                                          <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button>
                                          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>MD.Alimul Alrazy</td>
                                       <td>Adn4541</td>
                                       <td>$454</td>
                                       <td>software</td>
                                       <td>27th April,2017</td>
                                       <td><span class="label-custom label label-default">Active</span></td>
                                       <td>
                                          <button type="button" class="btn btn-add btn-sm" data-toggle="modal" data-target="#customer1"><i class="fa fa-pencil"></i></button>
                                          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- ADD Modal1 -->
               <div class="modal fade" id="addcustom" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Update Customer</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Customer Name:</label>
                                          <input type="text" placeholder="Customer Name" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">CID</label>
                                          <input type="number" placeholder="CID" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Price</label>
                                          <input type="text" placeholder="priece" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">description:</label>
                                          <input type="text" placeholder="details" class="form-control">
                                       </div>
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
               <!-- Modal -->    
               <!-- customer Modal1 -->
               <div class="modal fade" id="customer1" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Update Customer</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Customer Name:</label>
                                          <input type="text" placeholder="Customer Name" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">CID</label>
                                          <input type="number" placeholder="CID" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">Price</label>
                                          <input type="text" placeholder="priece" class="form-control">
                                       </div>
                                       <!-- Text input-->
                                       <div class="col-md-6 form-group">
                                          <label class="control-label">description:</label>
                                          <input type="text" placeholder="details" class="form-control">
                                       </div>
                                       <div class="col-md-12 form-group user-form-group">
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm">Cancel</button>
                                             <button type="submit" class="btn btn-add btn-sm">Save</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
               <!-- Modal -->    
               <!-- Customer Modal2 -->
               <div class="modal fade" id="customer2" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header modal-header-primary">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                           <h3><i class="fa fa-user m-r-5"></i> Delete Customer</h3>
                        </div>
                        <div class="modal-body">
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form-horizontal">
                                    <fieldset>
                                       <div class="col-md-12 form-group user-form-group">
                                          <label class="control-label">Delete Customer</label>
                                          <div class="pull-right">
                                             <button type="button" class="btn btn-danger btn-sm">NO</button>
                                             <button type="submit" class="btn btn-add btn-sm">YES</button>
                                          </div>
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>
               <!-- /.modal -->
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
         <footer class="main-footer">
            <strong>Copyright © 2019 Siddahant Kumar. All Rights Reserved.</strong> 
         </footer>
      </div>
      <!-- ./wrapper -->
      <!-- Start Core Plugins
         =====================================================================-->
      <!-- jQuery -->
      <script src="public/images/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
      <!-- jquery-ui --> 
      <script src="public/images/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="public/images/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
      <!-- lobipanel -->
      <script src="public/images/assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="public/images/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
      <!-- table-export js -->
      <script src="public/images/assets/plugins/table-export/tableExport.js" type="text/javascript"></script>
      <script src="public/images/assets/plugins/table-export/jquery.base64.js" type="text/javascript"></script>
      <script src="public/images/assets/plugins/table-export/html2canvas.js" type="text/javascript"></script>
      <script src="public/images/assets/plugins/table-export/sprintf.js" type="text/javascript"></script>
      <script src="public/images/assets/plugins/table-export/jspdf.js" type="text/javascript"></script>
      <script src="public/images/assets/plugins/table-export/base64.js" type="text/javascript"></script>
      <!-- dataTables js -->
      <script src="public/images/assets/plugins/datatables/dataTables.min.js" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="public/images/assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
      <!-- FastClick -->
      <script src="public/images/assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="public/images/assets/dist/js/custom.js" type="text/javascript"></script>
      <!-- End Core Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="public/images/assets/dist/js/dashboard.js" type="text/javascript"></script>
      <!-- End Theme label Script
         =====================================================================-->
   </body>


</html>

