function validarlogin(){

    //Validações de campo em branco de login

    var user = document.getElementById("user").value;
    var senha = document.getElementById("passuser").value;

    //Campo email
    if (user == "")
    {
        var Retorno = document.getElementById("Retorno");
        Retorno.innerHTML = "Campo Email vazio!";
    }

    //Campo senha
    if (senha == "")
    {
        var Retorno = document.getElementById("Retorno");
        Retorno.innerHTML = "Campo Senha vazio!";
    }
}