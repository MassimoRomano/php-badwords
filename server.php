<?php

$paragrafo=$_GET['paragrafo'];
$censura=$_GET['censura'];

echo "<h2>Paragrafo:</h2>". ' ' . "<h3>$paragrafo</h3>" . '' . "<p>Lunghezza Paragrafo:" .strlen($paragrafo)."</p>" ;

$censura= str_ireplace("$censura",'***',"$paragrafo");

echo "<h2>Censura:</h2>". ' ' ."<h3>$censura</h3>";

