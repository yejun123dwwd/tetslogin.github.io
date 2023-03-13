<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
 
<?php 
 
    for($a=0;$a<=100;$a++){
        //因为$a+$b==100.所以可以省略掉一层for循环直接通过$a来得到$b
        $b=100-$a;  
        if($a*2+$b/2==100 && $b%2==0){ //需要考虑到$b必须为整偶数
            echo $a.",".$b."<br/>";
        }
    }
 
    echo "Done.";
 
 ?>
</body>
</html>