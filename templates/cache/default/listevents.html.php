<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td align="center" class="menu">' . ((isset($this->_tpldata['.'][0]['EVENT_PAGINATION'])) ? $this->_tpldata['.'][0]['EVENT_PAGINATION'] : '') . '</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="left" width="100%"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_EVENTS'])) ? $this->_tpldata['.'][0]['U_LIST_EVENTS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_NAME'])) ? $this->_tpldata['.'][0]['O_NAME'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . '</a></th>
    <th align="left" width="60" nowrap="nowrap"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_EVENTS'])) ? $this->_tpldata['.'][0]['U_LIST_EVENTS'] : '') . 'o=' . ((isset($this->_tpldata['.'][0]['O_VALUE'])) ? $this->_tpldata['.'][0]['O_VALUE'] : '') . '&amp;start=' . ((isset($this->_tpldata['.'][0]['START'])) ? $this->_tpldata['.'][0]['START'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . '</a></th>
  </tr>
  ';// BEGIN events_row
$_events_row_count = (isset($this->_tpldata['events_row.'])) ?  sizeof($this->_tpldata['events_row.']) : 0;
if ($_events_row_count) {
for ($_events_row_i = 0; $_events_row_i < $_events_row_count; $_events_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['ROW_CLASS'])) ? $this->_tpldata['events_row.'][$_events_row_i]['ROW_CLASS'] : '') . '">
    <td width="100%"><a href="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['U_VIEW_EVENT'])) ? $this->_tpldata['events_row.'][$_events_row_i]['U_VIEW_EVENT'] : '') . '">' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['NAME'])) ? $this->_tpldata['events_row.'][$_events_row_i]['NAME'] : '') . '</a></td>
    <td width="60" nowrap="nowrap" class="positive">' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['VALUE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['VALUE'] : '') . '</td>
  </tr>
  ';}}
// END events_row
echo '
  <tr>
    <th colspan="2" class="footer">' . ((isset($this->_tpldata['.'][0]['LISTEVENTS_FOOTCOUNT'])) ? $this->_tpldata['.'][0]['LISTEVENTS_FOOTCOUNT'] : '') . '</th>
  </tr>
</table>
<table width="100%" border="0" cellspacing="1" cellpadding="2" class="borderless">
  <tr>
    <td align="center" class="menu">' . ((isset($this->_tpldata['.'][0]['EVENT_PAGINATION'])) ? $this->_tpldata['.'][0]['EVENT_PAGINATION'] : '') . '</td>
  </tr>
</table>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>