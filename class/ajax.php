<form id="form" method="post" action="http://www.drpaulorodrigues.com.br/site/enviar-email.php" onSubmit="return ajaxSubmit(this);">
</form>    

<script type="text/javascript">
           // 
            // SCRIPT PARA ATUALIZAÇÂO DE URL SLIDE 1
            //
            var ajaxSubmit = function(form) {
                // fetch where we want to submit the form to
                var url = $(form).attr('action');
                var flag = 9;
                // fetch the data for the form
                var data = $(form).serializeArray();

                // setup the ajax request
                $.ajax({
                    url: url,
                    data: data,
                    dataType: 'json',
                    type:'POST'
                });
              //$('#sucesso').html('<div class="alert alert-success"><b>Mensagem enviada com <b>sucesso</b>!</div>');
                swal("Obrigado!", 'Sua mensagem foi enviada com sucesso', "success");
                           //$("#formE").fadeOut(0);
                // return false so the form does not actually
                // submit to the page
                return false;
            }
    </script>






<script type="text/javascript">
            var tipo = "";
            var marca = "";
            var modelo = "";
            var ano = "";

            $('#tipo').on('change', function() {
                tipo = $('#tipo').val(); 
                //alert(tipo);
               $.get("tipo.php?tipo="+tipo,  function(html){ $("#marca").html(html);}); 
            });
 </script>