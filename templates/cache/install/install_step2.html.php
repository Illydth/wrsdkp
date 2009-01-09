<?php
if ($this->security()) {
// INCLUDE install_header.html
$this->assign_from_include('install_header.html');
// IF S_SHOW_BUTTON
if ($this->_tpldata['.'][0]['S_SHOW_BUTTON']) { 
echo '
<form method="post" action="install.php" name="post">
<input type="hidden" name="install_step" value="3" />
';// ENDIF
}
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" colspan="2">Language Configuration</th>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">Default Language:</td>
    <td width="60%" class="row1">
      <select name="default_lang" class="input">
        ';// BEGIN language_row
$_language_row_count = (isset($this->_tpldata['language_row.'])) ?  sizeof($this->_tpldata['language_row.']) : 0;
if ($_language_row_count) {
for ($_language_row_i = 0; $_language_row_i < $_language_row_count; $_language_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['language_row.'][$_language_row_i]['VALUE'])) ? $this->_tpldata['language_row.'][$_language_row_i]['VALUE'] : '') . '" ' . ((isset($this->_tpldata['language_row.'][$_language_row_i]['SELECTED'])) ? $this->_tpldata['language_row.'][$_language_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['language_row.'][$_language_row_i]['OPTION'])) ? $this->_tpldata['language_row.'][$_language_row_i]['OPTION'] : '') . '</option>
        ';}}
// END language_row
echo '
      </select>
    </td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" colspan="2">Database Configuration</th>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">Database Type:</td>
    <td width="60%" class="row1">
      <select name="dbtype" class="input">
        ';// BEGIN dbal_row
$_dbal_row_count = (isset($this->_tpldata['dbal_row.'])) ?  sizeof($this->_tpldata['dbal_row.']) : 0;
if ($_dbal_row_count) {
for ($_dbal_row_i = 0; $_dbal_row_i < $_dbal_row_count; $_dbal_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['dbal_row.'][$_dbal_row_i]['VALUE'])) ? $this->_tpldata['dbal_row.'][$_dbal_row_i]['VALUE'] : '') . '">' . ((isset($this->_tpldata['dbal_row.'][$_dbal_row_i]['OPTION'])) ? $this->_tpldata['dbal_row.'][$_dbal_row_i]['OPTION'] : '') . '</option>
        ';}}
// END dbal_row
echo '
      </select>
    </td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">Default Locale:</td>
    <td width="60%" class="row1">
      <select name="default_locale" class="input">
        ';// BEGIN locale_row
$_locale_row_count = (isset($this->_tpldata['locale_row.'])) ?  sizeof($this->_tpldata['locale_row.']) : 0;
if ($_locale_row_count) {
for ($_locale_row_i = 0; $_locale_row_i < $_locale_row_count; $_locale_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['locale_row.'][$_locale_row_i]['VALUE'])) ? $this->_tpldata['locale_row.'][$_locale_row_i]['VALUE'] : '') . '" ' . ((isset($this->_tpldata['locale_row.'][$_locale_row_i]['SELECTED'])) ? $this->_tpldata['locale_row.'][$_locale_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['locale_row.'][$_locale_row_i]['OPTION'])) ? $this->_tpldata['locale_row.'][$_locale_row_i]['OPTION'] : '') . '</option>
        ';}}
// END locale_row
echo '
      </select>
    </td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">Database host:</td>
    <td width="60%" class="row1"><input type="text" name="dbhost" size="25" value="' . ((isset($this->_tpldata['.'][0]['DB_HOST'])) ? $this->_tpldata['.'][0]['DB_HOST'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">Database name:</td>
    <td width="60%" class="row1"><input type="text" name="dbname" size="25" value="" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">Database username:</td>
    <td width="60%" class="row1"><input type="text" name="dbuser" size="25" value="" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">Database password:</td>
    <td width="60%" class="row1"><input type="password" name="dbpass" size="25" value="" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">Prefix for EQdkp tables:</td>
    <td width="60%" class="row1"><input type="text" name="table_prefix" size="25" value="' . ((isset($this->_tpldata['.'][0]['TABLE_PREFIX'])) ? $this->_tpldata['.'][0]['TABLE_PREFIX'] : '') . '" class="input" /></td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" colspan="2">Server Configuration</th>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">Domain name:</td>
    <td width="60%" class="row1"><input type="text" name="server_name" size="25" value="' . ((isset($this->_tpldata['.'][0]['SERVER_NAME'])) ? $this->_tpldata['.'][0]['SERVER_NAME'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">Server port:</td>
    <td width="60%" class="row1"><input type="text" name="server_port" size="25" value="' . ((isset($this->_tpldata['.'][0]['SERVER_PORT'])) ? $this->_tpldata['.'][0]['SERVER_PORT'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="40%" class="row2" align="right">Script path:</td>
    <td width="60%" class="row1"><input type="text" name="server_path" size="25" value="' . ((isset($this->_tpldata['.'][0]['SERVER_PATH'])) ? $this->_tpldata['.'][0]['SERVER_PATH'] : '') . '" class="input" /></td>
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