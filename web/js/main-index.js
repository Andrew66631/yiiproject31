//$('footer').append('<a href="http://google.com">GO to google</a>');
//var el = document.getElementById("newser");
//$(el).css("margin", "300px");

$('#mybut').click(function () {
  var t=$('#inputext').val();
  var tt='Привет ' +t;
 // var zz = $('#z').html();
//alert(t);
  $("#z").html(tt);

  //$("#z").appendTo(t);

        //.appendTo($("#z"));
    //alert($("#z").text());
});