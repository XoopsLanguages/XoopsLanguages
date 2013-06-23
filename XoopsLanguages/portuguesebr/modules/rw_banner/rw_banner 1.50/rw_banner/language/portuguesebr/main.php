<?php
//  ------------------------------------------------------------------------ //
//                                  RW-Banner                                //
//                    Copyright (c) 2006 BrInfo                              //
//                     <http://www.brinfo.com.br>                            //
//  ------------------------------------------------------------------------ //
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
// ------------------------------------------------------------------------- //
// Author: Rodrigo Pereira Lima (BrInfo - Soluções Web)                      //
// Site: http://www.brinfo.com.br                                            //
// Project: RW-Banner                                                        //
// Descrição: Sistema de gerenciamento de mídias publicitárias               //
// ------------------------------------------------------------------------- //

//index.php
define("_NOPERM1","Você não possui banners de publicidade cadastrados no site portanto não possui permissão para acessar esta área!");
define("_MD_MSG_INDEX_NOUSER","Para poder utilizar os serviços de publicidade do %s você precisa ser um usuário cadastrado.
   Este procedimento visa ter um melhor controle de nossos parceiros e um melhor gerenciamento de nossas mídias publicitárias.<br /><br />
   Caso já seja um usuário cadastrado no site, clique <a href=\"%s\">aqui</a> e faça o login para que possa preencher o formulário de cadastro
   de banners e participar de nosso sistema de publicidade. Se você ainda não é um usuário cadastrado no site, clique <a href=\"%s\">aqui</a> e
   faça seu cadastro. Após ter se cadastrado no site você estará apto a participar de nosso sistema de publicidade.");
define("_MD_MSG_INDEX_OLAUSER","Olá %s, seja bem vindo ao Sistema de Publicidade do %s.<br /></br>");
define("_MD_MSG_INDEX_NOBANNER","Você ainda não possui banners cadastrados em nosso sistema. Caso deseje participar
de nosso sistema de publicidade preencha o formulário de cadastro de banners clicando <a href=\"inser.php\">aqui</a>.");
define("_MD_MSG_INDEX_NOBANNER1","O cadastramento de novos banners está desativado no momento, caso queira incluir um banner no sistema entre em contato com o administrador do site através do formulário de contato ou mp.");
define("_MD_CARREG","Carregando...");
define("_MD_MSG_INDEX_CADBANNER","Para cadastrar novos banners no sistema clique <a href=\"inser.php\">aqui</a>");
define("_MD_MSG_NEWBANNER","Ao cadastrar um banner ele será analisado pela equipe responsável. Algum membro da equipe entrará em contado com você para definir os últimos detalhes sobre o banner, após isso, o banner sendo aprovado ele será ativado e começará a ser exibido no site.");

define("_MD_TITLE1","Seus Banners Cadastrados");
define("_MD_TITLE2","COD");
define("_MD_TITLE3","CATEGORIA");
define("_MD_TITLE4","IMPRESSÕES");
define("_MD_TITLE5","IMP. REST.");
define("_MD_TITLE6","CLIQUES");
define("_MD_TITLE7","% DE CLIQUES");
define("_MD_TITLE8","DATA CRIAÇÃO");
define("_MD_TITLE9","STATUS");
define("_MD_TITLE10","OPÇÕES");
define("_MD_TITLE16","CLIQUES REST.");

define("_MD_BANNER_STATUS1","Banner Ativo");
define("_MD_BANNER_STATUS2","Banner Inativo");

define("_MD_BANNER_EXIBREST","Ilimitado");

define("_MD_EMAIL_STATS","Enviar Estatística por E-mail");

define("_MD_TITLE11","Estatística do Banner Código nº");
define("_MD_TITLE12","Imagem:");
define("_MD_TITLE13","Link:");
define("_MD_TITLE14","Alterar Link");
define("_MD_TITLE15","Enviar por E-mail as Estatísticas deste banner");

define("_MD_BUTTON1","Ordernar");
define("_MD_BUTTON2","Banners por Página");

//include/function.php
define("_MD_SUBJECT_EMAILSTATS","Estatísticas do seu banner no site");
define("_MD_BODY1_EMAILSTATS","Abaixo estão as estatísticas completas do seu banner no site");
define("_MD_BODY2_EMAILSTATS","Nome do Cliente:");
define("_MD_BODY3_EMAILSTATS","Código do Banner:");
define("_MD_BODY4_EMAILSTATS","Imagem Banner:");
define("_MD_BODY5_EMAILSTATS","Link do Banner:");
define("_MD_BODY6_EMAILSTATS","Impressões Contratadas:");
define("_MD_BODY7_EMAILSTATS","Impressões Realizadas:");
define("_MD_BODY8_EMAILSTATS","Impressões Restantes:");
define("_MD_BODY9_EMAILSTATS","Cliques Recebidos:");
define("_MD_BODY10_EMAILSTATS","Porcentagem de Cliques:");
define("_MD_BODY11_EMAILSTATS","Cliques Contratados:");
define("_MD_BODY12_EMAILSTATS","Cliques Restantes:");
define("_MD_BODY13_EMAILSTATS","Data de Cadastro:");
define("_MD_BODY14_EMAILSTATS","Período Contratado:");
define("_MD_BODY15_EMAILSTATS","Final do Período:");
define("_MD_BODY16_EMAILSTATS","Relatório gerado em:");
define("_MD_BODY17_EMAILSTATS","dias");

define("_MD_MSG_SUCESS_EMAILSTATS","As estatísticas de seu banner foram enviadas com sucesso para o seu e-mail cadastrado no site.");
define("_MD_MSG_FAIL_EMAILSTATS","Falha ao enviar as estatísticas de seu banner. Tente novamente mais tarde.");

//inser.php
define("_MD_BTN_OP1","Cadastrar");
define("_MD_BTN_OP2","Editar");
define("_MD_BTN_OP3","Ilimitado");

define("_MD_TITLE24","Número de exibições:");
define("_MD_TITLE500","Número de cliques:");
define("_MD_TITLE5001","Período de Exibição (em dias):");
define("_MD_TITLE25","Imagem(Url):");
define("_MD_TITLE26","Link(Url):");
define("_MD_TITLE27","Usar Html?");
define("_MD_TITLE28","Código HTML:");
define("_MD_TITLE29","Target:");
define("_MD_TITLE51_ED","Ulpload Banner:");
define("_MD_TITLE5000","Observações:");
define("_MD_TITLE5000_DESC","Escreva aqui observações sobre o seu banner, diga ao admin do site onde deseja que seu banner seja exibo, qual a frequencia, enfim, defina tudo que achar necessário sobre a exibição de seu banner.");

define("_MD_VALUE_BTN1","Inserir novo Banner");
define("_MD_VALUE_BTN3","Editar Banner");
define("_MD_VALUE_BTN10_ED","Enviar");

define("_MD_MSG2","Banner Alterado com Sucesso!!");
define("_MD_MSG8","Banner Cadastrado com Sucesso!!");
define("_MD_MSG10","Houve um problema ao cadastrar o banner.");
define("_MD_MSG11","Houve um problema ao editar o banner.");

define("_RW_TAG_ERROR",'<div style="color: #FE2626;">Algo errado com a tag de exibição do banner</div>');
?>
