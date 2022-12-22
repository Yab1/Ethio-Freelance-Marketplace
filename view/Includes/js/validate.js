function validate(){
        var alphaExp=/^[a-zA-Z]+$/;
        // /[a-zA-Z]/g;
        var numeric=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
        var uppercase=/[A-Z]/g;
        var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
      
        if (!record.username.value.match(alphaExp))
        {
            alert("Enter Username")
            record.User.focus()
            return false;
        }

        if(!record.email.value.match(emailExp)){
            alert("Please provide your email")
        }
        if(!record.reg-pass.value.match(numeric)){

            alert("Password doesn't fullfil requirments")
        }
        else {
            alert("Thank u for registering  ")
        }
        
} 


function my1function() {
    var y = document.getElementById("pwd");
    if (y.type === "password") {
        y.type = "text";

        document.getElementById('hide1').style.display = "inline-block";
        document.getElementById('show1').style.display = "none";
    }
    else{
        y.type = "password";
        document.getElementById('hide1').style.display = "none";
        document.getElementById('show1').style.display = "inline-block";
    }

}










