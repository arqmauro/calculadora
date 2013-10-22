<table style="color: red; text-align: center;">
    <th>numero 1</th>
    <th>operacion</th>
    <th>numero 2</th>
    <th></th>
    <th>resultado</th>
    <? $i=0; foreach ($respuestas as $fila):?>
    <tr>
        <td><?=$fila->num1?></td>
        <td><?=$fila->oper?></td>
        <td><?=$fila->num2?></td>
        <td>=</td>
        <td><?=$fila->res?></td>
        <td><button id="boton<?=$i;?>" onclick="eliminar(<?=$fila->idoperacion;?>)"><span class="ui-icon ui-icon-closethick"></span></button></td>
    </tr>
    <? $i++; endforeach;?>
    <tr>
        <td colspan="3"><b>Sumatoria</b></td>
        <td>=</td>
        <td><b><?=$suma;?></b></td>
    </tr>
</table>
<input type="hidden" id="contador" value="<?=$i;?>"/>