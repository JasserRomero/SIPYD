<?php
    require_once("../Controlador/conexion.php");
    include("../Modelo/Funcionario.php");
?>

<div class="row">
    <div class="col-sm-12">
        <table class="table table-dark table-hover table-condensed table-bordered">
            <tr>
                <td>Identificacion</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Documento</td>
                <td>Correo</Em></td>
                <td>Oficiona</td>
                <td>Cuenta</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>
            <?php
            $conexion = new Conexion();
            $conx = $conexion->Conectar();
            $sql = "SELECT f.`f_cood`, f.`f_nombre`, f.`f_apellido`, f.`f_documento`, f.`f_correo`, o.`o_descripcion`, tc.`tc_descripcion`
            FROM `funcionario` AS f, `oficina` AS o, `cuenta` AS c, `tipo_cuenta` AS tc
            WHERE f.`o_cood`= o.`o_cood` AND f.`c_cood` = c.`c_cood` AND c.`tc_cood` = tc.`tc_cood`";
            $result = mysqli_query($conx,$sql);
            while($ver = mysqli_fetch_row($result)){
                $datos = $ver[0]."||". 
                        $ver[1]."||".
                        $ver[2]."||".
                        $ver[3]."||".
                        $ver[4]."||".
                        $ver[5]."||".
                        $ver[6];
                
            ?>
            <tr>
                <td><?php echo $ver[0]; ?></td>
                <td><?php echo $ver[1]; ?></td>
                <td><?php echo $ver[2]; ?></td>
                <td><?php echo $ver[3]; ?></td>
                <td><?php echo $ver[4]; ?></td>
                <td><?php echo $ver[5]; ?></td>
                <td><?php echo $ver[6]; ?></td>
                <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalEditarF" onclick="agregarForm('<?php echo $datos ?>')">Editar</button></td>
                <td><button class="btn btn-danger" onclick="preguntarF('<?php echo $ver[0] ?>')"> Eliminar </button> </td>
            </tr>
            <?php }?>
        </table>
    </div>
</div>