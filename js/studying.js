



function show_voca(choice, value, number) {

    $('#texteJQ').html('Hello world. Ce texte est affiché par jQuery.');

    $.get('show_voca.php?q='+value+'&choice='+choice+'&number='+number, function(data) {
        $('#txtHint').html(data);
    });

    $('#start_button').hide();
    $('#answer_form').show();
}

$(function() {
    $('#answer_form').hide();


    $('#check_button').click(function() {

    });

});