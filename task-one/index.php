<?php
function replacePunctuation(string $data)
{
    $text = preg_replace("|[^\d\w ]+|i", "", $data);
    return $text;
}

$formatText = replacePunctuation('!te.s;123 .qwe:1231 ,1&1!');
echo $formatText;
