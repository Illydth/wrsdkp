<?php
if ($this->security()) {
// INCLUDE install_header.html
$this->assign_from_include('install_header.html');
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" colspan="3">EQdkp</th>
  </tr>
  <tr>
    <td width="200" class="row2" nowrap="nowrap">Version:</td>
    <td width="50%" class="row1">Using: ' . ((isset($this->_tpldata['.'][0]['OUR_EQDKP_VERSION'])) ? $this->_tpldata['.'][0]['OUR_EQDKP_VERSION'] : '') . '</td>
    <td width="50%" class="row2">Latest: ' . ((isset($this->_tpldata['.'][0]['THEIR_EQDKP_VERSION'])) ? $this->_tpldata['.'][0]['THEIR_EQDKP_VERSION'] : '') . '</td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" colspan="3">PHP</th>
  </tr>
  <tr>
    <td colspan="3" class="row2"><a href="install.php?mode=phpinfo">View phpinfo()</a></td>
  </tr>
  <tr>
    <td width="200" class="row2" nowrap="nowrap">Version:</td>
    <td width="50%" class="row1">Using: ' . ((isset($this->_tpldata['.'][0]['OUR_PHP_VERSION'])) ? $this->_tpldata['.'][0]['OUR_PHP_VERSION'] : '') . '</td>
    <td width="50%" class="row2">Required: ' . ((isset($this->_tpldata['.'][0]['THEIR_PHP_VERSION'])) ? $this->_tpldata['.'][0]['THEIR_PHP_VERSION'] : '') . '</td>
  </tr>
  <tr>
    <td width="200" class="row2" nowrap="nowrap">MySQL Module:</td>
    <td width="50%" class="row1">Available: ' . ((isset($this->_tpldata['.'][0]['OUR_MYSQL'])) ? $this->_tpldata['.'][0]['OUR_MYSQL'] : '') . '</td>
    <td width="50%" class="row2">Required: ' . ((isset($this->_tpldata['.'][0]['THEIR_MYSQL'])) ? $this->_tpldata['.'][0]['THEIR_MYSQL'] : '') . '</td>
  </tr>
  <tr>
    <td width="200" class="row2" nowrap="nowrap">zLib Module:</td>
    <td width="50%" class="row1">Available: ' . ((isset($this->_tpldata['.'][0]['OUR_ZLIB'])) ? $this->_tpldata['.'][0]['OUR_ZLIB'] : '') . '</td>
    <td width="50%" class="row2">Required: ' . ((isset($this->_tpldata['.'][0]['THEIR_ZLIB'])) ? $this->_tpldata['.'][0]['THEIR_ZLIB'] : '') . '</td>
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
<form method="post" action="install.php" name="post">
<input type="hidden" name="install_step" value="2" />
<div align="center"><input type="submit" name="submit" value="Start Install" class="mainoption" /></div>
</form>
';// ENDIF
}
// INCLUDE install_tail.html
$this->assign_from_include('install_tail.html');

}
?>