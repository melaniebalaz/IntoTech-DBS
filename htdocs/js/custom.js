/*
$('#signup-btn').click(function(){

    $('#successSignUp').modal('show')
    if(!checkSignUpEntries()){
        return;
    }
    //createAjaxCallForSignUp();
});
*/

$('#signup-btn').submit(function( event ) {
    createAjaxCallForSignUp();
    event.preventDefault();
});

function findChosenWorkshop(){
    var workshop;
    $(':radio:checked').each(function(){
         workshop=($(this).val());
    });
    return workshop;
}

function createAjaxCallForSignUp() {

    var workshop = findChosenWorkshop();
    if (workshop=="none"){
        workshop="";
    }
    var name = $('#inputName').val();
    var email = $('#inputEmail').val();

    var data = {
        name: name,
        email: email,
        workshop: workshop
    };

    var jsonString = JSON.stringify(data);

    $.ajax({
        url: '/register',
        type: 'post',
        dataType: 'json',
        success: function (data) {
            $('successSignUp').modal('show');
        },
        error: function() {
            //portray error modal
        },
        data: jsonString
    });

}


$( document ).ready(function() {
});