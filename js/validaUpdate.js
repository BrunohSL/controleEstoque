jQuery(document).ready(function ($) {
    var url = location.search.slice(1);

    // alert(parametrosUrl);
    if (url) {
        var parametrosUrl = url.split('?');
        var data = {};
        parametrosUrl.forEach(function (parametrosUrl) {
            var parametroQuebrado = parametrosUrl.split('=');
            var nomeParametro = parametroQuebrado[0];
            var valorParametro = parametroQuebrado[1];
            data[nomeParametro] = valorParametro;
            console.log(data);
        });
        
        // alert(data[nomeParametro].valorParametro);
    } else{
        alert('não tem parametro');
    }
})