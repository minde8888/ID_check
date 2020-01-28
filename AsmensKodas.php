<?php
class AsmensKodas {
	 function __construct($kodas){
	 	$data = '';
	 	for ($i=0; $i<strlen($kodas); $i++){
	 		if (($kodas[$i] > 6 ) && ($kodas[$i] < 1 )) echo 'neteisingai ivestas kodas';

	 		if (($i > 0) &&	($i < 7))
	 			$data .= $kodas[$i];
	 	}
	 	echo $data;
	}
}

//1. tikrinam 1-6
//2. metus - pirma praleisti pirma ir tik - PHP date
/*3. Jei asmens kodas užrašomas ABCDEFGHIJK, tai:

S = A*1 + B*2 + C*3 + D*4 + E*5 + F*6 + G*7 + H*8 + I*9 + J*1

Suma S dalinama iš 11, ir jei liekana nelygi 10, ji yra asmens kodo kontrolinis skaičius K. Jei liekana lygi 10, tuomet skaičiuojama nauja suma su tokiais svertiniais koeficientais:

S = A*3 + B*4 + C*5 + D*6 + E*7 + F*8 + G*9 + H*1 + I*2 + J*3

Ši suma S vėl dalinama iš 11, ir jei liekana nelygi 10, ji yra asmens kodo kontrolinis skaičius K. Jei vėl liekana yra 10, kontrolinis skaičius K yra 0.[1]*/

//or - visada sudetis viena is salygu teisinga visas if teisingas
//and - visada daugyba 


