window.addEventListener('load', main);

function main(){
    signUpButton = document.querySelector("#sign-up");
    signUpButton.addEventListener("click", loadStartUp);    
}

function loadStartUp(){
    console.log("button clicked");
    window.location='sign-up.php';
}