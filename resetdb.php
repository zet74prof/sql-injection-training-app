<?php
$DBUSER = 'root';
$DBPASS = '5MichelAnnecy';

system('mysql -u '.$DBUSER.' -p'.$DBPASS.' < sqlitraining.sql');
echo "DB reset!<br/>";
echo "Go back to <a href='/'>Home</a>";
?>
