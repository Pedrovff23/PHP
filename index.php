 <?php
   //Cookie
   $nomeDoCookie = "usuario";
   $valorDoCookie = "Pedro Victor";
   setcookie($nomeDoCookie, $valorDoCookie, time() + (86400 * 30), "/");
   # setcookie($nomeDoCookie, $valorDoCookie, time() + (-1), "/"); invalidar o cookie

   //Cookie session
   session_start();
   $_SESSION['nome'] = "Pedro Victor";
   # session_unset(); limpar seção;
   # session_destroy(); destruir a seção

   ?>
 <!DOCTYPE html>
 <html lang="pt-br">

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>

 <body>
    <?php
      // Tipos de comentarios no PHP /**/ - // - #

      echo "<h1>Aula inicial</h1>";

      //Variáveis tipo String
      $texto1 = "PHP";
      $texto2 = "PHP";
      echo "<h2>" . $texto1 . "</h2>";
      echo "Estudando " . $texto2 . "<br>";
      echo "<br>";

      //Variáveis tipo int
      $numero1 = 40;
      $numero2 = 30;
      echo "numero 1: " . $numero1 . "<br>";
      echo "numero 2: " . $numero2 . "<br><br>";
      echo "Soma do número 1 com o número 2 = " . $numero1 + $numero2 . "<br>";
      echo "Subtração do número 1 com o número 2 = " . $numero1 - $numero2 . "<br><br>";

      //Variáveis tipo float
      $numero1 = 30.30;
      $numero2 = 10.50;
      echo "numero 1: " . $numero1 . "<br>";
      echo "numero 2: " . $numero2 . "<br><br>";
      echo "Soma do número 1 com o número 2 = " . $numero1 + $numero2 . "<br>";
      echo "Subtração do número 1 com o número 2 = " . $numero1 - $numero2 . "<br><br>";

      //Variáveis tipo boolean
      $variavel1 = TRUE;
      $variavel2 = FALSE;
      echo $variavel1 ? 'variável 1: TRUE<br>' : 'variável 1: FALSE<br>';
      echo $variavel2 ? 'variável 2: TRUE<br>' : 'variável 2: FALSE<br><br>';

      //Variáveis tipo Array
      $carros = array("Gol", "Siena", "Lexus LFA", "Fiesta");
      echo "Carros: " . $carros[0] . ", " . $carros[1] . ", " . $carros[2] . ", " . $carros[3] . "<br><br>";

      //Saber o tipo das Variáveis
      # var_dump(nome_da_varievel);
      echo var_dump($texto1) . "<br><br>";

      //Operadores aritméticos
      # + Adição
      # - Subtração
      # * Mutilipicação
      # / Divisão
      # Modulo % (resto)
      # Elevado **


      //Operadores de comparação
      #  ==  Igual
      #  === Idêntico 
      #  != or <> Diferente 
      #  !== Não Idêntico 	
      #  > 	Maior que
      #  < 	Menor que
      #  >= 	Maior ou igual 
      #  <= 	Menor ou igual 

      //Operadores de incremento e decremento
      $a = 0;
      echo ++$a . "<br>";
      $b = 0;
      echo $b++ . "<br>";
      $c = 1;
      echo --$c . "<br>";
      $d = 1;
      echo $d++ . "<br><br>";

      //Operadores lógicos
      # and/&& ($a and/&& $b)       Verdadeiro se $a e $b são verdadeiros
      # or/xor/|| ($a or/xor/|| $b) Verdadeiro se $a ou $b são verdadeiros
      # !         (!$a)             Verdadeiro se $a é não é verdadeiro
      $i = 1;
      $y = 0;
      if (($i == $y) xor !($i == $y)) {
         echo "condição verdadeira<br><br>";
      } else {
         echo "condição falsa<br><br>";
      }

      //Estruturas condicionais
      # switch
      $numero_1 = 1;
      switch ($numero_1) {
         case '1':
            echo "olá<br><br>";
            break;
         default:
            # code...
            break;
      }
      # switch
      if ($numero_1 == 1) {
         # code...
      } elseif ($numero_1 > 5) {
         # code...
      } else {
         # code...
      }

      //Estruturas de Repetição
      #while
      $a_1 = 0;
      while ($a_1 < 10) {
         echo $a_1;
         $a_1++;
      }

      echo "<br>";

      #do-while
      $a_2 = 1;
      do {
         echo $a_2;
         $a_2++;
      } while ($a_2 < 10);

      echo "<br>";

      #for
      for ($a = 0; $a <= 10; $a++) {
         echo $a;
      }

      echo "<br>";

      #foreach
      foreach ($carros as $meuArray) {
         echo " " . $meuArray;
      }

      echo "<br>";

      #break, continue

      for ($a = 0; $a < 10; $a++) {
         if ($a == 8) {
            break;
         }
         echo $a;
      }

      echo "<br>";

      for ($a = 0; $a < 10; $a++) {
         if ($a == 8) {
            continue;
         }
         echo $a;
      }

      echo "<br><br>";

      //Funções

      function escreverNome()
      {
         echo "Meu nome é: Pedro<br>";
      }

      escreverNome(); //chamando a função

      $nome = "Pedro";

      escreverNome2($nome); //chamando a função

      function escrevernome2($nomeUsuario)
      {
         echo "Meu nome é: " . $nomeUsuario . "<br>";
      }

      function soma($a, $b)
      {
         $resultado = $a + $b;
         return $resultado;
      }

      echo "O resultado da soma de 10 + 10 é: " . soma(10, 10);

      echo "<br><br>";

      //Include
      include('page1.php');

      echo "<br><br>";

      //Require
      require('page1.php');

      echo "<br><br>";

      //Cookie
      if (!isset($_COOKIE[$nomeDoCookie])) {
         echo "O Cookie " . $nomeDoCookie . " não existe.";
      } else {
         echo "Cookie: " . $nomeDoCookie . "<br>";
         echo "Valor: " . $valorDoCookie;
      }

      echo "<br><br>";

      ?>
    <!--Formulários-->
    <form action="page2.php" method="get">
       Name: <input id="nome" type="text" name="nome"><br>
       E-mail: <input id="email" type="text" name="email"><br>
       <input type="submit">
    </form>
 </body>

 </html>