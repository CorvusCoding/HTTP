<?php
?>
<!DOCTYPE html>
<html><head><title>Random Letter Generater</title>

<style>

.r1 { background-color: #39ccde;
   	 color: #de7339;font-size:20px;
    }
    
.r2 { background-color: #b42cec;
   	 color: #d8de39;font-size:20px;
    }
    font-family:"Times New Roman", Georgia, Serif;{
    }
</style>
</head>
<body>
    <center>
<hl>
Random Letter Generater
</hl>


<h1>
<?php
echo(rand() . "<br>");
echo(rand() . "<br>");
echo(rand(65,91));
echo "<br />";
$a = (rand(65,91));
$b = (rand(65,91));
$c = (rand(65,91));
echo "$a $b $c";
$ac = chr($a);
$bc = chr($b);
$cc = chr($c);
echo "<br />";
echo "$ac $bc $cc";
$txt = $ac.$bc.$cc;

?>
</h1>
