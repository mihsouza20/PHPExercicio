<?php

//1-Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".//
 
	$val = 50; //numero digitado
	$valorfinal = "";
 
	if($val > 0){
  		$valorfinal = "Valor Positivo";
	}elseif($val < 0){
 		 $valorfinal = "Valor Negativo";
	}else{
 		 $valorfinal = "Igual a Zero";
	}
	echo "{$valorfinal} <br>";

?>
<?php 

//2-Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex: 
//Entrada = 4
//Saída = 4 X 0 = 0...4 X 10 = 40
	 
	$num = 10;
 
 	 for($i = 0; $i <= 10; $i++){
  		 echo "{$num} * {$i} = " . ($num * $i) . "<br>";
 	 }
?>

<?php
//3-Solicite a entrada de um número e descubra se um número digitado é par ou ímpar. //

 	$num = 5;
 
  	if($num % 4 == 0){
    	echo "Par <br>";
  	}else{
  		echo "Impar <br>";
  	}
?>

<?php 
//5-Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.//

	 $numA = 10;
  	 $numB = 12;
 
  		if($numA > $numB){
    		echo "A maior que B <br>";
  		}else{
    		echo "A menor que B <br>";
  		}
?>

<?php
// 6 -Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada.
//Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado]//

	 $notas = [5, 10, 4];
  	 $smTotal = 0;
 
  		for($i = 0; $i < count($notas); $i++){
    		$smTotal += $notas[$i];
  		}	
 
  		$mediafinal = $smTotal / count($notas);
 
	   if($mediafinal >= 6){
    	echo "Aprovado, média final: {$mediafinal} <br>";
  	   }else{
    	echo "Reprovado, média final: {$mediafinal} <br>";
 	   }
 
?>

<?php
//7-Crie um algoritmo que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos.//

		 $nome = "Thamires";
  			$idade = 23;
 
 		 if($idade >= 18){
   			 echo "{$nome} é maior de 18 e tem {$idade} Anos <br>";
 	    }else{
		    echo "{$nome} não é maior de 18 e tem {$idade} Anos <br>";
 	    }
?>

<?php
//8-Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5 //
	
	$num1 = 10;
	$num2 = 15;

	$soma =$num1 + $num2;

	if ($soma > 20 ){
		$resul = $soma + 8;
			echo ("<br>Valor apresentado maior que 20 foi acrescentado mais 8, cujo resultado final é:". $resul);
	}else {
		$result = $soma - 5;
			echo ("<br>Valor apresentado é menor que 20 foi retirado 5, cujo resultado final é:". $resul);	
	

?>

<?php
//9-Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes//

	$nu = 99;
	if ($nu % 10 == 0);{
		echo "<br> O número descrito é dividivel por 10 ";
	}

	else if ($nu % 5 == 0){
		echo "<br> O número descrito é divisivel por 5";

	}
	else if($nu % 2 == 0){
		echo "<br> O número descrito é divisivel por 2 ";
	
	}
	else 
		echo "<br> Esse numero não é divisivel por 10,5,2 ";
	}

?>

<?php
//10-Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA//

	$n = "Nome";
	$i = 20;
	$sexo = "Feminino"

	if ($i == $sexo && $i < 25){
		echo "<br> Aceita!";

	}else{

		echo "<br> Não Aceita!";
	}


?>










