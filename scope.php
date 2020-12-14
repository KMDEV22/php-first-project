<?php
echo "<h1> this is scope file </h1>";
echo "<a href='index.php'>scope</a>";

$samplevar = 10;
echo "<br><b>[outside]</b> samplevar is $samplevar  ";


// echo "<br>  sample var is $samplevar";

function sumvars(){
    $a = 50;
    $b = 175;
    $samplevar = $a + $b;
    echo "<br> <b>[inside]</b> samplevar is added up to  $samplevar";
 
}
sumvars();
echo "<br><b>[after functioncall]</b> samplevar which was outside is unchanged $samplevar  ";
?>
