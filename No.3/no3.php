<?php
function hitungJumlahString($withoutstringlength)
{
    $n = 0;
    while(substr($withoutstringlength, $n, $n+1) != '')//General syntax substr(string,start,length)
    {
        $n++;
    }
    echo $n;
}
hitungJumlahString("Hello My Name is Funky Reza");
?>