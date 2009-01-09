<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<script language="javascript" type="text/javascript">
<!--
function check_form()
{
    if (document.post.log.value.length < 2)
    {
        return false;
    }
    return true;
}
function insert_log()
{
    opener.document.post.attendees.value = document.post.log.value;
    opener.document.post.h.value = document.post.h.value;
    opener.document.post.mi.value = document.post.mi.value;
    opener.document.post.s.value = document.post.s.value;
    opener.document.post.mo.value = document.post.mo.value;
    opener.document.post.d.value = document.post.d.value;
    opener.document.post.y.value = document.post.y.value;

    opener.changed = "True";
    window.close();
    opener.window.focus();
}
//-->
</script>
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_PARSE_LOG'])) ? $this->_tpldata['.'][0]['F_PARSE_LOG'] : '') . '" name="post">
<table width="100%" border="0" cellspacing="1" cellpadding="2">
';// IF S_STEP1
if ($this->_tpldata['.'][0]['S_STEP1']) { 
echo '
  <tr>
    <th align="center" width="100%">' . ((isset($this->_tpldata['.'][0]['L_PASTE_LOG'])) ? $this->_tpldata['.'][0]['L_PASTE_LOG'] : ((isset($user->lang['PASTE_LOG'])) ? $user->lang['PASTE_LOG'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PASTE_LOG'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="100%" align="center" class="row2">&nbsp;<br /><textarea name="log" rows="20" cols="60" id="log" style="width: 450px" class="input"></textarea><br />&nbsp;</td>
  </tr>
</table>
<br />
<table width="100%" border="0" cellspacing="1" cellpadding="0">
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_OPTIONS'])) ? $this->_tpldata['.'][0]['L_OPTIONS'] : ((isset($user->lang['OPTIONS'])) ? $user->lang['OPTIONS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'OPTIONS'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="50%" align="center" valign="top">
      <table width="100%" border="0" cellspacing="1" cellpadding="1" class="borderless">
        ';// BEGIN options_row
$_options_row_count = (isset($this->_tpldata['options_row.'])) ?  sizeof($this->_tpldata['options_row.']) : 0;
if ($_options_row_count) {
for ($_options_row_i = 0; $_options_row_i < $_options_row_count; $_options_row_i++)
{
echo '
        <tr>
          <td width="20" class="row2" align="center"><input type="checkbox" name="' . ((isset($this->_tpldata['options_row.'][$_options_row_i]['CBNAME'])) ? $this->_tpldata['options_row.'][$_options_row_i]['CBNAME'] : '') . '" value="' . ((isset($this->_tpldata['options_row.'][$_options_row_i]['CBVALUE'])) ? $this->_tpldata['options_row.'][$_options_row_i]['CBVALUE'] : '') . '"' . ((isset($this->_tpldata['options_row.'][$_options_row_i]['CBCHECKED'])) ? $this->_tpldata['options_row.'][$_options_row_i]['CBCHECKED'] : '') . ' /></td>
          <td width="100%" class="row1" align="left">' . ((isset($this->_tpldata['options_row.'][$_options_row_i]['OPTION'])) ? $this->_tpldata['options_row.'][$_options_row_i]['OPTION'] : '') . '</td>
        </tr>
        ';}}
// END options_row
echo '
      </table>
    </td>
    <td width="50%" align="center" valign="top">
      <table width="100%" border="0" cellspacing="1" cellpadding="1" class="borderless">
        ';// BEGIN ranks_row
$_ranks_row_count = (isset($this->_tpldata['ranks_row.'])) ?  sizeof($this->_tpldata['ranks_row.']) : 0;
if ($_ranks_row_count) {
for ($_ranks_row_i = 0; $_ranks_row_i < $_ranks_row_count; $_ranks_row_i++)
{
echo '
        <tr>
          <td width="20" class="row2" align="center"><input type="checkbox" name="' . ((isset($this->_tpldata['ranks_row.'][$_ranks_row_i]['CBNAME'])) ? $this->_tpldata['ranks_row.'][$_ranks_row_i]['CBNAME'] : '') . '" value="' . ((isset($this->_tpldata['ranks_row.'][$_ranks_row_i]['CBVALUE'])) ? $this->_tpldata['ranks_row.'][$_ranks_row_i]['CBVALUE'] : '') . '"' . ((isset($this->_tpldata['ranks_row.'][$_ranks_row_i]['CBCHECKED'])) ? $this->_tpldata['ranks_row.'][$_ranks_row_i]['CBCHECKED'] : '') . ' /></td>
          <td width="100%" class="row1" align="left">' . ((isset($this->_tpldata['ranks_row.'][$_ranks_row_i]['OPTION'])) ? $this->_tpldata['ranks_row.'][$_ranks_row_i]['OPTION'] : '') . '</td>
        </tr>
        ';}}
// END ranks_row
echo '
      </table>
    </td>
  <tr>
    <th align="center" colspan="2"><input type="submit" name="parse" value="' . ((isset($this->_tpldata['.'][0]['L_PARSE_LOG'])) ? $this->_tpldata['.'][0]['L_PARSE_LOG'] : ((isset($user->lang['PARSE_LOG'])) ? $user->lang['PARSE_LOG'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PARSE_LOG'))) . ' 	}')) . '" class="mainoption" /> <input type="button" name="button" value="' . ((isset($this->_tpldata['.'][0]['L_CLOSE_WINDOW'])) ? $this->_tpldata['.'][0]['L_CLOSE_WINDOW'] : ((isset($user->lang['CLOSE_WINDOW'])) ? $user->lang['CLOSE_WINDOW'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'CLOSE_WINDOW'))) . ' 	}')) . '" onclick="javascript:window.close(); window.opener.window.focus();" class="liteoption" /></th>
  </tr>
</table>
';// ELSE
} else {
echo '
  <tr>
    <th align="center">' . ((isset($this->_tpldata['.'][0]['L_FOUND_MEMBERS'])) ? $this->_tpldata['.'][0]['L_FOUND_MEMBERS'] : ((isset($user->lang['FOUND_MEMBERS'])) ? $user->lang['FOUND_MEMBERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'FOUND_MEMBERS'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td align="center" class="row1">&nbsp;<br /><textarea name="log" rows="20" cols="20" id="log" class="input">' . ((isset($this->_tpldata['.'][0]['FOUND_MEMBERS'])) ? $this->_tpldata['.'][0]['FOUND_MEMBERS'] : '') . '</textarea><br />&nbsp;</td>
  </tr>
  <tr>
    <th align="center">' . ((isset($this->_tpldata['.'][0]['L_LOG_DATE_TIME'])) ? $this->_tpldata['.'][0]['L_LOG_DATE_TIME'] : ((isset($user->lang['LOG_DATE_TIME'])) ? $user->lang['LOG_DATE_TIME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LOG_DATE_TIME'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td align="center" class="row2">
      <input type="text" name="mo" size="3" maxlength="2" value="' . ((isset($this->_tpldata['.'][0]['MO'])) ? $this->_tpldata['.'][0]['MO'] : '') . '" id="mo" class="input" />
      /<input type="text" name="d" size="3" maxlength="2" value="' . ((isset($this->_tpldata['.'][0]['D'])) ? $this->_tpldata['.'][0]['D'] : '') . '" id="d" class="input" />
      /<input type="text" name="y" size="5" maxlength="4" value="' . ((isset($this->_tpldata['.'][0]['Y'])) ? $this->_tpldata['.'][0]['Y'] : '') . '" id="y" class="input" />
      &nbsp;<input type="text" name="h" size="3" maxlength="2" value="' . ((isset($this->_tpldata['.'][0]['H'])) ? $this->_tpldata['.'][0]['H'] : '') . '" id="h" class="input" />
      :<input type="text" name="mi" size="3" maxlength="2" value="' . ((isset($this->_tpldata['.'][0]['MI'])) ? $this->_tpldata['.'][0]['MI'] : '') . '" id="mi" class="input" />
      :<input type="text" name="s" size="3" maxlength="2" value="' . ((isset($this->_tpldata['.'][0]['S'])) ? $this->_tpldata['.'][0]['S'] : '') . '" id="s" class="input" />
    </td>
  </tr>
  <tr>
    <th align="center"><input type="button" name="button" value="' . ((isset($this->_tpldata['.'][0]['L_LOG_ADD_DATA'])) ? $this->_tpldata['.'][0]['L_LOG_ADD_DATA'] : ((isset($user->lang['LOG_ADD_DATA'])) ? $user->lang['LOG_ADD_DATA'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LOG_ADD_DATA'))) . ' 	}')) . '" class="mainoption" onclick="javascript:insert_log();" /></th>
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