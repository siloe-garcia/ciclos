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
            switch ($mes) {
                case '1':
                    echo'El mes de <b>ENERO</b> <br><br>';
                    echo 'Tiene <b>31</b>dias';
                    break;
                case '2';
                    echo'El mes de <b>FEBRERO</b><br><br>';
                    echo 'Tiene <b>28</b>dias ó es Biciesto';
                    break;
                case '3';
                    echo'El mes de <b>MARZO</b><br><br>';
                    echo 'Tiene <b>31</b>dias';
                    break;
                case '4';
                    echo'El mes de <b>ABRIL</b><br><br>';
                    echo 'Tiene <b>30</b>dias';
                    break;
                case '5';
                    echo'El mes de <b>MAYO</b><br><br>';
                    echo 'Tiene <b>31</b>dias';
                    break;
                case '6';
                    echo'El mes de <b>JUNIO</b><br><br>';
                    echo 'Tiene <b>30</b>dias';
                    break;
                case '7';
                    echo'El mes de <b>JULIO</b><br><br>';
                    echo 'Tiene <b>31</b>dias';
                    break;
                case '8';
                    echo'El mes de <b>AGOSTO</b><br><br>';
                    echo 'Tiene <b>31</b>dias';
                    break;
                case '9';
                    echo'El mes de <b>SEPTIEMBRE</b><br><br>';
                    echo 'Tiene <b>30</b>dias';
                    break;
                case '10';
                    echo'El mes de <b>OCTUBRE</b><br><br>';
                    echo 'Tiene <b>31</b>dias';
                    break;
                case '11';
                    echo'El mes de <b>NOVIEMBRE</b><br><br>';
                    echo 'Tiene <b>30</b>dias';
                    break;
                case '12';
                    echo'El mes de <b>DICIEMBRE</b><br><br>';
                    echo 'Tiene <b>31</b>dias';
                    break;
                default:
                    echo'¡¡¡El mes no existe!!!';
                    break;
            }
        }
        ?>
    </div>
</body>
</html>