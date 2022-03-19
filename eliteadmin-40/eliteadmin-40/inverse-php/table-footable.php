<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Footable CSS -->
    <link href="../assets/node_modules/footable/css/footable.core.css" rel="stylesheet">
    <link href="../assets/node_modules/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <!-- page css -->
    <link href="dist/css/pages/footable-page.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php 
            include 'dist/php/header.php';
        ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <?php
            include 'dist/php/left-sidebar.php';
        ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Footable</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Footable</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                             
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Contact Emplyee list</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Role</th>
                                                <th>Age</th>
                                                <th>Joining date</th>
                                                <th>Salery</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user" width="40" class="img-circle" /> Genelia Deshmukh</a>
                                                </td>
                                                <td>genelia@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span> </td>
                                                <td>23</td>
                                                <td>12-10-2014</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user" width="40" class="img-circle" /> Arijit Singh</a>
                                                </td>
                                                <td>arijit@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span> </td>
                                                <td>26</td>
                                                <td>10-09-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user" width="40" class="img-circle" /> Govinda jalan</a>
                                                </td>
                                                <td>govinda@gmail.com</td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>28</td>
                                                <td>1-10-2013</td>
                                                <td>$2200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user" width="40" class="img-circle" /> Hritik Roshan</a>
                                                </td>
                                                <td>hritik@gmail.com</td>
                                                <td>+456 456 789</td>
                                                <td><span class="label label-inverse">HR</span></td>
                                                <td>25</td>
                                                <td>2-10-2017</td>
                                                <td>$200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user" width="40" class="img-circle" /> John Abraham</a>
                                                </td>
                                                <td>john@gmail.com</td>
                                                <td>+567 456 789</td>
                                                <td><span class="label label-danger">Manager</span></td>
                                                <td>23</td>
                                                <td>10-9-2015</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user" width="40" class="img-circle" /> Pawandeep kumar</a>
                                                </td>
                                                <td>pawandeep@gmail.com</td>
                                                <td>+678 456 789</td>
                                                <td><span class="label label-warning">Chairman</span></td>
                                                <td>29</td>
                                                <td>10-5-2013</td>
                                                <td>$1500</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user" width="40" class="img-circle" /> Ritesh Deshmukh</a>
                                                </td>
                                                <td>ritesh@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span></td>
                                                <td>35</td>
                                                <td>05-10-2012</td>
                                                <td>$3200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user" width="40" class="img-circle" /> Salman Khan</a>
                                                </td>
                                                <td>salman@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span></td>
                                                <td>27</td>
                                                <td>11-10-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user" width="40" class="img-circle" /> Govinda jalan</a>
                                                </td>
                                                <td>govinda@gmail.com</td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>18</td>
                                                <td>12-5-2017</td>
                                                <td>$100</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user" width="40" class="img-circle" /> Sonu Nigam</a>
                                                </td>
                                                <td>sonu@gmail.com</td>
                                                <td>+456 456 789</td>
                                                <td><span class="label label-inverse">HR</span></td>
                                                <td>36</td>
                                                <td>18-5-2009</td>
                                                <td>$4200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user" width="40" class="img-circle" /> Varun Dhawan</a>
                                                </td>
                                                <td>varun@gmail.com</td>
                                                <td>+567 456 789</td>
                                                <td><span class="label label-danger">Manager</span></td>
                                                <td>43</td>
                                                <td>12-10-2010</td>
                                                <td>$5200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user" width="40" class="img-circle" /> Genelia Deshmukh</a>
                                                </td>
                                                <td>genelia@gmail.com</td>
                                                <td>+123 456 789</td>
                                                <td><span class="label label-danger">Designer</span> </td>
                                                <td>23</td>
                                                <td>12-10-2014</td>
                                                <td>$1200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user" width="40" class="img-circle" /> Arijit Singh</a>
                                                </td>
                                                <td>arijit@gmail.com</td>
                                                <td>+234 456 789</td>
                                                <td><span class="label label-info">Developer</span> </td>
                                                <td>26</td>
                                                <td>10-09-2014</td>
                                                <td>$1800</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>
                                                    <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user" width="40" class="img-circle" /> Govinda jalan</a>
                                                </td>
                                                <td>govinda@gmail.com</td>
                                                <td>+345 456 789</td>
                                                <td><span class="label label-success">Accountant</span></td>
                                                <td>28</td>
                                                <td>1-10-2013</td>
                                                <td>$2200</td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Add New Contact</button>
                                                </td>
                                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                <h4 class="modal-title" id="myModalLabel">Add New Contact</h4> </div>
                                                            <div class="modal-body">
                                                                <from class="form-horizontal form-material">
                                                                    <div class="form-group">
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Type name"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Email"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Phone"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Designation"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Age"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Date of joining"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <input type="text" class="form-control" placeholder="Salary"> </div>
                                                                        <div class="col-md-12 m-b-20">
                                                                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
                                                                                <input type="file" class="upload"> </div>
                                                                        </div>
                                                                    </div>
                                                                </from>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <td colspan="7">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Row Toggler</h4>
                                <h6 class="card-subtitle">Create your table with Toggle Footable</h6>
                                <table id="demo-foo-row-toggler" class="table toggle-circle table-hover">
                                    <thead>
                                        <tr>
                                            <th data-toggle="true"> First Name </th>
                                            <th> Last Name </th>
                                            <th data-hide="phone"> Job Title </th>
                                            <th data-hide="all"> DOB </th>
                                            <th data-hide="all"> Status </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="javascript:void(0)">Woldt</a></td>
                                            <td><a href="javascript:void(0)">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="javascript:void(0)">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="javascript:void(0)">Woldt</a></td>
                                            <td><a href="javascript:void(0)">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="javascript:void(0)">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="javascript:void(0)">Woldt</a></td>
                                            <td><a href="javascript:void(0)">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="javascript:void(0)">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Accordion Footable</h4>
                                <h6 class="card-subtitle">Create your table with Accordion Footable</h6>
                                <table id="demo-foo-accordion" class="table m-b-0 toggle-arrow-tiny">
                                    <thead>
                                        <tr>
                                            <th data-toggle="true"> First Name </th>
                                            <th> Last Name </th>
                                            <th data-hide="phone"> Job Title </th>
                                            <th data-hide="all"> DOB </th>
                                            <th data-hide="all"> Status </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="javascript:void(0)">Woldt</a></td>
                                            <td><a href="javascript:void(0)">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="javascript:void(0)">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="javascript:void(0)">Woldt</a></td>
                                            <td><a href="javascript:void(0)">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="javascript:void(0)">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="javascript:void(0)">Woldt</a></td>
                                            <td><a href="javascript:void(0)">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="javascript:void(0)">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pagination Footable</h4>
                                <h6 class="card-subtitle">Create your table with Paginated Footable</h6>
                                <label class="form-inline">Show &nbsp;
                                    <select id="demo-show-entries">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                    </select> &nbsp; entries </label>
                                <table id="demo-foo-pagination" class="table m-b-0 toggle-arrow-tiny" data-page-size="5">
                                    <thead>
                                        <tr>
                                            <th data-toggle="true"> First Name </th>
                                            <th> Last Name </th>
                                            <th data-hide="phone"> Job Title </th>
                                            <th data-hide="all"> DOB </th>
                                            <th data-hide="all"> Status </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="javascript:void(0)">Woldt</a></td>
                                            <td><a href="javascript:void(0)">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="javascript:void(0)">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="javascript:void(0)">Woldt</a></td>
                                            <td><a href="javascript:void(0)">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="javascript:void(0)">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 1972</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 1981</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 1969</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 1977</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 1991</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maxine</td>
                                            <td><a href="javascript:void(0)">Woldt</a></td>
                                            <td><a href="javascript:void(0)">Business Services Sales Representative</a></td>
                                            <td>17 Oct 1987</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 1983</td>
                                            <td><span class="label label-table label-inverse">Disabled</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td><a href="javascript:void(0)">Goodlow</a></td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 1961</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 1981</td>
                                            <td><span class="label label-table label-success">Active</span></td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 1985</td>
                                            <td><span class="label label-table label-danger">Suspended</span></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5">
                                                <div class="text-right">
                                                    <ul class="pagination pagination-split m-t-30"> </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add & Remove Rows</h4>
                                <h6 class="card-subtitle">You can add or remove rows with Footable</h6>
                                <table id="demo-foo-addrow2" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                                    <thead>
                                        <tr>
                                            <th data-sort-initial="true" data-toggle="true">First Name</th>
                                            <th>Last Name</th>
                                            <th data-hide="phone, tablet">Job Title</th>
                                            <th data-hide="phone, tablet">DOB</th>
                                            <th data-hide="phone, tablet">Status</th>
                                            <th data-sort-ignore="true" class="min-width">Delete</th>
                                        </tr>
                                    </thead>
                                    <div class="m-t-40">
                                        <div class="d-flex">
                                            <div class="mr-auto">
                                                <div class="form-group">
                                                    <button id="demo-btn-addrow" class="btn btn-primary btn-sm"><i class="icon wb-plus" aria-hidden="true"></i>Add New Row
                                                    </button>
                                                    <small>New row will be added in last page.</small> </div>
                                            </div>
                                            <div class="ml-auto">
                                                <div class="form-group">
                                                    <input id="demo-input-search2" type="text" placeholder="Search" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <tbody>
                                        <tr>
                                            <td>Shona</td>
                                            <td>Woldt</td>
                                            <td>Airline Transport Pilot</td>
                                            <td>3 Oct 2017</td>
                                            <td><span class="label label-table label-success">Active</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lizzee</td>
                                            <td>Goodlow</td>
                                            <td>Technical Services Librarian</td>
                                            <td>1 Nov 2014</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Isidra</td>
                                            <td>Boudreaux</td>
                                            <td>Traffic Court Referee</td>
                                            <td>22 Jun 2014</td>
                                            <td><span class="label label-table label-success">Active</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Doris</td>
                                            <td>Michael</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 2013</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 2014</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 2017</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 2014</td>
                                            <td><span class="label label-table label-success">Active</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 2013</td>
                                            <td><span class="label label-table label-success">Active</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 2013</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 2014</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 2017</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lorraine</td>
                                            <td>Mcgaughy</td>
                                            <td>Hemodialysis Technician</td>
                                            <td>11 Nov 2014</td>
                                            <td><span class="label label-table label-success">Active</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Judi</td>
                                            <td>Badgett</td>
                                            <td>Electrical Lineworker</td>
                                            <td>23 Jun 2013</td>
                                            <td><span class="label label-table label-success">Active</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Granville</td>
                                            <td>Leonardo</td>
                                            <td>Business Services Sales Representative</td>
                                            <td>19 Apr 2013</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lauri</td>
                                            <td>Hyland</td>
                                            <td>Blackjack Supervisor</td>
                                            <td>15 Nov 2014</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 2014</td>
                                            <td><span class="label label-table label-success">Active</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 2017</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maria</td>
                                            <td>Tangeli</td>
                                            <td>Drywall Stripper</td>
                                            <td>21 May 2014</td>
                                            <td><span class="label label-table label-success">Active</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 2017</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Easer</td>
                                            <td>Dragoo</td>
                                            <td>Drywall Stripper</td>
                                            <td>13 Dec 2014</td>
                                            <td><span class="label label-table label-success">Active</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Maple</td>
                                            <td>Halladay</td>
                                            <td>Aviation Tactical Readiness Officer</td>
                                            <td>30 Dec 2017</td>
                                            <td><span class="label label-table label-danger">Suspended</span> </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="6">
                                                <div class="text-right">
                                                    <ul class="pagination">
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <?php
                    include 'dist/php/right-sidebar.php';
                ?>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <?php
            include 'dist/php/footer.php';
        ?>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/popper/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!-- Footable -->
    <script src="../assets/node_modules/footable/js/footable.all.min.js"></script>
    <!--FooTable init-->
    <script src="dist/js/pages/footable-init.js"></script>
</body>

</html>