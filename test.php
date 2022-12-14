<?php
for ($i = 1; $i <= 30; $i++) { //產生30個
    $b = rand(1, 100); //產生1~100的亂數
    for ($j = 0; $j < $i; $j++) { //檢查重覆
        $a[] = null;
        if ($b == $a[$j]) {
            $b = rand(1, 25); //如果重覆，重新產生亂數
            $j -= 1;
        }
    }
    $a[] = $b; //寫入陣列
}
arsort($a); //排序
foreach ($a as $value) { //把陣列內的亂數讀出
    echo $value . "<br />";
}