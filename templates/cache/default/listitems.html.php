<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td align="center" class="menu">' . ((isset($this->_tpldata['.'][0]['ITEM_PAGINATION'])) ? $this->_tpldata['.'][0]['ITEM_PAGINATION'] : '') . '</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" width="70" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_ITEMS'])) ? $this->_tpldata['.'][0]['U_LIST_ITEMS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_DATE'])) ? $this->_tpldata['.'][0]['O_DATE'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . '</a></th>
    ';// IF S_HISTORY
if ($this->_tpldata['.'][0]['S_HISTORY']) { 
echo '<th align="left" width="100" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_ITEMS'])) ? $this->_tpldata['.'][0]['U_LIST_ITEMS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_BUYER'])) ? $this->_tpldata['.'][0]['O_BUYER'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_BUYER'])) ? $this->_tpldata['.'][0]['L_BUYER'] : ((isset($user->lang['BUYER'])) ? $user->lang['BUYER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUYER'))) . ' 	}')) . '</a></th>';// ENDIF
}
echo '
    <th align="left" width="65%"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_ITEMS'])) ? $this->_tpldata['.'][0]['U_LIST_ITEMS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_NAME'])) ? $this->_tpldata['.'][0]['O_NAME'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_ITEM'])) ? $this->_tpldata['.'][0]['L_ITEM'] : ((isset($user->lang['ITEM'])) ? $user->lang['ITEM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEM'))) . ' 	}')) . '</a></th>
    <th align="left" width="35%"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_ITEMS'])) ? $this->_tpldata['.'][0]['U_LIST_ITEMS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_RAID'])) ? $this->_tpldata['.'][0]['O_RAID'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_RAID'])) ? $this->_tpldata['.'][0]['L_RAID'] : ((isset($user->lang['RAID'])) ? $user->lang['RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAID'))) . ' 	}')) . '</a></th>
    <th align="left" width="60" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_ITEMS'])) ? $this->_tpldata['.'][0]['U_LIST_ITEMS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_VALUE'])) ? $this->_tpldata['.'][0]['O_VALUE'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . '</a></th>
  </tr>
  ';// BEGIN items_row
$_items_row_count = (isset($this->_tpldata['items_row.'])) ?  sizeof($this->_tpldata['items_row.']) : 0;
if ($_items_row_count) {
for ($_items_row_i = 0; $_items_row_i < $_items_row_count; $_items_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'])) ? $this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'] : '') . '">
    <td width="70" nowrap="nowrap">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['DATE'])) ? $this->_tpldata['items_row.'][$_items_row_i]['DATE'] : '') . '</td>
    ';// IF S_HISTORY
if ($this->_tpldata['.'][0]['S_HISTORY']) { 
echo '<td width="100" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_BUYER'])) ? $this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_BUYER'] : '') . '">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['BUYER'])) ? $this->_tpldata['items_row.'][$_items_row_i]['BUYER'] : '') . '</a></td>';// ENDIF
}
echo '
    <td width="65%"><a href="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_ITEM'])) ? $this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_ITEM'] : '') . '">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['NAME'])) ? $this->_tpldata['items_row.'][$_items_row_i]['NAME'] : '') . '</a></td>
    <td width="35%"><a href="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_RAID'])) ? $this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_RAID'] : '') . '">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['RAID'])) ? $this->_tpldata['items_row.'][$_items_row_i]['RAID'] : '') . '</a></td>
    <td width="60" nowrap="nowrap" class="negative">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['VALUE'])) ? $this->_tpldata['items_row.'][$_items_row_i]['VALUE'] : '') . '</td>
  </tr>
  ';}}
// END items_row
echo '
  <tr>
    <th colspan="5" class="footer">' . ((isset($this->_tpldata['.'][0]['LISTITEMS_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['LISTITEMS_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td align="center" class="menu">' . ((isset($this->_tpldata['.'][0]['ITEM_PAGINATION'])) ? $this->_tpldata['.'][0]['ITEM_PAGINATION'] : '') . '</td>
  </tr>
</table>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>