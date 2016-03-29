$(document).ready(function() {

        var codigo_mercadoria = $('#codigo_mercadoria').val();
        var tipo_mercadoria = $('#tipo_mercadoria').val();
        var nome_mercadoria = $('#nome_mercadoria').val();
        var quantidade = $('#quantidade').val();
        var preco = $('#preco').val();
        var tipo_negocio = $('#tipo_negocio').val();

        $('#btn_enviar').click(function(){
                cadastrarProduto();
        });

        function cadastrarProduto() {
                $.ajax(
                    {
                       type:"POST",
                       data:
                       {
                         codigo_mercadoria:codigo_mercadoria,
                         tipo_mercadoria:tipo_mercadoria,
                         nome_mercadoria:nome_mercadoria,
                         quantidade:quantidade,
                         preco:preco,
                         tipo_negocio:tipo_negocio
                       },
                       url:"../Function/ListarDados.php",
                       success:function(retorno){
                           alert(retorno);
                       }
                    }
                );
        }

        $('select').material_select();

});

