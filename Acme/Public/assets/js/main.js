$(document).ready(function(){



            /* Iniciando propriedados do framework Materialize */

            $('select').material_select();
            $('.modal-trigger').leanModal();

            /* Fechamento */

            var codigo_mercadoria = $('#codigo_mercadoria').val();
            var tipo_mercadoria = $('#tipo_mercadoria').val();
            var nome_mercadoria = $('#nome_mercadoria').val();
            var quantidade = $('#quantidade').val();
            var preco = $('#preco').val();
            var tipo_negocio = $('#tipo_negocio').val();
            var operacao = "cadastro";

            function validaDados() {

                if (codigo_mercadoria == '') {
                    $('#myMoldal').openModal();
                    $('#codigo_mercadoria').css({"borderBottom": "2px solid red"});
                    return false;
                }

                if (tipo_mercadoria == '') {
                    $('#myMoldal').openModal();
                    $('#tipo_mercadoria').css({"borderBottom": "2px solid red"});
                    return false;
                }

                if (nome_mercadoria == '') {
                    $('#myMoldal').openModal();
                    $('#nome_mercadoria').css({"borderBottom": "2px solid red"});
                    return false;
                }

                if (quantidade == '') {
                    $('#myMoldal').openModal();
                    $('#quantidade').css({"borderBottom": "2px solid red"});
                    return false;
                }

                if (preco == '') {
                    $('#myMoldal').openModal();
                    $('#preco').css({"borderBottom": "2px solid red"});
                    return false;
                }

                if (tipo_negocio == '') {
                    $('#myMoldal').openModal();
                    $('#codigo_mercadoria').css({"borderBottom": "2px solid red"});
                    return false;
                }


                return true;
            }

            function cadastrarProduto() {
                $.ajax(
                    {
                        type: "POST",
                        data: {
                            operacao: operacao,
                            codigo_mercadoria: codigo_mercadoria,
                            tipo_mercadoria: tipo_mercadoria,
                            nome_mercadoria: nome_mercadoria,
                            quantidade: quantidade,
                            preco: preco,
                            tipo_negocio: tipo_negocio
                        },
                        url: "../Function/Operacoes.php",
                        success: function (retorno) {
                            if (retorno == 1) {
                                $('#modalConfirm').openModal();
                            } else {
                                alert('Erro ao Cadastrar');
                            }
                        }
                    }
                );
            }

            $('#btn_enviar').bind('click', function () {
                if (validaDados()) {
                    cadastrarProduto()
                    $("form")[0].reset();
                }
            });


            /* Aplicação de mascara nos campos inputs */
            /* Usado como referencia, ( http://blog.heitorfig.com/criar-mascara-de-moeda-ou-decimais-com-jquery/ )*/

            $('#preco').maskMoney({
                symbol: 'R$', /* Símbolo da moeda */
                decimal: ',', /* Separador de decimais */
                thousands: '.', /* Separador de milhares */
            });

});

