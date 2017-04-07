<html>
    <head>

        <meta charset="utf-8" />
        <title>SE HABLA IDIOMAS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../style/add_voca.css"/>
    </head>

    <body>

    <?php include("navbar.php"); ?>

        <div class="container-fullwidth container-fluid">
            <div class="row">
                <div class="col-lg-offset-4 col-sm-4">

                    <form class="form_section" action="db_add_voca.php" method="POST">

                            <h3 class="title">
                                ADD A WORD
                            </h3>

                            <p>
                                <label><input class="input-lg form-control" type="text" name="english" placeholder="English"/></label>
                            </p>
                            <p>
                                <label><input class="input-lg form-control" type="text" name="spanish" placeholder="Spanish"/></label>
                            <p>

                            <p>
                                <label><input class="input-lg form-control" type="text" name="french" placeholder="French"/></label>
                            <p>

                            <p>
                                <label><input class="input-lg form-control" type="text" name="variant_esp1" placeholder="Variant #1"/></label>
                            <p>

                            <p>
                                <label><input class="input-lg form-control" type="text" name="variant_esp2" placeholder="Variant #2"/></label>
                            <p>

                            <p>
                                <label><input class="input-lg form-control" type="text" name="variant_esp3" placeholder="Variant #3"/></label>
                            <p>

                            <div class="row select_type">
                                <div class="col-sm-3">
                                    <label for="type_word">Type :</label><br />
                                </div>
                                <div class="col-sm-3">
                                    <select name="type_word" id="type_choice">
                                        <option value="noun">Nouns</option>
                                        <option value="verb">Verbs</option>

                                        <option value="adjective">Adjectives</option>
                                        <option value="preposition">Prepositions</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row select_theme">
                                <div class="col-sm-3">
                                    <label for="theme">Main Theme :</label><br />
                                </div>
                                <div class="col-sm-9">
                                    <select name="main_theme" id="theme_choice">
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
                                </div>
                            </div>
                            <p>
                                <label><input class="input-lg form-control new_theme" type="text" name="main_theme" placeholder="New Main theme"/></label>
                            <p>

                            <p>
                                <label><input class="input-lg form-control precise_theme" type="text" name="theme" placeholder="Precise theme"/></label>
                            <p>



                            <button type="submit" class="btn_submit btn btn-lg btn-default" value="Enter">
                                <span class="glyphicon glyphicon-ok"></span> Submit
                            </button>

                        </form>
                </div>
            </div>
        </div>

    <?php include("footer.php"); ?>


    </body>
</html>



