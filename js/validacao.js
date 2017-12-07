$('#btnCadastro').click( function() {

    var senha = document.getElementById('password').value;
    var confirmaSenha = document.getElementById('confirmPassword').value;

    if(senha != confirmaSenha){

        swal('Oops...','Digite a mesma senha nos dois campos!','error');
        $('#senhaErrada').css("display", "block");
        return false;
    }
});

$('#btnLogin').click(function (){

    //recebe o formulário que foi clicado
    const form = $(targetElement);
    
    //recebe as informações que serão adicionadas no banco
    const data = form.serialize();

    //passa o caminho do arquivo de cadastro, o metodo e os dados do form (data)
    $.ajax({
        url: 'validaLogin.php',
        method: "POST",
        data: data,
    }).done(function(res){

        if(res == "sucesso"){
            //gera o sweetAlert ao clicar no botão Cadastrar
            swal('Good job!',res,'success');
        } else{
            swal( 'Oops...', res, 'error' );
        }
    })
});