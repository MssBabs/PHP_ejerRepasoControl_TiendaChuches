<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EjerRepaso_TiendaChuches</title>
</head>
<body>
    <header>
        <h2>The candy store</h2>
        <h1>Mss.CandyBabs</h1><Br/><Br/>
    </header>
    <main>
        <?php
            include_once 'app/funciones.php';

            if ( !isset($_REQUEST['orden'])){
                registroVisitas();
                include_once 'app/entradaTienda.php';
                
            }else{
                switch ($_REQUEST['orden']){  
                    case "Entrar":
                        registrarNombUsuario();
                        registrardineroEntrada();
                        include_once 'app/exigeTusChuches.php';
                        break;

                    case "Exigir Chuche":
                        registrarMenuChuches();
                        include_once 'app/exigeTusChuches.php';
                        break;
                    
                    case "Anotar":
                        anotarChuche();
                        /*No BREAK*/

                    case "Finalizar menu Chuches":
                        include_once 'app/carritoTienda.php';
                        break;

                    case "Terminar":
                        include_once 'app/salidaTienda.php';
                        cerrarSession();
                        break;
                }
            }
        ?>
    </main>
</body>
</html>