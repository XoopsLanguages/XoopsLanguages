<?php
/**
 * @version::   $Id$
 */
$xdonDir = basename ( dirname( dirname ( dirname( __FILE__ ) ) ) ) ;
define('_AD_DON_ADD',                            'Ajouter');
define('_AD_DON_ADD_ANYWAY',                     'Add user to Group/Rank if donating anonymously');
define('_AD_DON_ALERTE_INPUT_NUMBER',            "Entrez un nombre pour le champ %1\$s.");
define('_AD_DON_ALERTE_INPUT_NUMBER_B',          "Entrez un nombre ou un blanc pour le champ %1\$s.");
define('_AD_DON_ALERTE_INPUT_STRING',            "Entrez une valeur pour le champ %1\$s.");
define('_AD_DON_ALERTE_URL_FOR_CANCEL',          'Ce n&apos;est pas une URL valide pour annuler les paiements.'.'<br />'
.'Si vous entrez une URL valide pour annuler les paiements'.'<br />'
.'PayPal pourra utilser cette URL pour annuler les paiements.');

define('_AD_DON_AMOUNT',                         'Montant');
define('_AD_DON_AMOUNT_DEFAULT',                 'S&eacute;lectionez le n&deg; du montant par d&eacute;faul (liste ci-dessous)');


define('_AD_DON_BUTTON_URL',                     'https://www.paypal.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif');




define('_AD_DON_CLEAR_LOG',                      'Clear Log');
define('_AD_DON_CLEAR_THIS_LOG',                 'Are you sure you want to Delete the Transaction Log?');
define('_AD_DON_CONFIG_PAYPAL_HEADER',           'PayPal Configuration');
define('_AD_DON_CONFIG_MODULE',                  'Configuration du module &quot;donations&quot;');
define('_AD_DON_CONFIGURATION',                  'Configuration');
define('_AD_DON_CONFIRM_ACTION',                 'Etes-vous s&ucirc;r de vouloir faire &ccedil;a?');
define('_AD_DON_CONFIRM_DELETE',                 'Etes-vous s&ucirc;r de vouloir supprimer cet enrgistrement?');
define('_AD_DON_CONFIRM_IMG_URL',                'Cette URL ne commence pas https://'.'<br />'
.'Cette image doit r&eacute;sider sur un serveur HTTPS.'.'<br />'
.'Si vous utilisez cette URL l&apos;utilisateur recevra une alerte'.'<br />'
.'au sujet de donn&eacute;es non s&eacute;curis&eacute;es sur la page.'.'<br />'
.'Etes-vous s&ucirc;r de vouloir continuer?');

define('_AD_DON_CONFIRM_TOTAL_UP',               'Cette action va t&eacute;l&eacute;charger toutes les transactions IPN PayPal r&eacute;centes '.'<br />'
.'et les inscrire dans le registre ci-dessous'.'<br />'
.'&ecirc;tes vous s&ucirc;r de le faire maintenant ?');

define('_AD_DON_CONTINUE',                       'Continue');
define('_AD_DON_CURRENT',                        'Current');
define('_AD_DON_CUST_ID',                        'Customer PayPal ID:');
define('_AD_DON_CUST_NAME',                      'Customer:');
define('_AD_DON_DATE',                           'Date');
define('_AD_DON_DEFAULT',                        'Default');
define('_AD_DON_DESCRIPTION',                    'Description');
define('_AD_DON_DONATIONS',                      'Dons');
define('_AD_DON_ERR_BAD_DATE_FORMAT',            'Invalid Date format');
define('_AD_DON_ERR_BAD_NAME_FORMAT',            'The Name field cannot be blank');
define('_AD_DON_ERR_DB_INSERTION',               '<span style="font-weight: bold; color: red;"> ERROR :</span> '
                                                 .'There are %d to import, but there was an<br />'
                                                 .'error encoutered during db record insertion into Financial '
                                                 .'table.<br />Insertion <span style="font-weight: bold; color: red;">FAILED</span>');
define('_AD_DON_ERR_INVALID_RECORD_ID',          'Invalid record id specified, operation aborted');
define('_AD_DON_ERR_SQL_FAILURE',                '<span style="color: #0000FF;"><span style="font-weight: bold;">If you see this screen '
                                                 .'then an SQL error was encountered</span><br />'
                                                 .'You should see a message in <span style="color: #FF0000;">RED</span> below indicating '
                                                 .'the error condition</span>');
define('_AD_DON_FIELD_PASSED',                   'Champ valid&eacute; !');
define('_AD_DON_GOAL',                           'Objectif');
define('_AD_DON_GOAL_DONATION',                  'Objectifs de don');
define('_AD_DON_GOAL_HEBDO',                     'Objectifs hebdomadaires (4 semaines dans un mois)');
define('_AD_DON_GOAL_MENSUEL',                   'Objectifs mensuels');
define('_AD_DON_GOAL_PREFERENCES',               'Pr&eacute;f&eacute;rences des objectifs');
define('_AD_DON_GOAL_QUARTER',                   'Objectifs trimestriels');
define('_AD_DON_GOAL_TYPE',                      'Choisissez la fr&eacute;quence d&apos;objectifs que vous souhaitez');
define('_AD_DON_GROSS',                          'Gross Amount');
define('_AD_DON_HEIGHT',                         'Hauteur');
define('_AD_DON_IMAGE_SIZE',                     'Dimension de l&apos;image');
define('_AD_DON_IMG_BUTTON_TOP',                 'Image de haut de page des dons');
define('_AD_DON_IMG_BUTTON_URL',                 'Image du bouton de validation des dons');
define('_AD_DON_INTRODUCE_TEXT',                 'Texte de pr&eacute;sentation');
define('_AD_DON_INVALID_AMOUNT',                 'Compte non valide');
define('_AD_DON_INVALID_AMOUNT2',                'Compte non valide, utilisez uniquement les charact&egrave;res -.0123456789');
define('_AD_DON_IPN_EMAIL_RECEIVER',             'EMAIL du b&eacute;n&eacute;ficiaire du compte PayPal');
define('_AD_DON_IPN_LINK',                       'Lien IPN PayPal');
define('_AD_DON_IPN_LOGGING',                    'Options de connexion IPN');
define('_AD_DON_IPN_LOGGING_LEVEL',              'Niveau de conexion IPN');
define('_AD_DON_IPN_URL',                        'S&eacute;lectionnez l&apos;URL de connexion IPN que vous voulez utiliser');
define('_AD_DON_IPN_URL_CANCELED',               'URL de la page en cas d&apos;annulation');
define('_AD_DON_IPN_URL_SUCCESS',                'URL de r&eacute;ception en cas de succ&egrave;s');
define('_AD_DON_ITEM_INFO',                      'Item Info');
define('_AD_DON_LOG_CLEARED',                    'IPN Log cleared');
define('_AD_DON_LOG_DATE',                       'Log Date: ');
define('_AD_DON_LOG_EMPTY',                      'There are no IPN transaction logs in the database');
define('_AD_DON_LOG_ENTRY',                      'Nombre d&apos;entr&eacute;es &agrave; garder dans le log');
define('_AD_DON_LOG_ENTRY_TXT',                  'Log Text: ');
define('_AD_DON_LOG_EVERYTHING',                 'Tout');
define('_AD_DON_LOG_NOT_CLEARED',                'IPN Log NOT cleared');
define('_AD_DON_LOG_OFF',                        'D&eacute;sactiv&eacute;');
define('_AD_DON_LOG_ONLY_ERRORS',                'Seulement les erreurs');
define('_AD_DON_MONTH',                          'Mois');
define('_AD_DON_MONTH_GOAL',                     'Objectif mensuel');
define('_AD_DON_NAME',                           'Nom');
define('_AD_DON_NETBAL',                         'Balance net');
define('_AD_DON_NEW_IPN_COUNT',                  'Nombre de nouveaux enregistrements IPN');
define('_AD_DON_NEXT_NEWEST',                    'Next Newest');
define('_AD_DON_NEXT_OLDEST',                    'Next Oldest');
define('_AD_DON_NO_NEW_IPNS',                    'There are no new IPN records to import! ');
define('_AD_DON_NONE',                           'Aucun');
define('_AD_DON_NUM',                            'N&deg;');
define('_AD_DON_NUMBER_ORDINAUX',                '1er|2nd|3&egrave;me|4&egrave;me|5&egrave;me|6&egrave;me|7&egrave;me|8&egrave;me|9&egrave;me|10&egrave;me');
define('_AD_DON_OLDEST',                         'Oldest');
define('_AD_DON_PMNT_DATE',                      'Payment Date: ');
define('_AD_DON_PMNT_TYPE',                      'Payment Type: ');
define('_AD_DON_PP_ASK_CP_ADRESS',               'Demander le code postal');
define('_AD_DON_PP_GROUP',                       'S&eacute;lectionnez un groupe pour les donateurs');
define('_AD_DON_PP_IMG',                         'URL de l&apos;image &agrave; afficher dans PayPal');
define('_AD_DON_PP_ITEM_NAME',                   'Nom de l&apos;op&eacute;ration pour PayPal');
define('_AD_DON_PP_ITEM_NUMBER',                 'Num&eacute;ro d&apos;item PayPal');
define('_AD_DON_PP_MONEY',                       'Choisissez votre monaie');
define('_AD_DON_PP_RANK',                        'S&eacute;lectionnez un rang pour les donateurs');
define('_AD_DON_QUARTER',                        'Trimestre');
define('_AD_DON_QUARTER_GOAL',                   'Objectif trimestriel');
define('_AD_DON_RECORDS_INSERTED',               '<span style="font-weight: bold;">%d</span> IPN records have been imported for a total of %s%0.2f');
define('_AD_DON_RESET',                          'Annuler');
define('_AD_DON_RETURN',                         'Retourner');
define('_AD_DON_SEARCH_FORM',                    'Search By Transaction ID');
define('_AD_DON_SEARCH_TERM',                    'Search for:');
define('_AD_DON_SHORT_MONTH',                    'Jan|F&eacute;v|Mars|Avr|Mai|Juin|Juil|Ao&ucirc;t|Sep|Oct|Nov|D&eacute;c');
define('_AD_DON_SHOW_LOG',                       'IPN Log');
define('_AD_DON_SHOW_TXN',                       'Transactions');
define('_AD_DON_SUBMIT',                         'Soumettre');
define('_AD_DON_SUGGESTED_AMOUNT',               'Suggestion de montant des dons');
define('_AD_DON_SWING_DAY',                      'Jour de bascule mensuelle');
define('_AD_DON_SYNCHRONISE_IPN',                'Synchroniser les transacttions PAYPal IPN');
define('_AD_DON_T_assign_group_',                'S&eacute;l&eacute;ctionnez le groupe auquel affecter les donateurs lors de dons valid&eacute;s.');
define('_AD_DON_T_assign_rank_',                 'Selectionnez le rang auquel affecter les donateurs lors de dons valid&eacute;s.');
define('_AD_DON_T_don_amount_1',                 'Le module donations propose une liste de montants &agrave; sug&eacute;rrer.'.'<br />Vous pouvez modifier cette liste.');
define('_AD_DON_T_don_amount_2',                 '');
define('_AD_DON_T_don_amount_3',                 '');
define('_AD_DON_T_don_amount_4',                 '');
define('_AD_DON_T_don_amount_5',                 '');
define('_AD_DON_T_don_amount_6',                 '');
define('_AD_DON_T_don_amount_7',                 '');
define('_AD_DON_T_don_amt_checked_',             'Le module Donation propose une liste de montants de dons.'.'<br />'
.'Vous pouvez modifier cette liste ci-apr&egrave;s.'.'<br />'
.'Dessous, sp&eacute;cifiez le montant par d&eacute;faut.');

define('_AD_DON_T_don_button_submit_',           'Entrez une URL compl&egrave;te pour l&apos;image &agrave; utiliser en bas du module de validation des dons.');
define('_AD_DON_T_don_button_top_',              'Entrez une URL compl&egrave;te pour l&apos;image &agrave; utiliser en haut du module de dons.');
define('_AD_DON_T_don_forceadd_',                'Add user to group/rank even if user selects to remain anonymous');
define('_AD_DON_T_don_name_no_',                 'Entrez le text pour  &quot;NON&quot;');
define('_AD_DON_T_don_name_prompt_',             'Entrez le texte de l&apos;invite demandant aux donateurs si ils veulent que leur nom cit&eacute;.');
define('_AD_DON_T_don_name_yes_',                'Entrez le texte pour &quot;OUI&quot;');
define('_AD_DON_T_don_sub_img_height_',          '');
define('_AD_DON_T_don_sub_img_width_',           'Restreindre les dimensions de l&apos;image ci-dessus.'.'<br />'
.'Pour utiliser la taille de l&apos;image d&apos;origine, laissez les deux cases vide.');

define('_AD_DON_T_don_text_rawtext',             'Nous sommes une organisation compl&egrave;tement support&eacute;e par vous, les membres.'.'<br />'
.'De nombreuses organisations ont des sites Web, des serveurs et la largeur de bande Internet offertes par ses membres.'.'<br />'
.'Nous sommes fiers d&apos;&ecirc;tre  soutenu par une communaut&eacute; de  membres.'.'<br />'
.'Cela signifie que nous avons besoin de vous, pour faire partie de cette communaut&eacute;. Nous encourageons chaque membre &agrave; contribuer &agrave; la collectivit&eacute; &agrave; hauteur de leur moyen.'.'<br />'
.'Nous devons payer nos factures chaque mois pour maintenir le site et les productions en cours.'.'<br />'
.'Pour ceux d&apos;entre vous qui peuvent, nous vous demandons de faire une contribution financi&egrave;re, quelle qu&apos;en soit la valeur, chaque don compte.'.'<br />'
.'Merci pour votre contribution.');

define('_AD_DON_T_don_top_img_height_',          '');
define('_AD_DON_T_don_top_img_width_',           'Restreindre les dimensions de l&apos;image ci-dessus.'.'<br />'
.'Pour utiliser la taille de l&apos;image d&apos;origine, laissez les des deux cases vide.');

define('_AD_DON_T_ipn_dbg_lvl_',                 'L&apos;exploitation des IPN a trois niveaux de log:'.'<br />'
.'1) Pas de journal'.'<br />'
.'2) Seulement les erreurs de connexion'.'<br />'
.'3) Tout'.'<br />'
.'Ce journal est stock&eacute; dans le &quot;translog table.');

define('_AD_DON_T_ipn_log_entries_',             'Entrer le nombre maximum d&apos;entr&eacute;es &agrave; garder dans le log.');
define('_AD_DON_T_month_goal_Apr',               '');
define('_AD_DON_T_month_goal_Aug',               '');
define('_AD_DON_T_month_goal_Dec',               '');
define('_AD_DON_T_month_goal_Feb',               '');
define('_AD_DON_T_month_goal_Jan',               'Entrez les objectifs de montants mensuels.');
define('_AD_DON_T_month_goal_Jul',               '');
define('_AD_DON_T_month_goal_Jun',               '');
define('_AD_DON_T_month_goal_Mar',               '');
define('_AD_DON_T_month_goal_May',               '');
define('_AD_DON_T_month_goal_Nov',               '');
define('_AD_DON_T_month_goal_Oct',               '');
define('_AD_DON_T_month_goal_Sep',               '');
define('_AD_DON_T_paypal_url_array',             'choissisez quel IPN PayPal vous voulez utiliser'.'<br />'
.'L&apos;url &quot;sandbox.paypal.com&quot; est faite uniquement pour les tests.');

define('_AD_DON_T_pp_cancel_url_',               'Entrez une URL de la page WEB qui sera appel&eacute; en cas d&apos;annulation de leur don par l&apos;utilisateur.'.'<br />'
.'paiement. Vous devez utiliser cette fonctionnalit&eacute; si vous avez rempli un &quot;Thank You&quot; URL.'.'<br />'
.'CONSEIL: Utilisez NukeWrap pour mettre vos utilisateurs dans votre site OSM.');

define('_AD_DON_T_pp_curr_code_array',           'Choisissez votre monaie par d&eacute;fault:'.'<br />'
.'USD = United States Dollar'.'<br />'
.'GBP = British Pound'.'<br />'
.'JPY = Japanese Yen'.'<br />'
.'CAD = Canadian Dollar'.'<br />'
.'EUR = Euro'.'<br />'
.'AUD = Austrailian Dollar');

define('_AD_DON_T_pp_get_addr_',                 'Souhaitez-vous ajouter PayPal pour recueillir l&apos;adresse d&apos;exp&eacute;dition de  l&apos;utilisateur ?'.'<br />'
.'Les utilisateurs peuvent choisir de ne pas le faire.'.'<br />'
.'Cela pourrait &ecirc;tre utile si vous voulez envoyer des cartes de voeux par exemple.');

define('_AD_DON_T_pp_image_url_',                'Vous pouvez avoir une image affich&eacute;e en haut de l&apos;&eacute;cran PayPal lorsque vos utilisateurs font un don.'.'<br />'
.'Entrez l&apos;URL de l&apos;image &agrave; afficher ici.'.'<br />'
.'REMARQUE: Vous devez entrer un serveur HTTPS: / / URL. '.'<br />'
.'Si vous entrez un URL &agrave; partir d&apos;un serveur non s&eacute;curis&eacute;, vos utilisateurs seront continuellement mis en garde qu&apos;ils sont sur le point d&apos;afficher des informations non s&ucirc;res et non-s&eacute;curis&eacute;es.');

define('_AD_DON_T_pp_item_num_',                 'Entrez le num&eacute;o IPN util&eacute; pour votre don.'.'<br />'
.'Cette fonctionnalit&eacute; n&apos;est actuellement pas utilis&eacute;e.');

define('_AD_DON_T_pp_itemname_',                 'Entrez le nom de l&apos;op&eacute;ration IPN pour vos dons.'.'<br />'
.'Cette fonctionnalit&eacute; n&apos;est actuellement pas utilis&eacute;e.');

define('_AD_DON_T_quarter_goal_1st',             'Entrez les montants en dollar des objectifs trimestriels des dons.');
define('_AD_DON_T_quarter_goal_2nd',             '');
define('_AD_DON_T_quarter_goal_3rd',             '');
define('_AD_DON_T_quarter_goal_4th',             '');
define('_AD_DON_T_receiver_email_',              '<strong>!!!!!! TRES IMPORTANT </strong>!!!!!!! C&apos;est l&apos;adresse e-mail enregistr&eacute;e dans votre compte PayPal &agrave; laquelle vous recvrez les notifications .'.'<br />'
.'NOTE: Cr&eacute;er une adresse e-mail sp&eacute;cifique seulement pour la r&eacute;ception des dons.');

define('_AD_DON_T_swing_day_',                   'Le jour de bascule d&eacute;termine le moment ou le compteur passe au mois suivant.'.'<br />'
.' Les r&eacute;sultats du mois pr&eacute;c&eacute;dent, ne seront plus affich&eacute;s.');

define('_AD_DON_T_ty_url_',                      'Vous pouvez &eacute;galement entrer une URL ici pour afficher une page de remerciement , apr&egrave;s validation du don.'.'<br />'
.'Ceci est pratique pour rediriger les utilisaturs vers votre site tout en les remerciant.'.'<br />'
.'NOTE: PayPal utilise aussi  ce lien pour annuler les paiements, si vous utilisez la fonctionnalit&eacute;');

define('_AD_DON_T_use_goal_array',               'Choisissez le type d&apos;objectif que vous souhaitez utiliser.');
define('_AD_DON_T_week_goal_1st',                'Entrez les montants pour chaque objectif hebdomadaire.');
define('_AD_DON_T_week_goal_2nd',                '');
define('_AD_DON_T_week_goal_3rd',                '');
define('_AD_DON_T_week_goal_4th',                '');
define('_AD_DON_TEST_IPN',                       'Cliquez ici pour tester l&apos;IPN');
define('_AD_DON_TOTALING',                       'Total');
define('_AD_DON_TRANSACTION',                    'transaction et post ici dans le registre.');
define('_AD_DON_TREASURY',                       'Tr&eacute;sorerie');
define('_AD_DON_TREASURY_ADMIN',                 'Administration de la tr&eacute;sorerie');
define('_AD_DON_TREASURY_F_REGISTER',            'Tr&eacute;sorerie - dons enregistr&eacute;s');
define('_AD_DON_TXN_AMOUNT',                     'Amount:');
define('_AD_DON_TXN_FORM',                       'Detailed Transaction ID Information');
define('_AD_DON_TXN_ID',                         'TXN ID:');
define('_AD_DON_TXN_MEMO',                       'Memo:');
define('_AD_DON_TXN_RECENT_FORM',                'Recent Transactions');
define('_AD_DON_TXN_TYPE',                       'Transaction Type: ');
define('_AD_DON_UPDATE_REGISTER_IPN',            'Update register with PayPal IPN');
define('_AD_DON_USERNAME_REQUEST',               'Question pour la citation du nom du donateur');
define('_AD_DON_USERNAME_REQUEST_NO',            'Requ&ecirc;te utilisateur pour &quot;NON&quot;');
define('_AD_DON_USERNAME_REQUEST_YES',           'Requ&ecirc;te utilisateur pour &quot;OUI&quot;');
define('_AD_DON_V_assign_group_',                '0');
define('_AD_DON_V_assign_rank_',                 '0');
define('_AD_DON_V_don_amount_1',                 '5');
define('_AD_DON_V_don_amount_2',                 '15');
define('_AD_DON_V_don_amount_3',                 '25');
define('_AD_DON_V_don_amount_4',                 '35');
define('_AD_DON_V_don_amount_5',                 '45');
define('_AD_DON_V_don_amount_6',                 '55');
define('_AD_DON_V_don_amount_7',                 '65');
define('_AD_DON_V_don_amt_checked_',             '3');
define('_AD_DON_V_don_button_submit_',           'https://www.paypal.com/fr_FR/FR/i/btn/btn_donate_LG.gif');
define('_AD_DON_V_don_button_top_',              'https://www.paypal.com/fr_FR/FR/i/btn/btn_donateCC_LG.gif');
define('_AD_DON_V_don_forceadd_',                '1');
define('_AD_DON_V_don_name_no_',                 'Non - Listez mon don  anonymement');
define('_AD_DON_V_don_name_prompt_',             'Voulez-vous que votre nom soit cit&eacute; avec votre don?');
define('_AD_DON_V_don_name_yes_',                'Oui - Citez- moi comme un g&eacute;n&eacute;reux donateur.');
define('_AD_DON_V_don_sub_img_height_',          '');
define('_AD_DON_V_don_sub_img_width_',           '');
define('_AD_DON_V_don_text_rawtext',             '0');
define('_AD_DON_V_don_top_img_height_',          '');
define('_AD_DON_V_don_top_img_width_',           '');
define('_AD_DON_V_ipn_dbg_lvl_',                 '0');
define('_AD_DON_V_ipn_log_entries_',             '20');
define('_AD_DON_V_month_goal_Apr',               '15');
define('_AD_DON_V_month_goal_Aug',               '15');
define('_AD_DON_V_month_goal_Dec',               '15');
define('_AD_DON_V_month_goal_Feb',               '15');
define('_AD_DON_V_month_goal_Jan',               '15');
define('_AD_DON_V_month_goal_Jul',               '15');
define('_AD_DON_V_month_goal_Jun',               '15');
define('_AD_DON_V_month_goal_Mar',               '15');
define('_AD_DON_V_month_goal_May',               '15');
define('_AD_DON_V_month_goal_Nov',               '15');
define('_AD_DON_V_month_goal_Oct',               '15');
define('_AD_DON_V_month_goal_Sep',               '15');
define('_AD_DON_V_paypal_url_array',             'www.paypal.com|www.sandbox.paypal.com');
define('_AD_DON_V_pp_cancel_url_',               "http://dev.csmapcentral.com/modules/{$xdonDir}}/cancel.php");
define('_AD_DON_V_pp_curr_code_array',           'USD|GBP|JPY|CAD|EUR|AUD');
define('_AD_DON_V_pp_get_addr_',                 '0');
define('_AD_DON_V_pp_image_url_',                '');
define('_AD_DON_V_pp_item_num_',                 '110');
define('_AD_DON_V_pp_itemname_',                 'Don');
define('_AD_DON_V_quarter_goal_1st',             '500');
define('_AD_DON_V_quarter_goal_2nd',             '500');
define('_AD_DON_V_quarter_goal_3rd',             '500');
define('_AD_DON_V_quarter_goal_4th',             '500');
define('_AD_DON_V_receiver_email_',              'webmaster@csmapcentral.com');
define('_AD_DON_V_swing_day_',                   '1');
define('_AD_DON_V_ty_url_',                      "http://dev.csmapcentral.com/modules/{$xdonDir}/success.php");
define('_AD_DON_V_use_goal_array',               'Aucun|Objectif Hebdomadaire|Objectif Mensuel|Objectif Trimestriel');
define('_AD_DON_V_week_goal_1st',                '60');
define('_AD_DON_V_week_goal_2nd',                '60');
define('_AD_DON_V_week_goal_3rd',                '60');
define('_AD_DON_V_week_goal_4th',                '60');
define('_AD_DON_WEEK',                           'Semaine');
define('_AD_DON_WEEK_GOAL',                      'Objectif hebdomadaire');
define('_AD_DON_WIDTH',                          'Largeur');
define('_AD_DON_z_test',                         'Pour test');
?>