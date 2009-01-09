<?php
/**
 * English language file for CT_RaidTracker Import
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.eqdkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author freddy <CTRaidTrackerImport@freddy.eu.org>
 * $Rev: 275 $ $Date: 2008-09-14 16:19:35 -0700 (Sun, 14 Sep 2008) $
 */

$lang['ctrt'] = "CT_RaidTracker Import";
$lang['import_ctrt_data'] = "Importiere DKP String";

$lang['ctrt_step1_pagetitle'] = "CT_Raidtracker Importieren";
$lang['ctrt_step1_th'] = "F&uuml;ge hier den DKP String ein";
$lang['ctrt_step1_invalidstring_title'] = "Ung&uuml;ltiger DKP String";
$lang['ctrt_step1_invalidstring_msg'] = "Der DKP String ist ung&uuml;ltig.";
$lang['ctrt_step1_button_parselog'] = "Weiter";

$lang['ctrt_step2_pagetitle'] = "CT_RaidTracker Import";
$lang['ctrt_step2_foundraids'] = "Gefundene Raids";
$lang['ctrt_step2_event'] = "Event:";
$lang['ctrt_step2_raidnote'] = "Raid Notiz:";
$lang['ctrt_step2_dkpvalue'] = "DKP Wert:";
$lang['ctrt_step2_raidtime'] = "Raid Zeit:";
$lang['ctrt_step2_attendees'] = "Teilnehmer";
$lang['ctrt_step2_itemname'] = "Item Name:";
$lang['ctrt_step2_itemid'] = "Item ID:";
$lang['ctrt_step2_looter'] = "Looter:";
$lang['ctrt_step2_itemdkpvalue'] = "DKP Wert:";
$lang['ctrt_step2_dkpvaluetip'] = "F&uuml;ge Item Wert/Teilnehmer (Zero DKP) hinzu";
$lang['ctrt_step2_insertraids'] = "Raid(s) einf&uuml;gen)";
$lang['ctrt_step2_raidsdropsdetails'] = "Raid/Drop Details";

$lang['ctrt_step3_pagetitle'] = "CT_Raidtracker Import";
$lang['ctrt_step3_title'] = "Aktions log<br>\n";
$lang['ctrt_step3_alreadyexist'] = "%s (%s, %s DKP) wurden schon hinzugef&uuml;gt, &uuml;bersprungen<br>\n";
$lang['ctrt_step3_emptyraidnote'] = "%s (%s, %s DKP) hat keine Raid Notiz, &uuml;bersprungen<br>\n";
$lang['ctrt_step3_raidadded'] = "%s (%s, %s DKP) wurden hinzugef&uuml;gt<br>\n";
$lang['ctrt_step3_adjadded'] = "An adjustment of %s DKP was added to %s<br>\n";
$lang['ctrt_step3_memberadded'] = "%s (Rasse: %s, Klasse: %s, Level: %s, Rang: %s) wurden den Mitgliedern hinzugef&uuml;gt<br>\n";
$lang['ctrt_step3_memberupdated'] = "%s (Rasse: %s, Klasse: %s, Level: %s, Rang: %s) wurde geupdated: (Rasse: %s, Klasse: %s, Level: %s, Rang: %s)<br>\n";
$lang['ctrt_step3_memberlevelupdated'] = "Es sieht so aus als h&auml;tte %s ein Level up gehabt. das level wurde von %s auf %s gesetzt<br>\n";
$lang['ctrt_step3_attendeesadded'] = "%s Teilnehmer wurden hinzugef&uuml;gt<br>\n";
$lang['ctrt_step3_lootadded'] = "%s (%s DKP) wurde %s hinzugef&uuml;gt<br>\n";

/**
 * added by Stefan Knaak | corgan | corgan@eqdkp-plus.com
 */
$lang['ctrt_adminmenu_title']   = "CTRT Import";

/**
 * Admin Menu Options
 */
$lang['ctrt_adminmenu_config']          = "Einstellen";
$lang['ctrt_adminmenu_settings']        = "Einstellungen";
$lang['ctrt_adminmenu_aliases']             = "Aliases";
$lang['ctrt_adminmenu_event_triggers']      = "Event Triggers";
$lang['ctrt_adminmenu_raid_note_triggers']  = "Raid Note Triggers";
$lang['ctrt_adminmenu_own_raids']           = "Eigene Raids";
$lang['ctrt_adminmenu_add_items']           = "Items hinzufügen";
$lang['ctrt_adminmenu_ignore_items']        = "Ignorierte Items";

$lang['ctrt_adminmenu_add']     = "Hinzufügen";
$lang['ctrt_adminmenu_list']    = "Anzeigen";
$lang['ctrt_adminmenu_export']  = "Exportieren";
$lang['ctrt_adminmenu_import']  = "Importieren";

/**
 * Configure page
 */
$lang['ctrt_min_quality']       = "Minimum Qualität";
$lang['ctrt_add_loot_dkp']      = "Loot DKP Checkbox";
$lang['ctrt_ignored_looter']    = "Ignoriere Spieler";
$lang['ctrt_convert_names']             = "Konvertierte Namen";
$lang['ctrt_loot_note_event_trigger']     = "Loot Note Event Trigger";
$lang['ctrt_default_rank']      = "Standart Rang";
$lang['ctrt_attendance_filter'] = "Anwesenheits Filter";
$lang['ctrt_skip_raids']        = "Raids ohne Note überspringen";
$lang['ctrt_default_dkp']       = "Standart DKP Kosten";
$lang['ctrt_starting_dkp']      = "Start DKP";
$lang['ctrt_create_start_raid'] = "Erstelle Start Raid";
$lang['ctrt_start_raid_dkp']    = "Start Raid DKP";
$lang['ctrt_simulate']          = "Simmulation";
$lang['ctrt_simulate_warning']  = "Simmulation ist an - Dies würde getan werden:<br><br>";

/**
 * Config help
 */
$lang['ctrt_help_min_quality']          = "Niedrigste Qualität der zu erfassenden Items.";
$lang['ctrt_help_add_loot_dkp']         = "Deaktivieren, um die Checkbox (Loot DKP - Add Item value/attendees) auszuschalten(empfohlen).";
$lang['ctrt_help_ignored_looter']       = "Die Namen dieser Looter werden ignoriert.";
$lang['ctrt_help_convert_names']            = "Aktivieren um Namen zu konvertieren (z.b. \"Âvâtâr\" in \"Avatar\".)";
$lang['ctrt_help_loot_note_event_trigger']  = "Auf Event Trigger in den Notes prüfen (z.b. wenn ihr solche Events habt \"MC (Lucifron), MC (Magmadar), ...\" &amp; diese aber nur in einem Raid eintragen wollt.)";
$lang['ctrt_help_default_rank']             = "Standart Rang für Member die CTRT anlegt wenn ein Raid eingetragen wird.";
$lang['ctrt_help_attendance_filter']        = "Anwesendheits Filter setzen.";
$lang['ctrt_help_skip_raids']               = "Aktivieren um Raids mit einer leeren Raidnote zu ignorieren.";
$lang['ctrt_help_default_dkp']              = "Die Kosten von Items die ohne DKP gelogt werden.";
$lang['ctrt_help_starting_dkp']             = "Wenn die Zahl größer null ist, dann wird für jeden neuen Member, den CTRT anlegt dieser Wert als StartDKP hinzugefügt.";
$lang['ctrt_help_create_start_raid']        = "Aktivieren, wenn CTRT einen Start Raid anlegen soll, wenn der Anwesenheits Filter auf Boss-Kill steht.";
$lang['ctrt_help_start_raid_dkp']           = "Standartwert für Start DKP Punkte.";
$lang['ctrt_help_simulate']                 = "Aktivieren für Simulationsmodus.";

/**
 * Alias Help
 */
$lang['ctrt_help_alias']                = "Use an alias when a player brings a different character to a raid and you want to track DKP for only one character (e.g. if a Twink of the Mainchar helps out, but the Mainchar should get the DKP Points)";
$lang['ctrt_help_alias_name']           = "Whenever this name is encountered, it will be replaced by the Member name below.";
$lang['ctrt_help_alias_member']         = "The member who will receive the DKP from the alias.";
$lang['ctrt_help_alias_export']         = "Copy the text below and paste into your favorite text editor to save.";
$lang['ctrt_help_alias_import']         = "Paste the text below to import your aliases.";
$lang['ctrt_help_alias_import_format']  ="The import is case insensitive and should be in the form";

/**
 * Event Trigger Help
 */
$lang['ctrt_help_event_trigger']        = $lang['ctrt_help_loot_note_event_trigger'];
$lang['ctrt_help_event_trigger_name']   = "Enter the name of the event that will be replaced with the result.";
$lang['ctrt_help_event_trigger_result'] = "Enter the text you want to see in place of the trigger";

/**
 * Raid Note Trigger Help
 */
$lang['ctrt_help_raid_note_trigger']        = "Here you can set the triggers for the eqDKP Raid Note (CT_RaidRracker Raid note and the Loots Notes will be parsed (Loot Notes will override the Raid Note))";
$lang['ctrt_help_raid_note_trigger_name']   = "Enter the name of the raid note that will be replaced with the result.";
$lang['ctrt_help_raid_note_trigger_result'] = "Enter the text you want to see in place of the trigger";

/**
 * Own Raid Help
 */
$lang['ctrt_help_own_raid']        = "Raid notes which should be handled as a \"own raid\" everytime";
$lang['ctrt_help_own_raid_name']   = "Enter the name of the raid that will be used.";

/**
 * Always Add Items
 */
$lang['ctrt_help_add_items']        = "These items will always be added regardless of the loot threshold set in CT_RaidtrackerImport.";
$lang['ctrt_help_add_items_wow'] = "Enter the WoW item ID or name to be added.";

/**
 * Always Ignore Items
 */
$lang['ctrt_help_ignore_items']     = "These items will be ignored regardless of the loot threshold set in CT_RaidtrackerImport.";
$lang['ctrt_help_ignore_items_wow'] = "Enter the WoW item ID or name to be ignored.";

$lang['ctrt_help_export']         = "Copy the text below and paste into your favorite text editor to save.";
$lang['ctrt_help_import']         = "Paste the text below to import your aliases.";
$lang['ctrt_help_import_format']  ="The import is case insensitive and should be in the form";


/**
 * Item Quality
 */
$lang['ctrt_iq_poor']           = "Poor";
$lang['ctrt_iq_common']         = "Common";
$lang['ctrt_iq_uncommon']       = "Uncommon";
$lang['ctrt_iq_rare']           = "Rare";
$lang['ctrt_iq_epic']           = "Epic";
$lang['ctrt_iq_ledgendary']     = "Legendary";

/**
 * Attendance Filter
 */
$lang['ctrt_af_none']            = "None";
$lang['ctrt_af_loot_time']      = "Loot Time";
$lang['ctrt_af_boss_kill']      = "Boss Kill";

/**
 * Buttons
 */

/**
 * Labels
 */
$lang['ctrt_alias']         = "Alias";
$lang['ctrt_aliases']       = "Aliases";
$lang['ctrt_result']        = "Result";
$lang['ctrt_trigger']       = "Trigger";
$lang['ctrt_import']        = "Import";
$lang['ctrt_raid_note']     = "Raid Note";
$lang['ctrt_own_raid']      = "Own Raid";
$lang['ctrt_item_wow']      = "WoW Item";
$lang['ctrt_item_wow_id']   = "WoW Item ID";

/*
 * User messages
 */
$lang['ctrt_alias_duplicate']           = "Cannot add <span class=\"negative\">%s</span>; member <span class=\"negative\">%s</span> is assigned this alias.";
$lang['ctrt_add_alias_success']     = "Alias <span class=\"positive\">%s</span> added for member <span class=\"positive\">%s</span>.";
$lang['ctrt_alias_update_success']      = "Alias <span class=\"positive\">%s</span> updated to <span class=\"positive\">%s</span> for member <span class=\"positive\">%s</span>.";
$lang['ctrt_no_alias_selected']     = "No alias selected.";
$lang['ctrt_confirm_delete_alias']  = "Are you sure you want to delete the following aliases?";
$lang['ctrt_alias_deleted']         = "Alias <span class=\"positive\">%s</span> deleted from member <span class=\"positive\">%s</span>.";
$lang['ctrt_alias_import_missing_member'] = "Cannot create alias <span class=\"negative\">%s</span>. Member <span class=\"negative\">%s</span> does not exist";
$lang['ctrt_settings_update_success']   = "Settings updated!!";

$lang['ctrt_trigger_confirm_delete']    = "Are you sure you want to delete the following triggers?";
$lang['ctrt_trigger_not_selected']      = "No triggers selected.";
$lang['ctrt_trigger_duplicate']         = "Trigger <span class=\"negative\">%s</span> for <span class=\"negative\">%s</span> already exists.";
$lang['ctrt_trigger_success_add']       = "Trigger <span class=\"positive\">%s</span> added for <span class=\"positive\">%s</span>.";
$lang['ctrt_trigger_success_update']    = "Trigger updated.";
$lang['ctrt_trigger_success_delete']    = "Trigger <span class=\"positive\">%s</span> deleted for <span class=\"positive\">%s</span>.";

$lang['ctrt_own_raid_confirm_delete']   = "Are you sure you want to delete the following custom raids?";
$lang['ctrt_own_raid_not_selected']     = "No custom raids selected.";
$lang['ctrt_own_raid_duplicate']        = "Custom raid <span class=\"negative\">%s</span> already exists.";
$lang['ctrt_own_raid_success_add']      = "Custom raid <span class=\"positive\">%s</span> added.";
$lang['ctrt_own_raid_success_update']   = "Custom raid updated.";
$lang['ctrt_own_raid_success_delete']   = "Custom raid <span class=\"positive\">%s</span> deleted.";

$lang['ctrt_item_confirm_delete']   = "Are you sure you want to delete the following items?";
$lang['ctrt_item_not_selected']     = "No items selected.";
$lang['ctrt_item_duplicate']        = "Item <span class=\"negative\">%s</span> already exists.";
$lang['ctrt_item_not_found']        = "Item <span class=\"negative\">%s</span> not found!.";
$lang['ctrt_item_success_add']      = "Item <span class=\"positive\">%s</span> added.";
$lang['ctrt_item_success_update']   = "Item updated.";
$lang['ctrt_item_success_delete']   = "Item <span class=\"positive\">%s</span> deleted.";

/**
 * Form validation messages
 */
$lang['ctrt_fv_invalid_xml']        = "Cannont import XML, invalid string. Compare with sample provided.";

/**
 * Log Actions
 */
$lang['action_ctrt_config_updated'] = $lang['ctrt'] ." Updated";
$lang['action_ctrt_alias_added']    = $lang['ctrt'] ." Alias Added";
$lang['action_ctrt_alias_updated']  = $lang['ctrt'] ." Alias Updated";
$lang['action_ctrt_alias_deleted']  = $lang['ctrt'] ." Alias Deleted";
$lang['ctrt_alias_name_before']     = "Alias Before";
$lang['ctrt_alias_name_after']      = "Alias After";
$lang['ctrt_member_name_before']    = "Member Before";
$lang['ctrt_member_name_after']     = "Member After";

/**
 * Verbose Log Messages
 */
$lang['vlog_ctrt_config_updated']   = "%s updated CT RaidTracker config.";
$lang['vlog_ctrt_alias_added']      = "%s added CT RaidTracker alias '%s' for member '%s'.";
$lang['vlog_ctrt_alias_updated']    = "%s updated CT RaidTracker alias '%s' for member '%s'.";
$lang['vlog_ctrt_alias_deleted']    = "%s deleted CT RaidTracker alias '%s' from member '%s'.";

/**
 * Log labels
 */
$lang['ctrt_label_alias_name']  = "Alias Name";
$lang['ctrt_label_member_name'] = "Member Name";

/*
 * Race Names
 */
$lang['blood_elf']  = 'Blutelf';
$lang['draenei']    = 'Draenei';
$lang['dwarf']      = 'Zwerg';
$lang['gnome']      = 'Gnom';
$lang['human']      = 'Mensch';
$lang['night_elf']  = 'Nachtelf';
$lang['orc']        = 'Ork';
$lang['undead']     = 'Untoter';
$lang['tauren']     = 'Taure';
$lang['troll']      = 'Troll';

/*
 * Class Names
 */
$lang['warrior']     = 'Krieger';
$lang['rogue']       = 'Schurke';
$lang['hunter']      = 'Jäger';
$lang['paladin']     = 'Paladin';
$lang['priest']      = 'Priester';
$lang['druid']       = 'Druide';
$lang['shaman']      = 'Schamane';
$lang['warlock']     = 'Hexenmeister';
$lang['mage']        = 'Magier';
$lang['deathknight'] = 'Todesritter';

?>