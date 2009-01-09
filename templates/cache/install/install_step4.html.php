<?php
if ($this->security()) {
// INCLUDE install_header.html
$this->assign_from_include('install_header.html');
echo '
<form method="post" action="login.php" name="post">
<input type="hidden" name="redirect" value="admin/config.php" />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center">Login</th>
  </tr>
  <tr>
    <td class="row1" align="center">
      <table border="0" cellspacing="0" cellpadding="3" align="center" class="borderless">
        <tr>
          <td class="row1" width="40" nowrap="nowrap" align="center">Username:</td>
          <td class="row1" width="100" align="center"><input type="text" name="username" size="20" maxlength="30" class="input" /></td>
        </tr>
        <tr>
          <td class="row1" width="40" nowrap="nowrap">Password:</td>
          <td class="row1" width="100"><input type="password" name="password" size="20" maxlength="32" class="input" /></td>
        </tr>
        <tr>
          <td class="row1" colspan="2" valign="middle">
            Remember me (cookie): <input type="checkbox" name="auto_login" class="checkbox" />
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <th align="center"><input type="submit" name="login" value="Login" class="mainoption" /></th>
  </tr>
</table>
<br />
';// IF MSG_TEXT != ''
if ($this->_tpldata['.'][0]['MSG_TEXT'] != '') { 
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left">' . ((isset($this->_tpldata['.'][0]['MSG_TITLE'])) ? $this->_tpldata['.'][0]['MSG_TITLE'] : '') . '</th>
  </tr>
  <tr>
    <td align="left" class="row1">&nbsp;<br />' . ((isset($this->_tpldata['.'][0]['MSG_TEXT'])) ? $this->_tpldata['.'][0]['MSG_TEXT'] : '') . '<br />&nbsp;</td>
  </tr>
  <tr>
    <th>&nbsp;</th>
  </tr>
</table>
<br />
';// ENDIF
}
echo '
</form>
';// INCLUDE install_tail.html
$this->assign_from_include('install_tail.html');

}
?>