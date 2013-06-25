<?php
//  ------------------------------------------------------------------------ //
//                      XOOPSCARE - MODULE FOR XOOPS 2                		   //
//                  Copyright (c) 2007, 2008 Instant Zero                    //
//                     <http://www.instant-zero.com/>                        //
// ------------------------------------------------------------------------- //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
//  Tradu��o feita por............: GibaPhp                                  //
//  WebSite.......................: http://www.xoopstotal.com.br             //
//  Revis�o de tradu��o...........: http://                                  //
//  ------------------------------------------------------------------------ //

if (!defined('XOOPS_ROOT_PATH')) {
	die("Caminho in�cial do XOOPS n�o foi definido");
}

$help = <<<endhelp
<a href="http://xoops.instant-zero.com" target="_blank">XoopsCare</a> � um m�dulo que se prop�e a ajudar a manter com maior facilidade seu Web site <b>automaticamente</b>. N�s tentamos fazer o melhor para voc� neste m�dulo, mas problemas podem ocorrer e voc� aceita <b>usar este m�dulo por sua pr�pria conta e RISCO! </b>

Com este m�dulo voc� pode :
1/ Manter de forma otimizada a sua base de dados
2/ Rodar suas queries especiais
3/ Executar c�digos em Php
4/ Limpar os templates_c e cache folders
5/ Remover coment�rios (Censurados/spammers)
6/ Limpar sess�es

Para cada uma destas a��es, voc� poder� definir se deseja fazer realmente ou n�o e quando desejar (voc� poder� programar isto tamb�m).

Adicionalmente, voc� poder� registrar todas estas a��es feitas pelo m�dulo e (se voc� desejar � claro), usar CRONs para manter isto trabalhando sozinho para voc� no local de seu servidor.

Se voc� puder chamar o m�dulo com o uso de um CRON, veja a seguir que fazer isto seria simplesmente chamar o arquivo nomeado como <i>cron.php</i> que fica no raiz do m�dulo e para lhe passar uma senha digitada por voc� na administra��o do m�dulo.
	Fazendo apenas isto : http://www.example.com/modules/xoopscare/cron.php?password=mypassword
<b>Se voc� usar um cron e n�o digitar uma senha, o m�dulo n�o far� o que ficou configurado por voc�</b>, esta � uma forma justa para proteger seu local de pessoas que poderiam fazer mau uso desta url e fun��o.

Se voc� n�o puder utilizar o CRON, ent�o ative o bloco do m�dulo em algum lugar em seu Web Site (onde voc� quiser na realidade), e o m�dulo ir� automaticamente e quando necess�rio, executar as tarefas que voc� programou.
Dica : Voc� poder� usar Cache neste Bloco.

A primeira coisa a fazer � ir na �rea de administra��o do m�dulo e ajustar as prefer�ncias.
Na primeira etapa, em <b>Prefer�ncias Gerais</b>, se voc� acha que usar� o CRON, ajuste de imediato uma senha neste momento, n�o deixe para depois, assim poder� usar o CRON.
Caso voc� queira criar um arquivo com o registro de todas as atividades do m�dulo, ative a zona de <i>Log</i>.
Nota, recomenda-se fortemente, por raz�es da seguran�a, que voc� ative o log e inclua o nome deste arquivo e n�o use <u>.php</u> como extens�o.

Na parte em que existe a <b>Manuten��o de Banco de Dados</b>, digite o tempo em dias para manter sua base de dados otimizada.
Se voc� configurar com 0 (zero), ent�o nada ser� feito aqui.
O processo deste setor � verificar, reparar, analisar e otimizar todas as tabelas usadas no seu Web Site Xoops.


Na parte chamada <b>Queries</b>, digite primeiramente uma execu��o antes com tempo e ent�o (mas somente se voc� realmente necessitar), digite algumas queries de SQL e ser� executada diretamente na sua base de dados.
Nota, o m�dulo n�o aplica qualquer query que voc� informa, procura sempre fazer um exame de uma por uma antes de processar.

Voc� pode fazer a mesma coisa informado no �tem anterior para executar algum c�digo de Php nesta chamada <b>C�digo PHP</b>

Na parte que chama <b>Cache e Templates_c</b> voc� poder� limpar  (apagar / remover) os arquivos do diret�rio cache e templates_c.
(Estes diret�rio est�o na raiz de seu Web Site)

As <b>Sess�es</b> permitir� a limpeza (Zerar , deixar sem nenhum registro) a tabela de sess�o do Mysql de forma r�pida e inst�ntanea.


Finalmente, no setor chamado <b>Coment�rios (Censurados/Spammers)</b>, voc� poder� remover todos os spams que encontrar em seus coment�rios.
Esta funcionalidade do m�dulo funciona com o Xoops <i>Op��es de palavras censuradas</i>.
Primeiro, v� at� <i>Prefer�ncias do Site</i>, voc� deve ativar o setor de Censura de palavras n�o desejadas, digitar algumas palavras no censor e selecionar qual ser� a palavra que dever� ser substituida por ele.
Por padr�o, a Censura � automaticamente substitu�da por #OOPS#.
O m�dulo XoopsCare procurarar� pelos coment�rios que cont�m este tipo de coloca��o nos t�tulos do coment�rio e/ou no �ndice do coment�rio e aplicar� suas prefer�ncias definidas.
Adicionalmente, o m�dulo poder� extrair o IP do 'spammer' (dos coment�rios) e automaticamente adicionar o IP dele na sua lista de banidos.
Finalmente, voc� pode escolher o que fazer com os coment�rios detectados como Spam, voc� poder� manter, despublicar, escond�-los ou mesmo apag�-los definitivamente, o card�pio � bem variado como pode ver.


Se voc� usa o CRON para limpar seu site, ent�o o tempo de espera para cada a��o que n�o seja pelo CRON n�o ser� usado, desde que o tempo de espera do CRON seja maior que 0

<a href="http://www.instant-zero.com" target="_blank">Deixe-nos saber se voc� gostou deste m�dulo - Equipe Instant Zero</a>
<a href="http://www.xoopstotal.com.br/modules/newbb/viewforum.php?forum=10" target="_blank">Suporte a este m�dulo para brasileiros - XoopsTotal Suporte.</a>
<a href="http://x-trad.org" target="_blank">Revis�es sobre as tradu��es podem ser encaminhadas AQUI no Brasil. X-Trad </a>

endhelp;
?>
