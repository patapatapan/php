<?php
function randomPMT_CBN($A, $B, $C)
{
    //檢查數字正確
    if ($B > $A) {
        //輸出陣列內含項目
        for ($l = 0; $l < $C; $l++) {
            //製作A到B的陣列
            for ($i = $A; $i <= $B; $i++) {
                $D[$i] = $i;
            }
            //取AB差數量的，在AB之間的隨機數字
            for ($i = $A; $i <= $B; $i++) {
                //取隨機數餘數隨機抓陣列中的數字，+1避免除0
                $j = rand() % ($B - $i + 1) + $i;
                //把取過的項目與未使用的交換，使用過的放前面
                $k = $D[$i];
                $D[$i] = $D[$j];
                $D[$j] = $k;
            }
            // 製作組合陣列
            $E[] = $k;
        }
        // 製作排列陣列
        for ($l = 0; $l < $C; $l++) {
            $F[] = $D[$A + $l];
        }
        // 輸出隨機排列
        echo implode(" ", $F) . "<br>";
        print_r($F) . "<br>";
        //echo "\n";
        echo "<br>";
        // 輸出隨機組合
        echo implode(" ", $E) . "<br>";
        print_r($E);

    } else {
        $R = false;
        echo "數字輸入錯誤。";
    }
}

randomPMT_CBN(1, 20, 10);