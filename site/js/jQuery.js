/*
function getRows(override, value) {
    var filter = "table tbody tr .classDroit";
    $("#selectDroit").each(function() {
        var test = this === override ? value : $(this).val();

        if (test !== "Tous"){
            filter += ":contains("+test+")";
        }
    eso =$(filter).parent();
        console.log(eso);
    });
    return $(filter).parent();
}

$('#selectDroit').on('change', function() {
    $('table tbody tr').hide();

    getRows().show();

    $('#selectDroit').each(function (i, select) {
        $('option', this).each(function () {
            $(this).toggle(getRows(select, $(this).text()).length >= 0);
        });
    });

});
*/










/*

 function getRows(override, value) {
    var filter = "table tbody tr td";
    $("#A,#B,#C").each(function() {
        var test = this === override ? value : $(this).val();
        if (test !== "Toate") filter += ":contains(" + test + ")";
    });
    return $(filter).parent();
}

 $('#A,#B,#C').on('change', function() {
    $('table tbody tr').hide();
    getRows().show();
    $('#A,#B,#C').each(function (i, select) {
        $('option', this).each(function () {
            $(this).toggle(getRows(select, $(this).text()).length > 0);
        });
    });
});
 */
