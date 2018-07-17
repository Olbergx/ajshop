
<html>
<head>
<link rel="stylesheet" href="css/style.css" media="all">
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
<script src="js/script.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
   

<form id="order-form4" method="post" class="opacity0" action="php/mail.php" >
                             <div class="thank4">
                                <h4><p id="dann" style="color: #0000FF; font-weight: bold; text-align:center; font-size: 14pt;">ЗАПОЛНИТЕ ВАШИ ДАННЫЕ:</p> </div>

                            
                                
                                <!-- <input type="hidden" name="hiden1" id="hiden1" value=""> -->
                            
                                    
 

<input type="text" name="nam1" id="nam1" value="" placeholder="ВАШЕ ИМЯ" >


   <br> <br>
    
      <input type="tel" required placeholder="+7 (___) ___-__-__" id="tel" name="tel" value=""  class="user-phone" title="Формат: +7 (999) 999 99 99"/> 
   <!-- </div>  -->


   <!-- <input type="hidden" id="hiden" name="title" value="" /> -->

  

<div style="color: #0000FF; margin-top: 5%; font-weight: bold; text-align:center; font-size: 14pt;">ВЫ ЗАКАЗАЛИ:</div> 

<div id="tab"></div>

<div id="total11" name="adminemail1111" value="" ></div> 

<br>

          <div class="checkbox" style="color: #FF0000; width: 15px; height: 15px;">
          
              <input type="checkbox" name="public4" id="public4" value="yes"> 


              
            
            </div>

              <br><br>

              <label style="color: yellow; font-weight: bold; text-align:center; font-size: 14pt; background: blue;">
            Выражаю своё согласие на обработку персональных данных! 
              </label>


<br> <br> 
            <div id="capa" style="display:none; margin: 0 auto;" class="g-recaptcha" data-sitekey="6LfAs2AUAAAAAHssICeXdYo7B7ktHhnujNHXpaNf"></div><br>
          </div>
  


<script>
  

$("#total11").text($("#shopping_cart_totalprice").html());



var str = "№ Наименование   Сумма " + "\n" + $("#shopping_cart_items").find("td").eq(0).text() +" "+ $("#shopping_cart_items").find("td").eq(1).text() +" "+ $("#shopping_cart_items").find("td").eq(2).text() + " рублей";

 $("#zak").val(str);



 $("#shopping_cart_items").clone().appendTo("#tab");





</script>

    

      <div id="hide4" style="display:none; color: #FF0000; font-weight: bold; text-align:center; font-size: 18pt;">
            
            
        <input  id="btn7"  type="submit" 
        class="button-blue" value="ЗАКАЗАТЬ">
            
           
       </div>


</form>










<script>
  
$('#btn7').click(function(){  


$("#successdiv").fadeIn();
 $("#successdiv").delay(10000).fadeOut();

$("#order-form4").delay(10000).fadeOut();


     setTimeout(function() {window.location.reload();}, 10000);


// $("#shopping_cart_items").closest('tr[id]').remove();

// $("tr[id]").remove();
// $(this).parents('tr').remove();
//  $("#shopping_cart_items").remove();
// $("#shopping_cart_totalprice").remove();






    //              $.ajax({  
    //                 url: "http://localhost:8888/ajaxshop/main3.php",  
    //                 cache: false,  
    //                 success: function(html){  
    //                     $("#products").html(html);  
    //                 }  
    //             });  



     // $("#shopping_cart").style.display = 'none';



            });  


</script>

<script>
    $(function(){
      $("input#public4").on('change', function(){
        if($('#public4').prop('checked')){
          $('#hide4').fadeIn().show();
          $('#capa').fadeIn().show();
        }else{
          $('#hide4').fadeOut(300); 
          $('#capa').fadeOut((300));
        }
      });
    });
  </script>





</body> 

</html>