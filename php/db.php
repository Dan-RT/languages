<?php

    function query_database($SQLCommand, $var) {

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=Languages;charset=utf8', 'root', 'root');

            $reponse = $bdd->prepare($SQLCommand);
            $reponse->execute(array($var));

            if ($reponse != NULL) {
                return $reponse;
            }


        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
        
    }

//insert_product($_POST['english'],$_POST['spanish'],$_POST['french'], $_POST['variant_esp1'],$_POST['variant_esp2'],$_POST['variant_esp3'],$_POST['type_word'],$_POST['theme']);

    function insert_product ($english, $spanish, $french, $variant_esp1, $variant_esp2, $variant_esp3, $type_word, $theme, $main_theme) {

        echo $english;

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=Languages;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $req = $bdd->prepare('INSERT INTO spanish (english, spanish, french, variant_esp1, variant_esp2, variant_esp3, type_word, theme, main_theme) 
VALUES(:english, :spanish, :french, :variant_esp1, :variant_esp2, :variant_esp3, :type_word, :theme, :main_theme)');

        $req->execute(array('english' => $english,
                            'spanish' => $spanish,
                            'french' => $french,
                            'variant_esp1' => $variant_esp1,
                            'variant_esp2' => $variant_esp2,
                            'variant_esp3' => $variant_esp3,
                            'type_word' => $type_word,
                            'theme' => $theme,
                            'main_theme' => $main_theme));

        $req->closeCursor();
    }



    function query_database_personnalized ($value, $choice, $number) {



        try {
            $bdd = new PDO('mysql:host=localhost;dbname=Languages;charset=utf8', 'root', 'root');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        if ($choice == 0) {

            $req = $bdd->prepare('SELECT english, spanish FROM Spanish WHERE type_word = ?');
            $req->execute(array($value));

            //$req = $bdd->prepare('SELECT english, spanish FROM Spanish WHERE type_word = ? AND WHERE id = ?');
            //$req->execute(array($value, $number));
            $req->closeCursor();

            if ($req != NULL) {
                return $req;
            }

        } else if ($choice == 1) {

            $req = $bdd->prepare('SELECT english, spanish FROM Spanish WHERE theme = ?');
            $req->execute(array($value));

            //$req = $bdd->prepare('SELECT english, spanish FROM Spanish WHERE theme = ? AND WHERE id = ?');
            //$req->execute(array($value, $number));
            $req->closeCursor();

            if ($req != NULL) {
                return $req;
            }

        } else {
            echo "Problem with Get choice";
        }

    }





?>

