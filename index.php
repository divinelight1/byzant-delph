<?php include 'frontend_header.php';?>
<body>

 <div id="cst-wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="profile.html">Byzant Delphi</a>
            </div>
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="profile.html" class="dropdown-toggle"><i class="fa fa-user"></i> Login</a>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">
                            Login 
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4">
                       
                    </div>
                    <div class="col-lg-4">
                       <form role="form">
                           <div class="form-group">
                               <label>Email</label>
                               <input type="email" class="form-control custom-int" placeholder="Email">
                           </div>
                           <div class="form-group">
                               <label>Password</label>
                               <input type="password" class="form-control custom-int" placeholder="Password">
                           </div>
                           <button type="button" class="btn btn-lg btn-primary custom-btn">Login</button>
                       </form>
                    </div>
                    <div class="col-lg-4">
                       
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="admin-panel/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="admin-panel/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="admin-panel/js/plugins/morris/raphael.min.js"></script>
    <script src="admin-panel/js/plugins/morris/morris.min.js"></script>
    <script src="admin-panel/js/plugins/morris/morris-data.js"></script>

</body>

</html>
