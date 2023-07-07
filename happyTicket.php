function isHappy(string $num) {
    $numStr = (string) $num;
    $count = strlen($numStr);
    $half = $count / 2;

    $i = 0;
    $sumBegin = 0;
    while ($i <= $half - 1) {
        $sumBegin = $sumBegin + $numStr[$i];
        $i += 1;
    }

    $i = -1;
    $sumEnd = 0;
    while ($i >= -$half) {
        $sumEnd += $numStr[$i];
        $i -= 1;
    }
<<<<<<< HEAD
    return $sumBegin === $sumEnd;
=======
    
    return $sumBegin === $sumEnd ? true : false;
>>>>>>> 58ee9d01fc9c956bb7d01ac1e046193c1262739c
}
