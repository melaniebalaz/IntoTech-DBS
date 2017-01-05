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
        method: 'post',
        contentType: 'json',
        success: function (data) {
            $('successSignUp').modal('show');
        },
        error: function() {
            $('errorSignUp').modal('show');
        },
        data: jsonString
    });

}


$( document ).ready(function() {
});