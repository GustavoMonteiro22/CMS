<?php //O script PHP deve sempre come&ccedil;ar com a tag <?php e terminar com a tag ?>
<?php
/*
Tudo deste arquivo foi tirado de php.net
*/

ini_set("display_errors", 1);//exibe erros

/*
Este &eacute; um coment&aacute;rio em bloco.
&eacute; poss&iacute;vel encrever diversas linhas de 
coment&aacute;rios desta maneira
*/

// Este &eacute; um coment&aacute;rio de linha, só &eacute; possivel escrever uma linha de coment&aacute;rio desta maneira

// Para ter uma vis&atilde;o geral do ambiente onde 
// est&aacute; instalado seu interpretador PHP, 
// &eacute; poss&iacute;vel utilizar a fun&ccedil;&atilde;o phpinfo(); ex.:
phpinfo();

/*
Acesse estes links para ler sobre padrões de codifica&ccedil;&atilde;o

http://framework.zend.com/manual/1.12/en/coding-standard.naming-conventions.html

http://pear.php.net/manual/pt_BR/standards.naming.php
*/

echo "<pre>";//Browser mostra conteúdo sem a formata&ccedil;&atilde;o HTML

set_time_limit(2);//Limita o tempo de processamento do código em 2 segundos

/*
Vari&aacute;veis superglobais do PHP
*/
var_dump($GLOBALS);//var_dump() mostra tudo sobre uma vari&aacute;vel (tipo e valor)
print_r($_SERVER);//print_r() mostra uma array toda (&iacute;ndices e valores)
print_r($_GET);
print_r($_POST);
print_r($_FILES);
print_r($_COOKIE);
print_r($_SESSION);
print_r($_REQUEST);
print_r($_ENV);


/*
Vari&aacute;vel global
*/
$a = 1;
$b = 2;

function Soma()
{
    global $a, $b;	// desta forma $a e $b deixam de ter 
			// um escopo de vari&aacute;veis de fun&ccedil;&atilde;o
			// e passam a ser vari&aacute;vies globais

    $b = $a + $b;
}

Soma();
echo $b;

/*
Constantes M&aacute;gicas
*/
echo __LINE__ . "\n";//A linha atual do script.
echo __FILE__ . "\n";//O caminho completo e nome do arquivo. Se utilizado dentro de um include, o nome do arquivo inclu&iacute;do ser&aacute; retornado.
echo __DIR__ . "\n";//O diretório do arquivo. Se usado dentro de um include, o diretório do arquivo inclu&iacute;do &eacute; retornado. Isto &eacute; equivalente a dirname(__FILE__). Este nome do diretório n&atilde;o possui barra no final, a n&atilde;o ser que seja o diretório raiz.
echo __FUNCTION__ . "\n";//O nome da fun&ccedil;&atilde;o.
echo __CLASS__ . "\n";//O nome da classe. O nome da classe inclui o namespace em que foi declarado (ex: Foo\Bar). Note que a partir do PHP 5.4, __CLASS__ funciona tamb&eacute;m em traits. Quando utilizada em um m&eacute;todo trait, __CLASS__ &eacute; o nome da classe que est&aacute; utilizando a trait.
echo __TRAIT__ . "\n";//O nome do trait. O nome do trait incluir o namespace em que foi declarado (ex: Foo\Bar).
echo __METHOD__ . "\n";//O nome do m&eacute;todo de classe.
echo __NAMESPACE__ . "\n";//O nome do namespace atual. 
// o "."(ponto) &eacute; o operador de concatena&ccedil;&atilde;o no PHP
// o "\" &eacute; o caracter de escape. Leia mais em http://php.net/manual/pt_BR/regexp.reference.escape.php

/*
Declara&ccedil;&atilde;o de constantes
*/
define("CONSTANTE", "Al&ocirc; Mundo.");
echo CONSTANTE; // mostra "Al&ocirc; Mundo."
echo Constante; // mostra "Constante" e d&aacute; um aviso.

define("GREETING", "Al&ocirc; Voc&ecirc;.",TRUE);//TRUE = case insensitive  FALSE = case sensitive
echo GREETING; // mostra "Al&ocirc; voc&ecirc;."
echo Greeting; // mostra "Al&ocirc; voc&ecirc;."


/*
Vari&aacute;vel comum
*/
$var = 'valor';
$var_int = (int) 878;//Type casting para garantir o tipo da vari&aacute;vel criada pelo PHP

/*
Vetor (array unidimensional) Matriz (array multidimensional)
*/
$vetor[0] = 'valor no &iacute;ndice 0';//o &iacute;ndice do vetor pode ser uma string
$vetor[1] = 'valor no &iacute;ndice 1';
//ou
$vetor = array('valor no &iacute;ndice 0','valor no &iacute;ndice 1');
//ou
$vetor = array(0 => 'valor no &iacute;ndice 0', 1 => 'valor no &iacute;ndice 1');
print_r($vetor);

$matriz[0][0] = 'valor no &iacute;ndice 0,0';
$matriz[0][1] = 'valor no &iacute;ndice 0,1';
$matriz[1][0] = 'valor no &iacute;ndice 1,0';
$matriz[1][1] = 'valor no &iacute;ndice 1,1';
//ou
$matriz = array(0 => array(0 => 'valor no &iacute;ndice 0', 1 => 'valor no &iacute;ndice 1'),
		1 => array(0 => 'valor no &iacute;ndice 0', 1 => 'valor no &iacute;ndice 1'));
print_r($matriz);

echo "\n\n";//pula duas linhas

/*
#### Operadores do PHP #####

Operadores Aritm&eacute;ticos
-$a 	Nega&ccedil;&atilde;o 	Oposto de $a.
$a + $b 	Adi&ccedil;&atilde;o 	Soma de $a e $b.
$a - $b 	Subtra&ccedil;&atilde;o 	Diferen&ccedil;a entre $a e $b.
$a * $b 	Multiplica&ccedil;&atilde;o 	Produto de $a e $b.
$a / $b 	Divis&atilde;o 	Quociente de $a por $b.
$a % $b 	Módulo 	Resto de $a dividido por $b.

Operadores de Atribui&ccedil;&atilde;o
$a += $b     $a = $a + $b    Addition
$a -= $b     $a = $a - $b     Subtraction
$a *= $b     $a = $a * $b     Multiplication
$a /= $b     $a = $a / $b    Division
$a %= $b     $a = $a % $b    Modulus
$a .= $b     $a = $a . $b       Concatenate
$a &= $b     $a = $a & $b     Bitwise And
$a |= $b     $a = $a | $b      Bitwise Or
$a ^= $b     $a = $a ^ $b       Bitwise Xor
$a <<= $b     $a = $a << $b     Left shift
$a >>= $b     $a = $a >> $b      Right shift

Operador Bit-a-bit
$a & $b 	E 	Os bits que est&atilde;o ativos tanto em $a quanto em $b s&atilde;o ativados.
$a | $b 	OU 	Os bits que est&atilde;o ativos em $a ou em $b s&atilde;o ativados.
$a ^ $b 	XOR 	Os bits que est&atilde;o ativos em $a ou em $b, mas n&atilde;o em ambos, s&atilde;o ativados.
~ $a 	N&atilde;O 	Os bits que est&atilde;o ativos em $a n&atilde;o s&atilde;o ativados, e vice-versa.
$a << $b 	Deslocamento à esquerda 	Desloca os bits de $a $b passos para a esquerda (cada passo significa "multiplica por dois")
$a >> $b 	Deslocamento à direita 	Desloca os bits de $a $b passos para a direita (cada passo significa "divide por dois") 

Operadores de Compara&ccedil;&atilde;o
$a == $b 	Igual 	Verdadeiro (TRUE) se $a &eacute; igual a $b.
$a === $b 	Id&ecirc;ntico 	Verdadeiro (TRUE) se $a &eacute; igual a $b, e eles s&atilde;o do mesmo tipo (introduzido no PHP4).
$a != $b 	Diferente 	Verdadeiro se $a n&atilde;o &eacute; igual a $b.
$a <> $b 	Diferente 	Verdadeiro se $a n&atilde;o &eacute; igual a $b.
$a !== $b 	N&atilde;o id&ecirc;ntico 	Verdadeiro de $a n&atilde;o &eacute; igual a $b, ou eles n&atilde;o s&atilde;o do mesmo tipo (introduzido no PHP4).
$a < $b 	Menor que 	Verdadeiro se $a &eacute; estritamente menor que $b.
$a > $b 	Maior que 	Verdadeiro se $a &eacute; estritamente maior que $b.
$a <= $b 	Menor ou igual 	Verdadeiro se $a &eacute; menor ou igual a $b.
$a >= $b 	Maior ou igual 	Verdadeiro se $a &eacute; maior ou igual a $b.

Operadores de controle de erro
-- Erro de arquivo intencional --
$my_file = @file ('arquivo_nao_existente') or
    die ("Falha abrindo arquivo: '$php_errormsg'");
-- Isto funciona para qualquer express&atilde;o, n&atilde;o apenas para fun&ccedil;ões: --
$value = @$cache[$key];
-- voc&ecirc; n&atilde;o receber&aacute; nenhum aviso se a chave $key n&atilde;o existir. --

Operadores de Execu&ccedil;&atilde;o
O PHP suporta um operador de execu&ccedil;&atilde;o: acentos graves (``). 
Note que n&atilde;o s&atilde;o apóstrofes! O PHP tentar&aacute; executar o conteúdo 
dos acentos graves como um comando do shell; 
a sa&iacute;da ser&aacute; retornada (isto &eacute;, ela n&atilde;o ser&aacute; simplesmente 
descarregada para a sa&iacute;da; ela pode ser atribu&iacute;da a uma vari&aacute;vel). 
A utiliza&ccedil;&atilde;o do operador contra-apóstrofo &eacute; id&ecirc;ntica a fun&ccedil;&atilde;o shell_exec(). 
Ex:*/
$output = `ls -al`;
echo "<pre>$output</pre>";

echo "\n\n";
/*

Operadores de Incremento/Decremento
++$a 	Pr&eacute;-incremento 	Incrementa $a em um, e ent&atilde;o retorna $a.
$a++ 	Pós-incremento 	Retorna $a, e ent&atilde;o incrementa $a em um.
--$a 	Pr&eacute;-decremento 	Decrementa $a em um, e ent&atilde;o retorna $a.
$a-- 	Pós-decremento 	Retorna $a, e ent&atilde;o decrementa $a em um.
	
Operadores Lógicos
$a and $b 	E 	Verdadeiro (TRUE) se tanto $a quanto $b s&atilde;o verdadeiros.
$a or $b 	OU 	Verdadeiro se $a ou $b s&atilde;o verdadeiros.
$a xor $b 	XOR 	Verdadeiro se $a ou $b s&atilde;o verdadeiros, mas n&atilde;o ambos.
! $a 	N&atilde;O 	Verdadeiro se $a n&atilde;o &eacute; verdadeiro.
$a && $b 	E 	Verdadeiro se tanto $a quanto $b s&atilde;o verdadeiros.
$a || $b 	OU 	Verdadeiro se $a ou $b s&atilde;o verdadeiros.

Operadores de String
*/
$a = "Ol&aacute; ";
$b = $a . "mundo!\n"; // agora $b cont&eacute;m "Ol&aacute; mundo!"
var_dump($b);
$a = "Ol&aacute; ";
$a .= "mundo!\n";     // agora $a cont&eacute;m "Ol&aacute; mundo!"
var_dump($a);

/*
Estruturas Condicionais (IF,SWITCH, OPERADOR TERN&aacute;RIO)
*/
$i = 10;
if($i > 1 && $i < 20){
	echo "\ni est&aacute; entre 1 e 20\n";
}else{
	echo "\ni n&atilde;o est&aacute; entre 1 e 20\n";
}

echo "\n\n";

switch($i){
	case 0:
	case 1:
	case 2:
	case 3:
		echo "\ni est&aacute; entre 0 e 3\n";
		break;
	case 5:
		echo "\ni &eacute; 5\n";
		break;
	default:
		echo "\ni n&atilde;o est&aacute; em uma condi&ccedil;&atilde;o do switch\n";
}

echo "\n\n";

$resultado = $i > 10 ? 'i &eacute; maior que 10'  : 'i &eacute; menor ou igual a 10';
echo "\n$resultado\n";

echo "\n\n";

/*
Estruturas de Repeti&ccedil;&atilde;o (FOR, DO, WHILE, FOREACH)
*/
for($i=0;$i<10;$i++){
	echo "Esta &eacute; a linha: ".($i+1)."\n";
}

echo "\n\n";

$i=0;
do{
	echo "Esta &eacute; a linha: ".($i+1)."\n";
	$i++;
}while($i<10);

echo "\n\n";

$i=0;
while($i<10){
	echo "Esta &eacute; a linha: ".($i+1)."\n";
	$i++;
}

echo "\n\n";

$semana = array(0 => array('nome_curto' => 'dom', 'nome_longo' => 'domingo'),
		1 => array('nome_curto' => 'seg', 'nome_longo' => 'segunda'),
		2 => array('nome_curto' => 'ter', 'nome_longo' => 'ter&ccedil;a'),
		3 => array('nome_curto' => 'qua', 'nome_longo' => 'quarta'),
		4 => array('nome_curto' => 'qui', 'nome_longo' => 'quinta'),
		5 => array('nome_curto' => 'sex', 'nome_longo' => 'sexta'),
		6 => array('nome_curto' => 'sab', 'nome_longo' => 's&aacute;bado'));

echo "\n\n";

foreach($semana as $num_do_dia => $array_nome_dia){
	echo "O dia $num_do_dia &eacute;: {$array_nome_dia['nome_longo']}\n";	//utilizar chaves "}" 
									//quando tiver uma
									//array entre aspas 
									//duplas
}

echo "\n\n";

function funcao_sem_parametro(){
	for($i=0;$i<5;$i++){
		echo "Fun&ccedil;&atilde;o repete 5 vezes esta linha\n";
	}
}

//para executar a fun&ccedil;&atilde;o
funcao_sem_parametro();

echo "\n\n";

function funcao_com_parametro($repeticoes){
	if(!is_int($repeticoes)){//se o parâmetro passado n&atilde;o for um inteiro retorna false
		return false;
	}
	for($i=0;$i<$repeticoes;$i++){
		echo "Fun&ccedil;&atilde;o repete $repeticoes vezes esta linha\n";
	}
}

//para executar a fun&ccedil;&atilde;o
funcao_com_parametro(10);

echo "\n\n";

function funcao_com_parametros($repeticoes, $trava){
	if(!is_int($repeticoes)){//se o parâmetro passado n&atilde;o for um inteiro retorna false
		return false;
	}
	if(!is_int($trava)){
		return false;
	}
	for($i=0;$i<$repeticoes && $i<$trava;$i++){
		echo "Fun&ccedil;&atilde;o repete $repeticoes vezes esta linha\n";
	}
}

//para executar a fun&ccedil;&atilde;o
funcao_com_parametros(10,5);

echo "\n\n";

function funcao_com_parametro_opcional($repeticoes, $trava=20){
	if(!is_int($repeticoes)){//se o parâmetro passado n&atilde;o for um inteiro retorna false
		return false;
	}
	if(!is_int($trava)){
		return false;
	}
	for($i=0;$i<$repeticoes && $i<$trava;$i++){
		echo "Fun&ccedil;&atilde;o repete $repeticoes vezes esta linha com trava em $trava\n";
	}
}

//para executar a fun&ccedil;&atilde;o
funcao_com_parametro_opcional(100);

echo "</pre>";
?>
