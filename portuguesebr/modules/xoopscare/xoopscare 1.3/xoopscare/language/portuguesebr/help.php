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
//  Tradução feita por............: GibaPhp                                  //
//  WebSite.......................: http://www.xoopstotal.com.br             //
//  Revisão de tradução...........: http://                                  //
//  ------------------------------------------------------------------------ //

if (!defined('XOOPS_ROOT_PATH')) {
	die("Caminho inícial do XOOPS não foi definido");
}

$help = <<<endhelp
<a href="http://xoops.instant-zero.com" target="_blank">XoopsCare</a> é um módulo que se propõe a ajudar a manter com maior facilidade seu Web site <b>automaticamente</b>. Nós tentamos fazer o melhor para você neste módulo, mas problemas podem ocorrer e você aceita <b>usar este módulo por sua própria conta e RISCO! </b>

Com este módulo você pode :
1/ Manter de forma otimizada a sua base de dados
2/ Rodar suas queries especiais
3/ Executar códigos em Php
4/ Limpar os templates_c e cache folders
5/ Remover comentários (Censurados/spammers)
6/ Limpar sessões

Para cada uma destas ações, você poderá definir se deseja fazer realmente ou não e quando desejar (você poderá programar isto também).

Adicionalmente, você poderá registrar todas estas ações feitas pelo módulo e (se você desejar é claro), usar CRONs para manter isto trabalhando sozinho para você no local de seu servidor.

Se você puder chamar o módulo com o uso de um CRON, veja a seguir que fazer isto seria simplesmente chamar o arquivo nomeado como <i>cron.php</i> que fica no raiz do módulo e para lhe passar uma senha digitada por você na administração do módulo.
	Fazendo apenas isto : http://www.example.com/modules/xoopscare/cron.php?password=mypassword
<b>Se você usar um cron e não digitar uma senha, o módulo não fará o que ficou configurado por você</b>, esta é uma forma justa para proteger seu local de pessoas que poderiam fazer mau uso desta url e função.

Se você não puder utilizar o CRON, então ative o bloco do módulo em algum lugar em seu Web Site (onde você quiser na realidade), e o módulo irá automaticamente e quando necessário, executar as tarefas que você programou.
Dica : Você poderá usar Cache neste Bloco.

A primeira coisa a fazer é ir na área de administração do módulo e ajustar as preferências.
Na primeira etapa, em <b>Preferências Gerais</b>, se você acha que usará o CRON, ajuste de imediato uma senha neste momento, não deixe para depois, assim poderá usar o CRON.
Caso você queira criar um arquivo com o registro de todas as atividades do módulo, ative a zona de <i>Log</i>.
Nota, recomenda-se fortemente, por razões da segurança, que você ative o log e inclua o nome deste arquivo e não use <u>.php</u> como extensão.

Na parte em que existe a <b>Manutenção de Banco de Dados</b>, digite o tempo em dias para manter sua base de dados otimizada.
Se você configurar com 0 (zero), então nada será feito aqui.
O processo deste setor é verificar, reparar, analisar e otimizar todas as tabelas usadas no seu Web Site Xoops.


Na parte chamada <b>Queries</b>, digite primeiramente uma execução antes com tempo e então (mas somente se você realmente necessitar), digite algumas queries de SQL e será executada diretamente na sua base de dados.
Nota, o módulo não aplica qualquer query que você informa, procura sempre fazer um exame de uma por uma antes de processar.

Você pode fazer a mesma coisa informado no ítem anterior para executar algum código de Php nesta chamada <b>Código PHP</b>

Na parte que chama <b>Cache e Templates_c</b> você poderá limpar  (apagar / remover) os arquivos do diretório cache e templates_c.
(Estes diretório estão na raiz de seu Web Site)

As <b>Sessões</b> permitirá a limpeza (Zerar , deixar sem nenhum registro) a tabela de sessão do Mysql de forma rápida e instântanea.


Finalmente, no setor chamado <b>Comentários (Censurados/Spammers)</b>, você poderá remover todos os spams que encontrar em seus comentários.
Esta funcionalidade do módulo funciona com o Xoops <i>Opções de palavras censuradas</i>.
Primeiro, vá até <i>Preferências do Site</i>, você deve ativar o setor de Censura de palavras não desejadas, digitar algumas palavras no censor e selecionar qual será a palavra que deverá ser substituida por ele.
Por padrão, a Censura é automaticamente substituída por #OOPS#.
O módulo XoopsCare procurarará pelos comentários que contém este tipo de colocação nos títulos do comentário e/ou no índice do comentário e aplicará suas preferências definidas.
Adicionalmente, o módulo poderá extrair o IP do 'spammer' (dos comentários) e automaticamente adicionar o IP dele na sua lista de banidos.
Finalmente, você pode escolher o que fazer com os comentários detectados como Spam, você poderá manter, despublicar, escondê-los ou mesmo apagá-los definitivamente, o cardápio é bem variado como pode ver.


Se você usa o CRON para limpar seu site, então o tempo de espera para cada ação que não seja pelo CRON não será usado, desde que o tempo de espera do CRON seja maior que 0

<a href="http://www.instant-zero.com" target="_blank">Deixe-nos saber se você gostou deste módulo - Equipe Instant Zero</a>
<a href="http://www.xoopstotal.com.br/modules/newbb/viewforum.php?forum=10" target="_blank">Suporte a este módulo para brasileiros - XoopsTotal Suporte.</a>
<a href="http://x-trad.org" target="_blank">Revisões sobre as traduções podem ser encaminhadas AQUI no Brasil. X-Trad </a>

endhelp;
?>
