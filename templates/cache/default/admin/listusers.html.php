<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_MASS_UPDATE'])) ? $this->_tpldata['.'][0]['F_MASS_UPDATE'] : '') . '" name="post">
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td align="center" class="menu">' . ((isset($this->_tpldata['.'][0]['USER_PAGINATION'])) ? $this->_tpldata['.'][0]['USER_PAGINATION'] : '') . '</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="6">' . ((isset($this->_tpldata['.'][0]['L_MANAGE_USERS'])) ? $this->_tpldata['.'][0]['L_MANAGE_USERS'] : ((isset($user->lang['MANAGE_USERS'])) ? $user->lang['MANAGE_USERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MANAGE_USERS'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <th align="center" width="25" nowrap="nowrap">&nbsp;</th>
    <th align="left" width="50%"><a href="' . ((isset($this->_tpldata['.'][0]['U_MANAGE_USERS'])) ? $this->_tpldata['.'][0]['U_MANAGE_USERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_USERNAME'])) ? $this->_tpldata['.'][0]['O_USERNAME'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_USERNAME'])) ? $this->_tpldata['.'][0]['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USERNAME'))) . ' 	}')) . '</a></th>
    <th align="left" width="50%"><a href="' . ((isset($this->_tpldata['.'][0]['U_MANAGE_USERS'])) ? $this->_tpldata['.'][0]['U_MANAGE_USERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_EMAIL'])) ? $this->_tpldata['.'][0]['O_EMAIL'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_EMAIL'])) ? $this->_tpldata['.'][0]['L_EMAIL'] : ((isset($user->lang['EMAIL'])) ? $user->lang['EMAIL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EMAIL'))) . ' 	}')) . '</a></th>
    <th align="left" width="150" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_MANAGE_USERS'])) ? $this->_tpldata['.'][0]['U_MANAGE_USERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_LAST_VISIT'])) ? $this->_tpldata['.'][0]['O_LAST_VISIT'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_LAST_VISIT'])) ? $this->_tpldata['.'][0]['L_LAST_VISIT'] : ((isset($user->lang['LAST_VISIT'])) ? $user->lang['LAST_VISIT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LAST_VISIT'))) . ' 	}')) . '</a></th>
    <th align="left" width="60" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_MANAGE_USERS'])) ? $this->_tpldata['.'][0]['U_MANAGE_USERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_ACTIVE'])) ? $this->_tpldata['.'][0]['O_ACTIVE'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_ACTIVE'])) ? $this->_tpldata['.'][0]['L_ACTIVE'] : ((isset($user->lang['ACTIVE'])) ? $user->lang['ACTIVE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ACTIVE'))) . ' 	}')) . '</a></th>
    <th align="left" width="60" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_MANAGE_USERS'])) ? $this->_tpldata['.'][0]['U_MANAGE_USERS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_ONLINE'])) ? $this->_tpldata['.'][0]['O_ONLINE'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_ONLINE'])) ? $this->_tpldata['.'][0]['L_ONLINE'] : ((isset($user->lang['ONLINE'])) ? $user->lang['ONLINE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ONLINE'))) . ' 	}')) . '</a></th>
  </tr>
  ';// BEGIN users_row
$_users_row_count = (isset($this->_tpldata['users_row.'])) ?  sizeof($this->_tpldata['users_row.']) : 0;
if ($_users_row_count) {
for ($_users_row_i = 0; $_users_row_i < $_users_row_count; $_users_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['users_row.'][$_users_row_i]['ROW_CLASS'])) ? $this->_tpldata['users_row.'][$_users_row_i]['ROW_CLASS'] : '') . '">
    <td width="25" align="center" nowrap="nowrap"><input type="checkbox" name="user_id[]" value="' . ((isset($this->_tpldata['users_row.'][$_users_row_i]['USER_ID'])) ? $this->_tpldata['users_row.'][$_users_row_i]['USER_ID'] : '') . '" /></td>
    <td width="50%"><a href="' . ((isset($this->_tpldata['users_row.'][$_users_row_i]['U_MANAGE_USER'])) ? $this->_tpldata['users_row.'][$_users_row_i]['U_MANAGE_USER'] : '') . '" style="' . ((isset($this->_tpldata['users_row.'][$_users_row_i]['NAME_STYLE'])) ? $this->_tpldata['users_row.'][$_users_row_i]['NAME_STYLE'] : '') . '">' . ((isset($this->_tpldata['users_row.'][$_users_row_i]['USERNAME'])) ? $this->_tpldata['users_row.'][$_users_row_i]['USERNAME'] : '') . '</a></td>
    <td width="50%"><a href="' . ((isset($this->_tpldata['users_row.'][$_users_row_i]['U_MAIL_USER'])) ? $this->_tpldata['users_row.'][$_users_row_i]['U_MAIL_USER'] : '') . '">' . ((isset($this->_tpldata['users_row.'][$_users_row_i]['EMAIL'])) ? $this->_tpldata['users_row.'][$_users_row_i]['EMAIL'] : '') . '</a></td>
    <td width="150" nowrap="nowrap">' . ((isset($this->_tpldata['users_row.'][$_users_row_i]['LAST_VISIT'])) ? $this->_tpldata['users_row.'][$_users_row_i]['LAST_VISIT'] : '') . '</td>
    <td width="60" nowrap="nowrap">' . ((isset($this->_tpldata['users_row.'][$_users_row_i]['ACTIVE'])) ? $this->_tpldata['users_row.'][$_users_row_i]['ACTIVE'] : '') . '</td>
    <td width="60" nowrap="nowrap">' . ((isset($this->_tpldata['users_row.'][$_users_row_i]['ONLINE'])) ? $this->_tpldata['users_row.'][$_users_row_i]['ONLINE'] : '') . '</td>
  </tr>
  ';}}
// END users_row
echo '
  <tr>
    <th colspan="6" class="footer">' . ((isset($this->_tpldata['.'][0]['LISTUSERS_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['LISTUSERS_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td align="center" class="menu">' . ((isset($this->_tpldata['.'][0]['USER_PAGINATION'])) ? $this->_tpldata['.'][0]['USER_PAGINATION'] : '') . '</td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_MASS_UPDATE'])) ? $this->_tpldata['.'][0]['L_MASS_UPDATE'] : ((isset($user->lang['MASS_UPDATE'])) ? $user->lang['MASS_UPDATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MASS_UPDATE'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td colspan="2" class="row1">' . ((isset($this->_tpldata['.'][0]['L_MASS_UPDATE_NOTE'])) ? $this->_tpldata['.'][0]['L_MASS_UPDATE_NOTE'] : ((isset($user->lang['MASS_UPDATE_NOTE'])) ? $user->lang['MASS_UPDATE_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MASS_UPDATE_NOTE'))) . ' 	}')) . '</td>
  </tr>
  ';// BEGIN permissions_row
$_permissions_row_count = (isset($this->_tpldata['permissions_row.'])) ?  sizeof($this->_tpldata['permissions_row.']) : 0;
if ($_permissions_row_count) {
for ($_permissions_row_i = 0; $_permissions_row_i < $_permissions_row_count; $_permissions_row_i++)
{
echo '
  <tr>
    <td width="40%" class="row2">' . ((isset($this->_tpldata['permissions_row.'][$_permissions_row_i]['GROUP'])) ? $this->_tpldata['permissions_row.'][$_permissions_row_i]['GROUP'] : '') . ':</td>
    <td width="60%" class="row1" nowrap="nowrap">
      ';// BEGIN check_group
$_check_group_count = (isset($this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'])) ? sizeof($this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.']) : 0;
if ($_check_group_count) {
for ($_check_group_i = 0; $_check_group_i < $_check_group_count; $_check_group_i++)
{
echo '
      <input type="checkbox" name="' . ((isset($this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'])) ? $this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'][$_check_group_i]['CBNAME'] : '') . '" value="Y"' . ((isset($this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'])) ? $this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'][$_check_group_i]['CBCHECKED'] : '') . ' />
      <span class="small">' . ((isset($this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'][$_check_group_i]['TEXT'])) ? $this->_tpldata['permissions_row.'][$_permissions_row_i]['check_group.'][$_check_group_i]['TEXT'] : '') . '</span>
      ';}}
// END check_group
echo '
    </td>
  </tr>
  ';}}
// END permissions_row
echo '
  <tr>
    <th align="center" colspan="2"><input type="submit" name="update" value="' . ((isset($this->_tpldata['.'][0]['L_MASS_UPDATE'])) ? $this->_tpldata['.'][0]['L_MASS_UPDATE'] : ((isset($user->lang['MASS_UPDATE'])) ? $user->lang['MASS_UPDATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MASS_UPDATE'))) . ' 	}')) . '" class="mainoption" /> <input type="submit" name="delete" value="' . ((isset($this->_tpldata['.'][0]['L_MASS_DELETE'])) ? $this->_tpldata['.'][0]['L_MASS_DELETE'] : ((isset($user->lang['MASS_DELETE'])) ? $user->lang['MASS_DELETE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MASS_DELETE'))) . ' 	}')) . '" class="liteoption" /></th>
  </tr>
</table>
</form>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>