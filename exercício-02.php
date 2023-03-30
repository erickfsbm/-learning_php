<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Exercício 2</title>
    </head>
    <body>
        <echo><p>Entrar com um número e informar se ele é 
        divisível por 10, por 5, por 2 ou se não é 
        divisível por nenhum destes.</p></echo>
        

        <form method="POST" action="#">
        <label>Digite um numero ➱</label>
        <input type="text" name="Numero">
        <button type="submit">Calcular</button><br>
        </form>  
        
        <?php
            var_dump(isset($num))
        ?>

        <?php
            if (isset($_POST["Numero"])){
            $num=$_POST["Numero"];
            if ($num % 10 == 0){
                echo "<br> O número: " .($num);
	            echo " é divisísel por 10 <br>"; 
            }elseif ($num % 5 == 0){
                echo "<br> O número: " .($num);
	            echo " é divisísel por 5 <br>"; 
            }elseif ($num % 2 == 0){
                echo "<br> O número: " .($num);
	            echo " é divisísel por 2 <br>";
            }else{
                echo "O número: " .($num) ;
	            echo " não é divisivel por nenhum destes.";
            }
            }
            
        ?>
         
     
    </body>
</html>