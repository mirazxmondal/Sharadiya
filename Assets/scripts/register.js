function checkPassword(){
    let password = document.getElementById("password").value;
    let cpassword = document.getElementById("cpassword").value;
    console.log(" Password:", password,'\n',"Confirm Password:",cpassword);
    let message = document.getElementById("confirmmessage");

    if(password.length != 0){
        if(password == cpassword){
            message.textContent = "Passwords match!";
        }
        else{
            message.textContent = " Passwords do not match!";
            message.style.color = "red";
        }
    }
    else{
        alert("Password can't be empty!");
        message.textContent = "";
    }
}