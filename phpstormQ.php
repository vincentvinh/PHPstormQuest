<?php
/**
 * Created by PhpStorm.
 * User: wcs-fontainebleau
 * Date: 16/03/17
 * Time: 10:27
 */
$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];
print_r($students);
$tot = 0;

foreach ($students as $key => $value)
{
    $tot +=$value;
}
$nbr = 0;
$nbr = count($students);
$moy = 0;
$moy = $tot / $nbr;
echo "l'/age moyen est :" . $moy;