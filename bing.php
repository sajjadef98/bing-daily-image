<?php
$url ='https://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1&mkt=en-US';
$img = json_decode(file_get_contents($url));
$imgsrc ='https://www.bing.com'.$img->images[0]->url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$img->images[0]->title?></title>
</head>
<body>
    <img src="<?=$imgsrc?>" alt="<?=$img->images[0]->title?>" style="width:100%; height:100%">
<pre><?=var_dump($img);?></pre>
</body>
</html>