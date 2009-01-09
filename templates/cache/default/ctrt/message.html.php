<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center">' . ((isset($this->_tpldata['.'][0]['MSG_TITLE'])) ? $this->_tpldata['.'][0]['MSG_TITLE'] : '') . '</th>
  </tr>
  <tr>
    <td class="row1">' . ((isset($this->_tpldata['.'][0]['MSG_TEXT'])) ? $this->_tpldata['.'][0]['MSG_TEXT'] : '') . '</td>
  </tr>
  <tr>
    <th>&nbsp;</th>
  </tr>
</table>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>