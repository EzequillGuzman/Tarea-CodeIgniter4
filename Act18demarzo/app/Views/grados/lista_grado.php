<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('css/estilo.css')?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Grados</title>
</head>
<body>
    <div class="contenedor">
    <h1>Grados</h1>
    <a href="<?=base_url('ver_formulario_nuevo_grado')?>">
        <span class="material-icons">person_add</span>
    </a>
    
    <?php
        //print_r($empleados);
    ?>
    <table>
        <thead>
            <tr class="encabezado_tabla">
                <th>Código</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                
                $no_fila=0;
                foreach($misGrados as $datos):
                    $no_fila=$no_fila+1; //$no_fila++;
                    if($no_fila%2==0){
                        echo "<tr class='fila_par'>";
                    }else{
                        echo "<tr class='fila_impar'>";
                    }
                ?>
            <!-- <tr> este elemento lo creare en las condicionantes para cambiar color -->
                <td><?php echo $datos['codigo_grado']; ?></td>
                <td><?=$datos['nombre']; ?></td>
                <td>
                    <a href="<?=base_url('frm_modificar_grado/'.$datos['codigo_grado'])?>">
                        <span class="material-icons">edit</span>Actualizar
                    </a>
                     
                    <a href="<?=base_url('eliminar_grado/'.$datos['codigo_grado'])?>">
                        <span class="material-icons">delete</span>Eliminar
                    </a> 
                </td>
            </tr>
                <?php
                endforeach;
                
            ?>
            
        </tbody>
    </table>

    </div>
</body>
</html>