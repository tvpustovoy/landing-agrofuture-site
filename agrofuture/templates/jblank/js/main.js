$(document).ready(function() {

    // ajax send
    // Документация: http://api.jquery.com/jquery.ajax/

    $("form").submit(function() {
        $.ajax({
            type: "GET",
            url: "/templates/jblank/php/mail.php",
            data: $("form").serialize(),
            success: function(data) {
                //$('#order_status').html(data);
                $('#order_status').html('Спасибо, Ваша заявка на онлайн-курс отправлена');
            },
            error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        }).done(function() {
            // alert("Спасибо за заявку!");
            // setTimeout(function() {
            //  $.fancybox.close();
            // }, 1000);
        });
        return false;
    });

    // $('#sendOrderButton').click(function(event){
    //         event.preventDefault();
    //         var client_name, client_email, client_company, client_comment;
    //         client_name = $.trim($('#client_name').val());
    //         client_email = $.trim($('#client_email').val());
    //         client_company = $.trim($('#client_company').val());
    //         client_comment = $.trim($('#client_comment').val());

    //         $.get('/templates/jblank/php/mail.php', {
    //                 client_name: client_name, 
    //                 client_email: client_email,     
    //                 client_company: client_company,     
    //                 client_comment: client_comment,
    //             }, function(data){
    //              var obj = jQuery.parseJSON( data );
    //              var status = obj.status;
    //              if (obj.status == "OK"){
    //                  $('#order_status').html('<div >Спасибо! Ваш вопрос или комментарий отправлен организаторам</div>');
    //                  $('#orderSuccessModal').modal('show');
    //              }
    //              if (obj.status == "emailError"){
    //                  $('#order_status').html('<div>Ваш e-mail не должен быть длиннее 30 символов</div>');
    //              }
    //              if (obj.status == "nameError"){
    //                  $('#order_status').html('<div>Ваше имя не должно быть длиннее 30 символов</div>');
    //              }
    //              if (obj.status == "badRequest"){
    //                  $('#order_status').html('<div>Bad request</div>');
    //              }
    //              if (obj.status == "allValuesRequired"){
    //                  $('#order_status').html('<div>Все поля обязательны для заполенения</div>');
    //              }
    //         });

    // });

});