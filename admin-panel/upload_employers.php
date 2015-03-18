<?php include 'header.php'; ?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'navigation.php';?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Upload Employers
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>First And Last Name</th>
                                    <th>Age</th>
                                    <th>Telephone</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control custom-int" placeholder="First and Last Name"></td>
                                    <td><input type="text" class="form-control custom-int" placeholder="Age"></td>
                                    <td><input type="text" class="form-control custom-int" placeholder="Telephone"></td>
                                    <td><input type="text" class="form-control custom-int" placeholder="Email"></td>
                                    <td><button type="button" class="btn btn-lg btn-warning custom-btn">Upload</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include 'footer.php';?>