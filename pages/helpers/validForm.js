function validform() {

    var a = document.forms["register"]["username"].value;
    var b = document.forms["register"]["email-address"].value;
    var c = document.forms["register"]["pasword"].value;
    var d = document.forms["register"]["password2"].value;

    if (a==null || a=="")
    {
        alert("Please Enter a valid username");
        return false;
    }else if (b==null || b=="")
    {
        alert("Please Enter Your Email Address");
        return false;
    }else if (c==null || c=="")
    {
        alert("Please choose a password");
        return false;
    }else if (d==null || d=="")
    {
        alert("Please confirm your password");
        return false;
    }else if (c != d)
    {
        alert("Your passwords do not match");
        return false;
    }
}