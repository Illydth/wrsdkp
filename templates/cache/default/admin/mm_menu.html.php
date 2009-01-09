<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center">' . ((isset($this->_tpldata['.'][0]['L_MANAGE_MEMBERS'])) ? $this->_tpldata['.'][0]['L_MANAGE_MEMBERS'] : ((isset($user->lang['MANAGE_MEMBERS'])) ? $user->lang['MANAGE_MEMBERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'MANAGE_MEMBERS'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td class="row1" align="center">
      <table border="0" cellspacing="0" cellpadding="3" align="center" class="borderless">
        <tr>
          <td align="center" nowrap="nowrap" class="row1"><a href="' . ((isset($this->_tpldata['.'][0]['U_ADD_MEMBER'])) ? $this->_tpldata['.'][0]['U_ADD_MEMBER'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_ADD_MEMBER'])) ? $this->_tpldata['.'][0]['L_ADD_MEMBER'] : ((isset($user->lang['ADD_MEMBER'])) ? $user->lang['ADD_MEMBER'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_MEMBER'))) . ' 	}')) . '</a></td>
        </tr>
        <tr>
          <td align="center" nowrap="nowrap" class="row1"><a href="' . ((isset($this->_tpldata['.'][0]['U_LIST_MEMBERS'])) ? $this->_tpldata['.'][0]['U_LIST_MEMBERS'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_LIST_EDIT_DEL_MEMBERS'])) ? $this->_tpldata['.'][0]['L_LIST_EDIT_DEL_MEMBERS'] : ((isset($user->lang['LIST_EDIT_DEL_MEMBERS'])) ? $user->lang['LIST_EDIT_DEL_MEMBERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'LIST_EDIT_DEL_MEMBERS'))) . ' 	}')) . '</a></td>
        </tr>
        <tr>
          <td align="center" nowrap="nowrap" class="row1"><a href="' . ((isset($this->_tpldata['.'][0]['U_EDIT_RANKS'])) ? $this->_tpldata['.'][0]['U_EDIT_RANKS'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_EDIT_RANKS'])) ? $this->_tpldata['.'][0]['L_EDIT_RANKS'] : ((isset($user->lang['EDIT_RANKS'])) ? $user->lang['EDIT_RANKS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EDIT_RANKS'))) . ' 	}')) . '</a></td>
        </tr>
        <tr>
          <td align="center" nowrap="nowrap" class="row1"><a href="' . ((isset($this->_tpldata['.'][0]['U_TRANSFER_HISTORY'])) ? $this->_tpldata['.'][0]['U_TRANSFER_HISTORY'] : '') . '">' . ((isset($this->_tpldata['.'][0]['L_TRANSFER_HISTORY'])) ? $this->_tpldata['.'][0]['L_TRANSFER_HISTORY'] : ((isset($user->lang['TRANSFER_HISTORY'])) ? $user->lang['TRANSFER_HISTORY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TRANSFER_HISTORY'))) . ' 	}')) . '</a></td>
        </tr>
      </table>
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