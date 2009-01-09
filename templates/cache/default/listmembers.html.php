<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
// IF S_COMPARE
if ($this->_tpldata['.'][0]['S_COMPARE']) { 
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" width="100%" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_COMPARE_MEMBERS'])) ? $this->_tpldata['.'][0]['U_COMPARE_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_NAME'])) ? $this->_tpldata['.'][0]['O_NAME'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</a></th>
    <th align="left" width="40" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_COMPARE_MEMBERS'])) ? $this->_tpldata['.'][0]['U_COMPARE_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_LEVEL'])) ? $this->_tpldata['.'][0]['O_LEVEL'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_LEVEL'])) ? $this->_tpldata['.'][0]['L_LEVEL'] : ((isset($user->lang['LEVEL'])) ? $user->lang['LEVEL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LEVEL'))) . ' 	}')) . '</a></th>
    <th align="left" width="100" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_COMPARE_MEMBERS'])) ? $this->_tpldata['.'][0]['U_COMPARE_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_CLASS'])) ? $this->_tpldata['.'][0]['O_CLASS'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_CLASS'])) ? $this->_tpldata['.'][0]['L_CLASS'] : ((isset($user->lang['CLASS'])) ? $user->lang['CLASS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CLASS'))) . ' 	}')) . '</a></th>
    <th align="left" width="65" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_COMPARE_MEMBERS'])) ? $this->_tpldata['.'][0]['U_COMPARE_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_EARNED'])) ? $this->_tpldata['.'][0]['O_EARNED'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_EARNED'])) ? $this->_tpldata['.'][0]['L_EARNED'] : ((isset($user->lang['EARNED'])) ? $user->lang['EARNED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EARNED'))) . ' 	}')) . '</a></th>
    <th align="left" width="65" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_COMPARE_MEMBERS'])) ? $this->_tpldata['.'][0]['U_COMPARE_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_SPENT'])) ? $this->_tpldata['.'][0]['O_SPENT'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_SPENT'])) ? $this->_tpldata['.'][0]['L_SPENT'] : ((isset($user->lang['SPENT'])) ? $user->lang['SPENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPENT'))) . ' 	}')) . '</a></th>
    <th align="left" width="90" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_COMPARE_MEMBERS'])) ? $this->_tpldata['.'][0]['U_COMPARE_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['O_ADJUSTMENT'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['L_ADJUSTMENT'] : ((isset($user->lang['ADJUSTMENT'])) ? $user->lang['ADJUSTMENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADJUSTMENT'))) . ' 	}')) . '</a></th>
    <th align="left" width="60" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_COMPARE_MEMBERS'])) ? $this->_tpldata['.'][0]['U_COMPARE_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_CURRENT'])) ? $this->_tpldata['.'][0]['O_CURRENT'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_CURRENT'])) ? $this->_tpldata['.'][0]['L_CURRENT'] : ((isset($user->lang['CURRENT'])) ? $user->lang['CURRENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURRENT'))) . ' 	}')) . '</a></th>
    <th align="left" width="70" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_COMPARE_MEMBERS'])) ? $this->_tpldata['.'][0]['U_COMPARE_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_LASTRAID'])) ? $this->_tpldata['.'][0]['O_LASTRAID'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_LASTRAID'])) ? $this->_tpldata['.'][0]['L_LASTRAID'] : ((isset($user->lang['LASTRAID'])) ? $user->lang['LASTRAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LASTRAID'))) . ' 	}')) . '</a></th>
    <th align="left" width="70" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_LASTLOOT'])) ? $this->_tpldata['.'][0]['L_LASTLOOT'] : ((isset($user->lang['LASTLOOT'])) ? $user->lang['LASTLOOT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LASTLOOT'))) . ' 	}')) . '</th>
    <th align="left" width="100" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_RAIDS_30_DAYS'])) ? $this->_tpldata['.'][0]['L_RAIDS_30_DAYS'] : ((isset($user->lang['RAIDS_30_DAYS'])) ? $user->lang['RAIDS_30_DAYS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_30_DAYS'))) . ' 	}')) . '</th>
    <th align="left" width="100" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_RAIDS_90_DAYS'])) ? $this->_tpldata['.'][0]['L_RAIDS_90_DAYS'] : ((isset($user->lang['RAIDS_90_DAYS'])) ? $user->lang['RAIDS_90_DAYS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_90_DAYS'))) . ' 	}')) . '</th>
  </tr>
  ';// BEGIN members_row
$_members_row_count = (isset($this->_tpldata['members_row.'])) ?  sizeof($this->_tpldata['members_row.']) : 0;
if ($_members_row_count) {
for ($_members_row_i = 0; $_members_row_i < $_members_row_count; $_members_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ROW_CLASS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ROW_CLASS'] : '') . '">
    <td width="100%" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['U_VIEW_MEMBER'])) ? $this->_tpldata['members_row.'][$_members_row_i]['U_VIEW_MEMBER'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['NAME'])) ? $this->_tpldata['members_row.'][$_members_row_i]['NAME'] : '') . '</a></td>
    <td width="40" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['LEVEL'])) ? $this->_tpldata['members_row.'][$_members_row_i]['LEVEL'] : '') . '</td>
    <td width="100" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CLASS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CLASS'] : '') . '</td>
    <td width="65" nowrap="nowrap" class="positive">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['EARNED'])) ? $this->_tpldata['members_row.'][$_members_row_i]['EARNED'] : '') . '</td>
    <td width="65" nowrap="nowrap" class="negative">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['SPENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['SPENT'] : '') . '</td>
    <td width="90" nowrap="nowrap" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_ADJUSTMENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_ADJUSTMENT'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ADJUSTMENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ADJUSTMENT'] : '') . '</td>
    <td width="60" nowrap="nowrap" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_CURRENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_CURRENT'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CURRENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CURRENT'] : '') . '</td>
    <td width="70" nowrap="nowrap" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_LASTRAID'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_LASTRAID'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['LASTRAID'])) ? $this->_tpldata['members_row.'][$_members_row_i]['LASTRAID'] : '') . '</td>
    <td width="70" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['LASTLOOT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['LASTLOOT'] : '') . '</td>
    <td width="100" nowrap="nowrap" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_RAIDS_30_DAYS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_RAIDS_30_DAYS'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['RAIDS_30_DAYS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['RAIDS_30_DAYS'] : '') . '</td>
    <td width="100" nowrap="nowrap" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_RAIDS_90_DAYS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_RAIDS_90_DAYS'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['RAIDS_90_DAYS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['RAIDS_90_DAYS'] : '') . '</td>
  </tr>
  ';}}
// END members_row
echo '
  <tr>
    <th colspan="11" class="footer">' . ((isset($this->_tpldata['.'][0]['LISTMEMBERS_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['LISTMEMBERS_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
';// ELSE
} else {
// IF S_NOTMM
if ($this->_tpldata['.'][0]['S_NOTMM']) { 
echo '
<form method="get" action="' . ((isset($this->_tpldata['.'][0]['F_MEMBERS'])) ? $this->_tpldata['.'][0]['F_MEMBERS'] : '') . '">
<input type="hidden" name="' . ((isset($this->_tpldata['.'][0]['URI_SESSION'])) ? $this->_tpldata['.'][0]['URI_SESSION'] : '') . '" value="' . ((isset($this->_tpldata['.'][0]['V_SID'])) ? $this->_tpldata['.'][0]['V_SID'] : '') . '" />
<table width="100%" border="0" cellspacing="1" cellpadding="2" style="border-bottom: none">
  <tr>
    <th align="right" width="56" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_FILTER'])) ? $this->_tpldata['.'][0]['L_FILTER'] : ((isset($user->lang['FILTER'])) ? $user->lang['FILTER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FILTER'))) . ' 	}')) . ':</th>
    <th align="left">&nbsp;
      <select name="filter" class="input" onchange="javascript:form.submit();">
        ';// BEGIN filter_row
$_filter_row_count = (isset($this->_tpldata['filter_row.'])) ?  sizeof($this->_tpldata['filter_row.']) : 0;
if ($_filter_row_count) {
for ($_filter_row_i = 0; $_filter_row_i < $_filter_row_count; $_filter_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['filter_row.'][$_filter_row_i]['VALUE'])) ? $this->_tpldata['filter_row.'][$_filter_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['filter_row.'][$_filter_row_i]['SELECTED'])) ? $this->_tpldata['filter_row.'][$_filter_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['filter_row.'][$_filter_row_i]['OPTION'])) ? $this->_tpldata['filter_row.'][$_filter_row_i]['OPTION'] : '') . '</option>
        ';}}
// END filter_row
echo '
      </select>
    </th>
  </tr>
</table>
</form>
';// ENDIF
}
echo '
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_MEMBERS'])) ? $this->_tpldata['.'][0]['F_MEMBERS'] : '') . '" name="post">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" width="20" nowrap="nowrap">&nbsp;</th>
    <th align="left" width="35" nowrap="nowrap">&nbsp;</th>
    <th align="left" width="100%"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_NAME'])) ? $this->_tpldata['.'][0]['O_NAME'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</a></th>
    <th align="left" width="100"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_RANK'])) ? $this->_tpldata['.'][0]['O_RANK'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_RANK'])) ? $this->_tpldata['.'][0]['L_RANK'] : ((isset($user->lang['RANK'])) ? $user->lang['RANK'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RANK'))) . ' 	}')) . '</a></th>
    <th align="left" width="40" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_LEVEL'])) ? $this->_tpldata['.'][0]['O_LEVEL'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_LEVEL'])) ? $this->_tpldata['.'][0]['L_LEVEL'] : ((isset($user->lang['LEVEL'])) ? $user->lang['LEVEL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LEVEL'))) . ' 	}')) . '</a></th>
    <th align="left" width="100" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_CLASS'])) ? $this->_tpldata['.'][0]['O_CLASS'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_CLASS'])) ? $this->_tpldata['.'][0]['L_CLASS'] : ((isset($user->lang['CLASS'])) ? $user->lang['CLASS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CLASS'))) . ' 	}')) . '</a></th>
    <th align="left" width="80" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_EARNED'])) ? $this->_tpldata['.'][0]['O_EARNED'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_EARNED'])) ? $this->_tpldata['.'][0]['L_EARNED'] : ((isset($user->lang['EARNED'])) ? $user->lang['EARNED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EARNED'))) . ' 	}')) . '</a></th>
    <th align="left" width="80" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_SPENT'])) ? $this->_tpldata['.'][0]['O_SPENT'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_SPENT'])) ? $this->_tpldata['.'][0]['L_SPENT'] : ((isset($user->lang['SPENT'])) ? $user->lang['SPENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SPENT'))) . ' 	}')) . '</a></th>
    <th align="left" width="90" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['O_ADJUSTMENT'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['L_ADJUSTMENT'] : ((isset($user->lang['ADJUSTMENT'])) ? $user->lang['ADJUSTMENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADJUSTMENT'))) . ' 	}')) . '</a></th>
    <th align="left" width="80" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_CURRENT'])) ? $this->_tpldata['.'][0]['O_CURRENT'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_CURRENT'])) ? $this->_tpldata['.'][0]['L_CURRENT'] : ((isset($user->lang['CURRENT'])) ? $user->lang['CURRENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CURRENT'))) . ' 	}')) . '</a></th>
    <th align="left" width="70" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_LASTRAID'])) ? $this->_tpldata['.'][0]['O_LASTRAID'] : '') . '' . ((isset($this->_tpldata['.'][0]['URI_ADDON'])) ? $this->_tpldata['.'][0]['URI_ADDON'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_LASTRAID'])) ? $this->_tpldata['.'][0]['L_LASTRAID'] : ((isset($user->lang['LASTRAID'])) ? $user->lang['LASTRAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LASTRAID'))) . ' 	}')) . '</a></th>
  </tr>
  ';// BEGIN members_row
$_members_row_count = (isset($this->_tpldata['members_row.'])) ?  sizeof($this->_tpldata['members_row.']) : 0;
if ($_members_row_count) {
for ($_members_row_i = 0; $_members_row_i < $_members_row_count; $_members_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ROW_CLASS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ROW_CLASS'] : '') . '">
    <td width="13" nowrap="nowrap" align="center"><input type="checkbox" name="compare_ids[]" value="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ID'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ID'] : '') . '" /></td>
    <td width="35" nowrap="nowrap" align="right">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['COUNT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['COUNT'] : '') . '</td>
    <td width="100%" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['U_VIEW_MEMBER'])) ? $this->_tpldata['members_row.'][$_members_row_i]['U_VIEW_MEMBER'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['NAME'])) ? $this->_tpldata['members_row.'][$_members_row_i]['NAME'] : '') . '</a></td>
    <td width="100" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['RANK'])) ? $this->_tpldata['members_row.'][$_members_row_i]['RANK'] : '') . '</td>
    <td width="40" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['LEVEL'])) ? $this->_tpldata['members_row.'][$_members_row_i]['LEVEL'] : '') . '</td>
    <td width="100" nowrap="nowrap">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CLASS'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CLASS'] : '') . '</td>
    <td width="65" nowrap="nowrap" class="positive">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['EARNED'])) ? $this->_tpldata['members_row.'][$_members_row_i]['EARNED'] : '') . '</td>
    <td width="65" nowrap="nowrap" class="negative">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['SPENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['SPENT'] : '') . '</td>
    <td width="90" nowrap="nowrap" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_ADJUSTMENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_ADJUSTMENT'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['ADJUSTMENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['ADJUSTMENT'] : '') . '</td>
    <td width="60" nowrap="nowrap" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_CURRENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_CURRENT'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['CURRENT'])) ? $this->_tpldata['members_row.'][$_members_row_i]['CURRENT'] : '') . '</td>
    <td width="70" nowrap="nowrap" class="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['C_LASTRAID'])) ? $this->_tpldata['members_row.'][$_members_row_i]['C_LASTRAID'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['LASTRAID'])) ? $this->_tpldata['members_row.'][$_members_row_i]['LASTRAID'] : '') . '</td>
  </tr>
  ';}}
// END members_row
echo '
  <tr>
    <th colspan="11" class="footer">' . ((isset($this->_tpldata['.'][0]['LISTMEMBERS_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['LISTMEMBERS_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
<br />
<center><input type="submit" name="' . ((isset($this->_tpldata['.'][0]['BUTTON_NAME'])) ? $this->_tpldata['.'][0]['BUTTON_NAME'] : '') . '" value="' . ((isset($this->_tpldata['.'][0]['BUTTON_VALUE'])) ? $this->_tpldata['.'][0]['BUTTON_VALUE'] : '') . '" class="liteoption" /></center>
</form>
';// ENDIF
}
// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>