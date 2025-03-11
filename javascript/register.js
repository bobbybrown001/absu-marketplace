/************************
Check password visibility
*************************/
const passwordInput = document.getElementById('password');
const confirmPasswordInput = document.getElementById('confirmPassword');
const showPasswordSpan = document.querySelector('.show-password');
const showConfirmPasswordSpan = document.querySelector('.show-confirm-password');

showPasswordSpan.addEventListener('click', () => {
    if (passwordInput.type === 'password') {
        passwordInput.type  = 'text';
        showPasswordSpan.innerHTML = '<i class="material-icons">visibility_off</i>';
    } else {
        passwordInput.type = 'password';
        showPasswordSpan.innerHTML = '<i class="material-icons">visibility</i>';
    }
});

showConfirmPasswordSpan.addEventListener('click', () => {
    if (confirmPasswordInput.type === 'password') {
        confirmPasswordInput.type  = 'text';
        showConfirmPasswordSpan.innerHTML = '<i class="material-icons">visibility_off</i>';
    } else {
        confirmPasswordInput.type = 'password';
        showConfirmPasswordSpan.innerHTML = '<i class="material-icons">visibility</i>';
    }
});


/*****************************************
Prevent user from giving space in username
******************************************/
function preventSpace(event){
    if (event.keyCode === 32){
        return false;
    }
    return true;
}
