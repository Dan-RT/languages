<html>
<head>

    <meta charset="utf-8" />
    <title>SE HABLA IDIOMAS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/studying.css"/>

</head>

    <body>

        <?php
            include("navbar.php");
            require_once("db.php");
        ?>

        <div class="container-fullwidth voca_section")">
            <div class="row">
                <div class="col-lg-offset-4 col-sm-4">

        <?php
            if (isset($_POST['type']) || isset($_POST['theme'])) {

                if ($_POST['type']) {
        ?>
                    <button id="start_button" class="btn btn-block btn-primary" onclick="show_voca(0,'<?php echo $_POST['type'];?>', 1)">START </button>

        <?php
                } elseif (isset($_POST['theme'])) {
        ?>
                    <button id="start_button" class="btn btn-block btn-primary" onclick="show_voca(1,'<?php echo $_POST['theme'];?>', 1)">START </button>
        <?php
                }
            }
        ?>
                    <div id="txtHint"><b>Word info will be listed here...</b></div>

                    <form id="answer_form">
                        <label><input class="input-lg form-control" type="text" name="answer" placeholder="Your Answer"/></label>

                        <button id="check_button" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-ok"></span> Check</button>

                    </form>

                </div>
            </div>
        </div>

            Ce texte est affiché en HTML
            <span id="texteJQ"></span>

        <?php include("footer.php"); ?>

    </body>

    <script src="../js/lib/jquery.min.js"></script>
    <script src="../js/studying.js"></script>

</html>

