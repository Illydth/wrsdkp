<?php
if ($this->security()) {
// INCLUDE install_header.html
$this->assign_from_include('install_header.html');
// IF S_SHOW_BUTTON
if ($this->_tpldata['.'][0]['S_SHOW_BUTTON']) { 
echo '
<form method="post" action="install.php" name="post">
<input type="hidden" name="install_step" value="4" />
';// ENDIF
}
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" colspan="2">Administrator Account Configuration</th>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">Administrator username:</td>
    <td width="60%" class="row1" align="left"><input type="text" name="username" value="" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">Administrator password:</td>
    <td width="60%" class="row1" align="left"><input type="password" name="user_password1" value="" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">Administrator password [ confirm ]:</td>
    <td width="60%" class="row1" align="left"><input type="password" name="user_password2" value="" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">Administrator e-mail:</td>
    <td width="60%" class="row1" align="left"><input type="text" name="user_email" value="" class="input" /></td>
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
// IF S_SHOW_BUTTON
if ($this->_tpldata['.'][0]['S_SHOW_BUTTON']) { 
echo '
<div align="center"><input type="submit" name="submit" value="Proceed" class="mainoption" /></div>
</form>
';// ENDIF
}
// INCLUDE install_tail.html
$this->assign_from_include('install_tail.html');

}
?>