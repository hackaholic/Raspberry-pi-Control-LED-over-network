<?php
if($_REQUEST)
{
$num = $_REQUEST['num'];
if($num == 1){
    exec('sudo /usr/bin/python /var/www/server/onof_serv.py ' . $num);
    echo "on";

    }
elseif ($num == 0){
     exec('sudo /usr/bin/python /var/www/server/onof_serv.py ' . $num);
     echo "off";
    }
else
     echo "can't dtermine state";
}
?>
