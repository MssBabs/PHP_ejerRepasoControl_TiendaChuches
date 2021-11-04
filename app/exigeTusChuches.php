<form action="" name="exigeTusChuches" method="POST">
    <p>
        Estas de suerte, porque en Mss.CandyBabs dispone de todas las chuches que puedas imaginar...<br/>
        Por ello <?= $_SESSION['nombUsu'] ?>, te pedimos que introzca las chuches desea comprar:<i> Ej: piruletas...</i>
    </p><br/>
    
    <table>
        <?php
            if(isset($_SESSION['menuChuches'])){
                echo "<tr>CARRITO: </tr>";
                
                foreach($_SESSION['menuChuches'] as $chuche){
                    echo "<tr>
                            <td>$chuche</td>
                        </tr>";
                }   
            }
        ?>
    </table><br/>

    <label><input type="text" name="nombChuche"></label><br/>

    <p>
        <input type="submit" name="orden" value="Exigir Chuche">
        <input type="submit" name="orden" value="Finalizar menu Chuches">
    </p>
    
</form>