


$('document').ready(function(){

    $('form').submit(function(evt){
      evt.preventDefault();
        $.ajax({
            method: 'POST',
            url:'process.php',

            data:{
                email:    $('#email_address').val(),
                password: $('#password').val()
            },
            success:function(response){
              $('.success').html(response);
               // console.log(response);
            },
            error:function(){

            }
        });


    });
});

