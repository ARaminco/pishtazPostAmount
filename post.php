<?php
echo postAmount($_GET['w'])."<br>";


function postAmount($weight){
    if($weight <= '500'){
        $pamount = 60000 ;
    }elseif($weight >= '501' && $weight <= '1000'){
        $pamount = 70000 ;
    }elseif($weight >= '1001' && $weight <= '2000'){
        $pamount = 95000 ;
    }elseif($weight >= '2001'){
        $wp = (float) $weight - 2000 ;
        $wp2 = (float) $wp / 1000 ;
        $wp3 = ceil($wp2);
        $pamount = 100000+($wp3 * 21000 );
    }
    return $pamount;
}
