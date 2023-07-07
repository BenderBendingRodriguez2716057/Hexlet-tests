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
    
    return $sumBegin === $sumEnd ? true : false;
}
