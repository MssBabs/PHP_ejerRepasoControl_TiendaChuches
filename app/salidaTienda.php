<form action="" name="salidaTienda" method="POST">
    <p><?= $_SESSION['nombUsu'] ?>, este es su pedido: </p>
    <table>
        <?php
            if(isset($_SESSION['chuches'])){
                echo "<tr>CARRITO: </tr>";
                
                foreach($_SESSION['chuches'] as $chuche => $cantidad){
                    echo "<tr>
                            <td>$chuche</td>
                            <td>$cantidad</td>
                        </tr>";
                }   
            }
        ?>
    </table>

    <p> Muchas gracias, por comprar en Mss.CandyBabs.</p>

</form> 