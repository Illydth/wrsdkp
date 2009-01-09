<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="4">
  <tr>
    <th align="left" width="16" nowrap="nowrap">&nbsp;</th>
    <th align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</th>
    <th align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_TEMPLATE'])) ? $this->_tpldata['.'][0]['L_TEMPLATE'] : ((isset($user->lang['TEMPLATE'])) ? $user->lang['TEMPLATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TEMPLATE'))) . ' 	}')) . '</th>
    <th align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_USERS'])) ? $this->_tpldata['.'][0]['L_USERS'] : ((isset($user->lang['USERS'])) ? $user->lang['USERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USERS'))) . ' 	}')) . '</th>
    <th align="left" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_PREVIEW'])) ? $this->_tpldata['.'][0]['L_PREVIEW'] : ((isset($user->lang['PREVIEW'])) ? $user->lang['PREVIEW'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PREVIEW'))) . ' 	}')) . '</th>
  </tr>
  ';// BEGIN styles_row
$_styles_row_count = (isset($this->_tpldata['styles_row.'])) ?  sizeof($this->_tpldata['styles_row.']) : 0;
if ($_styles_row_count) {
for ($_styles_row_i = 0; $_styles_row_i < $_styles_row_count; $_styles_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['styles_row.'][$_styles_row_i]['ROW_CLASS'])) ? $this->_tpldata['styles_row.'][$_styles_row_i]['ROW_CLASS'] : '') . '">
    <td width="16" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['styles_row.'][$_styles_row_i]['U_EDIT_STYLE'])) ? $this->_tpldata['styles_row.'][$_styles_row_i]['U_EDIT_STYLE'] : '') . '"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/glyphs/edit.gif" width="16" height="16" alt="Edit" /></a></td>
    <td nowrap="nowrap"><a href="' . ((isset($this->_tpldata['styles_row.'][$_styles_row_i]['U_EDIT_STYLE'])) ? $this->_tpldata['styles_row.'][$_styles_row_i]['U_EDIT_STYLE'] : '') . '">' . ((isset($this->_tpldata['styles_row.'][$_styles_row_i]['NAME'])) ? $this->_tpldata['styles_row.'][$_styles_row_i]['NAME'] : '') . '</a></td>
    <td nowrap="nowrap">' . ((isset($this->_tpldata['styles_row.'][$_styles_row_i]['TEMPLATE'])) ? $this->_tpldata['styles_row.'][$_styles_row_i]['TEMPLATE'] : '') . '</td>
    <td nowrap="nowrap">' . ((isset($this->_tpldata['styles_row.'][$_styles_row_i]['USERS'])) ? $this->_tpldata['styles_row.'][$_styles_row_i]['USERS'] : '') . '</td>
    <td nowrap="nowrap"><a href="' . ((isset($this->_tpldata['styles_row.'][$_styles_row_i]['U_PREVIEW'])) ? $this->_tpldata['styles_row.'][$_styles_row_i]['U_PREVIEW'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_PREVIEW'])) ? $this->_tpldata['.'][0]['L_PREVIEW'] : ((isset($user->lang['PREVIEW'])) ? $user->lang['PREVIEW'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PREVIEW'))) . ' 	}')) . '</a></td>
  </tr>
  ';}}
// END styles_row
echo '
</table>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>