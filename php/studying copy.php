<html>
<head>

    <meta charset="utf-8" />
    <title>SE HABLA IDIOMAS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../stylestudying.css"/>

</head>

    <body>

        <?php
            include("navbar.php");
            require_once("db.php");
        ?>
        <div class="container-fullwidth voca_section">
            <div class="row">
                <div class="col-lg-offset-4 col-sm-4">

    <?php
        if (isset($_POST['type']) || isset($_POST['theme'])) {


            if ($_POST['type']) {
                $reponse = query_database('SELECT english, spanish FROM Spanish WHERE type_word = ?', $_POST['type']);
            } elseif (isset($_POST['theme'])) {
                $reponse = query_database('SELECT english, spanish FROM Spanish WHERE theme = ?', $_POST['theme']);
            }

            while ($donnees = $reponse->fetch()) {
    ?>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-5" style="color: dodgerblue">
                                <?php echo $donnees['english'];?>
                            </div>
                            <div class="col-sm-2">
                                <p>    ->    </p>
                            </div>
                            <div class="col-sm-5" style="color: red">
                                <?php echo $donnees['spanish'];?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php

            }

            $reponse->closeCursor();

        } else {
            echo "Can't receive type or theme data request";
        }

             ?>
                </div>
            </div>
        </div>

        <?php include("footer.php"); ?>
    </body>
</html>

