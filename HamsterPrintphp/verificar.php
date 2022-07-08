<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

if (!isset($_GET["token"])) {
    header("Location: error.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>FingerPrint PHP + Java + MySql</title>
        <script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
        <link href="Css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="mensaje">
            <img id="imageMessage" />
            <div class="messageStyle">
                <p id="txtMensaje"></p>
            </div>
        </div>
       
            <div>
                <div>
                    <label>Documento:</label>
                    <label id="documento"></label>
                </div>
                <div style="margin-top: 5px;">
                    <label>Nombre Completo:</label>
                    <label id="nombre"></label>
                </div>
                <a target="_self" href="index.php?token=<?php echo $_GET["token"]; ?>">Regresar</a>
            </div>

            <div id="fingerPrint" style="border: solid 1px black;width: 18%;height: 290px;margin-top: 5px;display: none;">
                <div style="display: block">
                    <img id="<?php echo base64_decode($_GET["token"]); ?>" src="imagenes/finger.png" style="width: 80%;margin-left: 9%;"> 
                </div>
                <div style="display: block;padding-left: 3px;">
                    <label id="<?php echo base64_decode($_GET["token"]) . "_status" ?>" style="margin-left: 5px;">
                        Estado del sensor: Inactivo
                    </label>
                    <textarea id="<?php echo base64_decode($_GET["token"]) . "_texto" ?>" cols="30" rows="3"> 
                        ---
                    </textarea>
                </div>
            </div>
        
    </body>
    <script src="js/funciones.js" type="text/javascript"></script>
    <script>
                    cargar_push("Lectura");
    </script>
</html>
