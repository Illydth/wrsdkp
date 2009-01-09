<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<script language="JavaScript" type="text/javascript">
<!--
function check_form()
{
    if (document.post.adjustment_value.value.length < 1)
    {
        alert(\'' . ((isset($this->_tpldata['.'][0]['MSG_VALUE_EMPTY'])) ? $this->_tpldata['.'][0]['MSG_VALUE_EMPTY'] : '') . '\');
        return false;
    }
    return true;
}
//-->
</script>
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_ADD_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['F_ADD_ADJUSTMENT'] : '') . '" name="post" onsubmit="return check_form(this)">
<input type="hidden" name="' . ((isset($this->_tpldata['.'][0]['URI_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['URI_ADJUSTMENT'] : '') . '" value="' . ((isset($this->_tpldata['.'][0]['ADJUSTMENT_ID'])) ? $this->_tpldata['.'][0]['ADJUSTMENT_ID'] : '') . '" />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_ADD_IADJ_TITLE'])) ? $this->_tpldata['.'][0]['L_ADD_IADJ_TITLE'] : ((isset($user->lang['ADD_IADJ_TITLE'])) ? $user->lang['ADD_IADJ_TITLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_IADJ_TITLE'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="350" valign="top" rowspan="3" nowrap="nowrap" class="row1">
    ' . ((isset($this->_tpldata['.'][0]['FV_MEMBERS'])) ? $this->_tpldata['.'][0]['FV_MEMBERS'] : '') . '<br /><b>' . ((isset($this->_tpldata['.'][0]['L_MEMBERS'])) ? $this->_tpldata['.'][0]['L_MEMBERS'] : ((isset($user->lang['MEMBERS'])) ? $user->lang['MEMBERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MEMBERS'))) . ' 	}')) . ':</b><br />' . ((isset($this->_tpldata['.'][0]['L_HOLD_CTRL_NOTE'])) ? $this->_tpldata['.'][0]['L_HOLD_CTRL_NOTE'] : ((isset($user->lang['HOLD_CTRL_NOTE'])) ? $user->lang['HOLD_CTRL_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HOLD_CTRL_NOTE'))) . ' 	}')) . '
      <select name="member_names[]" size="25" multiple="multiple" class="input">
        ';// BEGIN members_row
$_members_row_count = (isset($this->_tpldata['members_row.'])) ?  sizeof($this->_tpldata['members_row.']) : 0;
if ($_members_row_count) {
for ($_members_row_i = 0; $_members_row_i < $_members_row_count; $_members_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['VALUE'])) ? $this->_tpldata['members_row.'][$_members_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['SELECTED'])) ? $this->_tpldata['members_row.'][$_members_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['OPTION'])) ? $this->_tpldata['members_row.'][$_members_row_i]['OPTION'] : '') . '</option>
        ';}}
// END members_row
echo '
      </select>
    </td>
    <td width="100%" valign="top" class="row2"><b>' . ((isset($this->_tpldata['.'][0]['L_REASON'])) ? $this->_tpldata['.'][0]['L_REASON'] : ((isset($user->lang['REASON'])) ? $user->lang['REASON'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'REASON'))) . ' 	}')) . ':</b><br /><input type="text" name="adjustment_reason" size="35" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['ADJUSTMENT_REASON'])) ? $this->_tpldata['.'][0]['ADJUSTMENT_REASON'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <td width="100%" valign="top" class="row2">
    <b>' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . ':</b> <span class="small">(' . ((isset($this->_tpldata['.'][0]['L_ADJUSTMENT_VALUE_NOTE'])) ? $this->_tpldata['.'][0]['L_ADJUSTMENT_VALUE_NOTE'] : ((isset($user->lang['ADJUSTMENT_VALUE_NOTE'])) ? $user->lang['ADJUSTMENT_VALUE_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADJUSTMENT_VALUE_NOTE'))) . ' 	}')) . ')</span>
    <br /><input type="text" name="adjustment_value" size="7" maxlength="10" value="' . ((isset($this->_tpldata['.'][0]['ADJUSTMENT_VALUE'])) ? $this->_tpldata['.'][0]['ADJUSTMENT_VALUE'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['FV_ADJUSTMENT'] : '') . '
    </td>
  </tr>
  <tr>
    <td width="100%" valign="top" class="row2">
      <b>' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . ':</b> <input type="text" name="mo" size="3" maxlength="2" value="' . ((isset($this->_tpldata['.'][0]['MO'])) ? $this->_tpldata['.'][0]['MO'] : '') . '" class="input" />/<input type="text" name="d" size="3" maxlength="2" value="' . ((isset($this->_tpldata['.'][0]['D'])) ? $this->_tpldata['.'][0]['D'] : '') . '" class="input" />/<input type="text" name="y" size="5" maxlength="4" value="' . ((isset($this->_tpldata['.'][0]['Y'])) ? $this->_tpldata['.'][0]['Y'] : '') . '" class="input" /><br />' . ((isset($this->_tpldata['.'][0]['FV_MO'])) ? $this->_tpldata['.'][0]['FV_MO'] : '') . '' . ((isset($this->_tpldata['.'][0]['FV_D'])) ? $this->_tpldata['.'][0]['FV_D'] : '') . '' . ((isset($this->_tpldata['.'][0]['FV_Y'])) ? $this->_tpldata['.'][0]['FV_Y'] : '') . '
    </td>
  </tr>
  <tr>
    <th align="center" colspan="2">
    ';// IF S_ADD
if ($this->_tpldata['.'][0]['S_ADD']) { 
echo '
    <input type="submit" name="add" value="' . ((isset($this->_tpldata['.'][0]['L_ADD_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['L_ADD_ADJUSTMENT'] : ((isset($user->lang['ADD_ADJUSTMENT'])) ? $user->lang['ADD_ADJUSTMENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_ADJUSTMENT'))) . ' 	}')) . '" class="mainoption" /> <input type="reset" name="reset" value="' . ((isset($this->_tpldata['.'][0]['L_RESET'])) ? $this->_tpldata['.'][0]['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET'))) . ' 	}')) . '" class="liteoption" />
    ';// ELSE
} else {
echo '
    <input type="submit" name="update" value="' . ((isset($this->_tpldata['.'][0]['L_UPDATE_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['L_UPDATE_ADJUSTMENT'] : ((isset($user->lang['UPDATE_ADJUSTMENT'])) ? $user->lang['UPDATE_ADJUSTMENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPDATE_ADJUSTMENT'))) . ' 	}')) . '" class="mainoption" /> <input type="submit"  name="delete" value="' . ((isset($this->_tpldata['.'][0]['L_DELETE_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['L_DELETE_ADJUSTMENT'] : ((isset($user->lang['DELETE_ADJUSTMENT'])) ? $user->lang['DELETE_ADJUSTMENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE_ADJUSTMENT'))) . ' 	}')) . '" class="liteoption" />
    ';// ENDIF
}
echo '
    </th>
  </tr>
</table>
</form>
';// INCLUDE page_tail.html
$this->assign_from_include('page_tail.html');

}
?>