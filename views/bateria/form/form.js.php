<script type="text/javascript">
    $(document).ready(function(){
            <?php
                if(isset($this->cadastro)){
                    echo 'var data_inicio = "' . $this->cadastro['data_inicio'] . '";';
                    echo "\n\t\t";
                    echo 'var data_fim = "' . $this->cadastro['data_fim'] . '";';
                } else {
                        echo 'var data_inicio = false;';
                        echo "\n\t\t";
                        echo 'var data_fim = false;';
                }
            ?>

        var datas_indispovineis = <?php echo $this->datas_indispovineis; ?>;
        var data_disponivel = datas_indispovineis[datas_indispovineis.length-1];


        $('#inicio_bateria').datetimepicker({
            sideBySide: true,
            debug: false,
            defaultDate: data_inicio,
            format: 'DD/MM/YYYY',
            disabledDates: datas_indispovineis,
            defaultDate: data_disponivel,
            widgetPositioning: {
                horizontal: 'auto',
                vertical: 'bottom'
            }
        });

        $('#fim_bateria').datetimepicker({
            sideBySide: true,
            debug: false,
            defaultDate: data_fim,
            format: 'DD/MM/YYYY',
            disabledDates: datas_indispovineis,
            defaultDate: data_disponivel,
            widgetPositioning: {
                horizontal: 'auto',
                vertical: 'bottom'
            }
        });

        $('#inicio_bateria').keydown(function(){
            swal("Erro", "Selecione uma data no calendario a baixo!", "error");
                $('#inicio_bateria').val('');
        });

        $('#fim_bateria').keydown(function(){
            swal("Erro", "Selecione uma data no calendario a baixo!", "error");
                $('#fim_bateria').val('');
        });



        $('#submit').on('click', function(){

            var inicio_bateria =  moment($('#inicio_bateria').val(), "DD-MM-YYYY");
            var fim_bateria = moment($('#fim_bateria').val(), "DD-MM-YYYY");

            if(inicio_bateria > fim_bateria){
                swal("Erro", "A data final deve ser maior que a inicial!", "error");

                $('#inicio_bateria').val('');
                $('#fim_bateria').val('');

                return false;
            }


        });

    });
</script>