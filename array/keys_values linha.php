<?php 
$array = [
    'nome' => 'Ale',
    'idade' => 90,
    'empresa' => 'Ale Empresa'
];
$chaves = array_keys($array);
$valores = array_values($array);
?>

<table border="1">
        <tr>
            <?php foreach ($chaves as $chave ):?>
                <th> <?php echo $chave ;?></th>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach ($valores as $valor ):?>
                <th> <?php echo $valor ;?></th>
            <?php endforeach; ?>
        </tr>

</table>