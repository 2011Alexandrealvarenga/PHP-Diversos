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

echo $bolo2[2];
?>