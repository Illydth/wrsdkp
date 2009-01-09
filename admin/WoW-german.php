<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * WoW.php
 * Began: Fri May 13 2005
 *
 * $Id: WoW-german.php 6 2006-05-08 17:11:35Z tsigo $
 *
 ******************************/
if ( !defined('EQDKP_INC') )
{
    die('Hacking attempt');
}
class Manage_Game extends EQdkp_Admin
{
 function do_it()
 {
   global $db, $eqdkp, $user;
   global $SID, $dbname, $table_prefix;
   parent::eqdkp_admin();
   $queries = array(
   "DELETE FROM ". $table_prefix ."classes;",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (0, 'Unknown', 'Platte',0,60);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (1, 'Krieger', 'Platte',0,60);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (2, 'Schurke', 'Leder',0,60);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (3, 'J�ger', 'Leder',0,39);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (4, 'J�ger', 'Schwere R�stung',40,60);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (5, 'Paladin', 'Platte',0,60);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (6, 'Priester', 'Stoff',0,60);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (7, 'Druide', 'Stoff',0,60);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (8, 'Schamane', 'Leder',0,39);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (9, 'Schamane', 'Schwere R�stung',40,60);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (10, 'Hexenmeister', 'Stoff',0,60);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (11, 'Magier', 'Stoff',0,60);",
   "DELETE FROM ". $table_prefix ."races;",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (0, 'Unknown');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (1, 'Gnom');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (2, 'Mensch');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (3, 'Zwerg');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (4, 'Nachtelf');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (5, 'Troll');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (6, 'Untoter');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (7, 'Ork');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (8, 'Taure');",
   "DELETE FROM ". $table_prefix ."factions;",
   "INSERT INTO ". $table_prefix ."factions (faction_id, faction_name) VALUES (1, 'Allianz');",
   "INSERT INTO ". $table_prefix ."factions (faction_id, faction_name) VALUES (2, 'Horde');",
   "UPDATE ". $table_prefix ."config SET (config_value = 'WoW') WHERE (config_name = 'default_game');",
   );
   foreach ( $queries as $sql )
   {
       $db->query($sql);
   }
 $redir = "admin/config.php";
 redirect($redir);
 }
}
$manage = new Manage_Game;
$manage->do_it();
       
?>
