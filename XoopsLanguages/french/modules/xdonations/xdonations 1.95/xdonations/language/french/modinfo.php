<?php
/**
 * @version::   $Id$
 */
$xdonDir = basename ( dirname( dirname ( dirname( __FILE__ ) ) ) ) ;
define('_MI_DON_ADMIN',                          'Administration');
define('_MI_DON_BNAME1',                         'Compteur des dons');
define('_MI_DON_BNAME1_DESC',                    'Affichage graphique des dons');
define('_MI_DON_BNAME2',                         'Faire un don maintenant !');
define('_MI_DON_BNAME2_DESC',                    'Autorisez vos utilisateurs &agrave; faire des dons pour votre site avec Paypal');
define('_MI_DON_BNAME3',                         'Donateurs r&eacute;cents');
define('_MI_DON_BNAME3_DESC',                    'Liste des r&eacute;cents donateurs');
define('_MI_DON_BUTTON_URL',                     'https://www.paypal.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif');
define('_MI_DON_CONFIGURATION',                  'Configuration');
define('_MI_DON_DESC',                           'Paypal module de gestion financier pour XOOPS2');
define('_MI_DON_DONATIONS',                      'Dons');
define('_MI_DON_NAME',                           'Nom');
define('_MI_DON_SHOW_LOG',                       'Show IPN Log');
define('_MI_DON_SHOW_TXN',                       'Transactions');
define('_MI_DON_T_assign_group_',                'S&eacute;l&eacute;ctionnez le groupe auquel affecter les donateurs lors de dons valid&eacute;s.');
define('_MI_DON_T_assign_rank_',                 'Selectionnez le rang auquel affecter les donateurs lors de dons valid&eacute;s.');
define('_MI_DON_T_don_amount_1',                 'Le module donations propose une liste de montants &agrave; sug&eacute;rrer.'.'<br />'
                                                .'Vous pouvez modifier cette liste.');
define('_MI_DON_T_don_amount_2',                 '');
define('_MI_DON_T_don_amount_3',                 '');
define('_MI_DON_T_don_amount_4',                 '');
define('_MI_DON_T_don_amount_5',                 '');
define('_MI_DON_T_don_amount_6',                 '');
define('_MI_DON_T_don_amount_7',                 '');
define('_MI_DON_T_don_amt_checked_',             'Le module Donation propose une liste de montants de dons.'.'<br />'
.'Vous pouvez modifier cette liste ci-apr&egrave;s.'.'<br />'
.'Dessous, sp&eacute;cifiez le montant par d&eacute;faut.');

define('_MI_DON_T_don_button_submit_',           'Entrez une URL compl&egrave;te pour l&apos;image &agrave; utiliser en bas du module de validation des dons.');
define('_MI_DON_T_don_button_top_',              'Entrez une URL compl&egrave;te pour l&apos;image &agrave; utiliser en haut du module de dons.');
define('_MI_DON_T_don_forceadd_',                'Add user to group/rank even if user selects to remain anonymous');
define('_MI_DON_T_don_name_no_',                 'Entrez le text pour  &quot;NON&quot;');
define('_MI_DON_T_don_name_prompt_',             'Entrez le texte de l&apos;invite demandant aux donateurs si ils veulent que leur nom cit&eacute;.');
define('_MI_DON_T_don_name_yes_',                'Entrez le texte pour &quot;OUI&quot;');
define('_MI_DON_T_don_sub_img_height_',          '');
define('_MI_DON_T_don_sub_img_width_',           'Restreindre les dimensions de l&apos;image ci-dessus.'.'<br />'
.'Pour utiliser la taille de l&apos;image d&apos;origine, laissez les deux cases vide.');

define('_MI_DON_T_don_text_rawtext',             'Nous sommes une organisation compl&egrave;tement support&eacute;e par vous, les membres.'.'<br />'
.'De nombreuses organisations ont des sites Web, des serveurs et la largeur de bande Internet offertes par ses membres.'.'<br />'
.'Nous sommes fiers d&apos;&ecirc;tre  soutenu par une communaut&eacute; de  membres.'.'<br />'
.'Cela signifie que nous avons besoin de vous, pour faire partie de cette communaut&eacute;. Nous encourageons chaque membre &agrave; contribuer &agrave; la collectivit&eacute; &agrave; hauteur de leur moyen.'.'<br />'
.'Nous devons payer nos factures chaque mois pour maintenir le site et les productions en cours.'.'<br />'
.'Pour ceux d&apos;entre vous qui peuvent, nous vous demandons de faire une contribution financi&egrave;re, quelle qu&apos;en soit la valeur, chaque don compte.'.'<br />'
.'Merci pour votre contribution.');

define('_MI_DON_T_don_top_img_height_',          '');
define('_MI_DON_T_don_top_img_width_',           'Restreindre les dimensions de l&apos;image ci-dessus.'.'<br />'
.'Pour utiliser la taille de l&apos;image d&apos;origine, laissez les des deux cases vide.');

define('_MI_DON_T_ipn_dbg_lvl_',                 'L&apos;exploitation des IPN a trois niveaux de log:'.'<br />'
.'1) Pas de journal'.'<br />'
.'2) Seulement les erreurs de connexion'.'<br />'
.'3) Tout'.'<br />'
.'Ce journal est stock&eacute; dans le &quot;translog table.');

define('_MI_DON_T_ipn_log_entries_',             'Entrer le nombre maximum d&apos;entr&eacute;es &agrave; garder dans le log.');
define('_MI_DON_T_month_goal_Apr',               '');
define('_MI_DON_T_month_goal_Aug',               '');
define('_MI_DON_T_month_goal_Dec',               '');
define('_MI_DON_T_month_goal_Feb',               '');
define('_MI_DON_T_month_goal_Jan',               'Entrez les objectifs de montants mensuels.');
define('_MI_DON_T_month_goal_Jul',               '');
define('_MI_DON_T_month_goal_Jun',               '');
define('_MI_DON_T_month_goal_Mar',               '');
define('_MI_DON_T_month_goal_May',               '');
define('_MI_DON_T_month_goal_Nov',               '');
define('_MI_DON_T_month_goal_Oct',               '');
define('_MI_DON_T_month_goal_Sep',               '');
define('_MI_DON_T_paypal_url_array',             'choissisez quel IPN PayPal vous voulez utiliser'.'<br />'
.'L&apos;url &quot;sandbox.paypal.com&quot; est faite uniquement pour les tests.');

define('_MI_DON_T_pp_cancel_url_',               'Entrez une URL de la page WEB qui sera appel&eacute; en cas d&apos;annulation de leur don par l&apos;utilisateur.'.'<br />'
.'paiement. Vous devez utiliser cette fonctionnalit&eacute; si vous avez rempli un &quot;Thank You&quot; URL.'.'<br />'
.'CONSEIL: Utilisez NukeWrap pour mettre vos utilisateurs dans votre site OSM.');

define('_MI_DON_T_pp_curr_code_array',           'Choisissez votre monaie par d&eacute;fault:'.'<br />'
.'USD = United States Dollar'.'<br />'
.'GBP = British Pound'.'<br />'
.'JPY = Japanese Yen'.'<br />'
.'CAD = Canadian Dollar'.'<br />'
.'EUR = Euro'.'<br />'
.'AUD = Australian Dollar'.'<br />');
define('_MI_DON_T_pp_get_addr_',                 'Souhaitez-vous ajouter PayPal pour recueillir l&apos;adresse d&apos;exp&eacute;dition de  l&apos;utilisateur ?'.'<br />'
.'Les utilisateurs peuvent choisir de ne pas le faire.'.'<br />'
.'Cela pourrait &ecirc;tre utile si vous voulez envoyer des cartes de voeux par exemple.');

define('_MI_DON_T_pp_image_url_',                'Vous pouvez avoir une image affich&eacute;e en haut de l&apos;&eacute;cran PayPal lorsque vos utilisateurs font un don.'.'<br />'
.'Entrez l&apos;URL de l&apos;image &agrave; afficher ici.'.'<br />'
.'REMARQUE: Vous devez entrer un serveur HTTPS: / / URL. '.'<br />'
.'Si vous entrez un URL &agrave; partir d&apos;un serveur non s&eacute;curis&eacute;, vos utilisateurs seront continuellement mis en garde qu&apos;ils sont sur le point d&apos;afficher des informations non s&ucirc;res et non-s&eacute;curis&eacute;es.');

define('_MI_DON_T_pp_item_num_',                 'Entrez le num&eacute;o IPN util&eacute; pour votre don.'.'<br />'
.'Cette fonctionnalit&eacute; n&apos;est actuellement pas utilis&eacute;e.');

define('_MI_DON_T_pp_itemname_',                 'Entrez le nom de l&apos;op&eacute;ration IPN pour vos dons.'.'<br />'
.'Cette fonctionnalit&eacute; n&apos;est actuellement pas utilis&eacute;e.');

define('_MI_DON_T_quarter_goal_1st',             'Entrez les montants en dollar des objectifs trimestriels des dons.');
define('_MI_DON_T_quarter_goal_2nd',             '');
define('_MI_DON_T_quarter_goal_3rd',             '');
define('_MI_DON_T_quarter_goal_4th',             '');
define('_MI_DON_T_receiver_email_',              '<strong>!!!!!! TRES IMPORTANT </strong>!!!!!!! C&apos;est l&apos;adresse e-mail enregistr&eacute;e dans votre compte PayPal &agrave; laquelle vous recvrez les notifications .'.'<br />'
.'NOTE: Cr&eacute;er une adresse e-mail sp&eacute;cifique seulement pour la r&eacute;ception des dons.');

define('_MI_DON_T_swing_day_',                   'Le jour de bascule d&eacute;termine le moment ou le compteur passe au mois suivant.'.'<br />'
.' Les r&eacute;sultats du mois pr&eacute;c&eacute;dent, ne seront plus affich&eacute;s.');

define('_MI_DON_T_ty_url_',                      'Vous pouvez &eacute;galement entrer une URL ici pour afficher une page de remerciement , apr&egrave;s validation du don.'.'<br />'
.'Ceci est pratique pour rediriger les utilisaturs vers votre site tout en les remerciant.'.'<br />'
.'NOTE: PayPal utilise aussi  ce lien pour annuler les paiements, si vous utilisez la fonctionnalit&eacute;');

define('_MI_DON_T_use_goal_array',               'Choisissez le type d&apos;objectif que vous souhaitez utiliser.');
define('_MI_DON_T_week_goal_1st',                'Entrez les montants pour chaque objectif hebdomadaire.');
define('_MI_DON_T_week_goal_2nd',                '');
define('_MI_DON_T_week_goal_3rd',                '');
define('_MI_DON_T_week_goal_4th',                '');
define('_MI_DON_TREASURY_F_REGISTER',            'Tr&eacute;sorerie - dons enregistr&eacute;s');
define('_MI_DON_V_assign_group_',                '0');
define('_MI_DON_V_assign_rank_',                 '0');
define('_MI_DON_V_don_amount_1',                 '5');
define('_MI_DON_V_don_amount_2',                 '15');
define('_MI_DON_V_don_amount_3',                 '25');
define('_MI_DON_V_don_amount_4',                 '35');
define('_MI_DON_V_don_amount_5',                 '45');
define('_MI_DON_V_don_amount_6',                 '55');
define('_MI_DON_V_don_amount_7',                 '65');
define('_MI_DON_V_don_amt_checked_',             '3');
define('_MI_DON_V_don_button_submit_',           'https://www.paypal.com/fr_FR/FR/i/btn/btn_donate_LG.gif');
define('_MI_DON_V_don_button_top_',              'https://www.paypal.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif');
define('_MI_DON_V_don_forceadd_',                '1');
define('_MI_DON_V_don_name_no_',                 'Non - Listez mon don  anonymement');
define('_MI_DON_V_don_name_prompt_',             'Voulez-vous que votre nom soit cit&eacute; avec votre don?');
define('_MI_DON_V_don_name_yes_',                'Oui - Citez- moi comme un g&eacute;n&eacute;reux donateur.');
define('_MI_DON_V_don_sub_img_height_',          '');
define('_MI_DON_V_don_sub_img_width_',           '');
define('_MI_DON_V_don_text_rawtext',             '0');
define('_MI_DON_V_don_top_img_height_',          '');
define('_MI_DON_V_don_top_img_width_',           '');
define('_MI_DON_V_ipn_dbg_lvl_',                 '0');
define('_MI_DON_V_ipn_log_entries_',             '20');
define('_MI_DON_V_month_goal_Apr',               '15');
define('_MI_DON_V_month_goal_Aug',               '15');
define('_MI_DON_V_month_goal_Dec',               '15');
define('_MI_DON_V_month_goal_Feb',               '15');
define('_MI_DON_V_month_goal_Jan',               '15');
define('_MI_DON_V_month_goal_Jul',               '15');
define('_MI_DON_V_month_goal_Jun',               '15');
define('_MI_DON_V_month_goal_Mar',               '15');
define('_MI_DON_V_month_goal_May',               '15');
define('_MI_DON_V_month_goal_Nov',               '15');
define('_MI_DON_V_month_goal_Oct',               '15');
define('_MI_DON_V_month_goal_Sep',               '15');
define('_MI_DON_V_paypal_url_array',             'www.paypal.com|www.sandbox.paypal.com');
define('_MI_DON_V_pp_cancel_url_',               "http://dev.csmapcentral.com/modules/{$xdonDir}/cancel.php");
define('_MI_DON_V_pp_curr_code_array',           'USD|GBP|JPY|CAD|EUR|AUD');
define('_MI_DON_V_pp_get_addr_',                 '0');
define('_MI_DON_V_pp_image_url_',                '');
define('_MI_DON_V_pp_item_num_',                 '110');
define('_MI_DON_V_pp_itemname_',                 'Don');
define('_MI_DON_V_quarter_goal_1st',             '500');
define('_MI_DON_V_quarter_goal_2nd',             '500');
define('_MI_DON_V_quarter_goal_3rd',             '500');
define('_MI_DON_V_quarter_goal_4th',             '500');
define('_MI_DON_V_receiver_email_',              'webmaster@csmapcentral.com');
define('_MI_DON_V_swing_day_',                   '1');
define('_MI_DON_V_ty_url_',                      "http://dev.csmapcentral.com/modules/{$xdonDir}/success.php");
define('_MI_DON_V_use_goal_array',               'Aucun|Objectif Hebdomadaire|Objectif Mensuel|Objectif Trimestriel');
define('_MI_DON_V_week_goal_1st',                '60');
define('_MI_DON_V_week_goal_2nd',                '60');
define('_MI_DON_V_week_goal_3rd',                '60');
define('_MI_DON_V_week_goal_4th',                '60');
define('_MI_DON_z_test',                         'Pour test');
?>