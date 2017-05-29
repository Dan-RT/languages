



function show_voca(choice, value, number) {

    $('#texteJQ').html('Hello world. Ce texte est affiché par jQuery.');

    $.getJSON('show_voca.php', {
        choice : choice,
        value : value,Rilèes
    }, function(jsondata) {
        // use jsondata here
        //alert(jsondata);
        alert("Entered getJSON");
    });

    /*
    $.get('show_voca.php?q='+value+'&choice='+choice+'&number='+number, function(data) {
        $('#txtHint').html(data);

    });
*/
    $('#start_button').hide();
    $('#answer_form').show();

}

$(function() {

    $('#answer_form').hide();

    $('#check_button').click(function() {

    });

});