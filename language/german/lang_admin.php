<?php
/******************************
* EQdkp
* Copyright 2002-2003
* Licensed under the GNU GPL.  See COPYING for full terms.
* ------------------
* lang_admin.php
* Began: Fri January 3 2003
*
* $Id: lang_admin.php 46 2007-06-19 07:29:11Z tsigo $
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

// Titles
$lang['addadj_title']         = 'Gruppenkorrektur zuf�gen';
$lang['addevent_title']       = 'Ereignis zuf�gen';
$lang['addiadj_title']        = 'Individuelle Korrektur zuf�gen';
$lang['additem_title']        = 'Itemkauf zuf�gen';
$lang['addmember_title']      = 'Gildenmitglied zuf�gen';
$lang['addnews_title']        = 'Newsbeitrag zuf�gen';
$lang['addraid_title']        = 'Raid zuf�gen';
$lang['addturnin_title']      = "Turn-in - Schritt %1\$d zuf�gen";
$lang['admin_index_title']    = 'EQdkp Administration';
$lang['config_title']         = 'Script Konfiguration';
$lang['manage_members_title'] = 'Gildenmitglieder verwalten';
$lang['manage_users_title']   = 'Benutzer-Accounts und Berechtigungen';
$lang['parselog_title']       = 'Log File ansehen';
$lang['plugins_title']        = 'Plugins verwalten';
$lang['styles_title']         = 'Styles verwalten';
$lang['viewlogs_title']       = 'Log-Betrachter';

// Page Foot Counts
$lang['listusers_footcount']             = "... %1\$d Benutzer / %2\$d pro Seite gefunden";
$lang['manage_members_footcount']        = "... %1\$d Mitglied(er) gefunden";
$lang['online_footcount']                = "... %1\$d Benutzer sind online";
$lang['viewlogs_footcount']              = "... %1\$d Log(s) / %2\$d pro Seite gefunden";

// Submit Buttons
$lang['add_adjustment'] = 'Korrektur zuf�gen';
$lang['add_account'] = 'Account zuf�gen';
$lang['add_event'] = 'Ereignis zuf�gen';
$lang['add_item'] = 'Item zuf�gen';
$lang['add_member'] = 'Mitglied zuf�gen';
$lang['add_news'] = 'News zuf�gen';
$lang['add_raid'] = 'Raid zuf�gen';
$lang['add_style'] = 'Style zuf�gen';
$lang['add_turnin'] = 'Turn-in zuf�gen';
$lang['delete_adjustment'] = 'Korrektur l�schen';
$lang['delete_event'] = 'Ereignis l�schen';
$lang['delete_item'] = 'Item l�schen';
$lang['delete_member'] = 'Mitglied l�schen';
$lang['delete_news'] = 'News l�schen';
$lang['delete_raid'] = 'Raid l�schen';
$lang['delete_selected_members'] = 'Ausgew�hlte(s) Mitglied(er) l�schen';
$lang['delete_style'] = 'Style l�schen';
$lang['mass_delete'] = 'Massenl�schung';
$lang['mass_update'] = 'Massenupdate';
$lang['parse_log'] = 'Log ansehen';
$lang['search_existing'] = 'Durchsuchen';
$lang['select'] = 'Ausw�hlen';
$lang['transfer_history'] = 'Transfer Historie';
$lang['update_adjustment'] = 'Korrektur aktualisieren';
$lang['update_event'] = 'Ereignis aktualisieren';
$lang['update_item'] = 'Item aktualisieren';
$lang['update_member'] = 'Mitglied aktualisieren';
$lang['update_news'] = 'News aktualisieren';
$lang['update_raid'] = 'Raid aktualisieren';
$lang['update_style'] = 'Style aktualisieren';

// Misc
$lang['account_enabled'] = 'Account aktiviert';
$lang['adjustment_value'] = 'Korrekturwert';
$lang['adjustment_value_note'] = 'kann negativ sein';
$lang['code'] = 'Code';
$lang['contact'] = 'Kontakt';
$lang['create'] = 'Erstellen';
$lang['found_members'] = "%1\$d Zeilen analysiert, %2\$d Mitglieder gefunden";
$lang['headline'] = 'Kopfzeile';
$lang['hide'] = 'Verstecken?';
$lang['install'] = 'Installieren';
$lang['item_search'] = 'Itemsuche';
$lang['list_prefix'] = 'Prefix anzeigen';
$lang['list_suffix'] = 'Suffix anzeigen';
$lang['logs'] = 'Logs';
$lang['log_find_all'] = 'Finde alle (incl. Anonyme)';
$lang['manage_members'] = 'Mitglieder verwalten';
$lang['manage_plugins'] = 'Plugins verwalten';
$lang['manage_users'] = 'Benutzer verwalten';
$lang['mass_update_note'] = 'Wenn Du die �nderungen zu allen ausgew�hlten Accounts durchf�hren willst, benutze diese Einstellungen und klick auf "Massenupdate".
                            Um die ausgew�hlten Accounts zu l�schen, klicke auf "Massenl�schung".';
$lang['members'] = 'Mitglieder';
$lang['member_rank'] = 'Mitgliedsrang';
$lang['message_body'] = 'Nachrichtentext';
$lang['results'] = "%1\$d Ergebnisse (\"%2\$s\")";
$lang['search'] = 'Suche';
$lang['search_members'] = 'Suche Mitglieder';
$lang['should_be'] = 'Sollte sein';
$lang['styles'] = 'Styles';
$lang['title'] = 'Titel';
$lang['uninstall'] = 'Uninstall';
$lang['update_date_to'] = "Aktualisiere Datum zu<br />%1\$s?";
$lang['version'] = 'Version';
$lang['x_members_s'] = "%1\$d Mitglied";
$lang['x_members_p'] = "%1\$d Mitglieder";

// Permission Messages
$lang['noauth_a_event_add']    = 'Du hast keine Berechtigung Ereignisse zuzuf�gen.';
$lang['noauth_a_event_upd']    = 'Du hast keine Berechtigung Ereignisse zu aktualisieren.';
$lang['noauth_a_event_del']    = 'Du hast keine Berechtigung to delete events zu l�schen.';
$lang['noauth_a_groupadj_add'] = 'Du hast keine Berechtigung Gruppenkorrekturen zuzuf�gen.';
$lang['noauth_a_groupadj_upd'] = 'Du hast keine Berechtigung Gruppenkorrekturen zu aktualisieren.';
$lang['noauth_a_groupadj_del'] = 'Du hast keine Berechtigung Gruppenkorrekturen zu l�schen.';
$lang['noauth_a_indivadj_add'] = 'Du hast keine Berechtigung individuelle Korrekturen zuzuf�gen.';
$lang['noauth_a_indivadj_upd'] = 'Du hast keine Berechtigung individuelle Korrekturen zu aktualisieren.';
$lang['noauth_a_indivadj_del'] = 'Du hast keine Berechtigung individuelle Korrekturen zu l�schen.';
$lang['noauth_a_item_add']     = 'Du hast keine Berechtigung Items zuzuf�gen.';
$lang['noauth_a_item_upd']     = 'Du hast keine Berechtigung Items zu aktualisieren.';
$lang['noauth_a_item_del']     = 'Du hast keine Berechtigung Items zu l�schen.';
$lang['noauth_a_news_add']     = 'Du hast keine Berechtigung News zuzuf�gen.';
$lang['noauth_a_news_upd']     = 'Du hast keine Berechtigung News zu aktualisieren.';
$lang['noauth_a_news_del']     = 'Du hast keine Berechtigung News zu l�schen.';
$lang['noauth_a_raid_add']     = 'Du hast keine Berechtigung Raids zuzuf�gen.';
$lang['noauth_a_raid_upd']     = 'Du hast keine Berechtigung Raids zu aktualisieren.';
$lang['noauth_a_raid_del']     = 'Du hast keine Berechtigung Raids zu l�schen.';
$lang['noauth_a_turnin_add']   = 'Du hast keine Berechtigung Turn-ins zuzuf�gen.';
$lang['noauth_a_config_man']   = 'Du hast keine Berechtigung EQdkp Konfigurationseinstellungen zu verwalten.';
$lang['noauth_a_members_man']  = 'Du hast keine Berechtigung Gildenmitglieder zu verwalten.';
$lang['noauth_a_plugins_man']  = 'Du hast keine Berechtigung EQdkp Plugins zu verwalten.';
$lang['noauth_a_styles_man']   = 'Du hast keine Berechtigung EQdkp Styles zu verwalten.';
$lang['noauth_a_users_man']    = 'Du hast keine Berechtigung Benutzer Accounteinstellungen zu verwalten.';
$lang['noauth_a_logs_view']    = 'Du hast keine Berechtigung EQdkp Logs anzusehen.';

// Submission Success Messages
$lang['admin_add_adj_success']               = "Eine %1\$s Korrektur von %2\$.2f wurde der Datenbank zugef�gt.";
$lang['admin_add_admin_success']             = "Eine Mail wurde an %1\$s mit administrativen Informationen gesendet.";
$lang['admin_add_event_success']             = "Ein Standardwert von %1\$s f�r einen Raid auf %2\$s wurde der Datenbank zugef�gt.";
$lang['admin_add_iadj_success']              = "Eine individuelle %1\$s Korrektur von %2\$.2f f�r %3\$s wurde der Datenbank zugef�gt.";
$lang['admin_add_item_success']              = "Ein Itemkauf-Eintrag f�r %1\$s, gekauft von %2\$s f�r %3\$.2f wurde der Datenbank zugef�gt.";
$lang['admin_add_member_success']            = "%1\$s wurde als Mitglied zugef�gt.";
$lang['admin_add_news_success']              = 'Der Newsbeitrag wurde der Datenbank zugef�gt.';
$lang['admin_add_raid_success']              = "Der %1\$d/%2\$d/%3\$d Raid auf %4\$s wurde der Datenbank zugef�gt.";
$lang['admin_add_style_success']             = 'Der neue Style wurde erfolgreich zugef�gt.';
$lang['admin_add_turnin_success']            = "%1\$s wurde verschoben von %2\$s nach %3\$s.";
$lang['admin_delete_adj_success']            = "Die %1\$s Korrektur von %2\$.2f wurde aus der Datenbank gel�scht.";
$lang['admin_delete_admins_success']         = "Die ausgew�hlten Admins wurden gel�scht.";
$lang['admin_delete_event_success']          = "Der Standardwert von %1\$s f�r einen Raid auf %2\$s wurde aus der Datenbank gel�scht.";
$lang['admin_delete_iadj_success']           = "Die individuelle %1\$s Korrektur von %2\$.2f f�r %3\$s wurde aus der Datenbank gel�scht.";
$lang['admin_delete_item_success']           = "Der Itemkauf-Eintrag f�r %1\$s, gekauft von %2\$s f�r %3\$.2f wurde aus der Datenbank gel�scht.";
$lang['admin_delete_members_success']        = "%1\$s, inklusive seiner/ihrer Historie, wurde aus der Datenbank gel�scht.";
$lang['admin_delete_news_success']           = 'Der Newsbeitrag wurde aus der Datenbank gel�scht.';
$lang['admin_delete_raid_success']           = 'Der Raid und alle damit verkn�pften Items wurden aus der Datenbank gel�scht.';
$lang['admin_delete_style_success']          = 'Der Style wurde erfolgreich gel�scht.';
$lang['admin_delete_user_success']           = "Der Account mit dem Benutzernamen %1\$s wurde gel�scht.";
$lang['admin_set_perms_success']             = "Alle administrativen Berechtigungen wurden aktualisiert.";
$lang['admin_transfer_history_success']      = "Die komplette Historie von %1\$s\ wurde auf %2\$s �bertragen und %1\$s wurde in der Datenbank gel�scht.";
$lang['admin_update_account_success']        = "Deine Accounteinstellungen wurden in der Datenbank aktualisiert.";
$lang['admin_update_adj_success']            = "Die %1\$s Korrektur von %2\$.2f wurde in der Datenbank aktualisiert.";
$lang['admin_update_event_success']          = "Der Standardwert von %1\$s f�r einen Raid auf %2\$s wurde in der Datenbank aktualisiert.";
$lang['admin_update_iadj_success']           = "Die individuelle %1\$s Korrektur von %2\$.2f f�r %3\$s wurde in der Datenbank aktualisiert.";
$lang['admin_update_item_success']           = "Der Itemkauf-Eintrag f�r %1\$s, gekauft von %2\$s f�r %3\$.2f wurde in der Datenbank aktualisiert.";
$lang['admin_update_member_success']         = "Mitgliedschaftseinstellungen f�r %1\$s wurden aktualisiert.";
$lang['admin_update_news_success']           = 'Der Newsbeitrag wurde in der Datenbank aktualisiert.';
$lang['admin_update_raid_success']           = "Der %1\$d/%2\$d/%3\$d Raid auf %4\$s wurde in der Datenbank aktualisiert.";
$lang['admin_update_style_success']          = 'Der Style wurde erfolgreich aktualisiert.';

$lang['admin_raid_success_hideinactive']     = 'Aktualisiere aktiv/inaktiv Spielerstatus...';

// Delete Confirmation Texts
$lang['confirm_delete_adj']     = 'Bist Du sicher, da� Du diese Gruppenkorrektur l�schen willst?';
$lang['confirm_delete_admins']  = 'Bist Du sicher, da� Du die ausgew�hlten Admins l�schen willst?';
$lang['confirm_delete_event']   = 'Bist Du sicher, da� Du dieses Ereignis l�schen willst?';
$lang['confirm_delete_iadj']    = 'Bist Du sicher, da� Du diese individuelle Korrektur l�schen willst?';
$lang['confirm_delete_item']    = 'Bist Du sicher, da� Du dieses Item l�schen willst?';
$lang['confirm_delete_members'] = 'Bist Du sicher, da� Du die folgenden Mitglieder l�schen willst?';
$lang['confirm_delete_news']    = 'Bist Du sicher, da� Du diesen Newsbeitrag l�schen willst?';
$lang['confirm_delete_raid']    = 'Bist Du sicher, da� Du diesen Raid l�schen willst?';
$lang['confirm_delete_style']   = 'Bist Du sicher, da� Du diesen Style l�schen willst?';
$lang['confirm_delete_users']   = 'Bist Du sicher, da� Du die folgenden Benutzeraccounts l�schen willst?';

// Log Actions
$lang['action_event_added']      = 'Ereignis zugef�gt';
$lang['action_event_deleted']    = 'Ereignis gel�scht';
$lang['action_event_updated']    = 'Ereignis aktualisiert';
$lang['action_groupadj_added']   = 'Gruppenkorrektur zugef�gt';
$lang['action_groupadj_deleted'] = 'Gruppenkorrektur gel�scht';
$lang['action_groupadj_updated'] = 'Gruppenkorrektur aktualisiert';
$lang['action_history_transfer'] = 'Mitglieder Historie verschoben';
$lang['action_indivadj_added']   = 'Individuell Korrektur zugef�gt';
$lang['action_indivadj_deleted'] = 'Individuell Korrektur gel�scht';
$lang['action_indivadj_updated'] = 'Individuell Korrektur aktualisiert';
$lang['action_item_added']       = 'Item zugef�gt';
$lang['action_item_deleted']     = 'Item gel�scht';
$lang['action_item_updated']     = 'Item aktualisiert';
$lang['action_member_added']     = 'Mitglied zugef�gt';
$lang['action_member_deleted']   = 'Mitglied gel�scht';
$lang['action_member_updated']   = 'Mitglied aktualisiert';
$lang['action_news_added']       = 'Newsbeitrag zugef�gt';
$lang['action_news_deleted']     = 'Newsbeitrag gel�scht';
$lang['action_news_updated']     = 'Newsbeitrag aktualisiert';
$lang['action_raid_added']       = 'Raid zugef�gt';
$lang['action_raid_deleted']     = 'Raid gel�scht';
$lang['action_raid_updated']     = 'Raid aktualisiert';
$lang['action_turnin_added']     = 'Turn-in zugef�gt';

// Before/After
$lang['adjustment_after']  = 'Korrektur nachher';
$lang['adjustment_before'] = 'Korrektur vorher';
$lang['attendees_after']   = 'Teilnehmer nachher';
$lang['attendees_before']  = 'Teilnehmer vorher';
$lang['buyers_after']      = 'K�ufer nachher';
$lang['buyers_before']     = 'K�ufer vorher';
$lang['class_after']       = 'Klasse nachher';
$lang['class_before']      = 'Klasse vorher';
$lang['earned_after']      = 'Verdient nachher';
$lang['earned_before']     = 'Verdient vorher';
$lang['event_after']       = 'Ereignis nachher';
$lang['event_before']      = 'Ereignis vorher';
$lang['headline_after']    = 'Kopfzeile nachher';
$lang['headline_before']   = 'Kopfzeile vorher';
$lang['level_after']       = 'Level nachher';
$lang['level_before']      = 'Level vorher';
$lang['members_after']     = 'Mitglieder nachher';
$lang['members_before']    = 'Mitglieder vorher';
$lang['message_after']     = 'Nachricht nachher';
$lang['message_before']    = 'Nachricht vorher';
$lang['name_after']        = 'Name nachher';
$lang['name_before']       = 'Name vorher';
$lang['note_after']        = 'Notiz nachher';
$lang['note_before']       = 'Notiz vorher';
$lang['race_after']        = 'Rasse nachher';
$lang['race_before']       = 'Rasse vorher';
$lang['raid_id_after']     = 'Raid ID nachher';
$lang['raid_id_before']    = 'Raid ID vorher';
$lang['reason_after']      = 'Grund nachher';
$lang['reason_before']     = 'Grund vorher';
$lang['spent_after']       = 'Ausgegeben nachher';
$lang['spent_before']      = 'Ausgegeben vorher';
$lang['value_after']       = 'Wert nachher';
$lang['value_before']      = 'Wert vorher';

// Configuration
$lang['general_settings'] = 'Allgemeine Einstellungen';
$lang['guildtag'] = 'Gilden- / Gruppenname';
$lang['guildtag_note'] = 'Wird im Titel fast jeder Seite angezeigt';
$lang['parsetags'] = 'Gildenname zum analysieren';
$lang['parsetags_note'] = 'Das hier Aufgef�hrte ist als Option verf�gbar, wenn Raidlogs analysiert werden.';
$lang['domain_name'] = 'Domainname';
$lang['server_port'] = 'Serverport';
$lang['server_port_note'] = 'Port Deines Webservers. Meist 80';
$lang['script_path'] = 'Skript Pfad';
$lang['script_path_note'] = 'Pfad wo EQdkp liegt, relativ zum Domainname';
$lang['site_name'] = 'Seitenname';
$lang['site_description'] = 'Seitenbeschreibung';
$lang['point_name'] = 'Punktename';
$lang['point_name_note'] = 'z.B.: DKP, RP, etc.';
$lang['enable_account_activation'] = 'Accountaktivierung einschalten';
$lang['none'] = 'Kein';
$lang['admin'] = 'Admin';
$lang['default_language'] = 'Standardsprache';
$lang['default_locale'] = 'Standardregion (nur Zeichensatz; beeinflu�t nicht die Sprache)';
$lang['default_game'] = 'Standardspiel';
$lang['default_game_warn'] = '�nderung des Standardspiel kann andere Einstellungen dieser Sitzung ung�ltig machen.';
$lang['default_style'] = 'Standardstyle';
$lang['default_page'] = 'Standard Index Seite';
$lang['hide_inactive'] = 'Inaktive Mitglieder verstecken';
$lang['hide_inactive_note'] = 'Mitglieder verstecken, die an keinem Raid innerhalb von [inactive period] Tagen teilgenommen haben?';
$lang['inactive_period'] = 'Inaktiver Zeitraum';
$lang['inactive_period_note'] = 'Anzahl von Tagen die ein Mitglied vom Raid fernbleiben kann und aktiv bleibt';
$lang['inactive_point_adj'] = 'Inaktive Punktkorrektur';
$lang['inactive_point_adj_note'] = 'Punktkorrektur eines Mitglieds wenn er inaktiv wird.';
$lang['active_point_adj'] = 'Aktive Punktkorrektur';
$lang['active_point_adj_note'] = 'Punktkorrektur eines Mitglieds wenn er aktiv wird.';
$lang['enable_gzip'] = 'Gzip-Kompression aktivieren';
$lang['show_item_stats'] = 'Zeige Itemeigenschaften';
$lang['show_item_stats_note'] = 'Versuche Itemeigenschaften aus dem Internet zu holen.  Kann die Geschwindigkeit des Seitenaufbaus beeinflu�en.';
$lang['default_permissions'] = 'Standardberechtigungen';
$lang['default_permissions_note'] = 'Das sind die Berechtigungen f�r Benutzer, die nicht eingeloggt sind und wird neuen Benutzern bei der Registrierung gegeben. Punkte in <b>fett</b> sind administrative Berechtigungen,
                                    die man besser nicht als standard setzen sollte. Punkte in <i>cursiv</i> sind nur f�r Plugins.  Du kannst sp�ter individuelle Benutzereinstellungen im Administrationsbereich vergeben.';
$lang['plugins'] = 'Plugins';
$lang['cookie_settings'] = 'Cookie Einstellungen';
$lang['cookie_domain'] = 'Cookie Dom�ne';
$lang['cookie_name'] = 'Cookie Name';
$lang['cookie_path'] = 'Cookie Pfad';
$lang['session_length'] = 'Sitzungsl�nge (Sekunden)';
$lang['email_settings'] = 'Mail-Einstellungen';
$lang['admin_email'] = 'Administrator Mail-Addresse';

// Admin Index
$lang['anonymous'] = 'Anonym';
$lang['database_size'] = 'Datenbankgr��e';
$lang['eqdkp_started'] = 'EQdkp Start';
$lang['ip_address'] = 'IP Addresse';
$lang['items_per_day'] = 'Items pro Tag';
$lang['last_update'] = 'Letztes Update';
$lang['location'] = 'Ort';
$lang['new_version_notice'] = "EQdkp version %1\$s ist <a href=\"http://sourceforge.net/project/showfiles.php?group_id=69529\" target=\"_blank\">zum Download verf�gbar</a>.";
$lang['number_of_items'] = 'Anzahl an Items';
$lang['number_of_logs'] = 'Anzahl an Logeintr�gen';
$lang['number_of_members'] = 'Anzahl an Mitgliedern (Aktiv / Inaktiv)';
$lang['number_of_raids'] = 'Anzahl an Raids';
$lang['raids_per_day'] = 'Raids pro Tag';
$lang['statistics'] = 'Statistiken';
$lang['totals'] = 'Summen';
$lang['version_update'] = 'Versions Update';
$lang['who_online'] = 'Wer ist online';

// Style Management
$lang['style_settings'] = 'Style Einstellungen';
$lang['style_name'] = 'Style Name';
$lang['template'] = 'Vorlage';
$lang['element'] = 'Element';
$lang['background_color'] = 'Hintergrundfarbe';
$lang['fontface1'] = 'Schriftart 1';
$lang['fontface1_note'] = 'Standard Schriftart';
$lang['fontface2'] = 'Schriftart 2';
$lang['fontface2_note'] = 'Schriftart Eingabefeld';
$lang['fontface3'] = 'Schriftart 3';
$lang['fontface3_note'] = 'Momentan ungenutzt';
$lang['fontsize1'] = 'Schriftgr��e 1';
$lang['fontsize1_note'] = 'Klein';
$lang['fontsize2'] = 'Schriftgr��e 2';
$lang['fontsize2_note'] = 'Mittel';
$lang['fontsize3'] = 'Schriftgr��e 3';
$lang['fontsize3_note'] = 'Gro�';
$lang['fontcolor1'] = 'Schriftfarbe 1';
$lang['fontcolor1_note'] = 'Standardfarbe';
$lang['fontcolor2'] = 'Schriftfarbe 2';
$lang['fontcolor2_note'] = 'Farbe au�erhalb der Tabellen (Men�s, Titel, Copyright)';
$lang['fontcolor3'] = 'Schriftfarbe 3';
$lang['fontcolor3_note'] = 'Schriftfarbe Eingabefeld';
$lang['fontcolor_neg'] = 'Negative Schriftfarbe';
$lang['fontcolor_neg_note'] = 'Farbe f�r negative/falsche Zahlen';
$lang['fontcolor_pos'] = 'Positive Schriftfarbe';
$lang['fontcolor_pos_note'] = 'Farbe f�r positive/gute Zahlen';
$lang['body_link'] = 'Link Farbe';
$lang['body_link_style'] = 'Link Style';
$lang['body_hlink'] = 'Hover Link Color';
$lang['body_hlink_style'] = 'Hover Link Style';
$lang['header_link'] = 'Header Link';
$lang['header_link_style'] = 'Header Link Style';
$lang['header_hlink'] = 'Hover Header Link';
$lang['header_hlink_style'] = 'Hover Header Link Style';
$lang['tr_color1'] = 'Farbe Tabellenzeile 1';
$lang['tr_color2'] = 'Farbe Tabellenzeile 2';
$lang['th_color1'] = 'Farbe Tabellen�berschrift';
$lang['table_border_width'] = 'Breite Tabellenrahmen';
$lang['table_border_color'] = 'Farbe Tabellenrahmen';
$lang['table_border_style'] = 'Style Tabellenrahmen';
$lang['input_color'] = 'Hintergrundfarbe Eingabefeld';
$lang['input_border_width'] = 'Breite Eingabefeldrahmen';
$lang['input_border_color'] = 'Farbe Eingabefeldrahmen';
$lang['input_border_style'] = 'Style Eingabefeldrahmen';
$lang['style_configuration'] = 'Style Konfiguration';
$lang['style_date_note'] = 'F�r Datum-/Zeitfelder wird die PHP-Syntax genommen <a href="http://www.php.net/manual/en/function.date.php" target="_blank">date()</a> function.';
$lang['attendees_columns'] = 'Teilnehmerspalten';
$lang['attendees_columns_note'] = 'Anzahl der Spalten f�r Teilnehmer wenn man einen Raid ansieht';
$lang['date_notime_long'] = 'Datum ohne Zeit (lang)';
$lang['date_notime_short'] = 'Datum ohne Zeit (kurz)';
$lang['date_time'] = 'Datum mit Zeit';
$lang['logo_path'] = 'Logo Dateiname';

// Errors
$lang['error_invalid_adjustment'] = 'Es wurde keine g�ltige Korrektur bereitgestellt.';
$lang['error_invalid_plugin']     = 'Es wurde kein g�ltiges Plugin bereitgestellt.';
$lang['error_invalid_style']      = 'Es wurde kein g�ltiger Style bereitgestellt.';

// Verbose log entry lines
$lang['new_actions']           = 'Neueste Adminaktionen';
$lang['vlog_event_added']      = "%1\$s f�gte das Ereignis '%2\$s' zu mit Wert von %3\$.2f Punkten.";
$lang['vlog_event_updated']    = "%1\$s aktualisierte das Ereignis '%2\$s'.";
$lang['vlog_event_deleted']    = "%1\$s l�schte das Ereignis '%2\$s'.";
$lang['vlog_groupadj_added']   = "%1\$s f�gte eine Gruppenkorrektur von %2\$.2f Punkten zu.";
$lang['vlog_groupadj_updated'] = "%1\$s aktualisierte eine Gruppenkorrektur von %2\$.2f Punkten.";
$lang['vlog_groupadj_deleted'] = "%1\$s l�schte eine Gruppenkorrektur von %2\$.2f Punkten.";
$lang['vlog_history_transfer'] = "%1\$s �bertrug %2\$s's historie zu %3\$s.";
$lang['vlog_indivadj_added']   = "%1\$s f�gte eine individuelle Korrektur von %2\$.2f zu %3\$d Mitglied(ern) zu.";
$lang['vlog_indivadj_updated'] = "%1\$s aktualisierte eine individuelle Korrektur von %2\$.2f zu %3\$s.";
$lang['vlog_indivadj_deleted'] = "%1\$s l�schte eine individuelle Korrektur von %2\$.2f zu %3\$s.";
$lang['vlog_item_added']       = "%1\$s f�gte das Item '%2\$s' zugeordnet zu %3\$d Mitglied(er) f�r %4\$.2f Punkte ein.";
$lang['vlog_item_updated']     = "%1\$s aktualisierte das Item '%2\$s' zugeordnet zu %3\$d Mitglied(er).";
$lang['vlog_item_deleted']     = "%1\$s l�schte das Item '%2\$s' zugeordnet zu %3\$d Mitglied(er).";
$lang['vlog_member_added']     = "%1\$s f�gte das Mitglied %2\$s zu.";
$lang['vlog_member_updated']   = "%1\$s aktualisierte das Mitglied %2\$s.";
$lang['vlog_member_deleted']   = "%1\$s l�schte das Mitglied %2\$s.";
$lang['vlog_news_added']       = "%1\$s f�gte den Newsbeitrag '%2\$s' zu.";
$lang['vlog_news_updated']     = "%1\$s aktualisierte den Newsbeitrag '%2\$s'.";
$lang['vlog_news_deleted']     = "%1\$s l�schte den Newsbeitrag '%2\$s'.";
$lang['vlog_raid_added']       = "%1\$s f�gte einen Raid auf '%2\$s' zu.";
$lang['vlog_raid_updated']     = "%1\$s aktualisierte einen Raid auf '%2\$s'.";
$lang['vlog_raid_deleted']     = "%1\$s l�schte einen Raid auf '%2\$s'.";
$lang['vlog_turnin_added']     = "%1\$s f�gte ein Turn-in von %2\$s zu %3\$s f�r '%4\$s' ein.";

// Location messages
$lang['adding_groupadj'] = 'Gruppenkorrektur zuf�gen';
$lang['adding_indivadj'] = 'Individuelle Korrektur zuf�gen';
$lang['adding_item'] = 'Item zuf�gen';
$lang['adding_news'] = 'Newsbeitrag zuf�gen';
$lang['adding_raid'] = 'Raid zuf�gen';
$lang['adding_turnin'] = 'Turn-in zuf�gen';
$lang['editing_groupadj'] = 'Gruppenkorrektur bearbeiten';
$lang['editing_indivadj'] = 'Individuelle Korrektur bearbeiten';
$lang['editing_item'] = 'Item bearbeiten';
$lang['editing_news'] = 'Newsbeitrag bearbeiten';
$lang['editing_raid'] = 'Raid bearbeiten';
$lang['listing_events'] = 'Ereignisse anzeigen';
$lang['listing_groupadj'] = 'Gruppenkorrekturen anzeigen';
$lang['listing_indivadj'] = 'Individuelle Korrekturen anzeigen';
$lang['listing_itemhist'] = 'Item Historie anzeigen';
$lang['listing_itemvals'] = 'Itemwerte anzeigen';
$lang['listing_members'] = 'Mitglieder anzeigen';
$lang['listing_raids'] = 'Raids anzeigen';
$lang['managing_config'] = 'EQdkp Konfiguration verwalten';
$lang['managing_members'] = 'Mitglieder verwalten';
$lang['managing_plugins'] = 'Plugins verwalten';
$lang['managing_styles'] = 'Styles verwalten';
$lang['managing_users'] = 'Benutzer-Accounts verwalten';
$lang['parsing_log'] = 'Log auswerten';
$lang['viewing_admin_index'] = 'Admin Index anzeigen';
$lang['viewing_event'] = 'Ereignis anzeigen';
$lang['viewing_item'] = 'Item anzeigen';
$lang['viewing_logs'] = 'Logs anzeigen';
$lang['viewing_member'] = 'Mitglieder anzeigen';
$lang['viewing_mysql_info'] = 'MySQL Information anzeigen';
$lang['viewing_news'] = 'News anzeigen';
$lang['viewing_raid'] = 'Raid anzeigen';
$lang['viewing_stats'] = 'Eigenschaften anzeigen';
$lang['viewing_summary'] = 'Zusammenfassung anzeigen';

// Help lines
$lang['b_help'] = 'fetter Text: [b]text[/b] (alt+b)';
$lang['i_help'] = 'cursiver Text: [i]text[/i] (alt+i)';
$lang['u_help'] = 'unterstrichener Text: [u]text[/u] (alt+u)';
$lang['q_help'] = 'Zitat: [quote]text[/quote] (alt+q)';
$lang['c_help'] = 'zentrierter Text: [center]text[/center] (alt+c)';
$lang['p_help'] = 'Bild einf�gen: [img]http://image_url[/img] (alt+p)';
$lang['w_help'] = 'URL einf�gen: [url]http://url[/url] or [url=http://url]URL text[/url]  (alt+w)';

// Manage Members Menu (yes, MMM)
$lang['add_member'] = 'Neues Mitglied zuf�gen';
$lang['list_edit_del_member'] = 'Mitglieder anzeigen, bearbeiten oder l�schen';
$lang['edit_ranks'] = 'Mitgliederr�nge bearbeiten';
$lang['transfer_history'] = 'Mitglieder Historie verschieben';

// MySQL info
$lang['mysql'] = 'MySQL';
$lang['mysql_info'] = 'MySQL Info';
$lang['eqdkp_tables'] = 'EQdkp Tabellen';
$lang['table_name'] = 'Tabellen Name';
$lang['rows'] = 'Zeilen';
$lang['table_size'] = 'Tabellengr��e';
$lang['index_size'] = 'Indexgr��e';
$lang['num_tables'] = "%d Tabellen";
?>
