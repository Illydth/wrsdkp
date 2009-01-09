<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="3">
  <tr>
    <th align="left" rowspan="2" width="100%"><a href="' . ((isset($this->_tpldata['.'][0]['U_STATS'])) ? $this->_tpldata['.'][0]['U_STATS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_NAME'])) ? $this->_tpldata['.'][0]['O_NAME'] : '') . '&amp;show=' . ((isset($this->_tpldata['.'][0]['SHOW'])) ? $this->_tpldata['.'][0]['SHOW'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</a></th>
    <th colspan="4">' . ((isset($this->_tpldata['.'][0]['L_RAIDS'])) ? $this->_tpldata['.'][0]['L_RAIDS'] : ((isset($user->lang['RAIDS'])) ? $user->lang['RAIDS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS'))) . ' 	}')) . '</th>
    <th colspan="3">' . ((isset($this->_tpldata['.'][0]['L_EARNED'])) ? $this->_tpldata['.'][0]['L_EARNED'] : ((isset($user->lang['EARNED'])) ? $user->lang['EARNED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EARNED'))) . ' 	}')) . '</th>
    <th colspan="3">' . ((isset($this->_tpldata['.'][0]['L_SPENT'])) ? $this->_tpldata['.'][0]['L_SPENT'] : ((isset($user->lang['SPENT'])) ? $user->lang['SPENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPENT'))) . ' 	}')) . '</th>
    <th colspan="2">' . ((isset($this->_tpldata['.'][0]['L_PCT_EARNED_LOST_TO'])) ? $this->_tpldata['.'][0]['L_PCT_EARNED_LOST_TO'] : ((isset($user->lang['PCT_EARNED_LOST_TO'])) ? $user->lang['PCT_EARNED_LOST_TO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PCT_EARNED_LOST_TO'))) . ' 	}')) . '</th>
    <th class="smalltitle" rowspan="2"><a href="' . ((isset($this->_tpldata['.'][0]['U_STATS'])) ? $this->_tpldata['.'][0]['U_STATS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_CURRENT'])) ? $this->_tpldata['.'][0]['O_CURRENT'] : '') . '&amp;show=' . ((isset($this->_tpldata['.'][0]['SHOW'])) ? $this->_tpldata['.'][0]['SHOW'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_CURRENT'])) ? $this->_tpldata['.'][0]['L_CURRENT'] : ((isset($user->lang['CURRENT'])) ? $user->lang['CURRENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURRENT'))) . ' 	}')) . '</a></th>
  </tr>
  <tr>
    <th align="left" class="smalltitle"><a href="' . ((isset($this->_tpldata['.'][0]['U_STATS'])) ? $this->_tpldata['.'][0]['U_STATS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_FIRSTRAID'])) ? $this->_tpldata['.'][0]['O_FIRSTRAID'] : '') . '&amp;show=' . ((isset($this->_tpldata['.'][0]['SHOW'])) ? $this->_tpldata['.'][0]['SHOW'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_FIRST'])) ? $this->_tpldata['.'][0]['L_FIRST'] : ((isset($user->lang['FIRST'])) ? $user->lang['FIRST'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FIRST'))) . ' 	}')) . '</a></th>
    <th align="left" class="smalltitle"><a href="' . ((isset($this->_tpldata['.'][0]['U_STATS'])) ? $this->_tpldata['.'][0]['U_STATS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_LASTRAID'])) ? $this->_tpldata['.'][0]['O_LASTRAID'] : '') . '&amp;show=' . ((isset($this->_tpldata['.'][0]['SHOW'])) ? $this->_tpldata['.'][0]['SHOW'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_LAST'])) ? $this->_tpldata['.'][0]['L_LAST'] : ((isset($user->lang['LAST'])) ? $user->lang['LAST'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LAST'))) . ' 	}')) . '</a></th>
    <th align="left" class="smalltitle" colspan="2"><a href="' . ((isset($this->_tpldata['.'][0]['U_STATS'])) ? $this->_tpldata['.'][0]['U_STATS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_RAIDCOUNT'])) ? $this->_tpldata['.'][0]['O_RAIDCOUNT'] : '') . '&amp;show=' . ((isset($this->_tpldata['.'][0]['SHOW'])) ? $this->_tpldata['.'][0]['SHOW'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_ATTENDED'])) ? $this->_tpldata['.'][0]['L_ATTENDED'] : ((isset($user->lang['ATTENDED'])) ? $user->lang['ATTENDED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ATTENDED'))) . ' 	}')) . '</a></th>
    <th align="left" class="smalltitle"><a href="' . ((isset($this->_tpldata['.'][0]['U_STATS'])) ? $this->_tpldata['.'][0]['U_STATS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_EARNED'])) ? $this->_tpldata['.'][0]['O_EARNED'] : '') . '&amp;show=' . ((isset($this->_tpldata['.'][0]['SHOW'])) ? $this->_tpldata['.'][0]['SHOW'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_TOTAL'])) ? $this->_tpldata['.'][0]['L_TOTAL'] : ((isset($user->lang['TOTAL'])) ? $user->lang['TOTAL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TOTAL'))) . ' 	}')) . '</a></th>
    <th align="left" class="smalltitle"><a href="' . ((isset($this->_tpldata['.'][0]['U_STATS'])) ? $this->_tpldata['.'][0]['U_STATS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_EARNED_PER_DAY'])) ? $this->_tpldata['.'][0]['O_EARNED_PER_DAY'] : '') . '&amp;show=' . ((isset($this->_tpldata['.'][0]['SHOW'])) ? $this->_tpldata['.'][0]['SHOW'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_PER_DAY'])) ? $this->_tpldata['.'][0]['L_PER_DAY'] : ((isset($user->lang['PER_DAY'])) ? $user->lang['PER_DAY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PER_DAY'))) . ' 	}')) . '</a></th>
    <th align="left" class="smalltitle"><a href="' . ((isset($this->_tpldata['.'][0]['U_STATS'])) ? $this->_tpldata['.'][0]['U_STATS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_EARNED_PER_RAID'])) ? $this->_tpldata['.'][0]['O_EARNED_PER_RAID'] : '') . '&amp;show=' . ((isset($this->_tpldata['.'][0]['SHOW'])) ? $this->_tpldata['.'][0]['SHOW'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_PER_RAID'])) ? $this->_tpldata['.'][0]['L_PER_RAID'] : ((isset($user->lang['PER_RAID'])) ? $user->lang['PER_RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PER_RAID'))) . ' 	}')) . '</a></th>
    <th align="left" class="smalltitle"><a href="' . ((isset($this->_tpldata['.'][0]['U_STATS'])) ? $this->_tpldata['.'][0]['U_STATS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_SPENT'])) ? $this->_tpldata['.'][0]['O_SPENT'] : '') . '&amp;show=' . ((isset($this->_tpldata['.'][0]['SHOW'])) ? $this->_tpldata['.'][0]['SHOW'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_TOTAL'])) ? $this->_tpldata['.'][0]['L_TOTAL'] : ((isset($user->lang['TOTAL'])) ? $user->lang['TOTAL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TOTAL'))) . ' 	}')) . '</a></th>
    <th align="left" class="smalltitle"><a href="' . ((isset($this->_tpldata['.'][0]['U_STATS'])) ? $this->_tpldata['.'][0]['U_STATS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_SPENT_PER_DAY'])) ? $this->_tpldata['.'][0]['O_SPENT_PER_DAY'] : '') . '&amp;show=' . ((isset($this->_tpldata['.'][0]['SHOW'])) ? $this->_tpldata['.'][0]['SHOW'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_PER_DAY'])) ? $this->_tpldata['.'][0]['L_PER_DAY'] : ((isset($user->lang['PER_DAY'])) ? $user->lang['PER_DAY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PER_DAY'))) . ' 	}')) . '</a></th>
    <th align="left" class="smalltitle"><a href="' . ((isset($this->_tpldata['.'][0]['U_STATS'])) ? $this->_tpldata['.'][0]['U_STATS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_SPENT_PER_RAID'])) ? $this->_tpldata['.'][0]['O_SPENT_PER_RAID'] : '') . '&amp;show=' . ((isset($this->_tpldata['.'][0]['SHOW'])) ? $this->_tpldata['.'][0]['SHOW'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_PER_RAID'])) ? $this->_tpldata['.'][0]['L_PER_RAID'] : ((isset($user->lang['PER_RAID'])) ? $user->lang['PER_RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PER_RAID'))) . ' 	}')) . '</a></th>
    <th align="left" class="smalltitle"><a href="' . ((isset($this->_tpldata['.'][0]['U_STATS'])) ? $this->_tpldata['.'][0]['U_STATS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_LOST_TO_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['O_LOST_TO_ADJUSTMENT'] : '') . '&amp;show=' . ((isset($this->_tpldata['.'][0]['SHOW'])) ? $this->_tpldata['.'][0]['SHOW'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['L_ADJUSTMENT'] : ((isset($user->lang['ADJUSTMENT'])) ? $user->lang['ADJUSTMENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADJUSTMENT'))) . ' 	}')) . '</a></th>
    <th align="left" class="smalltitle"><a href="' . ((isset($this->_tpldata['.'][0]['U_STATS'])) ? $this->_tpldata['.'][0]['U_STATS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_LOST_TO_SPENT'])) ? $this->_tpldata['.'][0]['O_LOST_TO_SPENT'] : '') . '&amp;show=' . ((isset($this->_tpldata['.'][0]['SHOW'])) ? $this->_tpldata['.'][0]['SHOW'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_SPENT'])) ? $this->_tpldata['.'][0]['L_SPENT'] : ((isset($user->lang['SPENT'])) ? $user->lang['SPENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPENT'))) . ' 	}')) . '</a></th>
  </tr>
  ';// BEGIN stats_row
$_stats_row_count = (isset($this->_tpldata['stats_row.'])) ?  sizeof($this->_tpldata['stats_row.']) : 0;
if ($_stats_row_count) {
for ($_stats_row_i = 0; $_stats_row_i < $_stats_row_count; $_stats_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['stats_row.'][$_stats_row_i]['ROW_CLASS'])) ? $this->_tpldata['stats_row.'][$_stats_row_i]['ROW_CLASS'] : '') . '">
    <td><a href="' . ((isset($this->_tpldata['stats_row.'][$_stats_row_i]['U_VIEW_MEMBER'])) ? $this->_tpldata['stats_row.'][$_stats_row_i]['U_VIEW_MEMBER'] : '') . '">' . ((isset($this->_tpldata['stats_row.'][$_stats_row_i]['NAME'])) ? $this->_tpldata['stats_row.'][$_stats_row_i]['NAME'] : '') . '</a></td>
    <td>' . ((isset($this->_tpldata['stats_row.'][$_stats_row_i]['FIRST_RAID'])) ? $this->_tpldata['stats_row.'][$_stats_row_i]['FIRST_RAID'] : '') . '</td>
    <td>' . ((isset($this->_tpldata['stats_row.'][$_stats_row_i]['LAST_RAID'])) ? $this->_tpldata['stats_row.'][$_stats_row_i]['LAST_RAID'] : '') . '</td>
    <td>' . ((isset($this->_tpldata['stats_row.'][$_stats_row_i]['ATTENDED_COUNT'])) ? $this->_tpldata['stats_row.'][$_stats_row_i]['ATTENDED_COUNT'] : '') . '</td>
    <td class="' . ((isset($this->_tpldata['stats_row.'][$_stats_row_i]['C_ATTENDED_PERCENT'])) ? $this->_tpldata['stats_row.'][$_stats_row_i]['C_ATTENDED_PERCENT'] : '') . '">' . ((isset($this->_tpldata['stats_row.'][$_stats_row_i]['ATTENDED_PERCENT'])) ? $this->_tpldata['stats_row.'][$_stats_row_i]['ATTENDED_PERCENT'] : '') . '%</td>
    <td class="positive">' . ((isset($this->_tpldata['stats_row.'][$_stats_row_i]['EARNED_TOTAL'])) ? $this->_tpldata['stats_row.'][$_stats_row_i]['EARNED_TOTAL'] : '') . '</td>
    <td class="positive">' . ((isset($this->_tpldata['stats_row.'][$_stats_row_i]['EARNED_PER_DAY'])) ? $this->_tpldata['stats_row.'][$_stats_row_i]['EARNED_PER_DAY'] : '') . '</td>
    <td class="positive">' . ((isset($this->_tpldata['stats_row.'][$_stats_row_i]['EARNED_PER_RAID'])) ? $this->_tpldata['stats_row.'][$_stats_row_i]['EARNED_PER_RAID'] : '') . '</td>
    <td class="negative">' . ((isset($this->_tpldata['stats_row.'][$_stats_row_i]['SPENT_TOTAL'])) ? $this->_tpldata['stats_row.'][$_stats_row_i]['SPENT_TOTAL'] : '') . '</td>
    <td class="negative">' . ((isset($this->_tpldata['stats_row.'][$_stats_row_i]['SPENT_PER_DAY'])) ? $this->_tpldata['stats_row.'][$_stats_row_i]['SPENT_PER_DAY'] : '') . '</td>
    <td class="negative">' . ((isset($this->_tpldata['stats_row.'][$_stats_row_i]['SPENT_PER_RAID'])) ? $this->_tpldata['stats_row.'][$_stats_row_i]['SPENT_PER_RAID'] : '') . '</td>
    <td>' . ((isset($this->_tpldata['stats_row.'][$_stats_row_i]['LOST_TO_ADJUSTMENT'])) ? $this->_tpldata['stats_row.'][$_stats_row_i]['LOST_TO_ADJUSTMENT'] : '') . '%</td>
    <td>' . ((isset($this->_tpldata['stats_row.'][$_stats_row_i]['LOST_TO_SPENT'])) ? $this->_tpldata['stats_row.'][$_stats_row_i]['LOST_TO_SPENT'] : '') . '%</td>
    <td nowrap="nowrap" class="' . ((isset($this->_tpldata['stats_row.'][$_stats_row_i]['C_CURRENT'])) ? $this->_tpldata['stats_row.'][$_stats_row_i]['C_CURRENT'] : '') . '">' . ((isset($this->_tpldata['stats_row.'][$_stats_row_i]['CURRENT'])) ? $this->_tpldata['stats_row.'][$_stats_row_i]['CURRENT'] : '') . '</td>
  </tr>
  ';}}
// END stats_row
echo '
  <tr>
    <th colspan="14" class="footer">' . ((isset($this->_tpldata['.'][0]['STATS_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['STATS_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
<br />
<a name="classes" />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" width="100%">' . ((isset($this->_tpldata['.'][0]['L_CLASS'])) ? $this->_tpldata['.'][0]['L_CLASS'] : ((isset($user->lang['CLASS'])) ? $user->lang['CLASS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CLASS'))) . ' 	}')) . '</th>
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
    <td width="100%"><a href="' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['U_LIST_MEMBERS'])) ? $this->_tpldata['class_row.'][$_class_row_i]['U_LIST_MEMBERS'] : '') . '" class="' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['LINK_CLASS'])) ? $this->_tpldata['class_row.'][$_class_row_i]['LINK_CLASS'] : '') . '">' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['CLASS'])) ? $this->_tpldata['class_row.'][$_class_row_i]['CLASS'] : '') . '</a></td>
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
</table>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>