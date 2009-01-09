<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
// IF S_LOGIN
if ($this->_tpldata['.'][0]['S_LOGIN']) { 
echo '
<form method="post" action="login.php" name="post">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center">' . ((isset($this->_tpldata['.'][0]['L_LOGIN'])) ? $this->_tpldata['.'][0]['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LOGIN'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td class="row1" align="center">
      <table border="0" cellspacing="0" cellpadding="3" align="center" class="borderless">
        <tr>
          <td class="row1" width="40" nowrap="nowrap" align="center">' . ((isset($this->_tpldata['.'][0]['L_USERNAME'])) ? $this->_tpldata['.'][0]['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USERNAME'))) . ' 	}')) . ':</td>
          <td class="row1" width="100" align="center"><input type="text" name="username" size="20" maxlength="30" class="input" /></td>
        </tr>
        <tr>
          <td class="row1" width="40" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_PASSWORD'])) ? $this->_tpldata['.'][0]['L_PASSWORD'] : ((isset($user->lang['PASSWORD'])) ? $user->lang['PASSWORD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PASSWORD'))) . ' 	}')) . ':</td>
          <td class="row1" width="100"><input type="password" name="password" size="20" maxlength="32" class="input" /></td>
        </tr>
        <tr>
          <td class="row1" colspan="2" valign="middle">
            ' . ((isset($this->_tpldata['.'][0]['L_REMEMBER_PASSWORD'])) ? $this->_tpldata['.'][0]['L_REMEMBER_PASSWORD'] : ((isset($user->lang['REMEMBER_PASSWORD'])) ? $user->lang['REMEMBER_PASSWORD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REMEMBER_PASSWORD'))) . ' 	}')) . ': <input type="checkbox" name="auto_login" class="checkbox" />
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <th align="center"><input type="submit" name="login" value="' . ((isset($this->_tpldata['.'][0]['L_LOGIN'])) ? $this->_tpldata['.'][0]['L_LOGIN'] : ((isset($user->lang['LOGIN'])) ? $user->lang['LOGIN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LOGIN'))) . ' 	}')) . '" class="mainoption" /> <input type="submit" name="lost_password" value="' . ((isset($this->_tpldata['.'][0]['L_LOST_PASSWORD'])) ? $this->_tpldata['.'][0]['L_LOST_PASSWORD'] : ((isset($user->lang['LOST_PASSWORD'])) ? $user->lang['LOST_PASSWORD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LOST_PASSWORD'))) . ' 	}')) . '" class="liteoption" /></th>
  </tr>
</table>
</form>
';// ELSE
} else {
echo '
<form method="post" action="register.php?mode=lostpassword" name="post">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center">' . ((isset($this->_tpldata['.'][0]['L_GET_NEW_PASSWORD'])) ? $this->_tpldata['.'][0]['L_GET_NEW_PASSWORD'] : ((isset($user->lang['GET_NEW_PASSWORD'])) ? $user->lang['GET_NEW_PASSWORD'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'GET_NEW_PASSWORD'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td class="row1" align="center">
      <table border="0" cellspacing="0" cellpadding="3" align="center" class="borderless">
        <tr>
          <td class="row1" width="40" nowrap="nowrap" align="center">' . ((isset($this->_tpldata['.'][0]['L_USERNAME'])) ? $this->_tpldata['.'][0]['L_USERNAME'] : ((isset($user->lang['USERNAME'])) ? $user->lang['USERNAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'USERNAME'))) . ' 	}')) . ':</td>
          <td class="row1" width="100" align="center"><input type="text" name="username" size="20" maxlength="30" class="input" /></td>
        </tr>
        <tr>
          <td class="row1" width="40" nowrap="nowrap">' . ((isset($this->_tpldata['.'][0]['L_EMAIL'])) ? $this->_tpldata['.'][0]['L_EMAIL'] : ((isset($user->lang['EMAIL'])) ? $user->lang['EMAIL'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EMAIL'))) . ' 	}')) . ':</td>
          <td class="row1" width="100"><input type="text" name="user_email" size="20" maxlength="100" class="input" /></td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <th align="center"><input type="submit" name="send_password" value="' . ((isset($this->_tpldata['.'][0]['L_SUBMIT'])) ? $this->_tpldata['.'][0]['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SUBMIT'))) . ' 	}')) . '" class="mainoption" /> <input type="reset" name="reset" value="' . ((isset($this->_tpldata['.'][0]['L_RESET'])) ? $this->_tpldata['.'][0]['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET'))) . ' 	}')) . '" class="liteoption" /></th>
  </tr>
</table>
</form>
';// ENDIF
}
// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>