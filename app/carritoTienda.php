<form action="" name="carritoTienda" method="POST">

    <p><?= $_SESSION['nombUsu'] ?> añada los productos a su carrito:</p>

    <table>
        <?php
            if(isset($_SESSION['carritoChuches'])){
                echo "<tr>CARRITO: </tr>";
                
                foreach($_SESSION['carritoChuches'] as $chuche => $cantidad){
                    echo "<tr>
                            <td>$chuche</td>
                            <td>$cantidad</td>
                        </tr>";
                }   
            }
        ?>
    </table>

    <p>
        Seleccione chuches:
            <select name="opChuches">
                <?php 
                    if(isset($_SESSION['menuChuches'])){
                        foreach($_SESSION['menuChuches'] as $chuche){
                            echo "<option value='$chuche'> $chuche </option>";
                        }   
                    }
                ?>
            </select>
        Cantidad: 
            <input type="number" name="numChuche" min="1">
    </p>

    <p>
        <input type="submit" name="orden" value="Anotar">
        <input type="submit" name="orden" value="Terminar">
    </p>
</form>