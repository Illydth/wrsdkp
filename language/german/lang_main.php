<?php
/******************************
* EQdkp
* Copyright 2002-2003
* Licensed under the GNU GPL.  See COPYING for full terms.
* ------------------
* lang_main.php
* begin: Wed December 18 2002
*
* $Id: lang_main.php 46 2007-06-19 07:29:11Z tsigo $
*
* german translation by bom
******************************/

if ( !defined('EQDKP_INC') )
{
     die('Do not access this file directly.');
}

// %1\$<type> prevents a possible error in strings caused
//      by another language re-ordering the variables
// $s is a string, $d is an integer, $f is a float

$lang['ENCODING'] = 'iso-8859-1';
$lang['XML_LANG'] = 'de';

// Titles
$lang['admin_title_prefix']   = "%1\$s %2\$s Admin";
$lang['listadj_title']        = 'Gruppen-Korrekturliste';
$lang['listevents_title']     = 'Ereignis-Werte';
$lang['listiadj_title']       = 'Individuelle Korrekturliste';
$lang['listitems_title']      = 'Item-Werte';
$lang['listnews_title']       = 'News Eintr�ge';
$lang['listmembers_title']    = 'Mitglieder Stati';
$lang['listpurchased_title']  = 'Item-Historie';
$lang['listraids_title']      = 'Raidliste';
$lang['login_title']          = 'Login';
$lang['message_title']        = 'EQdkp: Nachricht';
$lang['register_title']       = 'Registrieren';
$lang['settings_title']       = 'Account Einstellungen';
$lang['stats_title']          = "%1\$s Statistiken";
$lang['summary_title']        = 'News Zusammenfassung';
$lang['title_prefix']         = "%1\$s %2\$s";
$lang['viewevent_title']      = "Gespeicherte Raid Historie f�r %1\$s sehen";
$lang['viewitem_title']       = "Kauf-Historie f�r %1\$s sehen";
$lang['viewmember_title']     = "Historie f�r %1\$s";
$lang['viewraid_title']       = 'Raid Zusammenfassung';

// Main Menu
$lang['menu_admin_panel'] = 'Administrationsbereich';
$lang['menu_events'] = 'Ereignisse';
$lang['menu_itemhist'] = 'Item-Historie';
$lang['menu_itemval'] = 'Item-Preise';
$lang['menu_news'] = 'News';
$lang['menu_raids'] = 'Raids';
$lang['menu_register'] = 'Registrieren';
$lang['menu_settings'] = 'Einstellungen';
$lang['menu_standings'] = 'Punktestand';
$lang['menu_stats'] = 'Statistik';
$lang['menu_summary'] = 'Zusammenfassung';

// Column Headers
$lang['account'] = 'Account';
$lang['action'] = 'Aktion';
$lang['active'] = 'Aktiv';
$lang['add'] = 'Zuf�gen';
$lang['added_by'] = 'Zugef�gt von';
$lang['adjustment'] = 'Korrektur';
$lang['administration'] = 'Administration';
$lang['administrative_options'] = 'Administrative Optionen';
$lang['admin_index'] = 'Admin Index';
$lang['attendance_by_event'] = 'Beteiligung bei Ereignis';
$lang['attended'] = 'teilgenommen';
$lang['attendees'] = 'Teilnehmer';
$lang['average'] = 'Durchschnitt';
$lang['backup_database'] = 'Datenbank-Backup (nicht mit anderen �nderungen in dieser Sitzung kombinieren)';
$lang['buyer'] = 'K�ufer';
$lang['buyers'] = 'K�ufer';
$lang['class'] = 'Klasse';
$lang['armor'] = 'R�stung';
$lang['type'] = 'R�stung';
$lang['class_distribution'] = 'Klassen-Verteilung';
$lang['class_summary'] = "Klassen-Zusammenfassung: %1\$s to %2\$s";
$lang['configuration'] = 'Konfiguration';
$lang['current'] = 'Jetzt';
$lang['date'] = 'Datum';
$lang['delete'] = 'L�schen';
$lang['delete_confirmation'] = 'L�schungsbest�tigung';
$lang['dkp_value'] = "%1\$s Wert";
$lang['drops'] = 'Drops';
$lang['earned'] = 'Bekommen';
$lang['enter_dates'] = 'Daten eingeben';
$lang['eqdkp_index'] = 'EQdkp Index';
$lang['eqdkp_upgrade'] = 'EQdkp Upgrade';
$lang['event'] = 'Ereignis';
$lang['events'] = 'Ereignisse';
$lang['filter'] = 'Filter';
$lang['first'] = 'Erster';
$lang['rank'] = 'Rang';
$lang['general_admin'] = 'Allgemeine Administration';
$lang['get_new_password'] = 'Neues Pa�wort holen';
$lang['group_adj'] = 'Gruppen-Kor.';
$lang['group_adjustments'] = 'Gruppen Korrekturen';
$lang['individual_adjustments'] = 'Individuelle Korrekturen';
$lang['individual_adjustment_history'] = 'Individuelle Korrektur-Historie';
$lang['indiv_adj'] = 'Indiv. Kor.';
$lang['ip_address'] = 'IP-Addresse';
$lang['item'] = 'Item';
$lang['items'] = 'Items';
$lang['item_purchase_history'] = 'Item-Kauf-Historie';
$lang['last'] = 'Letzter';
$lang['lastloot'] = 'Letzter Loot';
$lang['lastraid'] = 'Letzter Raid';
$lang['last_visit'] = 'Letzter Besuch';
$lang['level'] = 'Level';
$lang['log_date_time'] = 'Datum/Zeit von diesem Log';
$lang['loot_factor'] = 'Loot Faktor';
$lang['loots'] = 'Loots';
$lang['manage'] = 'Verwalten';
$lang['member'] = 'Mitglied';
$lang['members'] = 'Mitglieder';
$lang['members_present_at'] = "Mitglieder anwesend am %1\$s um %2\$s";
$lang['miscellaneous'] = 'Diverses';
$lang['name'] = 'Name';
$lang['news'] = 'News';
$lang['note'] = 'Notiz';
$lang['online'] = 'Online';
$lang['options'] = 'Optionen';
$lang['paste_log'] = 'F�ge ein Log unten ein';
$lang['percent'] = 'Prozent';
$lang['permissions'] = 'Berechtigungen';
$lang['per_day'] = 'Pro Tag';
$lang['per_raid'] = 'Pro Raid';
$lang['pct_earned_lost_to'] = 'Verdientes verringert durch';
$lang['preferences'] = 'Voreinstellungen';
$lang['purchase_history_for'] = "Kauf-Historie f�r %1\$s";
$lang['quote'] = 'Angebot';
$lang['race'] = 'Rasse';
$lang['raid'] = 'Raid';
$lang['raids'] = 'Raids';
$lang['raid_id'] = 'Raid ID';
$lang['raid_attendance_history'] = 'Raid-Beteiligungs-Historie';
$lang['raids_lifetime'] = "Lebensdauer (%1\$s - %2\$s)";
$lang['raids_x_days'] = "Letzte %1\$d Tage";
$lang['rank_distribution'] = 'Rang-Aufteilung';
$lang['recorded_raid_history'] = "Gespeicherte Raid-Historie f�r %1\$s";
$lang['reason'] = 'Grund';
$lang['registration_information'] = 'Registrations Information';
$lang['result'] = 'Ergebnis';
$lang['session_id'] = 'Session ID';
$lang['settings'] = 'Einstellungen';
$lang['spent'] = 'Ausgegeben';
$lang['summary_dates'] = "Raid Zusammenfassung: %1\$s bis %2\$s";
$lang['themes'] = 'Themes';
$lang['time'] = 'Zeit';
$lang['total'] = 'Gesamt';
$lang['total_earned'] = 'Gesamt verdient';
$lang['total_items'] = 'Gesamte Items';
$lang['total_raids'] = 'Gesamte Raids';
$lang['total_spent'] = 'Gesamt ausgegeben';
$lang['transfer_member_history'] = 'Transfer Member History';
$lang['turn_ins'] = 'Turn-ins';
$lang['type'] = 'Typ';
$lang['update'] = 'Aktualisieren';
$lang['updated_by'] = 'aktualisiert von';
$lang['user'] = 'User';
$lang['username'] = 'Username';
$lang['value'] = 'Wert';
$lang['view'] = 'Ansehen';
$lang['view_action'] = 'Aktion ansehen';
$lang['view_logs'] = 'Logs ansehen';

// Page Foot Counts
$lang['listadj_footcount']               = "... %1\$d Korrektur(en) gefunden / %2\$d pro Seite";
$lang['listevents_footcount']            = "... %1\$d Ereignis(se) gefunden / %2\$d pro Seite";
$lang['listiadj_footcount']              = "... %1\$d individuelle Korrektur(en) gefunden / %2\$d pro Seite";
$lang['listitems_footcount']             = "... %1\$d einmalige(s) Item(s) gefunden / %2\$d pro Seite";
$lang['listmembers_active_footcount']    = "... %1\$d aktive(s) Mitglied(er) gefunden / %2\$sZeige alle</a>";
$lang['listmembers_compare_footcount']   = "... vergleiche %1\$d Mitglieder";
$lang['listmembers_footcount']           = "... %1\$d Mitglied(er) gefunden";
$lang['listnews_footcount']              = "... %1\$d Newseintr�ge gefunden / %2\$d pro Seite";
$lang['listpurchased_footcount']         = "... %1\$d Item(s) gefunden / %2\$d pro Seite";
$lang['listraids_footcount']             = "... %1\$d Raid(s) gefunden / %2\$d pro Seite";
$lang['stats_active_footcount']          = "... %1\$d Aktive(s) Mitglied(er) / %2\$sZeige alle</a>";
$lang['stats_footcount']                 = "... %1\$d Mitglied(er)";
$lang['viewevent_footcount']             = "... %1\$d Raid(s) gefunden";
$lang['viewitem_footcount']              = "... %1\$d Item(s) gefunden";
$lang['viewmember_adjustment_footcount'] = "... %1\$d individuelle Korrektur(en) gefunden";
$lang['viewmember_item_footcount']       = "... %1\$d gekaufte Item(s) gefunden / %2\$d pro Seite";
$lang['viewmember_raid_footcount']       = "... %1\$d teilgenommene(n) Raid(s) gefunden / %2\$d pro Seite";
$lang['viewraid_attendees_footcount']    = "... %1\$d Teilnehmer gefunden";
$lang['viewraid_drops_footcount']        = "... %1\$d Drop(s) gefunden";

// Submit Buttons
$lang['close_window'] = 'Fenster schlie�en';
$lang['compare_members'] = 'Vergleiche Mitglieder';
$lang['create_news_summary'] = 'Erstelle Raid-Zusammenfassung';
$lang['login'] = 'Login';
$lang['logout'] = 'Logout';
$lang['log_add_data'] = 'Daten zum Formular zuf�gen';
$lang['lost_password'] = 'Passwort verloren';
$lang['no'] = 'Nein';
$lang['proceed'] = 'Fortfahren';
$lang['reset'] = 'Zur�cksetzen';
$lang['set_admin_perms'] = 'Administrative Berechtigungen setzen';
$lang['submit'] = 'Abschicken';
$lang['upgrade'] = 'Upgrade';
$lang['yes'] = 'Ja';

// Form Element Descriptions
$lang['admin_login'] = 'Administrator Login';
$lang['confirm_password'] = 'Pa�wort best�tigen';
$lang['confirm_password_note'] = 'Du mu�t Dein Pa�wort nur best�tigen, wenn Du es oben ge�ndert hast';
$lang['current_password'] = 'Jetziges Password';
$lang['current_password_note'] = 'Du mu�t Dein jetziges Pa�wort nur best�tigen, wenn Du Benutzername oder Pa�wort �ndern willst';
$lang['email'] = 'Email';
$lang['email_address'] = 'Email Addresse';
$lang['ending_date'] = 'End-Datum';
$lang['from'] = 'Von';
$lang['guild_tag'] = 'Gildenbezeichnung';
$lang['language'] = 'Sprache';
$lang['new_password'] = 'Neues Pa�wort';
$lang['new_password_note'] = 'Du brauchst nur ein neues Pa�wort eingeben, wenn Du es �ndern willst';
$lang['password'] = 'Pa�wort';
$lang['remember_password'] = 'Login merken (Cookie)';
$lang['starting_date'] = 'Startdatum';
$lang['style'] = 'Stil';
$lang['to'] = 'Zu';
$lang['username'] = 'Benutzername';
$lang['users'] = 'Benutzer';

// Pagination
$lang['next_page'] = 'N�chste Seite';
$lang['page'] = 'Seite';
$lang['previous_page'] = 'Vorige Seite';

// Permission Messages
$lang['noauth_default_title'] = 'Zugriff verweigert';
$lang['noauth_u_event_list'] = 'Du hast keine Berechtigung Ereignisse aufzulisten.';
$lang['noauth_u_event_view'] = 'Du hast keine Berechtigung Ereignisse zu sehen.';
$lang['noauth_u_item_list'] = 'Du hast keine Berechtigung Items aufzulisten.';
$lang['noauth_u_item_view'] = 'Du hast keine Berechtigung Items zu sehen.';
$lang['noauth_u_member_list'] = 'Du hast keine Berechtigung Mitgliederst�nde zu sehen.';
$lang['noauth_u_member_view'] = 'Du hast keine Berechtigung Historie der Mitglieder zu sehen.';
$lang['noauth_u_raid_list'] = 'Du hast keine Berechtigung Raids aufzulisten.';
$lang['noauth_u_raid_view'] = 'Du hast keine Berechtigung Raids zu sehen.';

// Submission Success Messages
$lang['add_itemvote_success'] = 'Deine Abstimmung zu dem Item wurde gespeichert.';
$lang['update_itemvote_success'] = 'Deine Abstimmung zu dem Item wurde aktualisiert.';
$lang['update_settings_success'] = 'Die Benutzereinstellungen wurden aktualisiert.';

// Form Validation Errors
$lang['fv_alpha_attendees'] = 'Char\' Namen in EverQuest beinhalten nur alphabetische Zeichen.';
$lang['fv_already_registered_email'] = 'Diese Mailadresse ist bereits registriert.';
$lang['fv_already_registered_username'] = 'Dieser Benutzername ist bereits registriert.';
$lang['fv_difference_transfer'] = 'Ein Historientransfer geht nur zwischen zwei unterschiedlichen Leuten.';
$lang['fv_difference_turnin'] = 'Ein turn-in geht nur zwischen zwei unterschiedlichen Leuten.';
$lang['fv_invalid_email'] = ' Die Mailadresse scheint nicht g�ltig zu sein.';
$lang['fv_match_password'] = 'Die Pa�wortfelder m�ssen �bereinstimmen.';
$lang['fv_member_associated']  = "%1\$s geh�rt bereits zu einem anderen Benutzeraccount.";
$lang['fv_number'] = 'Mu� eine Zahl sein.';
$lang['fv_number_adjustment'] = 'Das Korrekturwert-Feld mu� eine Zahl sein.';
$lang['fv_number_alimit'] = 'Das Korrekturgrenze-Feld mu� eine Zahl sein.';
$lang['fv_number_ilimit'] = 'Das Itemgrenze-Feld mu� eine Zahl sein.';
$lang['fv_number_inactivepd'] = 'Die inactive period  mu� eine Zahl sein.';
$lang['fv_number_pilimit'] = 'Die gekaufte-Items-Grenze mu� eine Zahl sein.';
$lang['fv_number_rlimit'] = 'Die Raidgrenze mu� eine Zahl sein.';
$lang['fv_number_value'] = 'Das Werte-Feld mu� eine Zahl sein.';
$lang['fv_number_vote'] = 'Das Abstimmungs-Feld mu� eine Zahl sein.';
$lang['fv_range_day'] = 'Das Tag-Feld mu� eine Zahl zwischen 1 und 31 sein.';
$lang['fv_range_hour'] = 'Das Stunden-Feld mu� eine Zahl zwischen 0 und 23 sein.';
$lang['fv_range_minute'] = 'Das Minuten-Feld mu� eine Zahl zwischen 0 und 59 sein.';
$lang['fv_range_month'] = 'Das Monats-Feld mu� eine Zahl zwischen 1 und 12 sein.';
$lang['fv_range_second'] = 'Das zweite Feld mu� eine Zahl zwischen 0 und 59 sein.';
$lang['fv_range_year'] = 'Das Jahr-Feld mindestens eine Zahl ab 1998 sein.';
$lang['fv_required'] = 'Mu�-Feld';
$lang['fv_required_acro'] = 'Das Gildenkurtzwort-Feld ist notwendig.';
$lang['fv_required_adjustment'] = 'Das Korrekturwert-Feld ist notwendig.';
$lang['fv_required_attendees'] = 'Es mu� mindestens ein Teilnehmer im Raid sein.';
$lang['fv_required_buyer'] = 'Ein K�ufer mu� ausgew�hlt sein.';
$lang['fv_required_buyers'] = 'Mindestens ein K�ufer mu� ausgew�hlt sein.';
$lang['fv_required_email'] = 'Das Mailadressen-Feld ist notwendig.';
$lang['fv_required_event_name'] = 'Ein Ereignis mu� ausgew�hlt sein.';
$lang['fv_required_guildtag'] = 'Das Gildenbezeichnungs-Feld ist notwendig.';
$lang['fv_required_headline'] = 'Das Kopfzeilen-Feld ist notwendig.';
$lang['fv_required_inactivepd'] = 'Wenn inaktive Mitglieder verstecken auf Ja gesetzt ist, mu� auch ein Wert f�r die inactive Zeit angegeben werden.';
$lang['fv_required_item_name'] = 'Das Itemname-Feld mu� ausgef�llt sein, oder ein vorhandenes Item mu� ausgew�hlt sein.';
$lang['fv_required_member'] = 'Ein Mitglied mu� ausgew�hlt sein.';
$lang['fv_required_members'] = 'Mindestens ein Mitglied mu� ausgew�hlt sein.';
$lang['fv_required_message'] = 'Das Nachrichten-Feld ist notwendig.';
$lang['fv_required_name'] = 'Das Namens-Feld ist notwendig.';
$lang['fv_required_password'] = 'Das Pa�wort-Feld ist notwendig.';
$lang['fv_required_raidid'] = 'Ein Raid mu� ausgew�hlt sein.';
$lang['fv_required_user'] = 'Das Benutzernamen-Feld ist notwendig.';
$lang['fv_required_value'] = 'Das Werte-Feld ist notwendig.';
$lang['fv_required_vote'] = 'Das Abstimmungs-Feld ist notwendig.';

// Miscellaneous
$lang['added'] = 'Zugef�gt';
$lang['additem_raidid_note'] = "Nur Raids neuer als zwei Wochen werden angezeigt / %1\$sZeige alle</a>";
$lang['additem_raidid_showall_note'] = 'Alle Raids anzeigen';
$lang['addraid_datetime_note'] = 'Wenn Du ein Log analysierst, wird Datum und Zeit automatisch gefunden.';
$lang['addraid_value_note'] = 'f�r einen einmaligen Bonus; wenn es leer bleibt, wird der voreingestellte Wert f�r das Ereignis genommen';
$lang['add_items_from_raid'] = 'F�ge Items von diesem Raid zu';
$lang['deleted'] = 'Gel�scht';
$lang['done'] = 'Fertig';
$lang['enter_new'] = 'Neu eingeben';
$lang['error'] = 'Fehler';
$lang['head_admin'] = 'Head Admin';
$lang['hold_ctrl_note'] = 'STRG gedr�ckt halten, um mehrere auszuw�hlen';
$lang['list'] = 'Anzeigen';
$lang['list_groupadj'] = 'Liste der Gruppenkorrekturen';
$lang['list_events'] = 'Liste der Ereignisse';
$lang['list_indivadj'] = 'Liste der individuellen Korrekturen';
$lang['list_items'] = 'Liste der Items';
$lang['list_members'] = 'Liste der Mitglieder';
$lang['list_news'] = 'Liste der News';
$lang['list_raids'] = 'Liste der Raids';
$lang['may_be_negative_note'] = 'kann negativ sein';
$lang['not_available'] = 'Nicht verf�gbar';
$lang['no_news'] = 'Keine Newseintr�ge gefunden.';
$lang['of_raids'] = "%1\$d%% von Raids";
$lang['or'] = 'Oder';
$lang['powered_by'] = 'Powered by';
$lang['preview'] = 'Vorschau';
$lang['required_field_note'] = 'Items mit * gekennzeichnet sind Mu�-Felder.';
$lang['select_1ofx_members'] = "W�hle 1 von %1\$d Mitgliedern...";
$lang['select_existing'] = 'W�hle Vorhandene';
$lang['select_version'] = 'W�hle die EQdkp-Version von der Du aktualisierst';
$lang['success'] = 'Erfolgreich';
$lang['s_admin_note'] = 'Diese Felder k�nnen nicht von den Benutzern ver�ndert werden.';
$lang['transfer_member_history_description'] = 'Das verschiebt die ganze Historie (Raids, Items, Korrekturen) eines Mitglieds zu einem anderen.';
$lang['updated'] = 'Aktualisiert';
$lang['upgrade_complete'] = 'Deine EQdkp-Installation wurde erfolgreich aktualisiert.<br /><br /><b class="negative">L�sche diese Datei aus Sicherheitsgr�nden!</b>';

// Settings
$lang['account_settings'] = 'Account Einstellungen';
$lang['adjustments_per_page'] = 'Korrekturen pro Seite';
$lang['basic'] = 'Grundeinstellung';
$lang['events_per_page'] = 'Ereignisse pro Seite';
$lang['items_per_page'] = 'Items pro Seite';
$lang['news_per_page'] = 'Newseintr�ge pro Seite';
$lang['raids_per_page'] = 'Raids pro Seite';
$lang['associated_members'] = 'Verkn�pfte Mitglieder';
$lang['guild_members'] = 'Gildenmitglied(er)';
$lang['default_locale'] = 'Standard Gebietsschema';


// Error messages
$lang['error_account_inactive'] = 'Dein Account ist inaktiv.';
$lang['error_already_activated'] = 'Der Account ist bereits aktiviert.';
$lang['error_invalid_email'] = 'Es wurde keine g�ltige Mailadresse angegeben.';
$lang['error_invalid_event_provided'] = 'Es wurde keine g�ltige Ereignis-ID angegeben.';
$lang['error_invalid_item_provided'] = 'Es wurde keine g�ltige Item-ID angegeben.';
$lang['error_invalid_key'] = 'Du hast einen ung�ltigen Aktivierungs-Key angegeben.';
$lang['error_invalid_name_provided'] = 'Es wurde kein g�ltiger Mitgliedername angegeben.';
$lang['error_invalid_news_provided'] = 'Es wurde keine g�ltige News-ID angegeben.';
$lang['error_invalid_raid_provided'] = 'Es wurde keine g�ltige Raid-ID angegeben.';
$lang['error_user_not_found'] = 'Es wurde kein g�ltiger Benutzername angegeben';
$lang['incorrect_password'] = 'Falsches Pa�wort';
$lang['invalid_login'] = 'Du hast einen ung�ltigen Benutzernamen oder Pa�wort angegeben';
$lang['not_admin'] = 'Du bist kein Administrator';

// Registration
$lang['account_activated_admin']   = 'Der Account wurde aktiviert. Dem Benutzer wurde eine Informationsmail �ber die �nderungen geschickt.';
$lang['account_activated_user']    = "Dein Account wurde aktiviert und Du kannst Dich nun %1\$seinloggen%2\$s.";
$lang['password_sent'] = 'Dein neues Accountpa�wort wurde Dir zugemailt.';
$lang['register_activation_self']  = "Dein Account wurde erstellt. Bevor Du ihn nutzen kannst, mu� er von Dir aktiviert werden.<br /><br />Eine Mail wurde an %1\$s gesendet mit den Informationen zur Aktivierung.";
$lang['register_activation_admin'] = "Dein Account wurde erstellt. Bevor Du ihn nutzen kannst, mu� er von einem Administrator aktiviert werden.<br /><br />Eine Mail mit mehr Informationen wurde an %1\$s gesendet.";
$lang['register_activation_none']  = "Dein Account wurde erstellt und Du kannst Dich nun %1\$seinloggen%2\$s.<br /><br />Eine Mail mit mehr Informationen wurde an %3\$s gesendet.";

?>
