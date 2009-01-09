<?php
/******************************
 * EQdkp
 * Copyright 2002-2003
 * Licensed under the GNU GPL.  See COPYING for full terms.
 * ------------------
 * WoW.php
 * Began: Fri May 13 2005
 *
 * $Id: WoW.php 8 2006-05-08 17:15:20Z tsigo $
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

   "UPDATE " . $table_prefix . "members SET member_level = 70 WHERE member_level > 70;",

   "ALTER TABLE " . $table_prefix . "members MODIFY member_level tinyint(2) NOT NULL default '60';",

   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (0, 'Unknown', 'Plate',0,70);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (1, 'Warrior', 'Mail',0,39);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (2, 'Rogue', 'Leather',0,70);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (3, 'Hunter', 'Leather',0,39);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (4, 'Hunter', 'Mail',40,70);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (5, 'Paladin', 'Mail',0,39);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (6, 'Priest', 'Cloth',0,70);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (7, 'Druid', 'Leather',0,70);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (8, 'Shaman', 'Leather',0,39);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (9, 'Shaman', 'Mail',40,70);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (10, 'Warlock', 'Cloth',0,70);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (11, 'Mage', 'Cloth',0,70);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (12, 'Warrior', 'Plate',40,70);",
   "INSERT INTO ". $table_prefix ."classes (class_id, class_name, class_armor_type, class_min_level, class_max_level) VALUES (13, 'Paladin', 'Plate',40,70);",


   "DELETE FROM ". $table_prefix ."factions;",
   "INSERT INTO ". $table_prefix ."factions (faction_id, faction_name) VALUES (1, 'Alliance');",
   "INSERT INTO ". $table_prefix ."factions (faction_id, faction_name) VALUES (2, 'Horde');",


   "DELETE FROM ". $table_prefix ."races;",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name) VALUES (0, 'Unknown');",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name, race_faction_id) VALUES (1, 'Gnome', 1);",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name, race_faction_id) VALUES (2, 'Human', 1);",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name, race_faction_id) VALUES (3, 'Dwarf', 1);",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name, race_faction_id) VALUES (4, 'Night Elf', 1);",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name, race_faction_id) VALUES (5, 'Troll', 2);",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name, race_faction_id) VALUES (6, 'Undead', 2);",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name, race_faction_id) VALUES (7, 'Orc', 2);",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name, race_faction_id) VALUES (8, 'Tauren', 2);",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name, race_faction_id) VALUES (9, 'Draenei', 1);",
   "INSERT INTO ". $table_prefix ."races (race_id, race_name, race_faction_id) VALUES (10, 'Blood Elf', 2);",


   "UPDATE ". $table_prefix ."config SET config_value = 'WoW' WHERE config_name = 'default_game';",

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
