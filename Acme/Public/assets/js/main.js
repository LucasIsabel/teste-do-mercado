$(document).ready(function() {

        var codigo_mercadoria = $('#codigo_mercadoria').val();
        var tipo_mercadoria = $('#tipo_mercadoria').val();
        var nome_mercadoria = $('#nome_mercadoria').val();
        var quantidade = $('#quantidade').val();
        var preco = $('#preco').val();
        var tipo_negocio = $('#tipo_negocio').val();
        var operacao = "cadastro";

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
                           }
                       }
                    }
                );
        }

        $('#btn_enviar').on('click',function(){
            cadastrarProduto();
                $("form")[0].reset();
        });

        $('select').material_select();

        /* Aplicação de mascara nos campos inputs */
        /* Usado como referencia, ( http://blog.heitorfig.com/criar-mascara-de-moeda-ou-decimais-com-jquery/ )*/

        $('#preco').maskMoney({
            symbol : 'R$', /* Símbolo da moeda */
            decimal : ',', /* Separador de decimais */
            thousands : '.', /* Separador de milhares */
        });
});

