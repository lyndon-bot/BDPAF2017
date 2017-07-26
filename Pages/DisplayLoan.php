<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      
           include '../Functions/calculateLoan.php';
           
        ?>
        
        <table> 
            <tr><td><?php echo $Date?></td></tr>
            <tr><td><?php echo $MonthlyPayment;?></td></tr>
            <tr><td><?php echo $PaymentMax;?></td></tr>
            <tr><td><?php echo $LoanAmount;?></td></tr>
            

            
            <tr><td><?php echo $Salvage_Value;?></td></tr>
            <tr><td><?php echo ($InsurancePayment / $NUMPAY);?></td></tr>
            <tr><td><?php echo ($Monthly * $NUMPAY);?></td></tr>

            

                
             
        </table>
        <table>
            <tr><td><?php echo ($Depreciated = $PurchasePrice-(($PurchasePrice-$Salvage_Value)*5/15));?></td></tr>
            <tr><td><?php echo ($Depreciated = $Depreciated -(($PurchasePrice-$Salvage_Value)*4/15));?></td></tr>
            <tr><td><?php echo ($Depreciated = $Depreciated -(($PurchasePrice-$Salvage_Value)*3/15));?></td></tr>
            <tr><td><?php echo ($Depreciated = $Depreciated -(($PurchasePrice-$Salvage_Value)*2/15));?></td></tr>
            <tr><td><?php echo ($Depreciated = $Depreciated -(($PurchasePrice-$Salvage_Value)*1/15));?></td></tr>
            <?php 
            
            for($i=0;$i<$NUMPAY; $i++){
                $Month = $i + 1;
                $Principle = $Principle - $monPrinciple;
                $monInterest = $Principle * $PerInterate;
                $monPrinciple = $MonthlyPayment-$monInterest;
                echo "<tr><td>". $Month ."</td><td>" . $monPrinciple . "</td><td>" . $monInterest . "</td></tr>";
            }?>
        </table>
    </body>
</html>
