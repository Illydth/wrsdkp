<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
';// IF S_NEW_VERSION
if ($this->_tpldata['.'][0]['S_NEW_VERSION']) { 
echo '
  <tr>
    <th align="center">' . ((isset($this->_tpldata['.'][0]['L_VERSION_UPDATE'])) ? $this->_tpldata['.'][0]['L_VERSION_UPDATE'] : ((isset($user->lang['VERSION_UPDATE'])) ? $user->lang['VERSION_UPDATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VERSION_UPDATE'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td class="row1" align="center">' . ((isset($this->_tpldata['.'][0]['L_NEW_VERSION_NOTICE'])) ? $this->_tpldata['.'][0]['L_NEW_VERSION_NOTICE'] : ((isset($user->lang['NEW_VERSION_NOTICE'])) ? $user->lang['NEW_VERSION_NOTICE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NEW_VERSION_NOTICE'))) . ' 	}')) . '</td>
  </tr>
  <tr>
    <th align="center">&nbsp;</th>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
';// ENDIF
}
echo '
  <tr>
    <th align="center" colspan="4">' . ((isset($this->_tpldata['.'][0]['L_STATISTICS'])) ? $this->_tpldata['.'][0]['L_STATISTICS'] : ((isset($user->lang['STATISTICS'])) ? $user->lang['STATISTICS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'STATISTICS'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td class="row2" width="25%">' . ((isset($this->_tpldata['.'][0]['L_NUMBER_OF_MEMBERS'])) ? $this->_tpldata['.'][0]['L_NUMBER_OF_MEMBERS'] : ((isset($user->lang['NUMBER_OF_MEMBERS'])) ? $user->lang['NUMBER_OF_MEMBERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NUMBER_OF_MEMBERS'))) . ' 	}')) . ':</td>
    <td class="row1" width="25%">' . ((isset($this->_tpldata['.'][0]['NUMBER_OF_MEMBERS'])) ? $this->_tpldata['.'][0]['NUMBER_OF_MEMBERS'] : '') . '</td>
    <td class="row2" width="25%">' . ((isset($this->_tpldata['.'][0]['L_NUMBER_OF_LOGS'])) ? $this->_tpldata['.'][0]['L_NUMBER_OF_LOGS'] : ((isset($user->lang['NUMBER_OF_LOGS'])) ? $user->lang['NUMBER_OF_LOGS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NUMBER_OF_LOGS'))) . ' 	}')) . ':</td>
    <td class="row1" width="25%">' . ((isset($this->_tpldata['.'][0]['NUMBER_OF_LOGS'])) ? $this->_tpldata['.'][0]['NUMBER_OF_LOGS'] : '') . '</td>
  </tr>
  <tr>
    <td class="row2" width="25%">' . ((isset($this->_tpldata['.'][0]['L_NUMBER_OF_RAIDS'])) ? $this->_tpldata['.'][0]['L_NUMBER_OF_RAIDS'] : ((isset($user->lang['NUMBER_OF_RAIDS'])) ? $user->lang['NUMBER_OF_RAIDS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NUMBER_OF_RAIDS'))) . ' 	}')) . ':</td>
    <td class="row1" width="25%">' . ((isset($this->_tpldata['.'][0]['NUMBER_OF_RAIDS'])) ? $this->_tpldata['.'][0]['NUMBER_OF_RAIDS'] : '') . '</td>
    <td class="row2" width="25%">' . ((isset($this->_tpldata['.'][0]['L_RAIDS_PER_DAY'])) ? $this->_tpldata['.'][0]['L_RAIDS_PER_DAY'] : ((isset($user->lang['RAIDS_PER_DAY'])) ? $user->lang['RAIDS_PER_DAY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAIDS_PER_DAY'))) . ' 	}')) . ':</td>
    <td class="row1" width="25%">' . ((isset($this->_tpldata['.'][0]['RAIDS_PER_DAY'])) ? $this->_tpldata['.'][0]['RAIDS_PER_DAY'] : '') . '</td>
  </tr>
  <tr>
    <td class="row2" width="25%">' . ((isset($this->_tpldata['.'][0]['L_NUMBER_OF_ITEMS'])) ? $this->_tpldata['.'][0]['L_NUMBER_OF_ITEMS'] : ((isset($user->lang['NUMBER_OF_ITEMS'])) ? $user->lang['NUMBER_OF_ITEMS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NUMBER_OF_ITEMS'))) . ' 	}')) . ':</td>
    <td class="row1" width="25%">' . ((isset($this->_tpldata['.'][0]['NUMBER_OF_ITEMS'])) ? $this->_tpldata['.'][0]['NUMBER_OF_ITEMS'] : '') . '</td>
    <td class="row2" width="25%">' . ((isset($this->_tpldata['.'][0]['L_ITEMS_PER_DAY'])) ? $this->_tpldata['.'][0]['L_ITEMS_PER_DAY'] : ((isset($user->lang['ITEMS_PER_DAY'])) ? $user->lang['ITEMS_PER_DAY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEMS_PER_DAY'))) . ' 	}')) . ':</td>
    <td class="row1" width="25%">' . ((isset($this->_tpldata['.'][0]['ITEMS_PER_DAY'])) ? $this->_tpldata['.'][0]['ITEMS_PER_DAY'] : '') . '</td>
  </tr>
  <tr>
    <td class="row2" width="25%">' . ((isset($this->_tpldata['.'][0]['L_DATABASE_SIZE'])) ? $this->_tpldata['.'][0]['L_DATABASE_SIZE'] : ((isset($user->lang['DATABASE_SIZE'])) ? $user->lang['DATABASE_SIZE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATABASE_SIZE'))) . ' 	}')) . ':</td>
    <td class="row1" width="25%">' . ((isset($this->_tpldata['.'][0]['DATABASE_SIZE'])) ? $this->_tpldata['.'][0]['DATABASE_SIZE'] : '') . '</td>
    <td class="row2" width="25%">' . ((isset($this->_tpldata['.'][0]['L_EQDKP_STARTED'])) ? $this->_tpldata['.'][0]['L_EQDKP_STARTED'] : ((isset($user->lang['EQDKP_STARTED'])) ? $user->lang['EQDKP_STARTED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EQDKP_STARTED'))) . ' 	}')) . ':</td>
    <td class="row1" width="25%">' . ((isset($this->_tpldata['.'][0]['EQDKP_STARTED'])) ? $this->_tpldata['.'][0]['EQDKP_STARTED'] : '') . '</td>
  </tr>
  <tr>
    <th align="center" colspan="4">&nbsp;</th>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="5">' . ((isset($this->_tpldata['.'][0]['L_WHO_ONLINE'])) ? $this->_tpldata['.'][0]['L_WHO_ONLINE'] : ((isset($user->lang['WHO_ONLINE'])) ? $user->lang['WHO_ONLINE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'WHO_ONLINE'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <th align="left" width="20%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_USERNAME'])) ? $this->_tpldata['.'][0]['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USERNAME'))) . ' 	}')) . '</th>
    <th align="left" width="20%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_LOGIN'])) ? $this->_tpldata['.'][0]['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LOGIN'))) . ' 	}')) . '</th>
    <th align="left" width="20%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_LAST_UPDATE'])) ? $this->_tpldata['.'][0]['L_LAST_UPDATE'] : ((isset($user->lang['LAST_UPDATE'])) ? $user->lang['LAST_UPDATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LAST_UPDATE'))) . ' 	}')) . '</th>
    <th align="left" width="20%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_LOCATION'])) ? $this->_tpldata['.'][0]['L_LOCATION'] : ((isset($user->lang['LOCATION'])) ? $user->lang['LOCATION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LOCATION'))) . ' 	}')) . '</th>
    <th align="left" width="20%" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_IP_ADDRESS'])) ? $this->_tpldata['.'][0]['L_IP_ADDRESS'] : ((isset($user->lang['IP_ADDRESS'])) ? $user->lang['IP_ADDRESS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'IP_ADDRESS'))) . ' 	}')) . '</th>
  </tr>
  ';// BEGIN online_row
$_online_row_count = (isset($this->_tpldata['online_row.'])) ?  sizeof($this->_tpldata['online_row.']) : 0;
if ($_online_row_count) {
for ($_online_row_i = 0; $_online_row_i < $_online_row_count; $_online_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['online_row.'][$_online_row_i]['ROW_CLASS'])) ? $this->_tpldata['online_row.'][$_online_row_i]['ROW_CLASS'] : '') . '">
    <td width="20%" nowrap="nowrap">' . ((isset($this->_tpldata['online_row.'][$_online_row_i]['USERNAME'])) ? $this->_tpldata['online_row.'][$_online_row_i]['USERNAME'] : '') . '</td>
    <td width="20%" nowrap="nowrap">' . ((isset($this->_tpldata['online_row.'][$_online_row_i]['LOGIN'])) ? $this->_tpldata['online_row.'][$_online_row_i]['LOGIN'] : '') . '</td>
    <td width="20%" nowrap="nowrap">' . ((isset($this->_tpldata['online_row.'][$_online_row_i]['LAST_UPDATE'])) ? $this->_tpldata['online_row.'][$_online_row_i]['LAST_UPDATE'] : '') . '</td>
    <td width="20%" nowrap="nowrap">' . ((isset($this->_tpldata['online_row.'][$_online_row_i]['LOCATION'])) ? $this->_tpldata['online_row.'][$_online_row_i]['LOCATION'] : '') . '</td>
    <td width="20%" nowrap="nowrap">' . ((isset($this->_tpldata['online_row.'][$_online_row_i]['IP_ADDRESS'])) ? $this->_tpldata['online_row.'][$_online_row_i]['IP_ADDRESS'] : '') . '</td>
  </tr>
  ';}}
// END online_row
echo '
  <tr>
    <th colspan="5" class="footer">' . ((isset($this->_tpldata['.'][0]['ONLINE_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['ONLINE_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
';// IF S_LOGS
if ($this->_tpldata['.'][0]['S_LOGS']) { 
echo '
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_NEW_ACTIONS'])) ? $this->_tpldata['.'][0]['L_NEW_ACTIONS'] : ((isset($user->lang['NEW_ACTIONS'])) ? $user->lang['NEW_ACTIONS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NEW_ACTIONS'))) . ' 	}')) . '</th>
  </tr>
  ';// BEGIN actions_row
$_actions_row_count = (isset($this->_tpldata['actions_row.'])) ?  sizeof($this->_tpldata['actions_row.']) : 0;
if ($_actions_row_count) {
for ($_actions_row_i = 0; $_actions_row_i < $_actions_row_count; $_actions_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['actions_row.'][$_actions_row_i]['ROW_CLASS'])) ? $this->_tpldata['actions_row.'][$_actions_row_i]['ROW_CLASS'] : '') . '">
    <td align="center" width="16" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['actions_row.'][$_actions_row_i]['U_VIEW_LOG'])) ? $this->_tpldata['actions_row.'][$_actions_row_i]['U_VIEW_LOG'] : '') . '"><img src="' . ((isset($this->_tpldata['.'][0]['EQDKP_ROOT_PATH'])) ? $this->_tpldata['.'][0]['EQDKP_ROOT_PATH'] : '') . 'images/glyphs/view.gif" width="16" height="16" alt="View" /></a></td>
    <td width="100%">' . ((isset($this->_tpldata['actions_row.'][$_actions_row_i]['ACTION'])) ? $this->_tpldata['actions_row.'][$_actions_row_i]['ACTION'] : '') . '</td>
  </tr>
  ';}}
// END actions_row
echo '
</table>
';// ENDIF
}
// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>