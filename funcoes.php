<?php

function dataBancoBr($d){
	$dt = explode("-", $d);
	$ano = $dt[0];
	$mes = $dt[1];
	$dia = $dt[2];
	
	$nova = $dia."/".$mes."/".$ano;
	
	return $nova;
}
function dataBancoBr1($d){
	$dt = explode("-", $d);
	$ano = $dt[0];
	$mes = $dt[1];
	$dia = $dt[2];
    $ano = $ano +1;
	
	$nova = $dia."/".$mes."/".$ano;
	
	return $nova;
}

function dataBrBanco($d){
	//Função que transforma data no formato Brasil para o formato Banco
	$dt = explode("/", $d);
	$dia = $dt[0];
	$mes = $dt[1];
	$ano = $dt[2];
	
	$valida = checkdate($mes, $dia, $ano);
	if($valida == 1){
		$nova = $ano."-".$mes."-".$dia;
	}else{
		$nova = 0;
	}
	return $nova;
}

function ondeDot($k){
	number_format("1000000",2,",",".");
}

function MudarVBanco($r){
	$rt = explode(",",".", $r);
	$novo0 = $rt[0];
	$novo1 = $rt[1];
	$nova = $novo0.".".$novo1;
	return $nova;
}

function moeda($get_valor) {

        $source = array('.', ',');
        $replace = array('', '.');
        $valor = str_replace($source, $replace, $get_valor); //remove os pontos e substitui a virgula pelo ponto
        return $valor; //retorna o valor formatado para gravar no banco
    }
