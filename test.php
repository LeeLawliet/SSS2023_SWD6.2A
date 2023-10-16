<?php

$indexArray = array("hi", "hello", "bonjour");
$assocArray = array("First"=>"hi", "Second"=>"hello", "Third"=>"bonjour");

sort($indexArray);
ksort($assocArray);

for ($i = 0; $i < count($indexArray); $i++)
{
    echo($indexArray[$i]);
}

foreach ($assocArray as $key => $value)
{
    echo "Key = " . $key . ", Value = " . $value;
}
?>