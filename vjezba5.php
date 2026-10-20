<?php
    var_dump(7 / 2);
    var_dump(8 / 2);
    var_dump("5" + 3);
    var_dump("5" . 3);
    var_dump(17 % 5);

    $minute = 135;

    $sati = intdiv($minute, 60);
    $preostaleMinute = $minute % 60;

    echo $sati . " h " . $preostaleMinute . " min";

    $nazivTvrtke="Cyber Guard";
    echo strlen($nazivTvrtke);
    mb_strlen($nazivTvrtke);
    strtoupper($nazivTvrtke);
?>    