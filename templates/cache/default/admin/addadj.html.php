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
    <th align="center" width="100%">' . ((isset($this->_tpldata['.'][0]['L_ADD_ADJ_TITLE'])) ? $this->_tpldata['.'][0]['L_ADD_ADJ_TITLE'] : ((isset($user->lang['ADD_ADJ_TITLE'])) ? $user->lang['ADD_ADJ_TITLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_ADJ_TITLE'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="100%" align="center" class="row1">
    <br />' . ((isset($this->_tpldata['.'][0]['L_ADJUSTMENT_VALUE'])) ? $this->_tpldata['.'][0]['L_ADJUSTMENT_VALUE'] : ((isset($user->lang['ADJUSTMENT_VALUE'])) ? $user->lang['ADJUSTMENT_VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADJUSTMENT_VALUE'))) . ' 	}')) . ': <input type="text" name="adjustment_value" size="6" maxlength="10" value="' . ((isset($this->_tpldata['.'][0]['ADJUSTMENT'])) ? $this->_tpldata['.'][0]['ADJUSTMENT'] : '') . '" class="input" />
    <br /><span class="small">' . ((isset($this->_tpldata['.'][0]['L_ADJUSTMENT_VALUE_NOTE'])) ? $this->_tpldata['.'][0]['L_ADJUSTMENT_VALUE_NOTE'] : ((isset($user->lang['ADJUSTMENT_VALUE_NOTE'])) ? $user->lang['ADJUSTMENT_VALUE_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADJUSTMENT_VALUE_NOTE'))) . ' 	}')) . '</span><br />' . ((isset($this->_tpldata['.'][0]['FV_ADJUSTMENT'])) ? $this->_tpldata['.'][0]['FV_ADJUSTMENT'] : '') . '&nbsp;
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