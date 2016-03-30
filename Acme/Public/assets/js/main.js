$(document).ready(function() {

        var codigo_mercadoria = $('#codigo_mercadoria').val();
        var tipo_mercadoria = $('#tipo_mercadoria').val();
        var nome_mercadoria = $('#nome_mercadoria').val();
        var quantidade = $('#quantidade').val();
        var preco = $('#preco').val();
        var tipo_negocio = $('#tipo_negocio').val();
        var operacao = "cadastro";

        $('#btn_enviar').click(function(){
                cadastrarProduto();
        });

        function cadastrarProduto() {
                $.ajax(
                    {
                       type:"POST",
                       data:
                       {
                         operacao:operacao,
                         codigo_mercadoria:codigo_mercadoria,
                         tipo_mercadoria:tipo_mercadoria,
                         nome_mercadoria:nome_mercadoria,
                         quantidade:quantidade,
                         preco:preco,
                         tipo_negocio:tipo_negocio
                       },
                       url:"../Function/Operacoes.php",
                       success:function(retorno){
                           if(retorno == 1){
                                   alert('Cadastrado com Sucesso');
                           }else{
                                   alert('Erro ao Cadastrar');
                           };
                       }
                    }
                );
        }

        $('select').material_select();

});

