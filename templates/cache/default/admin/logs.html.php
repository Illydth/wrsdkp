<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
// IF S_LIST
if ($this->_tpldata['.'][0]['S_LIST']) { 
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td align="center" class="menu">' . ((isset($this->_tpldata['.'][0]['VIEWLOGS_PAGINATION'])) ? $this->_tpldata['.'][0]['VIEWLOGS_PAGINATION'] : '') . '</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" width="150" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LOGS'])) ? $this->_tpldata['.'][0]['U_LOGS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_DATE'])) ? $this->_tpldata['.'][0]['O_DATE'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . '</a></th>
    <th align="left" width="100%"><a href="' . ((isset($this->_tpldata['.'][0]['U_LOGS'])) ? $this->_tpldata['.'][0]['U_LOGS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_TYPE'])) ? $this->_tpldata['.'][0]['O_TYPE'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_TYPE'])) ? $this->_tpldata['.'][0]['L_TYPE'] : ((isset($user->lang['TYPE'])) ? $user->lang['TYPE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TYPE'))) . ' 	}')) . '</a></th>
    <th align="left" width="100" nowrap="nowrap" class="rowhead">' . ((isset($this->_tpldata['.'][0]['L_VIEW_ACTION'])) ? $this->_tpldata['.'][0]['L_VIEW_ACTION'] : ((isset($user->lang['VIEW_ACTION'])) ? $user->lang['VIEW_ACTION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VIEW_ACTION'))) . ' 	}')) . '</th>
    <th align="left" width="100" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LOGS'])) ? $this->_tpldata['.'][0]['U_LOGS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_USER'])) ? $this->_tpldata['.'][0]['O_USER'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_USER'])) ? $this->_tpldata['.'][0]['L_USER'] : ((isset($user->lang['USER'])) ? $user->lang['USER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USER'))) . ' 	}')) . '</a></th>
    <th align="left" width="120" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LOGS'])) ? $this->_tpldata['.'][0]['U_LOGS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_IP'])) ? $this->_tpldata['.'][0]['O_IP'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_IP_ADDRESS'])) ? $this->_tpldata['.'][0]['L_IP_ADDRESS'] : ((isset($user->lang['IP_ADDRESS'])) ? $user->lang['IP_ADDRESS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'IP_ADDRESS'))) . ' 	}')) . '</a></th>
    <th align="left" width="70" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LOGS'])) ? $this->_tpldata['.'][0]['U_LOGS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_RESULT'])) ? $this->_tpldata['.'][0]['O_RESULT'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_RESULT'])) ? $this->_tpldata['.'][0]['L_RESULT'] : ((isset($user->lang['RESULT'])) ? $user->lang['RESULT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESULT'))) . ' 	}')) . '</a></th>
  </tr>
  ';// BEGIN logs_row
$_logs_row_count = (isset($this->_tpldata['logs_row.'])) ?  sizeof($this->_tpldata['logs_row.']) : 0;
if ($_logs_row_count) {
for ($_logs_row_i = 0; $_logs_row_i < $_logs_row_count; $_logs_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['logs_row.'][$_logs_row_i]['ROW_CLASS'])) ? $this->_tpldata['logs_row.'][$_logs_row_i]['ROW_CLASS'] : '') . '">
    <td width="150" nowrap="nowrap">' . ((isset($this->_tpldata['logs_row.'][$_logs_row_i]['DATE'])) ? $this->_tpldata['logs_row.'][$_logs_row_i]['DATE'] : '') . '</td>
    <td width="100%"><a href="' . ((isset($this->_tpldata['.'][0]['U_LOGS_SEARCH'])) ? $this->_tpldata['.'][0]['U_LOGS_SEARCH'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['CURRENT_ORDER'])) ? $this->_tpldata['.'][0]['CURRENT_ORDER'] : '') . '&amp;search=' . ((isset($this->_tpldata['logs_row.'][$_logs_row_i]['ENCODED_TYPE'])) ? $this->_tpldata['logs_row.'][$_logs_row_i]['ENCODED_TYPE'] : '') . '">' . ((isset($this->_tpldata['logs_row.'][$_logs_row_i]['TYPE'])) ? $this->_tpldata['logs_row.'][$_logs_row_i]['TYPE'] : '') . '</a></td>
    <td width="100" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['logs_row.'][$_logs_row_i]['U_VIEW_LOG'])) ? $this->_tpldata['logs_row.'][$_logs_row_i]['U_VIEW_LOG'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_VIEW'])) ? $this->_tpldata['.'][0]['L_VIEW'] : ((isset($user->lang['VIEW'])) ? $user->lang['VIEW'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VIEW'))) . ' 	}')) . '</a></td>
    <td width="100" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LOGS_SEARCH'])) ? $this->_tpldata['.'][0]['U_LOGS_SEARCH'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['CURRENT_ORDER'])) ? $this->_tpldata['.'][0]['CURRENT_ORDER'] : '') . '&amp;search=' . ((isset($this->_tpldata['logs_row.'][$_logs_row_i]['ENCODED_USER'])) ? $this->_tpldata['logs_row.'][$_logs_row_i]['ENCODED_USER'] : '') . '">' . ((isset($this->_tpldata['logs_row.'][$_logs_row_i]['USER'])) ? $this->_tpldata['logs_row.'][$_logs_row_i]['USER'] : '') . '</a></td>
    <td width="120" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LOGS_SEARCH'])) ? $this->_tpldata['.'][0]['U_LOGS_SEARCH'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['CURRENT_ORDER'])) ? $this->_tpldata['.'][0]['CURRENT_ORDER'] : '') . '&amp;search=' . ((isset($this->_tpldata['logs_row.'][$_logs_row_i]['ENCODED_IP'])) ? $this->_tpldata['logs_row.'][$_logs_row_i]['ENCODED_IP'] : '') . '">' . ((isset($this->_tpldata['logs_row.'][$_logs_row_i]['IP'])) ? $this->_tpldata['logs_row.'][$_logs_row_i]['IP'] : '') . '</a></td>
    <td width="70" nowrap="nowrap" class="' . ((isset($this->_tpldata['logs_row.'][$_logs_row_i]['C_RESULT'])) ? $this->_tpldata['logs_row.'][$_logs_row_i]['C_RESULT'] : '') . '">' . ((isset($this->_tpldata['logs_row.'][$_logs_row_i]['RESULT'])) ? $this->_tpldata['logs_row.'][$_logs_row_i]['RESULT'] : '') . '</td>
  </tr>
  ';}}
// END logs_row
echo '
  <tr>
    <th colspan="6" class="footer">' . ((isset($this->_tpldata['.'][0]['VIEWLOGS_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['VIEWLOGS_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td align="center" class="menu">' . ((isset($this->_tpldata['.'][0]['VIEWLOGS_PAGINATION'])) ? $this->_tpldata['.'][0]['VIEWLOGS_PAGINATION'] : '') . '</td>
  </tr>
</table>
';// ELSE
} else {
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_LOG_VIEWER'])) ? $this->_tpldata['.'][0]['L_LOG_VIEWER'] : ((isset($user->lang['LOG_VIEWER'])) ? $user->lang['LOG_VIEWER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LOG_VIEWER'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td class="row1" width="200" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . ':</td>
    <td class="row1" width="100%">' . ((isset($this->_tpldata['.'][0]['LOG_DATE'])) ? $this->_tpldata['.'][0]['LOG_DATE'] : '') . '</td>
  </tr>
  <tr>
    <td class="row2" width="200" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_USERNAME'])) ? $this->_tpldata['.'][0]['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USERNAME'))) . ' 	}')) . ':</td>
    <td class="row2" width="100%">' . ((isset($this->_tpldata['.'][0]['LOG_USERNAME'])) ? $this->_tpldata['.'][0]['LOG_USERNAME'] : '') . '</td>
  </tr>
  <tr>
    <td class="row1" width="200" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_IP_ADDRESS'])) ? $this->_tpldata['.'][0]['L_IP_ADDRESS'] : ((isset($user->lang['IP_ADDRESS'])) ? $user->lang['IP_ADDRESS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'IP_ADDRESS'))) . ' 	}')) . ':</td>
    <td class="row1" width="100%">' . ((isset($this->_tpldata['.'][0]['LOG_IP_ADDRESS'])) ? $this->_tpldata['.'][0]['LOG_IP_ADDRESS'] : '') . '</td>
  </tr>
  <tr>
    <td class="row2" width="200" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_SESSION_ID'])) ? $this->_tpldata['.'][0]['L_SESSION_ID'] : ((isset($user->lang['SESSION_ID'])) ? $user->lang['SESSION_ID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SESSION_ID'))) . ' 	}')) . ':</td>
    <td class="row2" width="100%">' . ((isset($this->_tpldata['.'][0]['LOG_SESSION_ID'])) ? $this->_tpldata['.'][0]['LOG_SESSION_ID'] : '') . '</td>
  </tr>
  <tr>
    <th align="left" colspan="2">' . ((isset($this->_tpldata['.'][0]['LOG_ACTION'])) ? $this->_tpldata['.'][0]['LOG_ACTION'] : '') . '</th>
  </tr>
  ';// BEGIN log_row
$_log_row_count = (isset($this->_tpldata['log_row.'])) ?  sizeof($this->_tpldata['log_row.']) : 0;
if ($_log_row_count) {
for ($_log_row_i = 0; $_log_row_i < $_log_row_count; $_log_row_i++)
{
echo '
  <tr>
    <td class="' . ((isset($this->_tpldata['log_row.'][$_log_row_i]['ROW_CLASS'])) ? $this->_tpldata['log_row.'][$_log_row_i]['ROW_CLASS'] : '') . '" width="200" nowrap="nowrap">' . ((isset($this->_tpldata['log_row.'][$_log_row_i]['KEY'])) ? $this->_tpldata['log_row.'][$_log_row_i]['KEY'] : '') . '</td>
    <td class="' . ((isset($this->_tpldata['log_row.'][$_log_row_i]['ROW_CLASS'])) ? $this->_tpldata['log_row.'][$_log_row_i]['ROW_CLASS'] : '') . '" width="100%">' . ((isset($this->_tpldata['log_row.'][$_log_row_i]['VALUE'])) ? $this->_tpldata['log_row.'][$_log_row_i]['VALUE'] : '') . '</td>
  </tr>
  ';}}
// END log_row
echo '
  <tr>
    <th colspan="2">&nbsp;</th>
  </tr>
</table>
';// ENDIF
}
// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>