<?php
$count=0;
include_once('config.php');
if(isset($_GET['sub'])){
$rr=$_GET["rr"];
$count=$_GET['co'];
$k=0;
for($k=0;$k<=$count;$k++)
{
$wtype=$_GET["wtype$k"];
$box=$_GET["box$k"];
$a=$_GET["a$k"];
$b=$_GET["b$k"];
$c=$_GET["c$k"];
$d=$_GET["d$k"];
$e=$_GET["e$k"];
$f=$_GET["f$k"];
$g=$_GET["g$k"];
$h=$_GET["h$k"];
$i=$_GET["i$k"];
$j=$_GET["j$k"];

$query1 = $connection->prepare("INSERT INTO `invoice`(`rrnum`, `box`, `wtype`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
$query1->bind_param('sssssssssssss',$rr,$box,$wtype,$a,$b,$c,$d,$e,$f,$g,$h,$i,$j);
$query1->execute();
$query1->store_result();
$numRows = $query1->affected_rows;
if($numRows>0)
{
    header("Location: irailreciptdisplay.php");
}
else
{
setcookie ( "msg", "Error! Try after sometime.", time()+60 );
header("Location: irailrecipt.php");
}
$query1->close();
}
header("Location: irailrecipt.php?rrnum=$rr");
}
?>