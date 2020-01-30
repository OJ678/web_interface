<?php 
$temperature = shell_exec('cat /sys/bus/iio/devices/iio\:device0/in_temp_input');
echo "<h1>$temperature</h1>";
 ?>
