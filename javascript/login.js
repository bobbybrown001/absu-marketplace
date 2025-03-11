
/*****************************************
Prevent user from giving space in username
******************************************/
function preventSpace(event){
    if (event.keyCode === 32){
        return false;
    }
    return true;
}
