function passConfirm() {
    var pass = document.getElementById("inputPassword");
    var repeatPass = document.getElementById("inputPasswordConfirm");
    var invPass = document.getElementById("trumpWrong");

    setInterval(function() {

        if(pass.value != repeatPass.value) {
            
            invPass.innerText = " Passwordsne er ikke ens!";
            document.getElementById("register").disabled = true;


        }

        else {

            document.getElementById("register").disabled = false;            
            invPass.innerText = "";

        }


    }, 250);
}