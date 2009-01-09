<?php
/******************************
* EQdkp
* Copyright 2002-2003
* Licensed under the GNU GPL.  See COPYING for full terms.
* ------------------
* lang_main.php
* begin: Wed December 18 2002
*
* $Id: lang_admin.php 46 2007-06-19 07:29:11Z tsigo $
*
******************************/

if ( !defined('EQDKP_INC') )
{
     die('Do not access this file directly.');
}

// %1\$<type> prevents a possible error in strings caused
//      by another language re-ordering the variables
// $s is a string, $d is an integer, $f is a float

$lang['ENCODING'] = 'iso-8859-1';
$lang['XML_LANG'] = 'fr';

// Titles
$lang['admin_title_prefix']   = "%1\$s %2\$s Admin";
$lang['listadj_title']        = 'Group ment Listing';
$lang['listevents_title']     = 'Valeur d\'�v�nement';
$lang['listiadj_title']       = 'Individual ment Listing';
$lang['listitems_title']      = 'Valeurs des objets';
$lang['listnews_title']       = 'News Entries';
$lang['listmembers_title']    = 'Member Standings';
$lang['listpurchased_title']  = 'Historique des objets';
$lang['listraids_title']      = 'Liste des Raids';
$lang['login_title']          = 'Login';
$lang['message_title']        = 'EQdkp: Message';
$lang['register_title']       = 'S\'enregistrer';
$lang['settings_title']       = 'Options de compte';
$lang['stats_title']          = "%1\$s Statistiques";
$lang['summary_title']        = 'R�sum� des nouvelles';
$lang['title_prefix']         = "%1\$s %2\$s";
$lang['viewevent_title']      = "Affichage de l\'Historique des Raids pour %1\$s";
$lang['viewitem_title']       = "Affichage de l\'Historique des achats pour %1\$s";
$lang['viewmember_title']     = "Historique pour %1\$s";
$lang['viewraid_title']       = 'R�sum� du raid';

// Main Menu
$lang['menu_admin_panel'] = 'Administration';
$lang['menu_events'] = 'Ev�nements';
$lang['menu_itemhist'] = 'Historique des objets';
$lang['menu_itemval'] = 'Valeur des objets';
$lang['menu_news'] = 'News';
$lang['menu_raids'] = 'Raids';
$lang['menu_register'] = 'S\'enregistrer';
$lang['menu_settings'] = 'Profil';
$lang['menu_standings'] = 'Membres';
$lang['menu_stats'] = 'Statistiques';
$lang['menu_summary'] = 'R�sum�';

// Column Headers
$lang['account'] = 'Compte';
$lang['action'] = 'Action';
$lang['active'] = 'Activ�';
$lang['add'] = 'Ajouter';
$lang['added_by'] = 'Ajout� par';
$lang['adjustment'] = 'Ajustage';
$lang['administration'] = 'Administration';
$lang['administrative_options'] = 'Options d\'Administrative';
$lang['admin_index'] = 'Index de l\'Admin';
$lang['attendance_by_event'] = 'Pr�sence par Event';
$lang['attended'] = 'Accompagn�';
$lang['attendees'] = 'Participants';
$lang['average'] = 'Moyenne';
$lang['backup_database'] = 'Sauvegarde de la base de donn�es (ne pas combiner avec d\'autres changements pour cette session)';
$lang['buyer'] = 'Acheteur';
$lang['buyers'] = 'Acheteur';
$lang['class'] = 'Classe';
$lang['armor'] = 'Armure';
$lang['type'] = 'Armure';
$lang['class_distribution'] = 'Distribution par Classe';
$lang['class_summary'] = "R�sum� des Classes : %1\$s to %2\$s";
$lang['configuration'] = 'Configuration';
$lang['current'] = 'Actuel';
$lang['date'] = 'Date';
$lang['delete'] = 'Supprimer';
$lang['delete_confirmation'] = 'Confirmation de suppression';
$lang['dkp_value'] = "%1\$s Valeur";
$lang['drops'] = 'Drops';
$lang['earned'] = 'Gagn�';
$lang['enter_dates'] = 'Entrez les Dates';
$lang['eqdkp_index'] = 'Index d\'EQdkp';
$lang['eqdkp_upgrade'] = 'Mise � jour d\'EQdkp';
$lang['event'] = 'Ev�nement';
$lang['events'] = 'Ev�nements';
$lang['filter'] = 'Filtre';
$lang['first'] = 'Premier';
$lang['rank'] = 'Rang';
$lang['general_admin'] = 'Administration G�n�rale';
$lang['get_new_password'] = 'Choisissez un nouveau mot de passe';
$lang['group_adj'] = 'Ajust. de Groupe';
$lang['group_adjustments'] = 'Ajustages de Groupe';
$lang['individual_adjustments'] = 'Ajustages Individuels';
$lang['individual_adjustment_history'] = 'Historique de l\'Ajustage Individuel';
$lang['indiv_adj'] = 'Ajust. Indiv.';
$lang['ip_address'] = 'Addresse IP';
$lang['item'] = 'Objet';
$lang['items'] = 'Objets';
$lang['item_purchase_history'] = 'Historique des Objets achet�s';
$lang['last'] = 'Dernier';
$lang['lastloot'] = 'Dernier Loot';
$lang['lastraid'] = 'Dernier Raid';
$lang['last_visit'] = 'Derni�re Visite';
$lang['level'] = 'Level';
$lang['log_date_time'] = 'Date/temps de cette session';
$lang['loot_factor'] = 'Facteur de loot';
$lang['loots'] = 'Loots';
$lang['manage'] = 'G�rer';
$lang['member'] = 'Membre';
$lang['members'] = 'Membres';
$lang['members_present_at'] = "Membres pr�sents � %1\$s sur %2\$s";
$lang['miscellaneous'] = 'Divers';
$lang['name'] = 'Nom';
$lang['news'] = 'News';
$lang['note'] = 'Note';
$lang['online'] = 'En ligne';
$lang['options'] = 'Options';
$lang['paste_log'] = 'Copiez un log ci-dessous';
$lang['percent'] = 'Pourcent';
$lang['permissions'] = 'Permissions';
$lang['per_day'] = 'Par Jour';
$lang['per_raid'] = 'Par Raid';
$lang['pct_earned_lost_to'] = '% Earned Lost to';
$lang['preferences'] = 'Pr�f�rences';
$lang['purchase_history_for'] = "Historique d\'achat pour %1\$s";
$lang['quote'] = 'Citation';
$lang['race'] = 'Course';
$lang['raid'] = 'Raid';
$lang['raids'] = 'Raids';
$lang['raid_id'] = 'ID de Raid';
$lang['raid_attendance_history'] = 'Raid Attendance History';
$lang['raids_lifetime'] = "Dur�e de vie (%1\$s - %2\$s)";
$lang['raids_x_days'] = "Les %1\$d Jours Derniers";
$lang['rank_distribution'] = 'Distribution par Rang';
$lang['recorded_raid_history'] = "Historique des raids enregistr� pour %1\$s";
$lang['reason'] = 'Raison';
$lang['registration_information'] = 'Information d\'Inscription';
$lang['result'] = 'R�sultat';
$lang['session_id'] = 'ID de Session';
$lang['settings'] = 'Options';
$lang['spent'] = 'D�pens�';
$lang['summary_dates'] = "R�sume du raid : %1\$s � %2\$s";
$lang['themes'] = 'Th�mes';
$lang['time'] = 'Temps';
$lang['total'] = 'Total';
$lang['total_earned'] = 'Total Gagn�';
$lang['total_items'] = 'Total d\'Objets';
$lang['total_raids'] = 'Total Raids';
$lang['total_spent'] = 'Total D�pens�';
$lang['transfer_member_history'] = 'Transferer l\'historique d\'un membre';
$lang['turn_ins'] = 'Restituer';
$lang['type'] = 'Type';
$lang['update'] = 'Mise � jour';
$lang['updated_by'] = 'Mis � jour Par';
$lang['user'] = 'Utilisateur';
$lang['username'] = 'Nom d\'Utilisateur';
$lang['value'] = 'Valeur';
$lang['view'] = 'Voir';
$lang['view_action'] = 'Voir l\'Action';
$lang['view_logs'] = 'Voir les logs';

// Page Foot Counts
$lang['listadj_footcount']               = "...  %1\$d ajustages(s) trouv�(s) / %2\$d par page";
$lang['listevents_footcount']            = "...  %1\$d �v�nement(s) trouv�(s) / %2\$d per page";
$lang['listiadj_footcount']              = "...  %1\$d ajustages(s) individuel(s) trouv�(s) / %2\$d par page";
$lang['listitems_footcount']             = "...  %1\$d item(s) unique(s) trouv�(s) / %2\$d per page";
$lang['listmembers_active_footcount']    = "...  %1\$d membre(s) actif(s) trouv�(s) / %2\$stout afficher</a>";
$lang['listmembers_compare_footcount']   = "... comparing %1\$d members";
$lang['listmembers_footcount']           = "...  %1\$d membres";
$lang['listnews_footcount']              = "...  %1\$d news trouv�e(s) / %2\$d per page";
$lang['listpurchased_footcount']         = "...  %1\$d objet(s) trouv�(s) / %2\$d per page";
$lang['listraids_footcount']             = "...  %1\$d raid(s) trouv�(s) / %2\$d per page";
$lang['stats_active_footcount']          = "...  %1\$d membre(s) actif(s) trouv�(s) / %2\$stout afficher</a>";
$lang['stats_footcount']                 = "...  %1\$d membre(s)trouv�(s) ";
$lang['viewevent_footcount']             = "...  %1\$d raids(s)trouv�(s) ";
$lang['viewitem_footcount']              = "...  %1\$d objets(s)trouv�(s) ";
$lang['viewmember_adjustment_footcount'] = "...  %1\$d ajustage(s) individuel(s)trouv�(s) ";
$lang['viewmember_item_footcount']       = "...  %1\$d objet(s) achet�(s) trouv�(s) / %2\$d per page";
$lang['viewmember_raid_footcount']       = "...  %1\$d participant(s) de raid trouv�(s) / %2\$d per page";
$lang['viewraid_attendees_footcount']    = "...  %1\$d participant(s)trouv�(s) ";
$lang['viewraid_drops_footcount']        = "...  %1\$d drop(s)trouv�(s) ";

// Submit Buttons
$lang['close_window'] = 'Fermer la fen�tre';
$lang['compare_members'] = 'Comparer les Membres';
$lang['create_news_summary'] = 'Cr�er le R�sum� des News';
$lang['login'] = 'Connection';
$lang['logout'] = 'D�connection';
$lang['log_add_data'] = 'Ajouter les Informations au Formulaire';
$lang['lost_password'] = 'Mot de passe Perdu';
$lang['no'] = 'Non';
$lang['proceed'] = 'Proc�der';
$lang['reset'] = 'Remise � z�ro';
$lang['set_admin_perms'] = 'Fixer les permissions d\'Administration';
$lang['submit'] = 'Envoyer';
$lang['upgrade'] = 'Mettre � jour';
$lang['yes'] = 'Oui';

// Form Element Descriptions
$lang['admin_login'] = 'Login Administrateur';
$lang['confirm_password'] = 'Confirmitaion du mot de passe';
$lang['confirm_password_note'] = 'Vous devez seulement confirmer votre nouveau mot de passe si vous l\'avez chang� plus haut';
$lang['current_password'] = 'Mot de passe Actuel';
$lang['current_password_note'] = 'Vous devez confirmer votre mot de passe actuel si vous souhaitez changer votre nom d\'utilisateur ou votre mot de passe';
$lang['email'] = 'Email';
$lang['email_address'] = 'Addresse Email';
$lang['ending_date'] = 'Date de fin';
$lang['from'] = 'De';
$lang['guild_tag'] = 'Tag de Guilde';
$lang['language'] = 'Langue';
$lang['new_password'] = 'Nouveau mot de passe';
$lang['new_password_note'] = 'Vous avez seulement besoin de fournir un nouveau mot de passe si vous voulez le changer';
$lang['password'] = 'Mot de passe';
$lang['remember_password'] = 'Se souvenir de moi (cookie)';
$lang['starting_date'] = 'Date de commencement';
$lang['style'] = 'Style';
$lang['to'] = 'A';
$lang['username'] = 'Nom d\'utilisateur';
$lang['users'] = 'Utilisateurs';

// Pagination
$lang['next_page'] = 'Page Suivante';
$lang['page'] = 'Page';
$lang['previous_page'] = 'Page Pr�c�dente';

// Permission Messages
$lang['noauth_default_title'] = 'Permission Refus�e';
$lang['noauth_u_event_list'] = 'Vous n\'avez pas la permission de lister les �v�nements.';
$lang['noauth_u_event_view'] = 'Vous n\'avez pas la permission de voir les �v�nements.';
$lang['noauth_u_item_list'] = 'Vous n\'avez pas la permission de lister les objets.';
$lang['noauth_u_item_view'] = 'Vous n\'avez pas la permission de voir les items.';
$lang['noauth_u_member_list'] = 'You do not have permission to view member standings.';
$lang['noauth_u_member_view'] = 'Vous n\'avez pas la permission de voir l\'historique des membres.';
$lang['noauth_u_raid_list'] = 'Vous n\'avez pas la permission de lister les raids.';
$lang['noauth_u_raid_view'] = 'Vous n\'avez pas la permission de voir les raids.';

// Submission Success Messages
$lang['add_itemvote_success'] = 'Votre vote sur l\'objet a �t� enregistr�.';
$lang['update_itemvote_success'] = 'Votre vote sur l\'objet a �t� mis � jour.';
$lang['update_settings_success'] = 'Les options d\'utilisateur ont �t� mises � jour.';

// Form Validation Errors
$lang['fv_alpha_attendees'] = 'Les noms des personnages d\'EverQuest contiennent uniquement des caract�res alphab�tiques.';
$lang['fv_already_registered_email'] = 'Cette adresse email est d�j� enregistr�e.';
$lang['fv_already_registered_username'] = 'Ce nom d\'utilisateur est d�j� enregistr�.';
$lang['fv_difference_transfer'] = 'Un transfert d\'historique doit �tre fait entre deux personnes diff�rentes.';
$lang['fv_difference_turnin'] = 'Une restitution doit �tre faite entre deux personnes diff�rentes.';
$lang['fv_invalid_email'] = 'L\'adresse e-mail n\'apparait pas commme une adresse valide.';
$lang['fv_match_password'] = 'Les champs mot de passe doivent correspondrent.';
$lang['fv_member_associated']  = "%1\$s est d�j� associ� avec un autre compte.";
$lang['fv_number'] = 'Doit �tre un nombre.';
$lang['fv_number_adjustment'] = 'La valeur du champ d\'ajustement doit �tre un nombre.';
$lang['fv_number_alimit'] = 'La limite du champ d\'ajustement doit �tre un nombre.';
$lang['fv_number_ilimit'] = 'La limite du champ des items doit �tre un nombre.';
$lang['fv_number_inactivepd'] = 'La p�riode d\'inactivit� doit �tre un nombre.';
$lang['fv_number_pilimit'] = 'La limite des items achet�s doit �tre un nombre.';
$lang['fv_number_rlimit'] = 'La limite des raids doit �tre un nombre.';
$lang['fv_number_value'] = 'La valeur du champ doit �tre un nombre.';
$lang['fv_number_vote'] = 'Le champ du vote doit �tre un nombre.';
$lang['fv_range_day'] = 'Le champ du jour doit �tre un nombre entre 1 et 31.';
$lang['fv_range_hour'] = 'Le champ de l\'heure doit �tre un nombre entre 0 et 23.';
$lang['fv_range_minute'] = 'Le champs des minutes doit �tre un nombre entre 0 et 59.';
$lang['fv_range_month'] = 'Le champs des mois doit �tre un nombre entre 1 et 12.';
$lang['fv_range_second'] = 'Le second champs doit �tre un entier entre 0 et 59.';
$lang['fv_range_year'] = 'Le champ de l\'ann�e doit �tre un entier entier d\'une valeur minimale de 1998.';
$lang['fv_required'] = 'Champs requis.';
$lang['fv_required_acro'] = 'Le champ de l\'acronyme de la guilde est requis.';
$lang['fv_required_adjustment'] = 'La valeur du champ d\'ajustement est requise.';
$lang['fv_required_attendees'] = 'Il doit y avoir au moins un participant dans ce raid.';
$lang['fv_required_buyer'] = 'Un acheteur doit �tre s�lectionn�.';
$lang['fv_required_buyers'] = 'Au moins un acheteur doit �tre s�lectionn�.';
$lang['fv_required_email'] = 'L\'adresse email est requise.';
$lang['fv_required_event_name'] = 'Un �v�nement doit �tre s�lectionn�.';
$lang['fv_required_guildtag'] = 'Le tag de la guilde est requis.';
$lang['fv_required_headline'] = 'Le titre principal est requis.';
$lang['fv_required_inactivepd'] = 'Si le champ "cacher les membres inactifs" est sur "Oui", une valeur pour la p�riode d\'inactivit� doit aussi �tre d�finie.';
$lang['fv_required_item_name'] = 'Le nom de l\'objet doit �tre ajout� ou alors s�lectionn� parmis les objets existants.';
$lang['fv_required_member'] = 'Un membre doit �tre s�lectionn�.';
$lang['fv_required_members'] = 'Au moins un membre doit �tre s�lectionn�.';
$lang['fv_required_message'] = 'Le champs message est requis.';
$lang['fv_required_name'] = 'Le champs nom est requis.';
$lang['fv_required_password'] = 'Le champs mot de passe est requis.';
$lang['fv_required_raidid'] = 'Un raid doit �tre s�lectionn�.';
$lang['fv_required_user'] = 'Le nom d\'utilisateur est requis.';
$lang['fv_required_value'] = 'Le champ valeur est requis.';
$lang['fv_required_vote'] = 'Le champ vote est requis.';

// Miscellaneous
$lang['added'] = 'Ajout�';
$lang['additem_raidid_note'] = "Les raids plus vieux que 2 semaines ne sont pas affich� / %1\$safficher tout</a>";
$lang['additem_raidid_showall_note'] = 'Affiche tous les raids';
$lang['addraid_datetime_note'] = 'Si vous consultez un log, la date et le temps seront trouv�s automatiquement.';
$lang['addraid_value_note'] = 'pour un bonus unique. Si vous laissez vide, les valeurs seront celles des pr�-r�glages.';
$lang['add_items_from_raid'] = 'Ajouter des items de ce raid';
$lang['deleted'] = 'Supprim�';
$lang['done'] = 'Pr�t';
$lang['enter_new'] = 'Entrez un nouveau';
$lang['error'] = 'Erreur';
$lang['head_admin'] = 'Admin pricipal';
$lang['hold_ctrl_note'] = 'Maintenir CTRL pour des s�lections multiples.';
$lang['list'] = 'Lister';
$lang['list_groupadj'] = 'Lister les Ajustages de Groupe';
$lang['list_events'] = 'Lister les Ev�nements';
$lang['list_indivadj'] = 'Lister les Ajustages Individuels';
$lang['list_items'] = 'Lister les Objets';
$lang['list_members'] = 'Lister les Membres';
$lang['list_news'] = 'Lister les News';
$lang['list_raids'] = 'Lister les Raids';
$lang['may_be_negative_note'] = 'peut �tre negatif';
$lang['not_available'] = 'Pas disponible';
$lang['no_news'] = 'Pas de nouvelles entr�s trouv�es.';
$lang['of_raids'] = "%1\$d%% des raids";
$lang['or'] = 'OU';
$lang['powered_by'] = 'Powered by';
$lang['preview'] = 'Visionner';
$lang['required_field_note'] = 'Les champs marqu�s par * sont requis.';
$lang['select_1ofx_members'] = "S�lection d\'un 1 sur %1\$d membres...";
$lang['select_existing'] = 'S�lection existante';
$lang['select_version'] = 'S�lectionnez la version d\'EQdkp que vous allez mettre � jour';
$lang['success'] = 'R�ussite';
$lang['s_admin_note'] = 'Ces champs ne sont pas modifiables par les utilisateurs.';
$lang['transfer_member_history_description'] = 'Ceci va transferer toute l\'historique d\'un membre (raids, objets, ajustages) � un autre.';
$lang['updated'] = 'Mis � jour';
$lang['upgrade_complete'] = 'Votre installation d\'EQDKP � �t� mis � jour avec succ�s.<br /><br /><b class="negative">Pour plus de s�curit�, supprimez ce fichier !</b>';

// Settings
$lang['account_settings'] = 'Options de compte';
$lang['adjustments_per_page'] = 'Ajustages par Page';
$lang['basic'] = 'Basique';
$lang['events_per_page'] = 'Ev�nements par Page';
$lang['items_per_page'] = 'Objets par Page';
$lang['news_per_page'] = 'News par Page';
$lang['raids_per_page'] = 'Raids par Page';
$lang['associated_members'] = 'Membres Associ�s';
$lang['guild_members'] = 'Membre(s) de Guilde';
$lang['default_locale'] = 'Local D�faut';


// Error messages
$lang['error_account_inactive'] = 'Votre compte est inactif.';
$lang['error_already_activated'] = 'Ce compte a d�j� �t� activ�.';
$lang['error_invalid_email'] = 'Une adresse e-mail valide est requise.';
$lang['error_invalid_event_provided'] = 'Un ID d\'�v�nement valide est requis.';
$lang['error_invalid_item_provided'] = 'Un ID d\'objet valide est requis.';
$lang['error_invalid_key'] = 'Vous avez fourni une clef d\'activation invalide.';
$lang['error_invalid_name_provided'] = 'Un nom de membre valide est requis.';
$lang['error_invalid_news_provided'] = 'Un ID de news valide est requis.';
$lang['error_invalid_raid_provided'] = 'Un ID de raid valide est requis.';
$lang['error_user_not_found'] = 'Un nom d\'utilisateur valide n\'a pas �t� fourni.';
$lang['incorrect_password'] = 'Mot de passe incorrect.';
$lang['invalid_login'] = 'Vous avez fourni un nom d\'utilisateur incorrect ou invalide ou un mauvais mot de passe.';
$lang['not_admin'] = 'Vous n\'�tes pas administrateur.';

// Registration
$lang['account_activated_admin']   = 'Ce compte a �t� activ�. Un email a �t� envoy� � l\'utilisateur pour l\'avertir de ces changements.The account has been activated.';
$lang['account_activated_user']    = "Votre compte a �t� activ� et vous pouvez maintenant vous %1\$sconnecter%2\$s.";
$lang['password_sent'] = 'Votre nouveau mot de passe de compte vous a �t� envoy� par email.';
$lang['register_activation_self']  = "Votre compte a �t� cr��, mais avant de pouvoir l\'utiliser vous devez l\'activer.<br /><br />Un email a �t� envoy� � %1\$s avec les informations pour activer votre compte.";
$lang['register_activation_admin'] = "Votre compte a �t� cr��, mais avant de pouvoir l\'utiliser un administrateur doit l\'activer.<br /><br />Un email a �t� envoy� � %1\$s avec plus d\'informations.";
$lang['register_activation_none']  = "Votre compte a �t� cr�� et vous pouvez maintenant vous %1\$sconnecter%2\$s.<br /><br />Un email a �t� envoy� � %3\$s avec plus d\'informations.";
?>
