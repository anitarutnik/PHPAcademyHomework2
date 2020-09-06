<?php

$name = 'a,n,i,t,a';
$alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';

$arrName = explode(',', $name);

$revName = explode(",", strrev($name));

$arrAlphabet = explode(',', $alphabet);

for ($i = 0; $i < count($arrName); $i++) {
    $content = "";
    for ($j = 0; $j < count($arrAlphabet); $j++) {
        switch ($arrAlphabet[$j]) {
            case $arrName[$i]:
                if ($arrName[$i] == $revName[$i]) {
                    $content .= "<b><u>$arrName[$i]</u></b>";
                } else {
                    $content .= "<b>$arrName[$i]</b>";
                }
                break;
            case $revName[$i]:
                $content .= "<u>$revName[$i]</u>";
                break;
            default:
                $content .= "$arrAlphabet[$j]";
                break;
        }
    }
    echo "<p>$content</p>";
}



