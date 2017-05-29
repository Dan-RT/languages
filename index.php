
<html>
	<head>
		
		<meta charset="utf-8" />
		<title>SE HABLA IDIOMAS</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="style/index.css"/>

	</head>

	<body>

		<?php

		include("php/navbar_index.php");
		require ("php/word.php");
		require ("php/word_manager.php");

		/*$data = ([
			"french" => "french",
			"english" => "english",
			"spanish" => "spanish",
			"polish" => "polish",
			"type_word" => "verb",
			"theme" => "theme",
			"main_theme" => "main_theme",
			"extra_theme" => "extra_theme",
			"variante_esp_1" => "variante_esp_1",
			"variante_esp_2" => "variante_esp_2",
			"variante_esp_3" => "variante_esp_3"
		]);*/

		$data = ([
			"id" => 719
		]);

		$word_m = new word_manager();
		$tmp_word = new word($data);

		$word_m->delete($tmp_word);



		?>



		<div class="container-fullwidth container-fluid">
			<div class="row">
				<div class="col-lg-offset-4 col-sm-4">
					<form class="form_section" action="php/studying.php" method="POST">

						<div class="row" id="First_form" >
							<div class="row title">
								<div class="col-sm-12">
									<h3>Choose your method :</h3>
								</div>
							</div>

							<div class="radio">
								<div class="row type">
									<div class="col-lg-offset-1 col-sm-6">
										<label for="radio_type">By type</label>
									</div>
									<div class="col-sm-3">
										<input id="radio_type" type="radio" name="first_choice" value="1">
									</div>

								</div>

								<div class="row theme">
									<div class="col-lg-offset-1 col-sm-6">
										<label for="radio_theme">By theme</label>
									</div>
									<div class="col-sm-3">
										<input id="radio_theme"  type="radio" name="first_choice" value="2">
										<!-- Si jamais pour faire remarcher les liens, mettre name à "radio" -->
									</div>
								</div>

							</div>

							<!-- <button id="First_form_button" type="submit" class="btn btn-md btn-default submit_style"  value="Enter">
                                <span class="glyphicon glyphicon-ok"></span> Submit
                            </button>-->
						</div>

						<div class="row" id="Type_form">
							<h3>Choose the type :</h3>
							<select name="type" id="type_choice">
								<option value="verb">Verbs</option>
								<option value="noun">Nouns</option>
								<option value="adjective">Adjectives</option>
								<option value="preposition">Prepositions</option>
							</select>

						</div>

						<div class="row" id="Theme_form">
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
						</div>

						<button id="submit_button" type="submit" class="btn btn-md btn-default submit_button" value="Enter">
							<span class="glyphicon glyphicon-ok"></span> Submit
						</button>
					</form>

				</div>
			</div>
		</div>



		<?php include("php/footer_index.php"); ?>


		<script src="js/lib/jquery.min.js"></script>
		<script src="js/index.js"></script>

	</body>

</html>






<!--

    <section>

        <p>Que pensez-vous de la navigation du site?</p>

        <div>

            <label class="label_radio" for="navigation_super">
                <input id="navigation_super" type="radio" name="navigation" value="1" />
                Super
            </label>

        </div>

        <div>

            <label class="label_radio" for="navigation_mieux">
                <input id="navigation_mieux" type="radio" name="navigation" value="2"/>
                Y'a mieux
            </label>

        </div>

        <div>

            <label class="label_radio" for="navigation_perdu">
                <input id="navigation_perdu" type="radio" name="navigation" value="3" />
                Je me suis perdu
            </label>

        </div>

        <div>

            <label class="label_radio" for="navigation_nulle">
                <input id="navigation_nulle" type="radio" name="navigation" value="4"/>
                Nulle
            </label>

        </div>

    </section>
-->