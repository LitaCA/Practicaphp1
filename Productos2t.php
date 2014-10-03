<?php
$canti = $_GET['canti'];
$descrip = $_GET['descrip'];
$preUni= $_GET['preUni'];

$canti1 = $_GET['canti1'];
$descrip1 = $_GET['descrip1'];
$preUni1= $_GET['preUni1'];

$canti2= $_GET['canti2'];
$descrip2 = $_GET['descrip2'];
$preUni2 = $_GET['preUni2'];

$Resultado = $canti  * $preUni;
$Resultado1 = $canti1 * $preUni1;
$Resultado2 = $canti2 * $preUni2;

$Subtotal = $Resultado + $Resultado1 + $Resultado2;

define('iva', 0.16);
 $iva = $Subtotal * iva;
 $Total = $Subtotal * iva + $Subtotal;



?>
<html>
    <body>
<p>
<table>
<tr>
<td> <?php
           echo $canti; ?> 
		</td>
	<td>
		<?php
           echo $descrip; ?> 
          	</td>
	<td>
		<?php
           echo $Resultado; ?> 
          	</td>
</tr>
<tr>
		<td> <?php
           echo $canti1; ?> 
		</td>
	<td>
		<?php
           echo $descrip1; ?> 
          	</td>
	<td>
		<?php
           echo $Resultado1; ?> 
          	</td>
</tr>
<tr>
	<td>    
		<?php
           echo $canti2; ?> 
		</td>
	<td>
		<?php
           echo $descrip2; ?> 
          	</td>
	<td>
		<?php
           echo $Resultado2; ?> 
          	</td>
      	  	</tr>
		
	</table>
</p>
Subtotal =
		<?php
           echo $Subtotal; ?> 
<br>
IVA =
		<?php
           echo $iva; ?> 
<br>
Total =
		<?php
           echo $Total; ?> 
<br>
		
			
    </body>

</html>