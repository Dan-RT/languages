

<?php

    require_once("db.php");

    $q = $_GET['q'];
    $choice = $_GET['choice'];
    $number = $_GET['number'];

    //echo "NUMBER RECEIVED : " . $number;

    //$reponse = query_database_personnalized($q, $choice, $number);

    if ($choice == 0) {
        //$reponse = query_database_personnalized($q, $choice, $number);
        $reponse = query_database('SELECT english, spanish FROM Spanish WHERE type_word = ?', $q);
    } elseif ($choice == 1) {
        $reponse = query_database('SELECT english, spanish FROM Spanish WHERE theme = ?', $q);

    } else {
        echo "Problem with Get choice";
    }

    //while ($donnees = $reponse->fetch()) {

    $donnees = $reponse->fetch();
    $final = json_encode($donnees);
    echo $final;

?>

<!--
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
    -->

<?php
    //}

?>







