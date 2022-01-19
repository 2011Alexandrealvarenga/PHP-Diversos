<?php 
function diaDaSemana($data) {
    $dia = [
        'Domingo',
        'Segunda-Feira',
        'Terça-Feira',
        'Quarta-Feira',
        'Quinta-Feira',
        'Sexta-Feira',
        'Sábado',
    ];
    return date('d/m/Y', strtotime($data)).' - '.$dia[date('w', strtotime($data))];
}
echo diaDaSemana('2021-10-10');
?>