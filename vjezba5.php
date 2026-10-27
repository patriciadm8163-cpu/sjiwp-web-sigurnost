
<?php
// TSD-4RT | inicijali | 27.10.2026
    var_dump(7 / 2);
    var_dump(8 / 2);
    var_dump("5" + 3);
    var_dump("5" . 3);
    var_dump(17 % 5);

    $minute = 135;

    $sati = intdiv($minute, 60);
    $preostaleMinute = $minute % 60;

    echo $sati . " h " . $preostaleMinute . " min";

    $nazivTvrtke="CyberGuardč";
    echo strlen($nazivTvrtke);
    echo mb_strlen($nazivTvrtke);
    echo strtoupper($nazivTvrtke);
    echo mb_strtoupper($nazivTvrtke);

    echo number_format(1234.5,2);
    echo number_format(1234.5,2,",",".");
    echo round(318.75);
    echo date("j.n.Y.");
   
    $email = " Info@SigurnaMreza.HR ";
    
    $email = strtolower(trim($email));
    
    echo '<a href="mailto:' . $email . '">' . $email . '</a>';
   
    

?>    