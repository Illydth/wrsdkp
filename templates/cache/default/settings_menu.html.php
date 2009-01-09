<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center">&nbsp;</th>
  </tr>
  <tr>
    <td class="row1" align="center">
    ';// BEGIN root_menu
$_root_menu_count = (isset($this->_tpldata['root_menu.'])) ?  sizeof($this->_tpldata['root_menu.']) : 0;
if ($_root_menu_count) {
for ($_root_menu_i = 0; $_root_menu_i < $_root_menu_count; $_root_menu_i++)
{
echo '
    <b>' . ((isset($this->_tpldata['root_menu.'][$_root_menu_i]['TEXT'])) ? $this->_tpldata['root_menu.'][$_root_menu_i]['TEXT'] : '') . '</b><br />
    ';// BEGIN sub_menu
$_sub_menu_count = (isset($this->_tpldata['root_menu.'][$_root_menu_i]['sub_menu.'])) ? sizeof($this->_tpldata['root_menu.'][$_root_menu_i]['sub_menu.']) : 0;
if ($_sub_menu_count) {
for ($_sub_menu_i = 0; $_sub_menu_i < $_sub_menu_count; $_sub_menu_i++)
{
echo '
    ' . ((isset($this->_tpldata['root_menu.'][$_root_menu_i]['sub_menu.'][$_sub_menu_i]['TEXT'])) ? $this->_tpldata['root_menu.'][$_root_menu_i]['sub_menu.'][$_sub_menu_i]['TEXT'] : '') . '
    ';}}
// END sub_menu
echo '
    <br /><br />
    ';}}
// END root_menu
echo '
    </td>
  </tr>
  <tr>
    <th align="center">&nbsp;</th>
  </tr>
</table>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>