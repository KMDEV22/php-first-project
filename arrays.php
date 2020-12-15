<?php
$myarr = array('apple','orange','banana','pineapple','guava');
print_r($myarr);
    echo "</ol>";
foreach($myarr as $itm){
    echo "<li>$itm</li>";
}
    echo "</ol>";
    echo '<link rel="stylesheet" href="style.css">';
    array_push($myarr,'History');
    echo '<h3>after array_push</h3>';
    echo "</ul>";
foreach($myarr as $itm){
    echo "<li>$itm</li>";
}
    echo "</ul>";

    echo '<h3>after array_pop</h3>';
    array_pop($myarr);
    array_pop($myarr);
    array_pop($myarr);

    echo "</ul>";
    foreach($myarr as $itm){
        echo "<li>$itm</li>";
    }
        echo "</ul>";
    

?>