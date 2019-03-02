<?php
exec("mode com4: BAUD=9600 PARITY=n DATA=8 STOP=1 to=off dtr=off rts=off");
$fp =fopen("com4", "w");
//$fp = fopen('/dev/ttyUSB0','r+'); //use this for Linux
fwrite($fp, "1"); //write string to serial
fclose($fp);
/*Open COM4 in write mode (for Microsoft Windows only)
$fp =fopen("com4", "w");
or your can use  $fp =fopen("com4", "r+"); for read & write
 
Open USB serial port for read and write (for Linux)
$fp =fopen('/dev/ttyUSB0',r+');
 
Open first serial port in read & write (for Linux)
$fp = fopen('/dev/ttyS0','r+');
 
To terminate string with Carriage Return
fwrite($fp, "string to send\r");
 
To terminate string with New Line & Carriage Return
fwrite($fp, "string to send\n\r");
 
 Close the serial port
 
fclose($fp);*/
?>