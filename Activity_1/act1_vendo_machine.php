<?php
   $arrProduct = array("Coke" => 15, "Sprite" => 20, "Royal" => 20, "Pepsi" => 15, "Mountain Dew" => 20);
   $arrSize = array("Regular" => "Regular", "Up-size (add ₱5)" => "Up-size", "Jumbo (add ₱10)" => "Jumbo");
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Vending Machine</title>
   </head>
   <body>
      <h2>Vendo Machine</h2>
      <form action="">
         <fieldset style="width: 27%;">
            <?php
               if(isset($arrProduct)){
                   foreach($arrProduct as $ProdKey => $ProdVal)
                       echo '<input type="checkbox" name="chkdProd['. $ProdKey .']" id="chkdProd['. $ProdKey .']" value="'.$ProdVal.'">
                       <label for="chkdProd['. $ProdKey .']">'. $ProdKey .' - ₱'.$ProdVal.'</label><br>';
               }
               ?>
         </fieldset>
         <fieldset style="width: 27%;">
            <legend>Options:</legend>
            <label for="drpSizes">Size</label>
            <select name="drpSizes" id="drpSizes">
            <?php
               if(isset($arrSize)){
                   foreach ($arrSize as $sizeKey => $sizeValue) {
                       echo '<option value="'.$sizeValue.'">'.$sizeKey.'</option>';
                   }
               }
               ?>
            </select>
            <label for="txtQty">Quantity</label>
            <input type="number" name="txtQty" id="txtQty" min="1" value=0>
            <input type="submit" name="btnCheckOut" id="btnCheckOut" value="Check Out">
         </fieldset>
      </form>
      <?php
         if (isset($_REQUEST["btnCheckOut"]) && isset($_REQUEST["chkdProd"])) {
             if (isset($_REQUEST["txtQty"])) {
                 $quantity = $_REQUEST["txtQty"];
                 $size = $_REQUEST["drpSizes"];
                 $prod = $_REQUEST["chkdProd"];
                 $term = '';
                 $add = 0;
                 $TotalAmmount = 0;
         
                 echo '<hr>';
                 echo '<h2>Purchase Summary:</h2>';
                 if($size == 1)
                     $term = 'piece';
                 else
                     $term = 'pieces';
         
                 if($size == 'Regular')
                     $add = 0;
                 elseif($size == 'Up-size')
                     $add = 5;
                 elseif($size == 'Jumbo')
                     $add = 10;
         
                 foreach ($prod as $prodKey => $prodValue) {
                     $total = ($prodValue*$quantity)+($add*$quantity);
                     echo '<ul><li>'.$quantity.' '.$term.' of '.$size.' '.$prodKey.' ammounting to ₱ '.$total.'</></ul>';
         
                 $NoItems = $quantity * count($prod);
                 $TotalAmmount += $total;
                 }
                 echo '<label><b>Total Number of Items: </b></label>'.$NoItems.'<br>';
                 echo '<label><b>Total Ammount: </b></label>'.$TotalAmmount;
             }
         }
         else
             echo '<hr>No Selected Product, Please Try Again.';
         ?>
   </body>
</html>