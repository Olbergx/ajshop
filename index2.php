<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Магазин электронных услуг</title>

<link rel="stylesheet" href="css/style.css" media="all">
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/fly-to-basket.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="js/script.js"></script>

</head>
<body>


<div class="header"></div>




<div id="mainContainer">

<div class="menu">  
        <input id="btn1" type="button" value="ЭЛЕКТРОННАЯ ОТЧЕТНОСТЬ" style="font-weight: bold; background: blue;
    color: yellow; font-size: 12pt; height: 30px;" >   
        <input id="btn2" type="button" value="РЕМОНТ" style="font-weight: bold; background: blue;
    color: yellow; font-size: 12pt; height: 30px;">   
        <input id="btn3" type="button" value="ПЕЧАТЬ" style="font-weight: bold; background: blue;
    color: yellow; font-size: 12pt; height: 30px;">
        <input id="btn4" type="button" value="ЭЛЕКТРОНЫЕ УСЛУГИ" style="font-weight: bold; background: blue;
    color: yellow; font-size: 12pt; height: 30px;">
        
    </div>  
    <br>

<div hidden id="successdiv"  style="color: #FF0000;  background: lime; font-weight: bold; text-align:center; font-size: 22pt;"> <p>ВАШ ЗАКАЗ ОБРАБАТЫВАЕТСЯ</p> </div>



	<div id="leftColumn">
		<!-- <img src="images/heading3.gif"> -->
		
		<div id="products">
			












<!-- DIV FOR A PRODUCT -->
      <div class="product_container">
        <div id="slidingProduct1" class="sliding_product">
          <img src="images/product.gif">
          Calendar<br>
          50.00
        </div>
        <a href="#" onclick="addToBasket(1);return false;"><img src="images/basket.gif"></a>
        <div class="clear"></div>
      </div>
      <!-- END DIV FOR A PRODUCT -->
      <!-- DIV FOR A PRODUCT -->
      <div class="product_container">
        <div id="slidingProduct2" class="sliding_product">
          <img src="images/product.gif">
          Shopping module<br>
          250.00
        </div>
        <a href="#" onclick="addToBasket(2);return false"><img src="images/basket.gif"></a>
        <div class="clear"></div>
      </div>
      <!-- END DIV FOR A PRODUCT -->
      <!-- DIV FOR A PRODUCT -->
      <div class="product_container">
        <div id="slidingProduct3" class="sliding_product">
          <img src="images/product.gif">
          Menu package<br>
          35.00
        </div>
        <a href="#" onclick="addToBasket(3);return false"><img src="images/basket.gif"></a>
        <div class="clear"></div>
      </div>
      <!-- END DIV FOR A PRODUCT -->
      <!-- DIV FOR A PRODUCT -->
      <div class="product_container">
        <div id="slidingProduct4" class="sliding_product">
          <img src="images/product.gif">
          Ajax component<br>
          50.00
        </div>
        <a href="#" onclick="addToBasket(4);return false"><img src="images/basket.gif"></a>
        <div class="clear"></div>
      </div>
      <!-- END DIV FOR A PRODUCT -->
      
      <!-- DIV FOR A PRODUCT -->
      <div class="product_container">
        <div id="slidingProduct5" class="sliding_product">
          <img src="images/product.gif">
          Week planner<br>
          60.00
        </div>
        <a href="#" onclick="addToBasket(5);return false"><img src="images/basket.gif"></a>
        <div class="clear"></div>
      </div>
      <!-- END DIV FOR A PRODUCT -->
      
      <!-- DIV FOR A PRODUCT -->
      <div class="product_container">
        <div id="slidingProduct6" class="sliding_product">
          <img src="images/product.gif">
          Forum package<br>
          150.00
        </div>
        <a href="#" onclick="addToBasket(6);return false"><img src="images/basket.gif"></a>
        <div class="clear"></div>
      </div>
      <!-- END DIV FOR A PRODUCT -->
      
      <!-- DIV FOR A PRODUCT -->
      <div class="product_container">
        <div id="slidingProduct7" class="sliding_product">
          <img src="images/product.gif">
          HTML editor<br>
          150.00
        </div>
        <a href="#" onclick="addToBasket(7);return false"><img src="images/basket.gif"></a>
        <div class="clear"></div>
      </div>
      <!-- END DIV FOR A PRODUCT -->
      
      <!-- DIV FOR A PRODUCT -->
      <div class="product_container">
        <div id="slidingProduct8" class="sliding_product">
          <img src="images/product.gif">
          CSS creator<br><br>
          125.00
          
        </div>
        <a href="#" onclick="addToBasket(8);return false"><img src="images/basket.gif"></a>
        <div class="clear"></div>
      </div>
      <!-- END DIV FOR A PRODUCT -->      
    


		</div>	
		<div class="clear"></div>
		

	</div>
	<div id="rightColumn">
		<!-- Shopping cart It's important that the id of this div is "shopping_cart" -->
		<div id="shopping_cart">
			<strong>КОРЗИНА</strong>	
			<table id="shopping_cart_items">
				<tr>
					<th>Количество</th>
					<th>Товар</th>
					<th>Цена</th>
					<th></th>
				</tr>
				<!-- Here, you can output existing basket items from your database 
				One row for each item. The id of the TR tag should be shopping_cart_items_product + productId,
				example: shopping_cart_items_product1 for the id 1 -->
				
				
			</table>
			
			<div id="shopping_cart_totalprice"></div>


<br>
					<form id="zak"> 
							<input id="btn0" type="button" value="ОФОРМИТЬ ЗАКАЗ" style="font-weight: bold; background: blue; color: yellow; font-size: 12pt; height: 30px;" >  
					</form> 

		</div>
	</div>
	
	<div class="clear"></div>
	
</div>

<div class="footer">  <p style="font-weight: bold;">ИП Берг О.В. 2018г.</p> </div> <!-- footer -->



<script>  
        $(document).ready(function(){  
          
            $('#btn1').click(function(){  
                $.ajax({  
                    url: "http://localhost:8888/ajaxshop/main.php",  
                    cache: false,  
                    success: function(html){  
                        $("#products").html(html);  
                    }  
                });  
            });  



  $('#btn2').click(function(){  
                $.ajax({  
                    url: "http://localhost:8888/ajaxshop/main2.php",  
                    cache: false,  
                    success: function(html){  
                        $("#products").html(html);  
                    }  
                });  
            });  


   $('#btn3').click(function(){  
                $.ajax({  
                    url: "http://localhost:8888/ajaxshop/main3.php",  
                    cache: false,  
                    success: function(html){  
                        $("#products").html(html);  
                    }  
                });  
            });  


 $('#btn4').click(function(){  
                $.ajax({  
                    url: "http://localhost:8888/ajaxshop/main4.php",  
                    cache: false,  
                    success: function(html){  
                        $("#products").html(html);  
                    }  
                });  
            });  


              
            $('#zak').click(function(){  
                $.ajax({  
                    url: "http://localhost:8888/ajaxshop/cart.php",  
                    cache: false,  
                    success: function(html){  
                        $("#products").html(html); 
                        $('#zak').hide(500); 
                    }  
                });  
            });  
              
        });  
    </script>  


</body>
</html>