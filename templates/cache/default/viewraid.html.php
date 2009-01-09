<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_MEMBERS_PRESENT_AT'])) ? $this->_tpldata['.'][0]['L_MEMBERS_PRESENT_AT'] : ((isset($user->lang['MEMBERS_PRESENT_AT'])) ? $user->lang['MEMBERS_PRESENT_AT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MEMBERS_PRESENT_AT'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td class="row2" width="50%"><b>' . ((isset($this->_tpldata['.'][0]['L_ADDED_BY'])) ? $this->_tpldata['.'][0]['L_ADDED_BY'] : ((isset($user->lang['ADDED_BY'])) ? $user->lang['ADDED_BY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDED_BY'))) . ' 	}')) . ':</b> ' . ((isset($this->_tpldata['.'][0]['RAID_ADDED_BY'])) ? $this->_tpldata['.'][0]['RAID_ADDED_BY'] : '') . '</td>
    <td class="row1" width="50%"><b>' . ((isset($this->_tpldata['.'][0]['L_UPDATED_BY'])) ? $this->_tpldata['.'][0]['L_UPDATED_BY'] : ((isset($user->lang['UPDATED_BY'])) ? $user->lang['UPDATED_BY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPDATED_BY'))) . ' 	}')) . ':</b> ' . ((isset($this->_tpldata['.'][0]['RAID_UPDATED_BY'])) ? $this->_tpldata['.'][0]['RAID_UPDATED_BY'] : '') . '</td>
  </tr>
  <tr>
    <td class="row2" width="50%"><b>' . ((isset($this->_tpldata['.'][0]['L_NOTE'])) ? $this->_tpldata['.'][0]['L_NOTE'] : ((isset($user->lang['NOTE'])) ? $user->lang['NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NOTE'))) . ' 	}')) . ':</b> ' . ((isset($this->_tpldata['.'][0]['RAID_NOTE'])) ? $this->_tpldata['.'][0]['RAID_NOTE'] : '') . '</td>
    <td class="row1" width="50%"><b>' . ((isset($this->_tpldata['.'][0]['DKP_NAME'])) ? $this->_tpldata['.'][0]['DKP_NAME'] : '') . ' ' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . ':</b> <span class="positive">' . ((isset($this->_tpldata['.'][0]['RAID_VALUE'])) ? $this->_tpldata['.'][0]['RAID_VALUE'] : '') . '</span></td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="' . ((isset($this->_tpldata['.'][0]['COLSPAN'])) ? $this->_tpldata['.'][0]['COLSPAN'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_ATTENDEES'])) ? $this->_tpldata['.'][0]['L_ATTENDEES'] : ((isset($user->lang['ATTENDEES'])) ? $user->lang['ATTENDEES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ATTENDEES'))) . ' 	}')) . '</th>
  </tr>
  ';// BEGIN attendees_row
$_attendees_row_count = (isset($this->_tpldata['attendees_row.'])) ?  sizeof($this->_tpldata['attendees_row.']) : 0;
if ($_attendees_row_count) {
for ($_attendees_row_i = 0; $_attendees_row_i < $_attendees_row_count; $_attendees_row_i++)
{
echo '
  <tr>
    ';// IF S_COLUMN0
if ($this->_tpldata['.'][0]['S_COLUMN0']) { 
echo '<td class="row2" width="' . ((isset($this->_tpldata['.'][0]['COLUMN_WIDTH'])) ? $this->_tpldata['.'][0]['COLUMN_WIDTH'] : '') . '%" nowrap="nowrap">' . ((isset($this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN0_NAME'])) ? $this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN0_NAME'] : '') . '</td>';// ENDIF
}
// IF S_COLUMN1
if ($this->_tpldata['.'][0]['S_COLUMN1']) { 
echo '<td class="row1" width="' . ((isset($this->_tpldata['.'][0]['COLUMN_WIDTH'])) ? $this->_tpldata['.'][0]['COLUMN_WIDTH'] : '') . '%" nowrap="nowrap">' . ((isset($this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN1_NAME'])) ? $this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN1_NAME'] : '') . '</td>';// ENDIF
}
// IF S_COLUMN2
if ($this->_tpldata['.'][0]['S_COLUMN2']) { 
echo '<td class="row2" width="' . ((isset($this->_tpldata['.'][0]['COLUMN_WIDTH'])) ? $this->_tpldata['.'][0]['COLUMN_WIDTH'] : '') . '%" nowrap="nowrap">' . ((isset($this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN2_NAME'])) ? $this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN2_NAME'] : '') . '</td>';// ENDIF
}
// IF S_COLUMN3
if ($this->_tpldata['.'][0]['S_COLUMN3']) { 
echo '<td class="row1" width="' . ((isset($this->_tpldata['.'][0]['COLUMN_WIDTH'])) ? $this->_tpldata['.'][0]['COLUMN_WIDTH'] : '') . '%" nowrap="nowrap">' . ((isset($this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN3_NAME'])) ? $this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN3_NAME'] : '') . '</td>';// ENDIF
}
// IF S_COLUMN4
if ($this->_tpldata['.'][0]['S_COLUMN4']) { 
echo '<td class="row2" width="' . ((isset($this->_tpldata['.'][0]['COLUMN_WIDTH'])) ? $this->_tpldata['.'][0]['COLUMN_WIDTH'] : '') . '%" nowrap="nowrap">' . ((isset($this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN4_NAME'])) ? $this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN4_NAME'] : '') . '</td>';// ENDIF
}
// IF S_COLUMN5
if ($this->_tpldata['.'][0]['S_COLUMN5']) { 
echo '<td class="row1" width="' . ((isset($this->_tpldata['.'][0]['COLUMN_WIDTH'])) ? $this->_tpldata['.'][0]['COLUMN_WIDTH'] : '') . '%" nowrap="nowrap">' . ((isset($this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN5_NAME'])) ? $this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN5_NAME'] : '') . '</td>';// ENDIF
}
// IF S_COLUMN6
if ($this->_tpldata['.'][0]['S_COLUMN6']) { 
echo '<td class="row2" width="' . ((isset($this->_tpldata['.'][0]['COLUMN_WIDTH'])) ? $this->_tpldata['.'][0]['COLUMN_WIDTH'] : '') . '%" nowrap="nowrap">' . ((isset($this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN6_NAME'])) ? $this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN6_NAME'] : '') . '</td>';// ENDIF
}
// IF S_COLUMN7
if ($this->_tpldata['.'][0]['S_COLUMN7']) { 
echo '<td class="row1" width="' . ((isset($this->_tpldata['.'][0]['COLUMN_WIDTH'])) ? $this->_tpldata['.'][0]['COLUMN_WIDTH'] : '') . '%" nowrap="nowrap">' . ((isset($this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN7_NAME'])) ? $this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN7_NAME'] : '') . '</td>';// ENDIF
}
// IF S_COLUMN8
if ($this->_tpldata['.'][0]['S_COLUMN8']) { 
echo '<td class="row2" width="' . ((isset($this->_tpldata['.'][0]['COLUMN_WIDTH'])) ? $this->_tpldata['.'][0]['COLUMN_WIDTH'] : '') . '%" nowrap="nowrap">' . ((isset($this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN8_NAME'])) ? $this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN8_NAME'] : '') . '</td>';// ENDIF
}
// IF S_COLUMN9
if ($this->_tpldata['.'][0]['S_COLUMN9']) { 
echo '<td class="row1" width="' . ((isset($this->_tpldata['.'][0]['COLUMN_WIDTH'])) ? $this->_tpldata['.'][0]['COLUMN_WIDTH'] : '') . '%" nowrap="nowrap">' . ((isset($this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN9_NAME'])) ? $this->_tpldata['attendees_row.'][$_attendees_row_i]['COLUMN9_NAME'] : '') . '</td>';// ENDIF
}
echo '
  </tr>
  ';}}
// END attendees_row
echo '
  <tr>
    <th colspan="' . ((isset($this->_tpldata['.'][0]['COLSPAN'])) ? $this->_tpldata['.'][0]['COLSPAN'] : '') . '" class="footer">' . ((isset($this->_tpldata['.'][0]['ATTENDEES_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['ATTENDEES_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="3">' . ((isset($this->_tpldata['.'][0]['L_DROPS'])) ? $this->_tpldata['.'][0]['L_DROPS'] : ((isset($user->lang['DROPS'])) ? $user->lang['DROPS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DROPS'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <th align="left" width="100" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_BUYER'])) ? $this->_tpldata['.'][0]['L_BUYER'] : ((isset($user->lang['BUYER'])) ? $user->lang['BUYER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUYER'))) . ' 	}')) . '</th>
    <th align="left" width="100%">' . ((isset($this->_tpldata['.'][0]['L_ITEM'])) ? $this->_tpldata['.'][0]['L_ITEM'] : ((isset($user->lang['ITEM'])) ? $user->lang['ITEM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEM'))) . ' 	}')) . '</th>
    <th align="left" width="60" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_SPENT'])) ? $this->_tpldata['.'][0]['L_SPENT'] : ((isset($user->lang['SPENT'])) ? $user->lang['SPENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPENT'))) . ' 	}')) . '</th>
  </tr>
  ';// BEGIN items_row
$_items_row_count = (isset($this->_tpldata['items_row.'])) ?  sizeof($this->_tpldata['items_row.']) : 0;
if ($_items_row_count) {
for ($_items_row_i = 0; $_items_row_i < $_items_row_count; $_items_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'])) ? $this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'] : '') . '">
    <td width="100" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_BUYER'])) ? $this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_BUYER'] : '') . '">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['BUYER'])) ? $this->_tpldata['items_row.'][$_items_row_i]['BUYER'] : '') . '</a></td>
    <td width="100%"><a href="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_ITEM'])) ? $this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_ITEM'] : '') . '">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['NAME'])) ? $this->_tpldata['items_row.'][$_items_row_i]['NAME'] : '') . '</a></td>
    <td width="60" class="negative">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['VALUE'])) ? $this->_tpldata['items_row.'][$_items_row_i]['VALUE'] : '') . '</td>
  </tr>
  ';}}
// END items_row
echo '
  <tr>
    <th colspan="3" class="footer">' . ((isset($this->_tpldata['.'][0]['ITEM_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['ITEM_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="3">' . ((isset($this->_tpldata['.'][0]['L_CLASS_DISTRIBUTION'])) ? $this->_tpldata['.'][0]['L_CLASS_DISTRIBUTION'] : ((isset($user->lang['CLASS_DISTRIBUTION'])) ? $user->lang['CLASS_DISTRIBUTION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CLASS_DISTRIBUTION'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <th align="left" width="100">' . ((isset($this->_tpldata['.'][0]['L_CLASS'])) ? $this->_tpldata['.'][0]['L_CLASS'] : ((isset($user->lang['CLASS'])) ? $user->lang['CLASS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CLASS'))) . ' 	}')) . '</th>
    <th align="left" width="50%">' . ((isset($this->_tpldata['.'][0]['L_PERCENT'])) ? $this->_tpldata['.'][0]['L_PERCENT'] : ((isset($user->lang['PERCENT'])) ? $user->lang['PERCENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PERCENT'))) . ' 	}')) . '</th>
    <th align="left" width="50%">' . ((isset($this->_tpldata['.'][0]['L_ATTENDEES'])) ? $this->_tpldata['.'][0]['L_ATTENDEES'] : ((isset($user->lang['ATTENDEES'])) ? $user->lang['ATTENDEES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ATTENDEES'))) . ' 	}')) . '</th>
  </tr>
  ';// BEGIN class_row
$_class_row_count = (isset($this->_tpldata['class_row.'])) ?  sizeof($this->_tpldata['class_row.']) : 0;
if ($_class_row_count) {
for ($_class_row_i = 0; $_class_row_i < $_class_row_count; $_class_row_i++)
{
echo '
  <tr>
    <td width="100" nowrap="nowrap" class="row2">' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['CLASS'])) ? $this->_tpldata['class_row.'][$_class_row_i]['CLASS'] : '') . '</td>
    <td width="50%" class="row1">' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['BAR'])) ? $this->_tpldata['class_row.'][$_class_row_i]['BAR'] : '') . '</td>
    <td width="50%" class="row2"><span class="small">' . ((isset($this->_tpldata['class_row.'][$_class_row_i]['ATTENDEES'])) ? $this->_tpldata['class_row.'][$_class_row_i]['ATTENDEES'] : '') . '</span></td>
  </tr>
  ';}}
// END class_row
echo '
</table>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>