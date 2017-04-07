<!DOCTYPE html>
<html>
    <head>
        <title>Target page</title>
        <meta charset="utf-8" />
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../style/form_first_choice.css"/>

    </head>
    <body>
    <?php
        include("navbar.php");

        if (isset($_POST['radio'])) {   // if ANY of the options was checked
            if ($_POST['radio'] == "type") {
                ?>

        <div class="container-fullwidth">
            <div class="row">
                <div class="col-lg-offset-4 col-sm-4 form_section">
                    <form  action="studying.php" method="POST">

                        <h3>Choose the type :</h3>
                        <select name="type" id="type_choice">
                            <option value="verb">Verbs</option>
                            <option value="noun">Nouns</option>
                            <option value="adjective">Adjectives</option>
                            <option value="preposition">Prepositions</option>
                        </select>

                        <button type="submit" class="btn btn-md btn-default submit_button" value="Enter">
                            <span class="glyphicon glyphicon-ok"></span> Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
               <?php

            } else { ?>

        <div class="container-fullwidth">
            <div class="row">
                <div class="col-lg-offset-4 col-sm-4 form_section">
                    <form  action="studying.php" method="POST">

                        <h3>Choose the theme :</h3>

                        <select name="theme" id="theme_choice">
                            <option value="common">Common</option>
                            <option value="family">Family</option>
                            <option value="childhood">Childhood</option>
                            <option value="food">Food (meals, fruits, vegetables, meat, drinks)</option>
                            <option value="house">House</option>
                            <option value="feelings">Feelings</option>
                            <option value="violence">Violence</option>
                            <option value="sport">Sport</option>
                            <option value="medical">Medical(medical, disease, medicines)</option>
                            <option value="body">Body (bones and muscles, organs, face)</option>
                            <option value="personality">Personality</option>
                            <option value="physical">Physical</option>
                            <option value="clothes">Clothes</option>
                            <option value="shape">Shapes</option>
                            <option value="religion">Religion</option>
                            <option value="city">City (city, electricity)</option>
                            <option value="school">School</option>
                            <option value="work">Work</option>
                            <option value="job">Jobs</option>
                            <option value="qualities">Qualities</option>
                            <option value="taste">Tastes </option>
                            <option value="quantities">Quantities</option>
                            <option value="position">Position</option>
                            <option value="temporal">Temporal</option>
                            <option value="variation">Variation</option>
                            <option value="animals">Animals</option>
                            <option value="other">Other</option>
                        </select>

                        <button type="submit" class="btn btn-md btn-default" value="Enter">
                            <span class="glyphicon glyphicon-ok"></span> Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>

    <?php

            }

        } else {
            ?>

            <div class="container-fullwidth ">
                <div class="row">
                    <div class="col-lg-offset-4 col-sm-4 form_section">
                        <h3>Nothing was selected</h3>
                        <a href="../index.php" class="btn btn-default"><span class="glyphicon glyphicon-log-out"></span> Home page</a>
                    </div>
                </div>
            </div>

            <?php
        }
    ?>

    <?php include("footer.php"); ?>

    </body>
</html>