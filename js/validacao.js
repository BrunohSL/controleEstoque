$('#btnCadastro').click( function() {

    var senha = document.getElementById('senha').value;
    var confirmaSenha = document.getElementById('confirmaSenha').value;

    if(senha != confirmaSenha){

        // swal('Oops...','Digite a mesma senha nos dois campos!','error');
        echo('echo');
        $('#senhaErrada').css("display", "block");
        return false;
    }
});