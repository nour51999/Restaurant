
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Au palais du délice</title>

  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <?php include("header.php"); ?>
   <section class="container">
    <div class="row">
      <div class="col-12 col-md-9" style=" border: solid orange ;  border-radius: 15px; margin-bottom: 235px; padding-bottom: 25px;" >
        <h2 style="margin-left: 15px; color: #c0504d;">Le menu de la semaine</h2>
        <div class="col-12 col-md-2">
          <img src="images/Chtitha.png">
          <h4 style="color:#c0504d;"><strong>Prix:500 DA</strong></h4>
        </div>
        <div class="col-12 col-md-2">
          <img src="images/M'touem.png">
          <h4 style="color:#c0504d;"><strong>Prix:450 DA</strong></h4>
        </div>
        <div class="col-12 col-md-2">
          <img src="images/Osbane.png">
          <h4 style="color:#c0504d;"><strong>Prix:400 DA</strong></h4>
        </div>
        <div class="col-12 col-md-2">
          <img src="images/Rechta.png">
          <h4 style="color:#c0504d;"><strong>Prix:600 DA</strong></h4>
        </div>
        <div class="col-12 col-md-2">
          <img src="images/LhamLahlou.png">
          <h4 style="color:#c0504d;"><strong>Prix:650 DA</strong></h4>
        </div>
        <div class="col-12 col-md-2">
          <img src="images/TadjineZitoun.png">
          <h4 style="color:#c0504d;"><strong>Prix:550 DA</strong></h4>
        </div>
      </div>
      <div>
        
      </div>
      <div class="col-12 col-md-3" style="border: solid orange; border-radius: 15px;">
        <div class="img" style="text-align: center; padding-top: 25px;">
          <img src="images/coffe.png">
        </div>
        <h3 style=" text-align: center; color:#c0504d;">Espace Commande</h3>

        <form action="commander.php" method="POST"
        style="border: solid orange; border-radius: 15px; margin-bottom: 50px; padding:5px;" >
        <div class="table-responsive">
          <table>
            <tr><td><label for="nm">Nom:</label></td>
              <td><input type="text" name="nom" id="nm"></td>
            </tr>
            <tr><td><label for="pr">Prenom:</label></td>
              <td><input type="text" name="prenom" id="pr"></td>
            </tr>
            <tr><td><label for="dr">Adresse:</label></td>
              <td><input type="text" name="adr" id="dr"></td>
            </tr>
            <tr>
               <td> <label for="product">Menu:</label></td> 
              
              <td> <select name="menu" id="product" onchange="updatePrice()"  style="width:179px;">
        <option value="rechta">Rechta (600 DA)</option>
        <option value="osban">Osban (400 DA)</option>
        <option value="chtitha">Chtitha (500 DA)</option>
         <option value="mtawem">Mtawem (450 DA)</option>
          <option value="lhamlahlou">Lham lahlou (650 DA)</option>
          <option value="tadjine zitoun">Tadjine zitoune (550 DA)</option>
    </select>
              
          
                
                
              </td>
            </select>
          </tr>
          <tr><td><label for="price">Tarif:</label></td>
               <td> <span id="price" >600 DA</span></td>
           
          </tr>
         
        </table>
        <button id="md" name="commander" style="background-color: orange ; color:#c0504d; margin-left: 60px; width: 100px;"><strong>Commander</strong></button>
      </div>
    </form>
    
  </div>

</div>
 <script>
function updatePrice() {
            const selectElement = document.getElementById('product');
            const priceSpan = document.getElementById('price');
            
            if (selectElement.value === 'rechta') {
                priceSpan.textContent = '600 DA';
            } else if (selectElement.value === 'osban') {
                priceSpan.textContent = '400 DA';
            }
            else if (selectElement.value === 'mtawem') {
                priceSpan.textContent = '450 DA';
            }
             else if (selectElement.value === 'lhamlahlou') {
                priceSpan.textContent = '650 DA';
            }
               else if (selectElement.value === 'chtitha') {
                priceSpan.textContent = '500 DA';
            }
               else if (selectElement.value === 'tadjine zitoun') {
                 priceSpan.textContent = '550 DA';
             }
        }

 </script> 




</section>






<?php include("footer.php"); ?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plat.js"></script>

</body>
</html>