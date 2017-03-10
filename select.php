<?php
require_once('connectvars.php');
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$sql_select = "select * from userInfo";
$data = mysqli_query($dbc, $sql_select);
$row = mysqli_fetch_array($data);
$list = array("email"=>$row[email],"platform"=>$row[platform],"security_answer"=>$row[security_answer],"offline_season"=>$row[offline_season],"offline_division"=>$row[offline_division],"offline_round"=>$row[offline_round],"last_match_time"=>$row[last_match_time],"rmove_coins"=>$row[rmove_coins],"server_id"=>$row[server_id]);
echo json_encode($list);
mysqli_free_result($data);
mysqli_close();
?>