<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>和尚问题</title>
</head>

<body>
<?php 
    for ($a = 0; $a <= 100; $a++){
        $b = 100 - $a;  
        if ($a * 3 + $b / 3 == 100 && $b % 3 == 0){
            echo $a.",".$b."<br/>";
        }
    }
    echo "大小和尚分别为:25个,75个。";
 ?>
</body>
</html>