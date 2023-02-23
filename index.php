<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
     $int1=10;
     $int2=3;
     $int3=7;
     $int4=20.2;
     $string="Stringword";
     $arr= array("VW","BMW","Toyota","Nissan");
     $a= array("https://th.bing.com/th/id/R.a6b123abe8827f64e1008fb0a9681b99?rik=5NTtRYUNVOaxYw&pid=ImgRaw&r=0","https://www.gratistodo.com/wp-content/uploads/2016/12/BMW-Wallpapers-14.jpg","https://th.bing.com/th/id/R.530cd0fe834d695a134dc1b76714cf9e?rik=biDSV0rJ3sH3nA&pid=ImgRaw&r=0","https://th.bing.com/th/id/OIP.SD1-FywlLvslhsxiDUWZIgHaEq?pid=ImgDet&rs=1");
    ?>

    <div class="div">
    <div>
    <div>Int 1=<?=$int1?></div>
    <div>Int 2=<?=$int2?></div>
    </div>
    <div>
    <div>Int 3=<?=$int3?></div>
    <div>Float=<?=$int4?></div>
    </div>
    </div>

    <div class="string_div">String=<?=$string?></div>
    <div class="string_div" style="margin-top:0; border-top:none;">Array=<?=$arr[0]." ".$arr[1]." ".$arr[2]." ".$arr[3]?></div>

    <div class="div">
    <div>
    <div>Int1+Int2=<?=$int1+$int2?></div>
    <div>Int1/Int2=<?=$int1/$int2?></div>
    </div>
    <div>
    <div>Int3*Int2=<?=$int3*$int2?></div>
    <div>Int3%Float=<?=$int3%$int4?></div>
    </div>
    </div>
    <div class="string_div" >reverse String=<?=strrev($string)?></div>
    <div class="imgdiv">
  <?=$arr[0]?>  <img src="<?=$a[0]?>" alt="" width="250px"/>
  <?=$arr[1]?>   <img src="<?=$a[1]?>" alt="" width="300px"/>
  <?=$arr[2]?>   <img src="<?=$a[2]?>" alt="" width="300px"/>
  <?=$arr[3]?>  <img src="<?=$a[3]?>" alt="" width="300px"/>
</div>
</body>
</html>