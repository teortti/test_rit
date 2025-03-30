function typeChange() {
    let val = $('#type').val();
    if (val == 1) {
        $('#start_p').hide();
        $('#res_p').hide();
        $('#estim_v').hide();
        $('#bank_name_id').show();
        $('#summ_id').show();
    }
    else
    {
        $('#bank_name_id').hide();
        $('#summ_id').hide();
        $('#start_p').show();
        $('#res_p').show();
        $('#estim_v').show();
    }
}
typeChange();
$('#form').change(function () {
    typeChange();
});