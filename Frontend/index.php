<?php
require('../Backend/config/database.php');
include('../Backend/empresas.php');

$resultado = selectEmpresas();
?>

<table width="50%" align="center">
    <tr>
    <td width="50%">
    <b>EMPRESA</b>
    </td>
    <td>
    <b>VER PAGINA</b>
    </td>
    </tr>

    <?php while ($empresas = mysqli_fetch_assoc($resultado)): ?>
        <tr>
            <td>
                <?php echo $empresas['denominacion']; ?>
            </td>
            <td>
                <a href="home.php?id=<?php echo $empresas['id'] ?>">URL PAGINA HOME</a>
            </td>
        </tr>
    <?php endwhile; ?>

</table>