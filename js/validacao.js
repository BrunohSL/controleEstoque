$('#btnCadastro').click( function() {

    var senha = document.getElementById('password').value;
    var confirmaSenha = document.getElementById('confirmPassword').value;

    if(senha != confirmaSenha){

        swal('Oops...','Digite a mesma senha nos dois campos!','error');
        $('#senhaErrada').css("display", "block");
        return false;
    }
});
