<?php 
$array = [
    'nome' => 'Ale',
    'idade' => 90,
    'empresa' => 'Ale Empresa'
];
?>
<table border="1">
<?php foreach ($array as $chave => $value):?>
    <tr>
        <td> <?php echo $chave ;?></td>
        <td> <?php echo $value ;?></td>
    </tr>
    <?php endforeach; ?>
</table>