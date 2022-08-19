<?php

$a = "aefekpoasksaaskfekjaada";
$result = explode("a",$a);
print_r($result);

$last = array_pop($result);
echo $last;
echo $a;
