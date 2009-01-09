<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<script language="JavaScript" type="text/javascript">
<!--
function check_form()
{
    if (document.post.event_name.value.length < 2)
    {
        alert(\'' . ((isset($this->_tpldata['.'][0]['MSG_NAME_EMPTY'])) ? $this->_tpldata['.'][0]['MSG_NAME_EMPTY'] : '') . '\');
        return false;
    }
    if (document.post.event_value.value.length < 1)
    {
        alert(\'' . ((isset($this->_tpldata['.'][0]['MSG_VALUE_EMPTY'])) ? $this->_tpldata['.'][0]['MSG_VALUE_EMPTY'] : '') . '\');
        return false;
    }
    return true;
}
//-->
</script>
<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_ADD_EVENT'])) ? $this->_tpldata['.'][0]['F_ADD_EVENT'] : '') . '" name="post" onsubmit="return check_form(this)">
<input type="hidden" name="' . ((isset($this->_tpldata['.'][0]['URI_EVENT'])) ? $this->_tpldata['.'][0]['URI_EVENT'] : '') . '" value="' . ((isset($this->_tpldata['.'][0]['EVENT_ID'])) ? $this->_tpldata['.'][0]['EVENT_ID'] : '') . '" />
<input type="hidden" name="mode" value="' . ((isset($this->_tpldata['.'][0]['MODE'])) ? $this->_tpldata['.'][0]['MODE'] : '') . '" />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2" >' . ((isset($this->_tpldata['.'][0]['L_ADD_EVENT_TITLE'])) ? $this->_tpldata['.'][0]['L_ADD_EVENT_TITLE'] : ((isset($user->lang['ADD_EVENT_TITLE'])) ? $user->lang['ADD_EVENT_TITLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_EVENT_TITLE'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="50%" align="center" class="row1">' . ((isset($this->_tpldata['.'][0]['L_NAME'])) ? $this->_tpldata['.'][0]['L_NAME'] : ((isset($user->lang['NAME'])) ? $user->lang['NAME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NAME'))) . ' 	}')) . ': <input type="text" name="event_name" size="35" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['EVENT_NAME'])) ? $this->_tpldata['.'][0]['EVENT_NAME'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_NAME'])) ? $this->_tpldata['.'][0]['FV_NAME'] : '') . '</td>
    <td width="50%" align="center" class="row2">' . ((isset($this->_tpldata['.'][0]['L_DKP_VALUE'])) ? $this->_tpldata['.'][0]['L_DKP_VALUE'] : ((isset($user->lang['DKP_VALUE'])) ? $user->lang['DKP_VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DKP_VALUE'))) . ' 	}')) . ': <input type="text" name="event_value" size="8" maxlength="7" value="' . ((isset($this->_tpldata['.'][0]['EVENT_VALUE'])) ? $this->_tpldata['.'][0]['EVENT_VALUE'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_VALUE'])) ? $this->_tpldata['.'][0]['FV_VALUE'] : '') . '</td>
  </tr>
  <tr>
    <th align="center" colspan="2">
    ';// IF S_ADD
if ($this->_tpldata['.'][0]['S_ADD']) { 
echo '
    <input type="submit" name="add" value="' . ((isset($this->_tpldata['.'][0]['L_ADD_EVENT'])) ? $this->_tpldata['.'][0]['L_ADD_EVENT'] : ((isset($user->lang['ADD_EVENT'])) ? $user->lang['ADD_EVENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_EVENT'))) . ' 	}')) . '" class="mainoption" /> <input type="reset" name="reset" value="' . ((isset($this->_tpldata['.'][0]['L_RESET'])) ? $this->_tpldata['.'][0]['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET'))) . ' 	}')) . '" class="liteoption" />
    ';// ELSE
} else {
echo '
    <input type="submit" name="update" value="' . ((isset($this->_tpldata['.'][0]['L_UPDATE_EVENT'])) ? $this->_tpldata['.'][0]['L_UPDATE_EVENT'] : ((isset($user->lang['UPDATE_EVENT'])) ? $user->lang['UPDATE_EVENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPDATE_EVENT'))) . ' 	}')) . '" class="mainoption" /> <input type="submit"  name="delete" value="' . ((isset($this->_tpldata['.'][0]['L_DELETE_EVENT'])) ? $this->_tpldata['.'][0]['L_DELETE_EVENT'] : ((isset($user->lang['DELETE_EVENT'])) ? $user->lang['DELETE_EVENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE_EVENT'))) . ' 	}')) . '" class="liteoption" />
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