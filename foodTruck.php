<?php

?>
<!DOCTYPE html>
<html>
<head>
<title>Food Truck Order Form</title>
<link href="css/stylesheet.css" type="text/css" rel="stylesheet" />

</head>
   
<body> <!-- checks for cookies here -->

    <img src="img/food-truck.jpg">
    
    <div id="welcome">
     <h1>Welcome to <b style="color:blue">&#9832;</b> Yummy</h1>
     <h1>Food Truck</h1>
       </div>    
<form method="post" action="foodTruck.php"> 
<table>
<tr>
<td width="35%" align="center" style="color:green">Item Name</td>
<td width="18%" align="left" style="color:green">Price</td>
<td width="22%" align="left" style="color:green">Quantity</td>
<td width="35%" align="left" style="color:green">Subtotal</td>
</tr>

<tr>
<td>FRANK HOT DOG</td>
<td>$ 5.50/each</td>
<td><input type='number' name='fq' min='0' id="frankdog_qty" oninput="frankdog_sTotal()"></td>
<td><span id="frankdog_subtotal" oninput="frankdog_subtotal"  align="center" style="color:red"></span></td>
</tr>
    
<tr>
<td>PORK</td>
<td>$ 7.00/each</td>
<td><input type='number' name='pq' min='0' id="pork_qty" oninput="pork_sTotal()"></td>
<td><span id="pork_subtotal" oninput="pork_subtotal"  align="center" style="color:red"></span></td>
</tr>

<tr>
<td>CHICKEN</td>
<td>$ 10.50/each</td>
<td><input type='number' name='cq' min='0' id="chicken_qty" oninput="chicken_sTotal()"></td>
<td><span id="chicken_subtotal" oninput="chicken_subtotal" align="center" style="color:red" ></span></td>  
</tr>
</tr>

<tr>
<td>BRISKET</td>
<td>$ 6.50/each</td>
<td><input type='number' name='bq' min='0' id="brisket_qty" oninput="brisket_sTotal()"></td>
<td><span id="brisket_subtotal" oninput="brisket_subtotal" align="center" style="color:red"></span></td>
</tr>

<tr>
<td>RIBS</td>
<td>$ 8.50/each</td>
<td><input type='number' name='rq' min='0' id="ribs_qty" oninput="ribs_sTotal()"></td>
<td><span id="ribs_subtotal" oninput="ribs_subtotal"  align="center" style="color:red"></span></td>
</tr>    

<tr>
<td style="color:green">Total Selected Items</td>
<td><input type='tel' name='si' id="sumItem" oninput="sumItem()"><span id="sumItem"  oninput="sumItem"></span></td>    
<td align="left" style="color:green">Total Charge</td>
<td><input type='tel' name='sc' id="sumItem" oninput="sumItem()"><span id="sumItem" oninput="sumItem"></span></td>

</tr>

<tr>
<td style="color:green">Payment Method</td>
<td><label><a href="#"><input type="button" name="Visa" value="Visa" width="60" ></a></label></td>
<td><label><a href="#"><input type="button" name="Master" value="Master" width="60" ></a></label></td>
<td><label><a href="#"><input type="button" name="Cash" value="Cash" width="60" ></a></label></td>
</tr>

<tr>
<td><label><a href="#"><input type="button" name="Submit" value="Check Out" ></a></label></td>
<td></td>
<td></td>
<td></td>

</tr>

</table>

 </form>  
    
<script>
function frankdog_sTotal() {//get frankdog_sTotal
 var frankdog_price = 5.5;    
    var ft = document.getElementById("frankdog_qty").value;
    var fs = ft * frankdog_price;    
    document.getElementById("frankdog_subtotal").innerHTML = fs;    
    
}   
  
    function pork_sTotal(){//get pork_sTotal
    var pork_price = 7;
    var pt = document.getElementById("pork_qty").value;
    var ps = pt * pork_price;
     document.getElementById("pork_subtotal").innerHTML = ps;
        
    }
    function chicken_sTotal(){//get chicken_sTotal
     var chicken_price = 10.5;
     var ct = document.getElementById("chicken_qty").value;
    var cs = ct * chicken_price;
         document.getElementById("chicken_subtotal").innerHTML = cs;
        
    }
    function brisket_sTotal(){//get brisket_sTotal
    var brisket_price = 6.5; 
    var bt = document.getElementById("brisket_qty").value;
    var bs = bt * brisket_price;
        document.getElementById("brisket_subtotal").innerHTML = bs;
    }
      function ribs_sTotal(){//get ribs_sTotal
   var ribs_price = 8.5;
   var rt = document.getElementById("ribs_qty").value;
   var rs = rt * ribs_price; 
        document.getElementById("ribs_subtotal").innerHTML = rs;
      }
    
    function sumItem(){//sum for items
     var ft = document.getElementById("frankdog_qty").value;
        var pt = document.getElementById("pork_qty").value;
        var ct = document.getElementById("chicken_qty").value;
        var bt = document.getElementById("brisket_qty").value;
        var rt = document.getElementById("ribs_qty").value;
        var sumItem = ft + pt + ct + bt + rt;        
        
      document.getElementById("sumItem").innerHTML = sumItem();        
    }
    /*
    function totalCharge(){//sum for charge
        
        
        document.getElementById("sumCharge").innerHTML = ;
    }
    
    */
  
    
    
</script>
</body>
</html>
