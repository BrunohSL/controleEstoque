// Criar um if para verificar se a senha é igual a confirmação de senha.
// Se for diferente retornar false e inserir essa função no botão.a

// Se a validação passar não retornar nada e o programa seguirá com o cadastro no banco

// function validaSenha(){

// $('#senhaErrada').hide();

$('#btnCadastro').click( function() {

    var count = 0;

    var senha = document.getElementById('senha').value;
    var confirmaSenha = document.getElementById('confirmaSenha').value;

    console.log(senha);
    console.log(confirmaSenha);

    if(senha != confirmaSenha){
        console.log('Entrou na merda do if');
        console.log(count);
        count = count + 1;
        swal('Oops...','Digite a mesma senha nos dois campos!','error');

        $('#senhaErrada').css("display", "block");
        return false;
        // $("form").submit(function(e) {
        //     //para a função do submit, fica na página e segue com o código
        //     e.preventDefault();
        // });
    }
});

    // if((document.getElementById('senha').value == null) || (document.getElementById('confirmaSenha').value == null)){
        // if(document.getElementById('senha').value != document.getElementById('confirmaSenha').value){
        //     swal('Oops...','Digite a mesma senha nos dois campos!','error');
        //     $("form").submit(function(e) {
        //         //para a função do submit, fica na página e segue com o código
        //         e.preventDefault();
        //     });
        // }
    // }

    
// }