<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>Mi primera página con php</title>    
    </head>
    <body>
        <h1>Hola mundo</h1>

        <form name="form1" method="POST" action="index.php">

            Número 1: <input type="text" name="txtnumero1">
            <br>
            Número 2: <input type="text" name="txtnumero2">
            <br>
            <input type="submit" name="calcular" value="Calcular">

        </form>

        <?php

        if(isset($_POST["calcular"])){

            $valor1 = $_POST["txtnumero1"];
            $valor2 = $_POST["txtnumero2"];

            if($valor1 == "" || $valor2 == ""){
                echo "Debes diligenciar todos los campos.";
                exit;
            }

            echo $valor1 . "<br>";
            echo $valor2 . "<br>";

            echo "<br><br><br>";

            echo "Hola esto es php";
        $numero1 = $valor1;
        $numero2 = $valor2;

        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        $multiplicacion = $numero1 * $numero2;
        $division = $numero1 / $numero2;
        $residuo = $numero1 % $numero2;

        echo "<br><br>La suma de " . $numero1 . " + " . $numero2 . " = ". $suma;
        echo "<br><br>La resta de " . $numero1 . " - " . $numero2 . " = ". $resta;
        echo "<br><br>La multiplicación de " . $numero1 . " * " . $numero2 . " = ". $multiplicacion;
        echo "<br><br>La división de " . $numero1 . " / " . $numero2 . " = ". $division;
        echo "<br><br>el residuo de " . $numero1 . " % " . $numero2 . " = ". $residuo;

        //comentario

        /**
         * comentarios
         * con
         * varias
         * lineas
         */
        
        /**
        * Operadores logicos
        * Y=&& O=||
        * Cuando se usa el Y(&&) se debe tener en cuenta que es verdadero
        *cuando todos los criterios evaluados son verderos.
        * Cuando se usa el O(||) se debe tener en cuenta que es falsa
        *cuand todos los criterios evaluados son falsos.
        */
        
        if($numero1 > $numero2 && $numero1 > 0){
            echo "<br>La condición es verdadera.";
        }else{
            echo "<br>La condicion es falsa";
        }

        if($suma > $resta || $suma > $multiplicacion)
        {
            echo "<br>Todavía sigo siendo verdadera";
        }else{
                echo "<br>Ya soy falsa";
            }
        

        /**
         * Operadores relacionales
         * > mayor que
         * < menor que
         * >= mayor o igual que
         * <= menor o igual que
         * = asignacion
         * == comparacion (if)
         * ! negacion
         * != diferente
         */
          
         $numero3=7;

         echo "<br>";

         if($numero1>$numero2 && $numero1 > $numero3){
             echo "El mayor es " . $numero2;
         }else{
             echo "El mayor es " . $numero3;
         }

         echo "<br>";

         if(( $numero3%2) == 0){
             echo "El numero " . $numero3 ." es par";
         }else{
             echo "El numero " . $numero3 ." es impar";
         }

         /**
          * Uso del switch
          *Teniendo en cuenta los colores del semáforo,
          *realiza un algoritmo donde se indique que:
          *Verde: debe decir avanzar.
          *Amarillo: Avisar que debe detenerse.
          *Rojo: debe decir no avanzar.
          */

          

          $colorSemaforo = "VERDE";
          echo "<br>";
          switch(strtolower($colorSemaforo)){

              case "verde":
              echo "Semáforo es " . $colorSemaforo . ": Avanzar";
              break;

              case "amarillo":
              echo "Semáforo es " . $colorSemaforo . ": Por favor detenerse";
              break;

              case "rojo":
              echo "Semáforo es " . $colorSemaforo . ": No avance";
              break;

              default:
              echo "Valor incorrecto";
              break;
        }

        /**Ciclos
         * 
         * for - while - do while
         */

         //While
         /**
          *  Realizar un ejercicio que muestre los primeros 5 números consecutivos
          */

         $i = 1;
         while($i <=5){
             echo $i . "<br>";
             $i++; //$i = $i + 1;
         }

          //Do-While
         /**
          *  Realizar un ejercicio que muestre los primeros 5 números consecutivos
          */

          $i = 1;
          do{
              echo $i . "<br>";
              $i++;
          }while($i <=5);

          echo "<br>";

          $x = 5;
          $i = 1;

          while($i <=10){
              echo "5 * " . $i . " = " . $x * $i++ . "<br>";
          }

          echo "<br>";

          $x = 5;
          $i = 1;
          do{
            echo "5 * " . $i . " = " . $x * $i++ . "<br>";
          }while($i <=10);

          echo "<br>";

          /**
           * Creacion de vector
           */

           $array = array(1,2,3,4,5,6,7,8,9,10);

           $longitud = count($array);

           for($i=0; $i<$longitud; $i++){
               echo $array[$i] . "<br>";
           }

           echo "<br>";

           $tabla = 5;
           $limite = 10;

           for($indice=1; $indice<=$limite; $indice++){
               echo $tabla."x".$indice."=".($tabla*$indice)."<br>";
           }



           echo "<br>";

           $tabla = 5;
           $limite = array(1,2,3,4,5,6,7,8,9,10);

           foreach($limite as $valor){
               echo $tabla. "x" .$valor . "=".($tabla*$valor)."<br>";
           }


        }

        ?>
    </body>
</html>