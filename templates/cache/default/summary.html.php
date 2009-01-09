<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
// IF S_STEP1
if ($this->_tpldata['.'][0]['S_STEP1']) { 
echo '<form method="post" action="summary.php" name="post">';// ENDIF
}
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  ';// IF S_STEP1
if ($this->_tpldata['.'][0]['S_STEP1']) { 
echo '
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_ENTER_DATES'])) ? $this->_tpldata['.'][0]['L_ENTER_DATES'] : ((isset($user->lang['ENTER_DATES'])) ? $user->lang['ENTER_DATES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ENTER_DATES'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="50%" class="row1" align="center">
    <b>' . ((isset($this->_tpldata['.'][0]['L_STARTING_DATE'])) ? $this->_tpldata['.'][0]['L_STARTING_DATE'] : ((isset($user->lang['STARTING_DATE'])) ? $user->lang['STARTING_DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'STARTING_DATE'))) . ' 	}')) . ':</b> <input type="text" name="mo1" size="3" maxlength="2" class="input" />/<input type="text" name="d1" size="3" maxlength="2" class="input" />/<input type="text" name="y1" size="3" maxlength="2" class="input" />
    </td>
    <td width="50%" class="row2" align="center">
    <b>' . ((isset($this->_tpldata['.'][0]['L_ENDING_DATE'])) ? $this->_tpldata['.'][0]['L_ENDING_DATE'] : ((isset($user->lang['ENDING_DATE'])) ? $user->lang['ENDING_DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ENDING_DATE'))) . ' 	}')) . ':</b> <input type="text" name="mo2" size="3" maxlength="2" value="' . ((isset($this->_tpldata['.'][0]['MO2'])) ? $this->_tpldata['.'][0]['MO2'] : '') . '" class="input" />/<input type="text" name="d2" size="3" maxlength="2" value="' . ((isset($this->_tpldata['.'][0]['D2'])) ? $this->_tpldata['.'][0]['D2'] : '') . '" class="input" />/<input type="text" name="y2" size="3" maxlength="2" value="' . ((isset($this->_tpldata['.'][0]['Y2'])) ? $this->_tpldata['.'][0]['Y2'] : '') . '" class="input" />
    </td>
  </tr>
  <tr>
    <th align="center" colspan="2"><input type="submit" name="submit" value="' . ((isset($this->_tpldata['.'][0]['L_CREATE_NEWS_SUMMARY'])) ? $this->_tpldata['.'][0]['L_CREATE_NEWS_SUMMARY'] : ((isset($user->lang['CREATE_NEWS_SUMMARY'])) ? $user->lang['CREATE_NEWS_SUMMARY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CREATE_NEWS_SUMMARY'))) . ' 	}')) . '" class="mainoption" /></th>
  </tr>
  ';// ELSE
} else {
echo '
  <tr>
    <th align="center" colspan="4">' . ((isset($this->_tpldata['.'][0]['L_SUMMARY_DATES'])) ? $this->_tpldata['.'][0]['L_SUMMARY_DATES'] : ((isset($user->lang['SUMMARY_DATES'])) ? $user->lang['SUMMARY_DATES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SUMMARY_DATES'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="25%" class="row1"><b>' . ((isset($this->_tpldata['.'][0]['L_TOTAL_RAIDS'])) ? $this->_tpldata['.'][0]['L_TOTAL_RAIDS'] : ((isset($user->lang['TOTAL_RAIDS'])) ? $user->lang['TOTAL_RAIDS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TOTAL_RAIDS'))) . ' 	}')) . ':</b> ' . ((isset($this->_tpldata['.'][0]['TOTAL_RAIDS'])) ? $this->_tpldata['.'][0]['TOTAL_RAIDS'] : '') . '</td>
    <td width="25%" class="row2"><b>' . ((isset($this->_tpldata['.'][0]['L_TOTAL_ITEMS'])) ? $this->_tpldata['.'][0]['L_TOTAL_ITEMS'] : ((isset($user->lang['TOTAL_ITEMS'])) ? $user->lang['TOTAL_ITEMS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TOTAL_ITEMS'))) . ' 	}')) . ':</b> ' . ((isset($this->_tpldata['.'][0]['TOTAL_ITEMS'])) ? $this->_tpldata['.'][0]['TOTAL_ITEMS'] : '') . '</td>
    <td width="25%" class="row1"><b>' . ((isset($this->_tpldata['.'][0]['L_TOTAL_EARNED'])) ? $this->_tpldata['.'][0]['L_TOTAL_EARNED'] : ((isset($user->lang['TOTAL_EARNED'])) ? $user->lang['TOTAL_EARNED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TOTAL_EARNED'))) . ' 	}')) . ':</b> <span class="positive">' . ((isset($this->_tpldata['.'][0]['TOTAL_EARNED'])) ? $this->_tpldata['.'][0]['TOTAL_EARNED'] : '') . '</span></td>    
    <td width="25%" class="row2"><b>' . ((isset($this->_tpldata['.'][0]['L_TOTAL_SPENT'])) ? $this->_tpldata['.'][0]['L_TOTAL_SPENT'] : ((isset($user->lang['TOTAL_SPENT'])) ? $user->lang['TOTAL_SPENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TOTAL_SPENT'))) . ' 	}')) . ':</b> <span class="negative">' . ((isset($this->_tpldata['.'][0]['TOTAL_SPENT'])) ? $this->_tpldata['.'][0]['TOTAL_SPENT'] : '') . '</span></td>    
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" width="70" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . '</th>
    <th align="left" width="50%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_EVENT'])) ? $this->_tpldata['.'][0]['L_EVENT'] : ((isset($user->lang['EVENT'])) ? $user->lang['EVENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EVENT'))) . ' 	}')) . '</th>
    <th align="left" width="50%">' . ((isset($this->_tpldata['.'][0]['L_NOTE'])) ? $this->_tpldata['.'][0]['L_NOTE'] : ((isset($user->lang['NOTE'])) ? $user->lang['NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NOTE'))) . ' 	}')) . '</th>
    <th align="center" colspan="2" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_ATTENDEES'])) ? $this->_tpldata['.'][0]['L_ATTENDEES'] : ((isset($user->lang['ATTENDEES'])) ? $user->lang['ATTENDEES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ATTENDEES'))) . ' 	}')) . '</th>
    <th align="left" width="50" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_ITEMS'])) ? $this->_tpldata['.'][0]['L_ITEMS'] : ((isset($user->lang['ITEMS'])) ? $user->lang['ITEMS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEMS'))) . ' 	}')) . '</th>
    <th align="left" width="60" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . '</th>
  </tr>
  ';// BEGIN raids_row
$_raids_row_count = (isset($this->_tpldata['raids_row.'])) ?  sizeof($this->_tpldata['raids_row.']) : 0;
if ($_raids_row_count) {
for ($_raids_row_i = 0; $_raids_row_i < $_raids_row_count; $_raids_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['ROW_CLASS'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['ROW_CLASS'] : '') . '">
    <td width="70" nowrap="nowrap">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['DATE'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['DATE'] : '') . '</td>
    <td width="50%" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['U_VIEW_RAID'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['U_VIEW_RAID'] : '') . '">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['NAME'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['NAME'] : '') . '</a></td>
    <td width="50%">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['NOTE'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['NOTE'] : '') . '</td>
    <td width="40" nowrap="nowrap">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['ATTENDEES'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['ATTENDEES'] : '') . '</td>
    <td width="40" nowrap="nowrap" class="' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['C_ATTENDEES_PCT'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['C_ATTENDEES_PCT'] : '') . '">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['ATTENDEES_PCT'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['ATTENDEES_PCT'] : '') . '</td>
    <td width="50" nowrap="nowrap">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['ITEMS'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['ITEMS'] : '') . '</td>
    <td width="60" nowrap="nowrap" class="positive">' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['VALUE'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['VALUE'] : '') . '</td>
  </tr>
  ';}}
// END raids_row
echo '
  <tr>
    <th colspan="7" class="footer">&nbsp;</th>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" width="100%">' . ((isset($this->_tpldata['.'][0]['L_CLASS_SUMMARY'])) ? $this->_tpldata['.'][0]['L_CLASS_SUMMARY'] : ((isset($user->lang['CLASS_SUMMARY'])) ? $user->lang['CLASS_SUMMARY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CLASS_SUMMARY'))) . ' 	}')) . '</th>
    <th align="center" colspan="2" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_LOOTS'])) ? $this->_tpldata['.'][0]['L_LOOTS'] : ((isset($user->lang['LOOTS'])) ? $user->lang['LOOTS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LOOTS'))) . ' 	}')) . '</th>
    <th align="center" colspan="2" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_MEMBERS'])) ? $this->_tpldata['.'][0]['L_MEMBERS'] : ((isset($user->lang['MEMBERS'])) ? $user->lang['MEMBERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MEMBERS'))) . ' 	}')) . '</th>
    <th align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_LOOT_FACTOR'])) ? $this->_tpldata['.'][0]['L_LOOT_FACTOR'] : ((isset($user->lang['LOOT_FACTOR'])) ? $user->lang['LOOT_FACTOR'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LOOT_FACTOR'))) . ' 	}')) . '</th>
  </tr>
  ';// BEGIN class_row
$_class_row_count = (isset($this->_tpldata['class_row.'])) ?  sizeof($this->_tpldata['class_row.']) : 0;
if ($_class_row_count) {
for ($_class_row_i = 0; $_class_row_i < $_class_row_count; $_class_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['ROW_CLASS'])) ? $this->_tpldata['class_row.'][$_class_row_i]['ROW_CLASS'] : '') . '">
    <td width="100%"><a href="' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['U_LIST_MEMBERS'])) ? $this->_tpldata['class_row.'][$_class_row_i]['U_LIST_MEMBERS'] : '') . '">' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['CLASS'])) ? $this->_tpldata['class_row.'][$_class_row_i]['CLASS'] : '') . '</a></td>
    <td width="50" align="center" nowrap="nowrap">' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['LOOT_COUNT'])) ? $this->_tpldata['class_row.'][$_class_row_i]['LOOT_COUNT'] : '') . '</td>
    <td width="50" align="center" nowrap="nowrap">' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['LOOT_PCT'])) ? $this->_tpldata['class_row.'][$_class_row_i]['LOOT_PCT'] : '') . '</td>
    <td width="50" align="center" nowrap="nowrap">' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['CLASS_COUNT'])) ? $this->_tpldata['class_row.'][$_class_row_i]['CLASS_COUNT'] : '') . '</td>
    <td width="50" align="center" nowrap="nowrap">' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['CLASS_PCT'])) ? $this->_tpldata['class_row.'][$_class_row_i]['CLASS_PCT'] : '') . '</td>
    <td nowrap="nowrap" align="center" class="' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['C_LOOT_FACTOR'])) ? $this->_tpldata['class_row.'][$_class_row_i]['C_LOOT_FACTOR'] : '') . '">' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['LOOT_FACTOR'])) ? $this->_tpldata['class_row.'][$_class_row_i]['LOOT_FACTOR'] : '') . '</td>
  </tr>
  ';}}
// END class_row
echo '
  <tr>
    <th colspan="6" class="footer">&nbsp;</th>
  </tr>
  ';// ENDIF
}
echo '
</table>
';// IF S_STEP1
if ($this->_tpldata['.'][0]['S_STEP1']) { 
echo '</form>';// ENDIF
}
// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>