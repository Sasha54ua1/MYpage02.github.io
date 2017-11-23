
<?php
if ($_POST['']);
$file=fopen('mes.txt','a+');
fputs($file,$_POST['name']);
fputs($file,$somecontent,$_POST['mes']);
fclose($file);
echo 'data save in file!';
?>
