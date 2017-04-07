
<html>
    <head>

        <meta charset="utf-8" />
        <title>SE HABLA IDIOMAS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../style/index.css"/>

    </head>

    <body>

        <?php include("navbar.php"); ?>

        require_once("db.php");

        echo "TEST";

        insert_product($_POST['english'],$_POST['spanish'],$_POST['french'], $_POST['variant_esp1'],$_POST['variant_esp2'],$_POST['variant_esp3'],$_POST['type_word'],$_POST['theme'], $_POST['main_theme']);
        echo "TEST";

        ?>

        <script>
            window.location.href = "php/add_voca.php";
        </script>

    </body>
</html>