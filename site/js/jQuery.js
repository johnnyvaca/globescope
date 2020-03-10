alert("hello");

$.ajax({
    type: "POST",
    url: ".php",
    data: { "codigo" :  "codigo" },
    success: function(data){
        alert(data);
    }
});


/*(function ($) {

    $("#search").keyup(function (event) {
        var input = $(this);
        var val = input.val();
        if(val == ''){
            $('#tbody tr').show();
            return true;
        }
        var regexp='\\b(.*)';
        for (var i in val){
            regexp += '('+val[i]+')(.*)';
        }
        regexp += '\\b';
        $('#tbody').find('td').each(function () {
            var td = $(this);
            var result=    td.text().match(new RegExp(regexp, 'i'));
            console.log(result);
        })
    });
})(jQuery);*/



//window.location = "model/model.php";
//var echo = cnx().ajax.phpPostSyn("../model/model.php", "getImages");
   // alert(echo);




/*
$.get("model/model.php",function (data) {
data = JSON.parse(data);
$.each(data,function (key,val) {
alert(val.Pseudo);
});
    });
    alert("hello");

     */

