<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td align="center" class="menu">' . ((isset($this->_tpldata['.'][0]['ADJUSTMENT_PAGINATION'])) ? $this->_tpldata['.'][0]['ADJUSTMENT_PAGINATION'] : '') . '</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="2">
';// IF S_GROUP_ADJ
if ($this->_tpldata['.'][0]['S_GROUP_ADJ']) { 
echo '
  <tr>
    <th align="center" width="16" nowrap="nowrap">&nbsp;</th>
    <th align="left" width="70" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_ADJUSTMENTS'])) ? $this->_tpldata['.'][0]['U_LIST_ADJUSTMENTS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_DATE'])) ? $this->_tpldata['.'][0]['O_DATE'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . '</a></th>
    <th align="left" width="90" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_ADJUSTMENTS'])) ? $this->_tpldata['.'][0]['U_LIST_ADJUSTMENTS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['O_ADJUSTMENT'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['L_ADJUSTMENT'] : ((isset($user->lang['ADJUSTMENT'])) ? $user->lang['ADJUSTMENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADJUSTMENT'))) . ' 	}')) . '</a></th>
    <th align="left" width="100%"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_ADJUSTMENTS'])) ? $this->_tpldata['.'][0]['U_LIST_ADJUSTMENTS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_ADDED_BY'])) ? $this->_tpldata['.'][0]['O_ADDED_BY'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_ADDED_BY'])) ? $this->_tpldata['.'][0]['L_ADDED_BY'] : ((isset($user->lang['ADDED_BY'])) ? $user->lang['ADDED_BY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDED_BY'))) . ' 	}')) . '</a></th>
  </tr>
  ';// BEGIN adjustments_row
$_adjustments_row_count = (isset($this->_tpldata['adjustments_row.'])) ?  sizeof($this->_tpldata['adjustments_row.']) : 0;
if ($_adjustments_row_count) {
for ($_adjustments_row_i = 0; $_adjustments_row_i < $_adjustments_row_count; $_adjustments_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['ROW_CLASS'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['ROW_CLASS'] : '') . '">
    <td width="16" nowrap="nowrap" align="center"><a href="' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['U_ADD_ADJUSTMENT'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['U_ADD_ADJUSTMENT'] : '') . '"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/glyphs/edit.gif" width="16" height="16" alt="Edit" /></a></td>
    <td width="70" nowrap="nowrap">' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['DATE'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['DATE'] : '') . '</td>
    <td width="90" nowrap="nowrap" class="' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['C_ADJUSTMENT'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['C_ADJUSTMENT'] : '') . '">' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['ADJUSTMENT'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['ADJUSTMENT'] : '') . '</td>
    <td width="100%">' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['ADDED_BY'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['ADDED_BY'] : '') . '</td>
  </tr>
  ';}}
// END adjustments_row
echo '
  <tr>
    <th colspan="4" class="footer">' . ((isset($this->_tpldata['.'][0]['LISTADJ_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['LISTADJ_FOOTCOUNT'] : '') . '</th>
  </tr>
';// ELSE
} else {
echo '
  <tr class="rowhead">
    <th align="center" width="16" nowrap="nowrap">&nbsp;</th>
    <th align="left" width="70" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_ADJUSTMENTS'])) ? $this->_tpldata['.'][0]['U_LIST_ADJUSTMENTS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_DATE'])) ? $this->_tpldata['.'][0]['O_DATE'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . '</a></th>
    <th align="left" width="150" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_ADJUSTMENTS'])) ? $this->_tpldata['.'][0]['U_LIST_ADJUSTMENTS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_MEMBER'])) ? $this->_tpldata['.'][0]['O_MEMBER'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_MEMBER'])) ? $this->_tpldata['.'][0]['L_MEMBER'] : ((isset($user->lang['MEMBER'])) ? $user->lang['MEMBER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MEMBER'))) . ' 	}')) . '</a></th>
    <th align="left" width="100%"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_ADJUSTMENTS'])) ? $this->_tpldata['.'][0]['U_LIST_ADJUSTMENTS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_REASON'])) ? $this->_tpldata['.'][0]['O_REASON'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_REASON'])) ? $this->_tpldata['.'][0]['L_REASON'] : ((isset($user->lang['REASON'])) ? $user->lang['REASON'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REASON'))) . ' 	}')) . '</a></th>
    <th align="left" width="90" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_ADJUSTMENTS'])) ? $this->_tpldata['.'][0]['U_LIST_ADJUSTMENTS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['O_ADJUSTMENT'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['L_ADJUSTMENT'] : ((isset($user->lang['ADJUSTMENT'])) ? $user->lang['ADJUSTMENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADJUSTMENT'))) . ' 	}')) . '</a></th>
  </tr>
  ';// BEGIN adjustments_row
$_adjustments_row_count = (isset($this->_tpldata['adjustments_row.'])) ?  sizeof($this->_tpldata['adjustments_row.']) : 0;
if ($_adjustments_row_count) {
for ($_adjustments_row_i = 0; $_adjustments_row_i < $_adjustments_row_count; $_adjustments_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['ROW_CLASS'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['ROW_CLASS'] : '') . '">
    <td width="16" nowrap="nowrap" align="center"><a href="' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['U_ADD_ADJUSTMENT'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['U_ADD_ADJUSTMENT'] : '') . '"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/glyphs/edit.gif" width="16" height="16" alt="Edit" /></a></td>
    <td width="70" nowrap="nowrap">' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['DATE'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['DATE'] : '') . '</td>
    <td width="150" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['U_VIEW_MEMBER'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['U_VIEW_MEMBER'] : '') . '">' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['MEMBER'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['MEMBER'] : '') . '</a></td>
    <td width="100%">' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['REASON'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['REASON'] : '') . '</td>
    <td width="90" nowrap="nowrap" class="' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['C_ADJUSTMENT'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['C_ADJUSTMENT'] : '') . '">' . ((isset($this->_tpldata['adjustments_row.'][$_adjustments_row_i]['ADJUSTMENT'])) ? $this->_tpldata['adjustments_row.'][$_adjustments_row_i]['ADJUSTMENT'] : '') . '</td>
  </tr>
  ';}}
// END adjustments_row
echo ' 
  <tr>
    <th colspan="5" class="footer">' . ((isset($this->_tpldata['.'][0]['LISTADJ_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['LISTADJ_FOOTCOUNT'] : '') . '</th>
  </tr>
';// ENDIF
}
echo '

</table>
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td align="center" class="menu">' . ((isset($this->_tpldata['.'][0]['ADJUSTMENT_PAGINATION'])) ? $this->_tpldata['.'][0]['ADJUSTMENT_PAGINATION'] : '') . '</td>
  </tr>
</table>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>