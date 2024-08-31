<?php
include "Subject.php";
include "Observer.php";
include "BinaryObserver.php";
include "HexaObserver.php";
include "OctalObserver.php";

$subject = new Subject();

new HexaObserver($subject);
new OctalObserver($subject);
new BinaryObserver($subject);

echo "First state change: 15 <br>";
$subject->setState(15);
echo "Second state change: 10 <br>";
$subject->setState(10);
