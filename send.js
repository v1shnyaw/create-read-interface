let button2 = document.getElementById("sendForm");
button2.addEventListener("click", function(event) {
    event.preventDefault();
}, false);

$("#sendForm").on("click", function() {
   $("#sendForm").preventDefault();
   let country=$("#country").val().trim() ;
   let currency=$("#currency").val().trim() ;
   let climate=$("#climate").val().trim() ;
   let visa=$("#visa").val().trim() ;

   if (country == "") {
       $("#errorMess").text("Введите страну");
       return false;
   } else if(currency == "") {
       $("#errorMess").text("Введите валюту");
       return false;
   }
   $("#errorMess").text("");
   $.ajax({
       url: 'send.php',
       type: 'POST',
       cache: false,
       data: { 'country': country, 'currency':currency,'climate': climate, 'visa':visa},
       dataType: 'text',
       beforeSend: function() {
       },
       success: function(data) {
           if (!data)
               $("#errorMess").text("Произошла ошибка. Попробуйте снова!");
           else $("#form_id").trigger("reset");
       }
   });

});