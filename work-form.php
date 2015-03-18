<?php include 'frontend_header.php';?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'frontend_nav.php' ;?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Work Form
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-desktop"></i> Work Form
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-3 custom-bdr">
                        <label>Answering Machine-AM</label>
                        <label class="radio-inline">
                            <input type="radio" class="custom-rd" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" >
                        </label>
                    </div>
                    <div class="col-lg-3 custom-bdr">
                        <label>Invalid Phone-IP</label>
                        <label class="radio-inline">
                            <input type="radio" class="custom-rd" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" >
                        </label>
                    </div>
                    <div class="col-lg-3 custom-bdr">
                        <label>Dropped-DP</label>
                        <label class="radio-inline">
                            <input type="radio" class="custom-rd" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" >
                        </label>
                    </div>
                    <div class="col-lg-3 custom-bdr">
                        <label>Call Back-CB</label>
                        <label class="radio-inline">
                            <input type="radio" class="custom-rd" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" >
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 custom-bdr">
                        <label>Not at Home-NH</label>
                        <label class="radio-inline">
                            <input type="radio" class="custom-rd" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" >
                        </label>
                    </div>
                    <div class="col-lg-3 custom-bdr">
                        <label>Nobody with that name-NN</label>
                        <label class="radio-inline">
                            <input type="radio" class="custom-rd" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" >
                        </label>
                    </div>
                    <div class="col-lg-3 custom-bdr">
                        <label>Not Intrested-NI</label>
                        <label class="radio-inline">
                            <input type="radio" class="custom-rd" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" >
                        </label>
                    </div>
                    <div class="col-lg-3 custom-bdr">
                        <label>Frustrated-FR</label><br>
                        <label>(with last purchase)</label>
                        <label class="radio-inline">
                            <input type="radio" class="custom-rd last-rd" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" >
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="custom-sl">
                            <label>Sale-S</label>
                            <label class="radio-inline">
                                <input type="radio" class="custom-rd" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" >
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
                <form>
                    <div class="row custom-hr">
                        <div class="col-lg-4">
                            <label class="custom-lbl">Id: </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-4">
                            <label class="custom-lbl">Name: </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-4">
                            <label class="custom-lbl">Email: </label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row custom-hr">
                        <div class="col-lg-4">
                            <label class="custom-lbl">Last Order Date: </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-4">
                            <label class="custom-lbl">Last Order Id: </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-4">
                            <label class="custom-lbl">No. of Orders: </label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row custom-hr">
                        <div class="col-lg-4">
                            <label class="custom-lbl">Phones: </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-4">
                            <label class="custom-lbl">Address: </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-4">
                            <label class="custom-lbl">Cities: </label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row custom-hr">
                        <div class="col-lg-4">
                            <label class="custom-lbl">Countries: </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-4">
                            <label class="custom-lbl">Payment: </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-lg-4">
                            <label class="custom-lbl">Items: </label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-primary custom-fr-bm">Edit</button>
                        </div>
                        <div class="col-lg-6 custom-fr-bt">
                            <button type="button" class="btn btn-danger custom-fr-bm">Submit/Next</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   <?php include 'frontend_footer.php';?>