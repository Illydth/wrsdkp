<?php
if ($this->security()) {
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>EQdkp Installation - Step ' . ((isset($this->_tpldata['.'][0]['INSTALL_STEP'])) ? $this->_tpldata['.'][0]['INSTALL_STEP'] : '') . '</title>
<style type="text/css">
';// INCLUDE install_css.html
$this->assign_from_include('install_css.html');
echo '
</style>
</head>

<body>

<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td width="201" nowrap="nowrap"><img src="http://eqdkp.com/images/install_logo.gif?' . ((isset($this->_tpldata['.'][0]['INSTALL_STEP'])) ? $this->_tpldata['.'][0]['INSTALL_STEP'] : '') . '" alt="Logo" /><br /></td>
    <td width="100%">
      <center>
      <span class="maintitle">EQdkp Installation</span><br />
      <span class="subtitle">Step ' . ((isset($this->_tpldata['.'][0]['INSTALL_STEP'])) ? $this->_tpldata['.'][0]['INSTALL_STEP'] : '') . '</span><br /><br />
      </center>
    </td>
  </tr>
</table>
<br />';
}
?>