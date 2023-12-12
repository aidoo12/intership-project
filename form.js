// VALIDATING LOG-IN FORM

function validateForm(){
    //DECLARING VARIABLES 
    let fullName = document.getElementById ('name').value;
    
    let email = document.getElementById ('email'). value;
    let password = document.getElementById ('password').value;
    let errorMessage = '';
    console.log(fullName, email, password);
    if(fullName.trim() === '' || email.trim() === '' || password.trim ===''){
        errorMessage = 'Please all fields must be filled';
        alert(errorMessage);
        return false;
    }
    alert( 'FORM SUCCESSFULLY SENT');
    return true;
}