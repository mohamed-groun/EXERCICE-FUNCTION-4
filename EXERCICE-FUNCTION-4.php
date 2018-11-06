<?php
$tab = array(1,1.5,2.15,3,array(1,2,3),true);
$type="integer";

function  extractTabByType ($tab, $type) {
    $tabNewType= array();
    foreach ($tab as $value) {
        if (gettype($value) == $type) {
            array_push($tabNewType, $value);
        }
    }
print_r($tabNewType);
}
extractTabByType($tab,$type);
?>