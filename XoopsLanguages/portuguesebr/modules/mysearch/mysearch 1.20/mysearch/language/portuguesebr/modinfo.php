<?php
//  ------------------------------------------------------------------------ //
//                       mysearch - MODULE FOR XOOPS 2                        //
//                  Copyright (c) 2005-2006 Instant Zero                     //
//                     <http://xoops.instant-zero.com/>                      //
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

define('_MI_MYSEARCH_NAME',"My search");
define('_MI_MYSEARCH_DESC',"Com este módulo você poderá saber o que as pessoas estão procurando em seu site.");

define('_MI_MYSEARCH_ADMMENU1',"Estatística");
define('_MI_MYSEARCH_ADMMENU2',"Editar Palavra-chave");
define('_MI_MYSEARCH_ADMMENU3',"Exportar");
define('_MI_MYSEARCH_ADMMENU4',"Lista Negra");
define('_MI_MYSEARCH_ADMMENU5',"Sobre");

define('_MI_MYSEARCH_OPT0',"Contar as Procuras para mostrar na página de índice do módulo");
define('_MI_MYSEARCH_OPT0_DSC',"Selecione o número de usuários que procuram para ver na página de índice do módulo (0 = exibir nada)");

define('_MI_MYSEARCH_OPT1',"Grupos que você não quer registrar");
define('_MI_MYSEARCH_OPT1_DSC',"Não serão registradas todas as procuras feitas por pessoas que estão nesses grupos");

define('_MI_MYSEARCH_OPT2',"Contar as palavras-chaves visivéis na administração");
define('_MI_MYSEARCH_OPT2_DSC',"");

define('_MI_MYSEARCH_BNAME1',"Últimas procuras");
define('_MI_MYSEARCH_BNAME2',"Usuários que fazem mais procuras");
define('_MI_MYSEARCH_BNAME3',"Estatísticas");
define('_MI_MYSEARCH_BNAME4',"Pesquisa Ajax");

// Added by Lankford on 2007/8/15
define('_MI_MYSEARCH_DO_DEEP_SEARCH',"Ativar Pesquisa <b>'profunda'</b>?");
define('_MI_MYSEARCH_DO_DEEP_SEARCH_DSC',"Deseja que a sua primeira página de resultados de pesquisa possa indicar quantos acessos foram encontrados em cada módulo? Nota: Quando você modifica para esta modalidade, poderá melhorar o processo pesquisa!");
define('_MI_MYSEARCH_INIT_SRCH_RSLTS',"Número de resultados para o início da pesquisa: (para a uma pesquisa <b>superficial</b>)");
define('_MI_MYSEARCH_INIT_SRCH_RSLTS_DSC',"As pesquisas <b>Superficiais</b> são feitas para limitar os resultados de forma mais rápida para devolver o que encontrou em cada módulo. Sempre será relativo à primeira página de pesquisa.");
define('_MI_MYSEARCH_MDL_SRCH_RESULTS',"Número de resultados da pesquisa por página:");
define('_MI_MYSEARCH_MDL_SRCH_RESULTS_DSC',"Isto determina a quantidade de visualização ou (hits) por página que serão mostrados após informação ser obtida dentro de um módulo em particular e seus resultados sobre isto.");

define('_MI_MYSEARCH_MIN_SEARCH','Comprimento mínimo da palavra-chave');
define('_MI_MYSEARCH_MIN_SEARCH_DSC','Informe o comprimento mínimo da palavra-chave que os usuários são obrigados a digitar para realizar esta pesquisa');

?>