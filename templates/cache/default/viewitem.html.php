<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr class="rowhead">
    <th align="center" colspan="4">' . ((isset($this->_tpldata['.'][0]['L_PURCHASE_HISTORY_FOR'])) ? $this->_tpldata['.'][0]['L_PURCHASE_HISTORY_FOR'] : ((isset($user->lang['PURCHASE_HISTORY_FOR'])) ? $user->lang['PURCHASE_HISTORY_FOR'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PURCHASE_HISTORY_FOR'))) . ' 	}')) . '</th>
  </tr>
  ';// IF S_STATS
if ($this->_tpldata['.'][0]['S_STATS']) { 
echo '
  <tr>
    <td class="row1" height="0" colspan="4" align="center">
      <iframe name="item_stats" src="' . ((isset($this->_tpldata['.'][0]['U_VIEW_STATS'])) ? $this->_tpldata['.'][0]['U_VIEW_STATS'] : '') . '" width="451" height="183" scrolling="no" frameborder="0"></iframe>
    </td>
  </tr>
  ';// ENDIF
}
echo '
  <tr>
    <th align="left" width="70" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_VIEW_ITEM'])) ? $this->_tpldata['.'][0]['U_VIEW_ITEM'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_DATE'])) ? $this->_tpldata['.'][0]['O_DATE'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . '</a></th>
    <th align="left" width="35%"><a href="' . ((isset($this->_tpldata['.'][0]['U_VIEW_ITEM'])) ? $this->_tpldata['.'][0]['U_VIEW_ITEM'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_BUYER'])) ? $this->_tpldata['.'][0]['O_BUYER'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_BUYER'])) ? $this->_tpldata['.'][0]['L_BUYER'] : ((isset($user->lang['BUYER'])) ? $user->lang['BUYER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUYER'))) . ' 	}')) . '</a></th>
    <th align="left" width="65%" class="header">' . ((isset($this->_tpldata['.'][0]['L_RAID'])) ? $this->_tpldata['.'][0]['L_RAID'] : ((isset($user->lang['RAID'])) ? $user->lang['RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAID'))) . ' 	}')) . '</th>
    <th align="left" width="60" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_VIEW_ITEM'])) ? $this->_tpldata['.'][0]['U_VIEW_ITEM'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_VALUE'])) ? $this->_tpldata['.'][0]['O_VALUE'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . '</a></th>
  </tr>
  ';// BEGIN items_row
$_items_row_count = (isset($this->_tpldata['items_row.'])) ?  sizeof($this->_tpldata['items_row.']) : 0;
if ($_items_row_count) {
for ($_items_row_i = 0; $_items_row_i < $_items_row_count; $_items_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'])) ? $this->_tpldata['items_row.'][$_items_row_i]['ROW_CLASS'] : '') . '">
    <td width="70" nowrap="nowrap">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['DATE'])) ? $this->_tpldata['items_row.'][$_items_row_i]['DATE'] : '') . '</td>
    <td width="35%"><a href="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_BUYER'])) ? $this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_BUYER'] : '') . '">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['BUYER'])) ? $this->_tpldata['items_row.'][$_items_row_i]['BUYER'] : '') . '</a></td>
    <td width="65%"><a href="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_RAID'])) ? $this->_tpldata['items_row.'][$_items_row_i]['U_VIEW_RAID'] : '') . '">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['RAID'])) ? $this->_tpldata['items_row.'][$_items_row_i]['RAID'] : '') . '</a></td>
    <td width="60" nowrap="nowrap" class="negative">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['VALUE'])) ? $this->_tpldata['items_row.'][$_items_row_i]['VALUE'] : '') . '</td>
  </tr>
  ';}}
// END items_row
echo '
  <tr>
    <th colspan="4" class="footer">' . ((isset($this->_tpldata['.'][0]['VIEWITEM_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['VIEWITEM_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>