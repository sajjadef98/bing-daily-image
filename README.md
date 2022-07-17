# bing-daily-image
get bing daily image with php
```php
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
```


<img src="https://s25.picofile.com/file/8451604568/Capture_bing.jpg" alt="get bing daily image with php" width="823" height="445">
<img src="https://s24.picofile.com/file/8451604450/Capture23.jpg" alt="get bing daily image with php" width="850" height="406">

