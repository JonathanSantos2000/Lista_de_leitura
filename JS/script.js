$(document).ready(function () {
    $('#select').on('change', function () {
        var selecValor = '#'+$(this).val();
        $('#pai').children('div').hide();

        $('#pai').children(selecValor).show();
    });
});