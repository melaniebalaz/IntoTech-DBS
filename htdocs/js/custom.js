/*
$('#signup-btn').click(function(){

    $('#successSignUp').modal('show')
    if(!checkSignUpEntries()){
        return;
    }
    //createAjaxCallForSignUp();
});
*/

function findChosenWorkshop(){
    var workshop;
    $(':radio:checked').each(function(){
         workshop=($(this).val());
    });
    return workshop;
}

function checkSignUpEntries(){
    $('.notAValid').show();

    var checkBool = true;
    //Check if everything has been filled out correctly
    if ($('#inputName').val().length == 0){
        $('#nameChecker').text("Please enter a name!");
        checkBool = false;
    }
    else {
        $('#nameChecker').empty();
    }
    if ($('#inputEmail').val().length == 0){
        $('#emailChecker').text("Please enter an email address");
        checkBool = false;
    }
    else {
        $('#emailChecker').empty();
    }
    return checkBool;
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
        url: '/signup.php',
        type: 'post',
        dataType: 'json',
        success: function (data) {
            //portray success modal
        },
        error: function() {
            //portray error modal
        },
        data: jsonString
    });

}


$( document ).ready(function() {
});