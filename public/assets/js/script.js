// Unmask Password on Login Page
function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
        $("#icon-eye").attr('class',"fa fa fa-eye");
    } else {
        x.type = "password";
        $("#icon-eye").attr('class',"fa fa-eye-slash");
    }
}