<?php

include 'query.php';


$AccountNumber = 1;
/*
$DateCalculated = $_POST;
$PaymentMax = $_POST;
$MonthlyPayment = $_POST;
$TotalInterest = $_POST;
$SalvageValue = $_POST;
$InsurancePayment = $_POST;
$PurchasePrice = $_POST;
$DepositAmount = $_POST;
$LoanLength = $_POST;
$CreditRating = $_POST;
$NetIncome = $_POST;
*/

//$DateCalculated = $_POST;
//$TotalInterest = $_POST;
$PurchasePrice = 30000;
$DepositAmount = 5000;
$LoanLength = 5;
$CreditRating = 'poor';
$NetIncome = 40000;
$AnnualMilage= 15000;
$MileageRate = .55;
$PaymentMax = $NetIncome * .2;



// Monthly Payment
$LoanAmount = $PurchasePrice - $DepositAmount;
$NUMPAY = $LoanLength * 12;
$PerInterate =  .06/12;
$MonthlyPayment = $LoanAmount * ($PerInterate*pow((1+$PerInterate), $NUMPAY))/((pow((1+$PerInterate), $NUMPAY))-1);
$Interest = ($LoanAmount * $PerInterate);
$Principle = $LoanAmount;
$monPrinciple = 0;
//Total interest needs calculation 

$TotalInterest = $Interest;

//Salvage Value
$Salvage_Rate = ($MileageRate-($PurchasePrice/($AnnualMilage * 5)))*2;
$Salvage_Amount = $PurchasePrice * $Salvage_Rate;
$Salvage_Value = $PurchasePrice -($Salvage_Amount);


//Insurance Premiun Calculation
$Insurance_Premium = .025;

$age = 24;
$gender = 'male';
$MovingViolation = 0;
    if($age < 25){
        
        if($gender == 'male'){
          
            $Insurance_Premium += .02;
         
        }else{
            
            $Insurance_Premium += .015;
        
        }
        
         if($CreditRating == 'poor'){
        
            $Insurance_Premium += .005;
        }
        
        if($AnnualMilage > 10000){
            
            $Insurance_Premium += .005;
            
        }
        
        if($MovingViolation < 1){
            
            $Insurance_Premium += .015;
        } elseif($MovingViolation <= 3){
            
            $Insurance_Premium += .01;
            
        } elseif($MovingViolation <= 5){
            
            $Insurance_Premium += .005;
        }
        
    }elseif($age < 30){
        
        
        if($gender == 'male'){
          
            $Insurance_Premium += .015;
         
        }else{
            
            $Insurance_Premium +=  .01;
        
        }
        
        if($CreditRating == 'poor'){
        
            $Insurance_Premium += .005;
        }
        
       if($AnnualMilage > 10000){
            
            $Insurance_Premium += .005;
            
        }
        
        if($MovingViolation < 1){
            
            $Insurance_Premium += .015;
        } elseif($MovingViolation <= 3){
            
            $Insurance_Premium += .01;
            
        } elseif($MovingViolation <= 5){
            
            $Insurance_Premium += .005;
        }
        
        
    }elseif($age < 40){
        
         if($gender == 'male'){
          
            $Insurance_Premium += .01;
         
        }else{
            
           $Insurance_Premium +=  .005;
        
        }
        
                if($CreditRating == 'poor'){
        
            $Insurance_Premiumn += .005;
        }
        
        if($AnnualMilage > 10000){
            
            $Insurance_Premium += .005;
            
        }
        
        if($MovingViolation < 1){
            
            $Insurance_Premium += .015;
        } elseif($MovingViolation <= 3){
            
            $Insurance_Premium += .01;
            
        } elseif($MovingViolation <= 5){
            
            $Insurance_Premium += .005;
        }
        
    }else{
        
         if($CreditRating == 'poor'){
        
            $Insurance_Premium += .005;
        }
        
        if($AnnualMilage > 10000){
            
            $Insurance_Premium += .005;
            
        }
        
        if($MovingViolation < 1){
            
            $Insurance_Premium += .015;
        } elseif($MovingViolation <= 3){
            
            $Insurance_Premium += .01;
            
        } elseif($MovingViolation <= 5){
            
            $Insurance_Premium += .005;
        }
       
       
    }
    $InsurancePayment = $PurchasePrice * $Insurance_Premium;
    //Monthly Cost

        $Monthly = ($InsurancePayment / 12)+$MonthlyPayment + ($Salvage_Amount/$NUMPAY);


//echo $MonthlyPayment, $Principle, $Interest, $InsurancePayment, $Monthly;t of Owning and Operating

        
//push to DB
 date_default_timezone_set('EST');
$Date = date('Y-m-d h:i:s');
//
query("Insert Into loans (AccountNumber,DateCalculated,PaymentMax,MonthlyPayment,TotalInterest,SalvageValue,InsurancePayment,PurchasePrice,DepositAmount,LoanLength,CreditRating,NetIncome) values('$AccountNumber','$Date','$PaymentMax','$MonthlyPayment','$TotalInterest','$Salvage_Value','$InsurancePayment','$PurchasePrice','$DepositAmount','$LoanLength','$CreditRating','$NetIncome')");


