(function ($) {

    $("#search").keyup(function (event) {
        var input = $(this);
        var val = input.val();
        var regexp='\\b(.*)a(.*)\\b';
        $('#tbody').find('td').each(function () {
            var td = $(this);
            var result=    td.text().match(new RegExp(regexp, 'i'));
            console.log(result);
        })
    });
})(jQuery);

