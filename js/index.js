$(function() {

    $('#Type_form').hide();
    $('#Theme_form').hide();
    $('#submit_button').hide();

    $('input[name=first_choice]').click(function () {

        var first_choice = $('input[name=first_choice]:checked').val();
        //alert("First choice : " + first_choice);
        //$('#First_form').hide();

        if (first_choice == 1) {
            $('#texteJQ').html('Type sélectionné');
            $('#Type_form').fadeIn(200);
            $('#Theme_form').hide();
            $('#submit_button').fadeIn(200);
        } else if (first_choice == 2) {
            $('#texteJQ').html('Theme sélectionné');
            $('#Theme_form').fadeIn(200);
            $('#Type_form').hide();
            $('#submit_button').fadeIn(200);
        }
    })


});





/*


 $('input[name=navigation]').click(function () {
 var navigation = $('input[name=navigation]:checked').val()

 if (navigation == 3) {
 $('#texteJQ').html('Super');
 }

 switch (navigation) {
 case '1':
 alert("Switch working : " + navigation);
 $('#test_label').html('Super');
 break;
 case '2':
 alert("Switch working : " + navigation);
 $('#test_label').html("Y'a mieux");
 break;
 case '3':
 alert("Switch working : " + navigation);
 $('#test_label').html('Je me suis perdu');
 case '4':
 alert("Switch working : " + navigation);
 $('#test_label').html('Nulle');
 }
 })


 */