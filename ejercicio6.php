<table border='1' style='width:100%'>
    <caption>Tablas de multiplicar</caption>
    <tr>
        <?php for($num = 1; $num <= 10; $num++): ?>
        <th>Tabla del <?=$num?></th>
        <?php endfor; ?>
    <tr>
    <tr>
        <?php for($a = 1; $a <= 10; $a++): ?>
            <td>
                <table>
                    <tr>
                        <td>

                        <?php for($b = 1; $b <= 10; $b++): ?>
                            <tr><td><?=$a?> x <?=$b?> = <?=($a*$b)?></td><tr>
                        <?php endfor;?>
                        </td>
                    </tr>
                </table>
            </td>
        <?php endfor?>
    </tr>
</table>

<style>
    .tablas {
        float: left;
        margin: 5px;
        border: 1px solid #ff0044;
        padding: 5px;
        min-width: 100px;
    }

    .contenedor {
        display: flex;
        justify-content: center;
    }
</style>

<!-- Mostrar una tabla html con las tablas de multiplicar del 1 al 10 -->
<h1 style="text-align: center">Tablas de Multiplicar</h1>
<div class='contenedor'>
    <?php for($num = 1; $num <= 11; $num++): ?>
            <div class='tablas'>
                <h3>Tabla del <?=$num?></h3>
                <?php for($i = 1; $i <= 10; $i++): ?>
                    <table>
                        <tr>
                            <td><?=$num?> x <?=$i?> = <?=($num*$i)?></td>
                            <hr style="border: 1px solid #ff0044">
                        <tr>
                    </table>
                <?php endfor; ?>
            </div>
    <?php endfor;?>
</div>