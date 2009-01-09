<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_CONFIRM_DELETE_ACTION'])) ? $this->_tpldata['.'][0]['F_CONFIRM_DELETE_ACTION'] : '') . '" name="post">
<input type="hidden" name="' . ((isset($this->_tpldata['.'][0]['URI_PARAMETER'])) ? $this->_tpldata['.'][0]['URI_PARAMETER'] : '') . '" value="' . ((isset($this->_tpldata['.'][0]['PARAMETER_VALUE'])) ? $this->_tpldata['.'][0]['PARAMETER_VALUE'] : '') . '" />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center">' . ((isset($this->_tpldata['.'][0]['L_DELETE_CONFIRMATION'])) ? $this->_tpldata['.'][0]['L_DELETE_CONFIRMATION'] : ((isset($user->lang['DELETE_CONFIRMATION'])) ? $user->lang['DELETE_CONFIRMATION'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE_CONFIRMATION'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td align="center" class="row1">' . ((isset($this->_tpldata['.'][0]['L_CONFIRM_TEXT'])) ? $this->_tpldata['.'][0]['L_CONFIRM_TEXT'] : ((isset($user->lang['CONFIRM_TEXT'])) ? $user->lang['CONFIRM_TEXT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CONFIRM_TEXT'))) . ' 	}')) . '<br /><br /><input type="submit" name="confirm" value="' . ((isset($this->_tpldata['.'][0]['L_YES'])) ? $this->_tpldata['.'][0]['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'YES'))) . ' 	}')) . '" class="mainoption" /> <input type="submit" name="cancel" value="' . ((isset($this->_tpldata['.'][0]['L_NO'])) ? $this->_tpldata['.'][0]['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NO'))) . ' 	}')) . '" class="liteoption" /></td>
  </tr>
  <tr>
    <th align="center">&nbsp;</th>
  </tr>
</table>
</form>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>