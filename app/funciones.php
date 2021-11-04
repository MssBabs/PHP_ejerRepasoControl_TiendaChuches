<?php
    session_start();

    if(!isset($_COOKIE['numVisitas'])){
        setcookie('numVisitas', 1);
    }

    function registroVisitas(){
        if (isset($_COOKIE["numVisitas"])){
            $numVisitas= $_COOKIE["numVisitas"];
            $numVisitas++;
            setcookie("numVisitas", $numVisitas);
        }
    }

    function registrarNombUsuario(){
        if(isset($_REQUEST['nombUsu'])){
            $_SESSION["nombUsu"]= htmlspecialchars($_REQUEST['nombUsu']);   
        }
    }

    function registrardineroEntrada(){
        if(isset($_REQUEST['dineroEntrada'])){
            $_SESSION["dineroEntrada"]= ($_REQUEST['dineroEntrada']);   
        }
    }

    function registrarMenuChuches(){
        if(isset($_REQUEST['nombChuche'])){
            $chuche= htmlspecialchars($_REQUEST['nombChuche']);

            if(!isset($_SESSION['menuChuches'])){
                $_SESSION['menuChuches']=[];  
            }
            
            array_push($_SESSION['menuChuches'],$chuche);
        }
    }

    function anotarChuche(){
        if(isset($_REQUEST['opChuches']) && isset($_REQUEST['numChuche'])){
            $chuche=$_REQUEST['opChuches'];
            $cantidad=$_REQUEST['numChuche'];

            if($cantidad>0){ 
                if(isset($_SESSION['carritoChuches'] [$chuche])){
                    $cantidad+=$_SESSION['carritoChuches'][$chuche];
                }
    
                $_SESSION['carritoChuches'] [$chuche] = $cantidad;  
            }
        }
    }

    function cerrarSession(){
        session_destroy();
    }
?>