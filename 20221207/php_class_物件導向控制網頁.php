<?php
class Webpage
{
//儲存網頁標題的屬性
    public $title;
    //顯示網頁 Body 內容的方法
    public function show()
    {
        echo <<<HTML_TEXT
        <!DOCTYPE html>
     <html>
     <head><title>$this->title</title></head>
     <body><p>WebPage 類別</p></body>
     </html>
     HTML_TEXT;
        //  記得<<<語法(開頭結尾)法前後不可任何字元 包括空白
    }
}
header("Content-type:text/html;charse=UTF-8");
$page1 = new WebPage;
$page1->title = "這是第一頁";
$page1->show();