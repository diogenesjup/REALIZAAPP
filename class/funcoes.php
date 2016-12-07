<?php 
// #########################################################################
//
//
// DIOGENES OLIVEIRA DOS SANTOS JUNIOR
// 
// ARQUIVO PARA FUNÇÕES COMUNS
// V2 - 01 DE NOVEMBRO DE 2015
//
// INDICE:
//
// 20 - RECEBER DATA NO FORMATAO AAAA-MM-DD E DEVOLVER DD/MM/AAAA data_form()
// 31 - RECEBER URL SUJA E DEVOLVER URL LIMPA
//
//
// #########################################################################


// RECEBER DATA NO FORMATAO AAAA-MM-DD E DEVOLVER DD/MM/AAAA
function data_form($entrada){
 
	 $temp = explode("-", $entrada);

	 $saida = $temp[2]."/".$temp[1]."/".$temp[0];

	 return $saida;

}


// RECEBER URL SUJA E DEVOLVER URL LIMPA
function url_limpa($entrada){ 

    $saida = strtolower( ereg_replace("[^a-zA-Z0-9-]", "-", strtr(utf8_decode(trim($entrada)), utf8_decode("áàãâéêíóôõúüñçÁÀÃÂÉÊÍÓÔÕÚÜÑÇ"),"aaaaeeiooouuncAAAAEEIOOOUUNC-")) );
    return $saida;

}


// INFORMAR DATAS SEGUINTES
function SomarData($data, $dias, $meses, $ano)
{
   
   //passe a data no formato dd/mm/yyyy 
   $data = explode("/", $data);
   $newData = date("d/m/Y", mktime(0, 0, 0, $data[1] + $meses,
     $data[0] + $dias, $data[2] + $ano) );
   return $newData;
}
/* EXEMPLOS:
echo 'Amanhã é dia '.SomarData(date('d/m/y'),3,12,-1);

IMPRIME CASO A DATA SEJA 08/12/2015
Amanhã é dia 11/12/2015

*/
?>