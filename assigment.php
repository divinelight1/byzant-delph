<?php include 'frontend_header.php';?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'frontend_nav.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            List oerations
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-edit"></i> Operations   
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-6 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-tasks fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">12</div>
                                            <div>New Tasks!</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                <div class="panel-footer">
                                    <ul class="custom-lst">
                                        <li>
                                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Open Tasks <i class="fa fa-fw fa-caret-down"></i></a>
                                            <ul id="demo" class="collapse">
                                                <li>
                                                    <a href="#">Operations 1</a>
                                                </li>
                                                <li>
                                                    <a href="#">Operations 2</a>
                                                </li>
                                                 <li>
                                                    <a href="#">Operations 3</a>
                                                </li>
                                                <li>
                                                    <a href="#">Operations 4</a>
                                                </li>
                                                 <li>
                                                    <a href="#">Operations 5</a>
                                                </li>
                                                <li>
                                                    <a href="#">Operations 6</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                            </a>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php include 'frontend_footer.php'; ?>
