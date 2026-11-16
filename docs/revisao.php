REVISAO

oque Significa PHP?
PHP= Hypertest Proprocessor (pre-processador de hipertexto)

oque e PHP
HTML= define a estrutura  da pagina e o PHP=executa a logica a logica do servidor e pode geral html dinamicamente 

como abrimos e fechamos um bloco PHP?
<?php?>

para que server o 'echo'?
para exibir uma saida, como texto.

como declaramos uma variavel no PHP?
usar o $ pra declarar 

como exibimos uma variavel PHP dentro do HTLM?
<?= $ variavel ?> ou <?php echo $ variavel ?>

qual a diferença entre = e == no PHP?
= e atribuiçao | == e Comparaçao

para que serve o . no PHP?
para concantenar(juntar) texto

o que e o metodo GET?
 e um metodo HTTP utilizado principalmente para solicitar ou consultar recurso

 o que e o metodo POST?
 e um metodo HTTP utilizado para enviar dados ao servidor

 qual a diferença entre GET e POST?
 e um metado HTTP utilizado para enviar dados ao servidor

 qual a principal diferença VISIVEL entre GET e POST?
 GET da para as infromaçoes pela URL, e no POST nao.

 como defino que o FROM sera GET ou POST?
 usando: method="GET" ou method="POST"

 como receber no bloco PHP o dado inserido em um campo especifico de um formulario GET?
 $nome = $_GET['nome'];
 
 como receber no bloco PHP o dado inserido em um campo especifico de um formulario POST?
 $nome = $_POST['nome'];
 
 o que e $_SERVER['REQUEST_METHOD']?
 e uma infromaçao de superglobal $_SERVER que indica o metodo HTTP utilizado na requisiçao, como GET ou POST

 o que sao variaveis superglobais?
 sao variaveis disponibilizadas pelo PHP

 quais as principais superglobais ja utilizadas em sala de aula?
 %_SERVER - $_POST - $_GET - $_REQUEST - $_ENV - $_SESSION - $_ 

 como importa um arquivo PHP dentro de outro arquivo PHP?
 require, require_once, include, include_once

 qual a diferença entre include e require?
 se o arquivo nao puder ser carregado,  INCLUDE emite um aviso e o script pode continuar; REQUIRE provoca um erro interrompe a execuçao
 
 qual a diferença entre require_once e require?
 REQUIRE carrega o arquivo a cada chamada. REQUIRE_ONCE evita carregalo-lo novamente na mesma execuçao

 o que faz htmlspecialchars()?
 converte caracteres especiais em entidades HTLM

 oque Significa a sigla POO?
 P O O = Programaçao orientada a objetos

 o que e o POO?
 e um paradigma de progamaçao que organiza dados e comportamentos 

 o que e o "$this"?
 e o acesso a propriedade nome de proprio objeto atual

 quais sao os quatro pilares do POO?
 encapsulamento, herança, polimorfismo e abstraçao

 qual a diferença entre public, private e protected?
 public permite acesso externo; private restringe a propria class; protected permite acesso na classe e em suas classes filhas

 podemos criar um objeto diretamente de uma abstract class?
 nao 

oque Significa SGBD?
sistema gerenciador de banco de dados

o que e PDO?

como criamos uma conexao PDO com MySQL?
criar = $pdo = new PDO('mysql:host=localhost;dbname=escola;charset=utf8mb4', 'usario', 'senha');

qual a diferença de $pdo->exec(); e $pdo->query(); ?
exec() executa um comando SQL sem retorno, query() executa uma consulta SQL com retorno

para que servem fetch() e fetchALL()?
fetch() recupera a proxima linha de um resultado; fetchALL() recupera todas as linhas restantes em um array

qual e o "CRUD" do banco de dados
C - INSERT INTO | R - SELECT | U - UPDADE | D - DELETE