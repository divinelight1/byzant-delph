<?php
    include 'header.php';
?>
<body>

    <div id="wrapper">

        <!-- Navigation -->

        <?php include 'navigation.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Upload Excel File
                        </h1>
                    </div>
                </div>
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="fourm-group">
                            <label>File input</label>
                            <input type="file">
                        </div>
                        <br>
                        <div class="alert alert-success">
                             <strong>Well done!</strong> You successfully read this important alert message.
                        </div>
                        <div class="alert alert-danger">
                            <strong>Oh snap!</strong> Change a few things up and try submitting again.
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include 'footer.php'?>