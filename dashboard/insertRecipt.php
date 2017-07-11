<?php
include_once('config.php');
if(isset($_POST['sub'])){
$rrnum=$_POST['rrnum'];
$rrdate=$_POST['rrdate'];
$type1=$_POST['type1'];
$type2=$_POST['type2'];
$frnnum=$_POST['frnnum'];
$invdate=$_POST['invdate'];
$invnum=$_POST['invnum'];
$zonecode=$_POST['zonecode'];
$RiskRate=$_POST['RiskRate'];
$handledBy=$_POST['handledBy'];
$rateType=$_POST['rateType'];
$CHRG=$_POST['CHRG'];
$charDist=$_POST['charDist'];
$rate=$_POST['rate'];
$charVia=$_POST['charVia'];
$from=$_POST['from'];
$fromStationCode=$_POST['fromStationCode'];
$to=$_POST['to'];
$toStationCode=$_POST['toStationCode'];
$sendName=$_POST['sendName'];
$sendAdd=$_POST['sendAdd'];
$congName=$_POST['congName'];
$congAdd=$_POST['congAdd'];
$commCode=$_POST['commCode'];
$Artnum=$_POST['Artnum'];
$packCode=$_POST['packCode'];
$actWt=$_POST['actWt'];
$overWt=$_POST['overWt'];
$charRate=$_POST['charRate'];
$otherChar=$_POST['otherChar'];
$rebate=$_POST['rebate'];
$paidOnChar=$_POST['paidOnChar'];
$underChar=$_POST['underChar'];
$OverChar=$_POST['OverChar'];
$remark=$_POST['remark'];
$query1 = $connection->prepare("INSERT INTO `reciept`(`rrnum`, `rrdate`, `type1`, `type2`, `frnnum`, `invdate`, `invnum`, `zonecode`, `RiskRate`, `handledBy`, `rateType`, `CHRG`, `charDist`, `rate`, `charVia`, `from`, `fromStationCode`, `to`, `toStationCode`, `sendName`, `sendAdd`, `congName`, `congAdd`, `commCode`, `Artnum`, `packCode`, `actWt`, `overWt`, `charRate`, `otherChar`, `rebate`, `paidOnChar`, `underChar`, `OverChar`, `remark`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$query1->bind_param('sssssssssssssssssssssssssssssssssss',$rrnum,$rrdate,$type1,$type2,$frnnum,$invdate,$invnum,$zonecode,$RiskRate,$handledBy,$rateType,$CHRG,$charDist,$rate,$charVia,$from,$fromStationCode,$to,$toStationCode,$sendName,$sendAdd,$congName,$congAdd,$commCode,$Artnum,$packCode,$actWt,$overWt,$charRate,$otherChar,$rebate,$paidOnChar,$underChar,$OverChar,$remark );
$query1->execute();
$query1->store_result();
$numRows = $query1->affected_rows;
if($numRows>0)
{
header("Location: irailtransacation.php");
}
else
{
setcookie ( "msg", "Error! Try after sometime.", time()+60 );
header("Location: irailtransacation.php");
}
$query1->close();
}
?>
