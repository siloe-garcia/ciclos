<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclo Switch</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .cuerpo{
            background-color: #191919;
            color: white;
        }
        .input{
            width: 40%;
            color:black;
            background-color:cadetblue;
            border-left:4px solid white ;
            float: left;
            margin-left: 50px;
            padding: 2em;
        }
        #submit{
            background-color:chartreuse;
            color: black;
            width: 60px;
        }
        .resultado{
            float: right;
            width: 40%;
            color: black;
            padding-left: 1em;
            padding: 20px;
            letter-spacing: 0.5em;
            border-left:4px solid white ;
            background-color:darkseagreen;
            margin-right: 50px;
        }
        h1,h2{
            color: white;
            text-align: center;
        }

    </style>
</head>
<body class="cuerpo">
    <h1>LOS MESES DEL AÑO</h1>
    <div class="input">
        <h2>Formulario</h2>
        <p>Escribe un numero del 1-12 para saber que mes es y si este tiene 31 ó 30 dias.</p><br>
        <form action="" method="POST">
            <label> <b>Número de mes: </b> </label>
            <input type="number" name="mes" min="1" max="12" required><br>
            <input type="submit" value="Enviar" name="submit" id="submit">
        </form>
    </div>
    <div class="resultado">
        <h2>Resultados</h2><br>   
        <?php
        if(isset($_POST['submit'])){
            $mes=$_POST['mes'];
            $meses=['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
            $x=0;
            while ($x < count($meses)) {
                if (($mes % 2)==0 && $mes != 2) {
                    echo 'El mes de: <b>'.$meses[$mes-1].'</b> tiene <b>31</b> dias';
                    break;
                }else{
                    if (($mes % 2)!=0) {
                        echo 'El mes de: <b>'.$meses[$mes-1].'</b> tiene <b>30</b> dias';
                        break;
                    }else{
                        if ($mes=2) {
                            echo 'El mes de: <b>'.$meses[$mes-1].'</b> tiene <b>28</b> dias o es bisciesto';
                            break;
                        }else{
                            echo 'Opcion Invalida :(';
                            break;
                        }
                    }
                    
                }
                
            }
        }
        ?>
    </div>
</body>
</html>