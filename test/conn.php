<?php
$dbc = mysql_connect('192.168.5.241:3306','root','123456')
	or die("�������ݿ�ʧ��");
$db_selected = mysql_select_db("GtTest", $dbc);
?>