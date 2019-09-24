<?php
echo "Welke operatie wil je uitvoeren? (+, /, *, -)\n";
$plusminus = readline();
echo "Eerste getal?\n";
$eerste = readline();
echo "Tweede getal?\n";
$tweede = readline();
echo $eerste, $plusminus, $tweede, " = ";
if ($plusminus == "-")
    echo ($eerste - $tweede);
if ($plusminus == "+")
    echo ($eerste + $tweede);
if ($plusminus == "*")
    echo ($eerste * $tweede);
if ($plusminus == "/")
    echo ($eerste / $tweede);