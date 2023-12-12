// VALIDATING LOG-IN FORM

function validateForm(){

    //DECLARING VARIABLES 
    let fullName = document.getElementById ('name').value;
    
    let email = document.getElementById ('email'). value;
    let password = document.getElementById ('password').value;
    let errorMessage = '';

    if(fullName.trim() === '' || email.trim() === '' || password.trim ===''){
        errorMessage.innerHTML = 'Please all fields must be filled';
        return false;       
}
        return true;
        alert( ' FORM SUCCESFULLY SENT');
}