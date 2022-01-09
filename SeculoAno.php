<?php 

	function SeculoAno(string $ano) {
		$ano_tamanho = strlen($ano);

		if($ano_tamanho  <= 2) {
			$ano = "00".$ano;
		}
		elseif($ano_tamanho <= 3) {
			$ano = "0".$ano;
		} 

		$primeirosDoisDigitos = $ano[0].$ano[1];

		$ultimosDoisDigitos = $ano[2].$ano[3];

		if($ultimosDoisDigitos == '00') {
			return $primeirosDoisDigitos;
		}

		return $primeirosDoisDigitos + 1;

	}

	$ano = rand(1,9999);

	$seculo = SeculoAno($ano);

	echo "O ano {$ano} é do século {$seculo}".'<br>';

?>
