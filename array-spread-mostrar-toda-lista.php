<?php 
$bolo1=[
'acucar',
'farinha',
'ovo'
];

$bolo2=[
    ...$bolo1,
    'vasilha'
];

print_r($bolo2);
?>