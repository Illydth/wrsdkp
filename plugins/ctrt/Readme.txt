EQdkp CTRaidTracker Import Plugin
http://www-en.curse-gaming.com/files/details/4198/eqdkp-ct-raidtracker-import-pl/

Author:
-------
Alason aka Freddy
http://black-fraternity.de (PM to Alason)
CTRaidTrackerImport@freddy.eu.org

Updated by Dazza
http://forums.eqdkp.com/

Updated by LoganFive
http://forums.eqdkp.com/

Updated by Corgan
http://www.eqdkp-plus.com

Requirements:
-------------
EQdkp 1.3.2+
PHP 4.3.0+ (PHP 5 users should read the README_PHP5)
Modded CT_RaidTracker v1.3+

Purpose:
--------
Allows you to add a complete (CT_Raidtracker logged) raid (with loots, etc.) with 2 clicks!

Installation:
-------------
Extract the files from the archive into the plugins folder of your EQdkp directory (e.g. eqdkp/plugins).
Go to Administration Panel, "Manage Plugins" and click "Install" for CT_RaidTrackerImport. You should see
an additional Link in the "Admin Panel Raids Link Box" (near the normal "Add Raid" Link) called "Import DKP String".

Usage:

Get my modded CT_RaidTracker and rightclick on the Raid title, that will shows you a long XML String,
copy it (Control + C) and paste it to the EQdkp "Import DKP String" text box and
click on "Parse Log", the rest will explain itself.

Notes:
-------------
- If e.g. a item have been given out for bids, add "XX DKP" (XX is the Number of Points) to the Loot note,
  it will override the DKP value which you might have set in your DKP System)
- If you are e.g. a German user but want that the Item Names in your DKP are the English ones,
  then get the itemlist.xml from Allakhazam ( http://wow.allakhazam.com/itemlist.xml ) and
  store it in the /eqdkp/plugins/ctrt/ folder, then they will be translated automatically

itemlist.xml
You also can get one from my database (Because it looks like Allakhazam one's dosn't get updated that regularly)
http://black-fraternity.de/iteminfo/itemlist.php?language=en&minimumquality=2
"minimumquality" could be: 0 (Poor), 1 (Common), 2 (Uncommon), 3 (Rare), 4 (Epic), 5 (Legendary)
"language" could be en (default) or de

FAQ:
----------
Q. Which output format should I choose in the mldkp addon?
A. Select "MLdkp 1.1/EQdkp plugin"

Q. How do I fix "Fatal error: Template->loadfile(): Error - file body does not exist or is empty in /home/nightma/public_html/raiding/includes/class_template.php on line 205"
A. You are using a template not currently supported by CTRT. To solve, copy one of the existing template folders with the name of your template. You will need to tweak the first line of each HTML file to read <!-- INCLUDE ../../../../templates/yourtempaltehere/page_header.html -->

Q. I am using them [insertnamehere] and when I click on CTRT all I see is a blank page.
A. You are using a template not currently supported by CTRT. To solve, copy one of the existing template folders with the name of your template. You will need to tweak the first line of each HTML file to read <!-- INCLUDE ../../../../templates/yourtempaltehere/page_header.html -->

Q. How do I track Trash Mob kills separately so they each have their own points?
A. In order to make a different raid for every trash mob add an "own raid" called "Trash Mob" and set the Settings->Attendence Filter to "loot time". You can still leave the WoW UI addon set to "on boss kill" (thank for the tip from SUMOMO on TWILIGHT'S HAMMER EU)
