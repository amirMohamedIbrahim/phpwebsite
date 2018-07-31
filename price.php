<?php 
    //member status/discount
    $member = 1;
    $member_discount = 0.10;

    //Product prices
    $price_ht = 29.95; //Price for HBQ-i18 Touch white/black
    $price_i8 = 34.95; //Price fori8-mini

    if (!$member){
        $price_ht = "$$price_ht"; 
        $price_i8 = "$$price_i8";
        
    }else
    {
        $member_price_ht = $price_ht - ($price_ht * $member_discount);        
         $price_ht = "MSRP $$price_ht<br>Member price: $$member_price_ht ~\t10&#37; saving";
        
        $member_price_ht = $price_i8 - ($price_i8 * $member_discount);        
         $price_i8 = "MSRP $$price_i8<br>Member price: $$member_price_ht ~\t10&#37; saving";
    }

   //Create greeting
    $time_of_day = new DateTime();
    $time_of_day->format('H');
        
    if($time_of_day){
        $member_message = "<h2>Hello Early Riser!</h2>"; 
        
    }else
    {
     $member_message = "Good Afternoon";    
    }
     
?>