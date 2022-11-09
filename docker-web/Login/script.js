function msg(){
    let uname = document.getElementById('username');
    let pwd = document.getElementById('password');

    if (!pwd.value && !uname.value)
    {
        alert('Geben Sie Ihre Anmeldedaten an')
    }
    else if(!uname.value)
    {
        alert("Geben Sie Ihren Benutzernamen ein");
    }
    else if (!pwd.value)
    {
        alert("Geben Sie Ihr Passwort ein");
    }
}
