<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<script language="JavaScript" type="text/javascript">
<!--
function check_form()
{
    if ((document.post.turnin_from.value == \'\') || (document.post.turnin_to.value == \'\'))
    {
        return false;
    }
    
    turnin_from = document.post.turnin_from.options[document.post.turnin_from.selectedIndex];
    turnin_to = document.post.turnin_to.options[document.post.turnin_to.selectedIndex];
    if (turnin_from.value == turnin_to.value)
    {
        alert(\'' . ((isset($this->_tpldata['.'][0]['MSG_FROM_TO_SAME'])) ? $this->_tpldata['.'][0]['MSG_FROM_TO_SAME'] : '') . '\');
        return false;
    }
    return true;
}
//-->
</script>
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_ADD_TURNIN'])) ? $this->_tpldata['.'][0]['F_ADD_TURNIN'] : '') . '" name="post" onsubmit="return check_form(this)">
<input type="hidden" name="from" value="' . ((isset($this->_tpldata['.'][0]['FROM'])) ? $this->_tpldata['.'][0]['FROM'] : '') . '" />
<input type="hidden" name="to" value="' . ((isset($this->_tpldata['.'][0]['TO'])) ? $this->_tpldata['.'][0]['TO'] : '') . '" />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_ADD_TURNIN_TITLE'])) ? $this->_tpldata['.'][0]['L_ADD_TURNIN_TITLE'] : ((isset($user->lang['ADD_TURNIN_TITLE'])) ? $user->lang['ADD_TURNIN_TITLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_TURNIN_TITLE'))) . ' 	}')) . '</th>
  </tr>
  ';// IF S_STEP1
if ($this->_tpldata['.'][0]['S_STEP1']) { 
echo '
  <tr>
    <td width="50%" valign="top" align="center" class="row1">
    ' . ((isset($this->_tpldata['.'][0]['FV_TURNIN_FROM'])) ? $this->_tpldata['.'][0]['FV_TURNIN_FROM'] : '') . '<br /><b>' . ((isset($this->_tpldata['.'][0]['L_FROM'])) ? $this->_tpldata['.'][0]['L_FROM'] : ((isset($user->lang['FROM'])) ? $user->lang['FROM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FROM'))) . ' 	}')) . ':</b><br />
      <select name="turnin_from" size="35" class="input">
        ';// BEGIN turnin_from_row
$_turnin_from_row_count = (isset($this->_tpldata['turnin_from_row.'])) ?  sizeof($this->_tpldata['turnin_from_row.']) : 0;
if ($_turnin_from_row_count) {
for ($_turnin_from_row_i = 0; $_turnin_from_row_i < $_turnin_from_row_count; $_turnin_from_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['turnin_from_row.'][$_turnin_from_row_i]['VALUE'])) ? $this->_tpldata['turnin_from_row.'][$_turnin_from_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['turnin_from_row.'][$_turnin_from_row_i]['SELECTED'])) ? $this->_tpldata['turnin_from_row.'][$_turnin_from_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['turnin_from_row.'][$_turnin_from_row_i]['OPTION'])) ? $this->_tpldata['turnin_from_row.'][$_turnin_from_row_i]['OPTION'] : '') . '</option>
        ';}}
// END turnin_from_row
echo '
      </select>
      <br />&nbsp;
    </td>
    <td width="50%" valign="top" align="center" class="row2">
    ' . ((isset($this->_tpldata['.'][0]['FV_TURNIN_TO'])) ? $this->_tpldata['.'][0]['FV_TURNIN_TO'] : '') . '<br /><b>' . ((isset($this->_tpldata['.'][0]['L_TO'])) ? $this->_tpldata['.'][0]['L_TO'] : ((isset($user->lang['TO'])) ? $user->lang['TO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TO'))) . ' 	}')) . ':</b><br />
      <select name="turnin_to" size="35" class="input">
        ';// BEGIN turnin_to_row
$_turnin_to_row_count = (isset($this->_tpldata['turnin_to_row.'])) ?  sizeof($this->_tpldata['turnin_to_row.']) : 0;
if ($_turnin_to_row_count) {
for ($_turnin_to_row_i = 0; $_turnin_to_row_i < $_turnin_to_row_count; $_turnin_to_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['turnin_to_row.'][$_turnin_to_row_i]['VALUE'])) ? $this->_tpldata['turnin_to_row.'][$_turnin_to_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['turnin_to_row.'][$_turnin_to_row_i]['SELECTED'])) ? $this->_tpldata['turnin_to_row.'][$_turnin_to_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['turnin_to_row.'][$_turnin_to_row_i]['OPTION'])) ? $this->_tpldata['turnin_to_row.'][$_turnin_to_row_i]['OPTION'] : '') . '</option>
        ';}}
// END turnin_to_row
echo '
      </select>
      <br />&nbsp;
    </td>
  </tr>
  <tr>
    <th align="center" colspan="2"><input type="submit" name="proceed" value="' . ((isset($this->_tpldata['.'][0]['L_PROCEED'])) ? $this->_tpldata['.'][0]['L_PROCEED'] : ((isset($user->lang['PROCEED'])) ? $user->lang['PROCEED'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PROCEED'))) . ' 	}')) . '" class="mainoption" /></th>
  </tr>
  ';// ELSE
} else {
echo '
  <tr>
    <td width="200" nowrap="nowrap" class="row1"><b>' . ((isset($this->_tpldata['.'][0]['L_FROM'])) ? $this->_tpldata['.'][0]['L_FROM'] : ((isset($user->lang['FROM'])) ? $user->lang['FROM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FROM'))) . ' 	}')) . ':</b> ' . ((isset($this->_tpldata['.'][0]['TURNIN_FROM'])) ? $this->_tpldata['.'][0]['TURNIN_FROM'] : '') . '</td>
    <td width="100%" class="row1">
    <b>' . ((isset($this->_tpldata['.'][0]['L_ITEM'])) ? $this->_tpldata['.'][0]['L_ITEM'] : ((isset($user->lang['ITEM'])) ? $user->lang['ITEM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEM'))) . ' 	}')) . ':</b>&nbsp;
      <select name="item_id" class="input">
        ';// BEGIN items_row
$_items_row_count = (isset($this->_tpldata['items_row.'])) ?  sizeof($this->_tpldata['items_row.']) : 0;
if ($_items_row_count) {
for ($_items_row_i = 0; $_items_row_i < $_items_row_count; $_items_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['VALUE'])) ? $this->_tpldata['items_row.'][$_items_row_i]['VALUE'] : '') . '">' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['OPTION'])) ? $this->_tpldata['items_row.'][$_items_row_i]['OPTION'] : '') . '</option>
        ';}}
// END items_row
echo '
      </select>
    </td>
  </tr>
  <tr>
    <td colspan="2" class="row2"><b>' . ((isset($this->_tpldata['.'][0]['L_TO'])) ? $this->_tpldata['.'][0]['L_TO'] : ((isset($user->lang['TO'])) ? $user->lang['TO'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TO'))) . ' 	}')) . ':</b> ' . ((isset($this->_tpldata['.'][0]['TURNIN_TO'])) ? $this->_tpldata['.'][0]['TURNIN_TO'] : '') . '</td>
  </tr>
  <tr>
    <th align="center" colspan="2"><input type="submit" name="add" value="' . ((isset($this->_tpldata['.'][0]['L_ADD_TURNIN'])) ? $this->_tpldata['.'][0]['L_ADD_TURNIN'] : ((isset($user->lang['ADD_TURNIN'])) ? $user->lang['ADD_TURNIN'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_TURNIN'))) . ' 	}')) . '" class="mainoption" /></th>
  </tr>
  ';// ENDIF
}
echo '
</table>
</form>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>