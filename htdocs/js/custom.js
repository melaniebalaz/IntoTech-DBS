/*
$('#signup-btn').click(function(){

    $('#successSignUp').modal('show')
    if(!checkSignUpEntries()){
        return;
    }
    //createAjaxCallForSignUp();
});
*/

$('#signup-form').submit(function(event) {
    event.preventDefault();
    createAjaxCallForSignUp();
});

function findChosenWorkshop(){
    var workshopID;
    $(':radio:checked').each(function(){
         workshopID =($(this).val());
    });
    return workshopID;
}

function createAjaxCallForSignUp() {

    var workshopID = findChosenWorkshop();
    var name = $('#inputName').val();
    var email = $('#inputEmail').val();

    var data = {
        name: name,
        email: email,
        workshopID: workshopID
    };

    var jsonString = JSON.stringify(data);

    $.ajax({
        url: '/register',
        method: 'post',
        contentType: 'json',
        success: function () {
            $('#successSignUp').modal('show');
        },
        error: function() {
            $('#errorSignUp').modal('show');
        },
        data: jsonString
    });

}


$( document ).ready(function() {
});