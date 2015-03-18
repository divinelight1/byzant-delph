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
                            <button type="button" class="btn btn-primary custom-fr-bm popup-button">Script</button>
                        </div>
                        <div class="col-lg-6 custom-fr-bt">
                            <button type="button" class="btn btn-danger custom-fr-bm">Submit/Next</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="popup">
                <div class="close">x</div>
                <p>Guten Tag, *Eigenen Namen nennen* am Aparat.<br>
Spreche ich mit dem Herr Müller?<br>
/wenn nein, dann nach Herr Müller fragen...<br>
/wenn ja:<br>
Herr Müller, ich melde mich von der Online Aphoteke, Sie haben bei uns die *Produkt nennen* mal bestellt.
Wir haben jetzt ein Sonderangebot für unsere Kunden und da wären die *gleiches produkt nennen* für Sie dieses mal nur noch *preis nennen*.
Natürlich gilt das Sonderngebot mit Rabat auch für die anderen Artikel die wir haben und auch für die anderen Packungen.
Und da wollten wir sehen ob sie eventuel am Sonderangebot mit Rabat Interesse hätten Herr Müller!? *warten*<br>
/Ohne Interesse Argument nennen:<br>
-Bei den grösseren Packungen kann ich Ihnen als Telefonverkäufer sogar noch einen rabat dazu schlagen, bis zu 20% Gratis Pillen für Sie Herr Müller.<br>
/Bei Interesse Verkauf schließen:<br>
- Produkt mit Menge abmachen, Daten und Infos bestätigen. Mail, Adresse, Visa/Wire, Produkt mit menge und Preis.<br>
</p>
            </div>
            <div id="black-overlay"></div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".popup-button").click(function(){
                $(".popup").fadeIn("slow");
                 $("#black-overlay").fadeIn("slow");
            });
            $(".close").click(function(){
                $(".popup").fadeOut(300);
                 $("#black-overlay").fadeOut(300);

            });
            $("#black-overlay").click(function(){
                $(".popup").fadeOut(300);
                 $("#black-overlay").fadeOut(300);

            });

        });
    </script>
   <?php include 'frontend_footer.php';?>
