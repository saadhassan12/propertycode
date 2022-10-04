$("#basic").click(function () {
    $("#btn1").show();
    $("#btn2").hide();
    $("#btn3").hide();
    $("#btn4").hide();

});
$("#location").click(function () {
    $("#btn1").hide();
    $("#btn2").show();
    $("#btn3").hide();
    $("#btn4").hide();

});
$("#features").click(function () {
    $("#btn1").hide();
    $("#btn2").hide();
    $("#btn3").show();
    $("#btn4").hide();
});
$("#image").click(function () {
    $("#btn1").hide();
    $("#btn2").hide();
    $("#btn3").hide();
    $("#btn4").show();
});
$(document).ready(function () {
    $('#image').on('click', function () {
        $('#image').css({ backgroundColor: 'blue', color: 'white' });
        $('#location').css({ backgroundColor: '#f8f9fa', color: 'blue' });
        $('#basic').css({ backgroundColor: '#f8f9fa', color: 'blue' });
        $('#features').css({ backgroundColor: '#f8f9fa', color: 'blue' });


    });
    $('#location').on('click', function () {
        $('#location').css({ backgroundColor: 'blue', color: 'white' });
        $('#image').css({ backgroundColor: '#f8f9fa', color: 'blue' });
        $('#basic').css({ backgroundColor: '#f8f9fa', color: 'blue' });
        $('#features').css({ backgroundColor: '#f8f9fa', color: 'blue' });

    });
    $('#basic').on('click', function () {
        $('#basic').css({ backgroundColor: 'blue', color: 'white' });
        $('#location').css({ backgroundColor: '#f8f9fa', color: 'blue' });
        $('#image').css({ backgroundColor: '#f8f9fa', color: 'blue' });
        $('#features').css({ backgroundColor: '#f8f9fa', color: 'blue' });


    });
    $('#features').on('click', function () {
        $('#features').css({ backgroundColor: 'blue', color: 'white' });
        $('#location').css({ backgroundColor: '#f8f9fa', color: 'blue' });
        $('#image').css({ backgroundColor: '#f8f9fa', color: 'blue' });
        $('#basic').css({ backgroundColor: '#f8f9fa', color: 'blue' });
    });
});
$(document).ready(function () {
    $("#btn1").show();
    $("#btn2").hide();
    $("#btn3").hide();
    $("#btn4").hide();

    
});
$('#form1').on('submit',function(e){
    e.preventDefault();

   $.ajax({
    type:'POST',
    url :"/property/store",
    data:$('#form1').serialize(),
success:function(result){
 console.log(result);
$("#form2 #basic_property_id").val(result.id);
$("#form2").show();
}


    });
    $("#btn1").hide();
$("#btn2").show();
$("#btn3").hide();
$("#btn4").hide();

});
