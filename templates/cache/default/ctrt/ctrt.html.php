<?php
if ($this->security()) {
// INCLUDE ../../../../templates/default/page_header.html
$this->assign_from_include('../../../../templates/default/page_header.html');
echo '
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_PARSE_LOG'])) ? $this->_tpldata['.'][0]['F_PARSE_LOG'] : '') . '" name="post">
';// IF S_STEP1
if ($this->_tpldata['.'][0]['S_STEP1']) { 
echo '
    <table width="100%" border="0" cellspacing="1" cellpadding="2">
      <tr>
        <th align="center" width="100%">' . ((isset($this->_tpldata['.'][0]['L_PASTE_LOG'])) ? $this->_tpldata['.'][0]['L_PASTE_LOG'] : ((isset($user->lang['PASTE_LOG'])) ? $user->lang['PASTE_LOG'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PASTE_LOG'))) . ' 	}')) . '</th>
      </tr>
      <tr>
        <td width="100%" align="center" class="row2">&nbsp;<br /><textarea name="log" rows="20" cols="60" id="log" style="width: 100%" class="input"></textarea><br />&nbsp;</td>
      </tr>
      <tr>
        <th align="center"><input type="submit" name="parse" value="' . ((isset($this->_tpldata['.'][0]['L_PARSE_LOG'])) ? $this->_tpldata['.'][0]['L_PARSE_LOG'] : ((isset($user->lang['PARSE_LOG'])) ? $user->lang['PARSE_LOG'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PARSE_LOG'))) . ' 	}')) . '" class="mainoption" /></th>
      </tr>
    </table>
';// ELSE
} else {
echo '
    <table width="100%" border="0" cellspacing="1" cellpadding="2">
      <tr>
        <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_FOUND_RAIDS'])) ? $this->_tpldata['.'][0]['L_FOUND_RAIDS'] : ((isset($user->lang['FOUND_RAIDS'])) ? $user->lang['FOUND_RAIDS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FOUND_RAIDS'))) . ' 	}')) . '</th>
      </tr>
    </table>
    ';// BEGIN allplayers_row
$_allplayers_row_count = (isset($this->_tpldata['allplayers_row.'])) ?  sizeof($this->_tpldata['allplayers_row.']) : 0;
if ($_allplayers_row_count) {
for ($_allplayers_row_i = 0; $_allplayers_row_i < $_allplayers_row_count; $_allplayers_row_i++)
{
echo '
        <input type="hidden" name="allplayers[' . ((isset($this->_tpldata['allplayers_row.'][$_allplayers_row_i]['ALLPLAYERNAME'])) ? $this->_tpldata['allplayers_row.'][$_allplayers_row_i]['ALLPLAYERNAME'] : '') . '][race]" value="' . ((isset($this->_tpldata['allplayers_row.'][$_allplayers_row_i]['ALLPLAYERRACE'])) ? $this->_tpldata['allplayers_row.'][$_allplayers_row_i]['ALLPLAYERRACE'] : '') . '">
        <input type="hidden" name="allplayers[' . ((isset($this->_tpldata['allplayers_row.'][$_allplayers_row_i]['ALLPLAYERNAME'])) ? $this->_tpldata['allplayers_row.'][$_allplayers_row_i]['ALLPLAYERNAME'] : '') . '][class]" value="' . ((isset($this->_tpldata['allplayers_row.'][$_allplayers_row_i]['ALLPLAYERCLASS'])) ? $this->_tpldata['allplayers_row.'][$_allplayers_row_i]['ALLPLAYERCLASS'] : '') . '">
        <input type="hidden" name="allplayers[' . ((isset($this->_tpldata['allplayers_row.'][$_allplayers_row_i]['ALLPLAYERNAME'])) ? $this->_tpldata['allplayers_row.'][$_allplayers_row_i]['ALLPLAYERNAME'] : '') . '][level]" value="' . ((isset($this->_tpldata['allplayers_row.'][$_allplayers_row_i]['ALLPLAYERLEVEL'])) ? $this->_tpldata['allplayers_row.'][$_allplayers_row_i]['ALLPLAYERLEVEL'] : '') . '">
    ';}}
// END allplayers_row
// BEGIN events_row
$_events_row_count = (isset($this->_tpldata['events_row.'])) ?  sizeof($this->_tpldata['events_row.']) : 0;
if ($_events_row_count) {
for ($_events_row_i = 0; $_events_row_i < $_events_row_count; $_events_row_i++)
{
echo '
    <table width="100%" border="0" cellspacing="1" cellpadding="2">
        <input type="hidden" name="events[]" value="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['HEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['HEVENT'] : '') . '">
        <tr class="row1">
            <td align="left" valign="top" width="150">' . ((isset($this->_tpldata['.'][0]['L_EVENT'])) ? $this->_tpldata['.'][0]['L_EVENT'] : ((isset($user->lang['EVENT'])) ? $user->lang['EVENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EVENT'))) . ' 	}')) . '</td>
            <td align="left" valign="top"><input type="text" name="newevents[' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['HEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['HEVENT'] : '') . ']" size="50" value="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['STRIPPEDHEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['STRIPPEDHEVENT'] : '') . '" class="input"></td>
        </tr>
    </table>
    <br />
        ';// BEGIN raids_row
$_raids_row_count = (isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'])) ? sizeof($this->_tpldata['events_row.'][$_events_row_i]['raids_row.']) : 0;
if ($_raids_row_count) {
for ($_raids_row_i = 0; $_raids_row_i < $_raids_row_count; $_raids_row_i++)
{
echo '
        <table width="100%" border="0" cellspacing="1" cellpadding="2">
            <tr>
            <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_RAIDS_DROPS_DETAILS'])) ? $this->_tpldata['.'][0]['L_RAIDS_DROPS_DETAILS'] : ((isset($user->lang['RAIDS_DROPS_DETAILS'])) ? $user->lang['RAIDS_DROPS_DETAILS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_DROPS_DETAILS'))) . ' 	}')) . '</th>
          </tr>
            <input type="hidden" name="raids[' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['HEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['HEVENT'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'] : '') . ']" value="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDTIME'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDTIME'] : '') . '">
        <tr class="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ROW_CLASS'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ROW_CLASS'] : '') . '">
                <td align="left" valign="top" width="150">' . ((isset($this->_tpldata['.'][0]['L_RAID_NOTE'])) ? $this->_tpldata['.'][0]['L_RAID_NOTE'] : ((isset($user->lang['RAID_NOTE'])) ? $user->lang['RAID_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAID_NOTE'))) . ' 	}')) . '</td>
                <td align="left" valign="top"><input type="text" name="newraidnotes[' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['HEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['HEVENT'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'] : '') . ']" size="50" value="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['STRIPPEDHRAIDNOTE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['STRIPPEDHRAIDNOTE'] : '') . '" class="input"></td>
            </tr>
            <tr class="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ROW_CLASS'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ROW_CLASS'] : '') . '">
                <td align="left" valign="top" width="150">' . ((isset($this->_tpldata['.'][0]['L_DKP_VALUE'])) ? $this->_tpldata['.'][0]['L_DKP_VALUE'] : ((isset($user->lang['DKP_VALUE'])) ? $user->lang['DKP_VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DKP_VALUE'))) . ' 	}')) . '</td>
                <td align="left" valign="top"><input type="text" name="raiddkpvalues[' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['HEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['HEVENT'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'] : '') . ']" size="50" value="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['RAIDDKPVALUE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['RAIDDKPVALUE'] : '') . '" class="input"><input type="checkbox" name="addlootdkpvalues[' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['HEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['HEVENT'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'] : '') . ']" value="1"';// IF S_ADDLOOTDKPVALUES
if ($this->_tpldata['.'][0]['S_ADDLOOTDKPVALUES']) { 
echo ' checked';// ENDIF
}
echo '>' . ((isset($this->_tpldata['.'][0]['L_DKP_VALUE_TIP'])) ? $this->_tpldata['.'][0]['L_DKP_VALUE_TIP'] : ((isset($user->lang['DKP_VALUE_TIP'])) ? $user->lang['DKP_VALUE_TIP'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DKP_VALUE_TIP'))) . ' 	}')) . '</td>
            </tr>
            <tr class="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ROW_CLASS'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ROW_CLASS'] : '') . '">
                <td align="left" valign="top" width="150">' . ((isset($this->_tpldata['.'][0]['L_RAID_TIME'])) ? $this->_tpldata['.'][0]['L_RAID_TIME'] : ((isset($user->lang['RAID_TIME'])) ? $user->lang['RAID_TIME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAID_TIME'))) . ' 	}')) . '</td>
                <td align="left" valign="top">
                    <input type="text" name="raidtimes[' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['HEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['HEVENT'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'] : '') . '][mo]" size="3" maxlength="2" value="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDTIME_MO'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDTIME_MO'] : '') . '" class="input">
              /<input type="text" name="raidtimes[' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['HEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['HEVENT'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'] : '') . '][d]" size="3" maxlength="2" value="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDTIME_D'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDTIME_D'] : '') . '" class="input">
              /<input type="text" name="raidtimes[' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['HEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['HEVENT'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'] : '') . '][y]" size="5" maxlength="4" value="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDTIME_Y'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDTIME_Y'] : '') . '" class="input">
              &nbsp;<input type="text" name="raidtimes[' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['HEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['HEVENT'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'] : '') . '][h]" size="3" maxlength="2" value="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDTIME_H'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDTIME_H'] : '') . '" class="input">
              :<input type="text" name="raidtimes[' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['HEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['HEVENT'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'] : '') . '][mi]" size="3" maxlength="2" value="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDTIME_MI'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDTIME_MI'] : '') . '" class="input">
              :<input type="text" name="raidtimes[' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['HEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['HEVENT'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'] : '') . '][s]" size="3" maxlength="2" value="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDTIME_S'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDTIME_S'] : '') . '" class="input">
                </td>
            </tr>
            <tr class="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ROW_CLASS'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ROW_CLASS'] : '') . '">
                <td align="left" valign="top">' . ((isset($this->_tpldata['.'][0]['L_ATTENDEES'])) ? $this->_tpldata['.'][0]['L_ATTENDEES'] : ((isset($user->lang['ATTENDEES'])) ? $user->lang['ATTENDEES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ATTENDEES'))) . ' 	}')) . ' (' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ATTENDEESCOUNT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ATTENDEESCOUNT'] : '') . '):</td>
                <td align="left" valign="top"><textarea name="newraidattendees[' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['HEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['HEVENT'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'] : '') . ']" style="float: left" rows="20" cols="20" class="input">' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ATTENDEES'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ATTENDEES'] : '') . '</textarea>' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ATTENDEESNOTES'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ATTENDEESNOTES'] : '') . '</td>
            </tr>
            ';// BEGIN loot_row
$_loot_row_count = (isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'])) ? sizeof($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.']) : 0;
if ($_loot_row_count) {
for ($_loot_row_i = 0; $_loot_row_i < $_loot_row_count; $_loot_row_i++)
{
echo '
            <tr class="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ROW_CLASS'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ROW_CLASS'] : '') . '">
                <td height="30" colspan="2"></td>
            </tr>
            <tr class="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ROW_CLASS'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ROW_CLASS'] : '') . '">
                <td align="left" valign="top">' . ((isset($this->_tpldata['.'][0]['L_ITEM_NAME'])) ? $this->_tpldata['.'][0]['L_ITEM_NAME'] : ((isset($user->lang['ITEM_NAME'])) ? $user->lang['ITEM_NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEM_NAME'))) . ' 	}')) . '</td>
                <td align="left" valign="top"><input type="text" name="loots[' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['HEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['HEVENT'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HNR'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HNR'] : '') . '][name]" size="50" value="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HNAME'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HNAME'] : '') . '" class="input"></td>
            </tr>
            <tr class="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ROW_CLASS'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ROW_CLASS'] : '') . '">
                <td align="left" valign="top">' . ((isset($this->_tpldata['.'][0]['L_ITEM_ID'])) ? $this->_tpldata['.'][0]['L_ITEM_ID'] : ((isset($user->lang['ITEM_ID'])) ? $user->lang['ITEM_ID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEM_ID'))) . ' 	}')) . '</td>
                <td align="left" valign="top"><input type="text" name="loots[' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['HEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['HEVENT'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HNR'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HNR'] : '') . '][id]" size="50" value="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HID'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HID'] : '') . '" class="input"></td>
            </tr>
            <input type="hidden" name="loots[' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['HEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['HEVENT'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HNR'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HNR'] : '') . '][id]" size="50" value="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HID'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HID'] : '') . '">
            <tr class="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ROW_CLASS'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ROW_CLASS'] : '') . '">
                <td align="left" valign="top">' . ((isset($this->_tpldata['.'][0]['L_ITEM_LOOTER'])) ? $this->_tpldata['.'][0]['L_ITEM_LOOTER'] : ((isset($user->lang['ITEM_LOOTER'])) ? $user->lang['ITEM_LOOTER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEM_LOOTER'))) . ' 	}')) . '</td>
                <td align="left" valign="top"><input type="text" name="loots[' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['HEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['HEVENT'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HNR'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HNR'] : '') . '][looter]" size="50" value="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HLOOTER'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HLOOTER'] : '') . '" class="input"></td>
            </tr>
            <tr class="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ROW_CLASS'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['ROW_CLASS'] : '') . '">
                <td align="left" valign="top">' . ((isset($this->_tpldata['.'][0]['L_ITEM_DKP_VALUE'])) ? $this->_tpldata['.'][0]['L_ITEM_DKP_VALUE'] : ((isset($user->lang['ITEM_DKP_VALUE'])) ? $user->lang['ITEM_DKP_VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEM_DKP_VALUE'))) . ' 	}')) . '</td>
                <td align="left" valign="top"><input type="text" name="loots[' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['HEVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['HEVENT'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['HRAIDNOTE'] : '') . '][' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HNR'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HNR'] : '') . '][dkp]" size="50" value="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HDKP'])) ? $this->_tpldata['events_row.'][$_events_row_i]['raids_row.'][$_raids_row_i]['loot_row.'][$_loot_row_i]['HDKP'] : '') . '" class="input"></td>
            </tr>
            ';}}
// END loot_row
echo '
            <br />
        </table>
        ';}}
// END raids_row
echo '
        <br />
        <br />
  ';}}
// END events_row
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2"><input type="submit" name="insertraids" value="' . ((isset($this->_tpldata['.'][0]['L_RAIDS_INSERT'])) ? $this->_tpldata['.'][0]['L_RAIDS_INSERT'] : ((isset($user->lang['RAIDS_INSERT'])) ? $user->lang['RAIDS_INSERT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_INSERT'))) . ' 	}')) . '" class="mainoption"/></th>
  </tr>
</table>
';// ENDIF
}
echo '

</form>
';// INCLUDE ../../../../templates/default/page_tail.html
$this->assign_from_include('../../../../templates/default/page_tail.html');

}
?>