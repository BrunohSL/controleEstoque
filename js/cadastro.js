jQuery(document).ready(function($){

    // $( "#cadastroForm" ).validate({
    //     debug: true,
    //     success: "valid",
    //     rules: {
    //       senha: "required",
    //       confirmaSenha: {
    //         equalTo: "#senha"
    //       }
    //     }
    // });
    
    //função que cadastra as informações dos forms no banco de dados
    function cadastro(targetElement){

        // var senha = document.getElementById('senha').value;
        // var confirmaSenha = document.getElementById('confirmaSenha').value;
        
        // alert(senha);
        // alert(confirmaSenha);

        // fazer um if para verificar se a validação passou. Se ppassar colocar o codigo abaixo caso 
        // contrário jogar um sweet alert de erro e voltar para o cadastro (com as informações preenchidas 
        // para correção).

        //recebe o formulário que foi clicado, formMonster-cad ou formItem-cad
        const form = $(targetElement);

        //recebe as informações que serão adicionadas no banco
        const data = form.serialize();




        //passa o caminho do arquivo de cadastro, o metodo e os dados do form (data)
        $.ajax({
            url: 'insertUser.php',
            method: "POST",
            data: data,
        }).done(function(res){

            if(res == "Cadastro efetuado com sucesso"){
                //gera o sweetAlert ao clicar no botão Cadastrar
                swal('Good job!',res,'success');
            } else{
                swal( 'Oops...', res, 'error' );
            }
            //após clicar no botão do sweetAlert limpar os campos do form
            form.find('input').val('');
        })
    }

    $("form").submit(function(e) {
        
        //para a função do submit, fica na página e segue com o código
        e.preventDefault();

        //cadastra as informações do form que é passado como parametro no e.target, formMonster-cad ou formItem-cad
        cadastro(e.target);
    });
})