<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<script language="JavaScript" type="text/javascript">
function check_form()
{
    if (document.post.raid_attendees.value.length < 2)
    {
        alert(\'' . ((isset($this->_tpldata['.'][0]['MSG_ATTENDEES_EMPTY'])) ? $this->_tpldata['.'][0]['MSG_ATTENDEES_EMPTY'] : '') . '\');
        return false;
    }
    if (document.post.raid_name.value.length < 1)
    {
        alert(\'' . ((isset($this->_tpldata['.'][0]['MSG_NAME_EMPTY'])) ? $this->_tpldata['.'][0]['MSG_NAME_EMPTY'] : '') . '\');
        return false;
    }
    return true;
}
function pop_parse_log()
{
    log = window.open(\'parse_' . ((isset($this->_tpldata['.'][0]['MSG_GAME_NAME'])) ? $this->_tpldata['.'][0]['MSG_GAME_NAME'] : '') . '.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '\',\'log\',\'scrollbars=yes,resizable=yes,toolbar=no,status=yes,height=570,width=600,screenX=50,screenY=25,left=100,top=75\')
    log.focus();
}
function fnSearch( searchField, searchItem )
{
    thisForm = document.post;
    
    searchBox = thisForm.elements[searchField];
    selectBox = thisForm.elements[searchItem];
    
    reSearch = new RegExp( searchBox.value, "i" );
    
    len = selectBox.options.length;
    for ( var i = 0; i < len; i++ )
    {
        if( reSearch.test( selectBox.options[i].value ) )
        {
            selectBox.options[i].selected = true;
            break;
        }
    }
}
function addMember( newMember )
{
    // poll the select box if newMember doesn\'t exist
    if( newMember == null )
    {
    }
    
    // get the current value of the textarea box
    thisForm = document.post;
    strMembers = new String( thisForm.raid_attendees.value );
    
    // parse the member names into an array
    arrMembers = strMembers.split(/[\\n\\r]/);
    
    // add the new member to the array
    arrMembers.push( newMember );
    
    // prune out any duplicates
    var seenIt = { };
    for ( var i = arrMembers.length - 1; i >= 0; i-- )
    {
        var thisOne = arrMembers[i];
        if ( seenIt[thisOne] ) 
        {
            arrMembers[i] = null;
    	}
        seenIt[thisOne] = true;
    }
    
    arrMembersOut = new Array();
    len = arrMembers.length
    for ( var i = 0; i < len; i++ )
    {
        if ( arrMembers[i] != null )
        {
            arrMembersOut.push( arrMembers[i] );
        }
    }
    
    // join the array and place the value in the textarea box
    arrMembersOut = arrMembersOut.sort();
    strMembersOut = arrMembersOut.join("\\n");
    
    thisForm.raid_attendees.value = strMembersOut;
    
    thisForm.memberSearch.value = "";
    thisForm.memberSearch.focus();
    
    return false;
}
</script>

<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_ADD_RAID'])) ? $this->_tpldata['.'][0]['F_ADD_RAID'] : '') . '" name="post" onsubmit="return check_form(this)">
<input type="hidden" name="' . ((isset($this->_tpldata['.'][0]['URI_RAID'])) ? $this->_tpldata['.'][0]['URI_RAID'] : '') . '" value="' . ((isset($this->_tpldata['.'][0]['RAID_ID'])) ? $this->_tpldata['.'][0]['RAID_ID'] : '') . '" />
<input type="hidden" name="mode" value="' . ((isset($this->_tpldata['.'][0]['MODE'])) ? $this->_tpldata['.'][0]['MODE'] : '') . '" />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_ADD_RAID_TITLE'])) ? $this->_tpldata['.'][0]['L_ADD_RAID_TITLE'] : ((isset($user->lang['ADD_RAID_TITLE'])) ? $user->lang['ADD_RAID_TITLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_RAID_TITLE'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="350" valign="top" rowspan="3" nowrap="nowrap" class="row1">
      ' . ((isset($this->_tpldata['.'][0]['FV_ATTENDEES'])) ? $this->_tpldata['.'][0]['FV_ATTENDEES'] : '') . '<br /><b>' . ((isset($this->_tpldata['.'][0]['L_ATTENDEES'])) ? $this->_tpldata['.'][0]['L_ATTENDEES'] : ((isset($user->lang['ATTENDEES'])) ? $user->lang['ATTENDEES'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ATTENDEES'))) . ' 	}')) . ':</b><br />
      &nbsp;&nbsp;- <a href="javascript:pop_parse_log();">' . ((isset($this->_tpldata['.'][0]['L_PARSE_LOG'])) ? $this->_tpldata['.'][0]['L_PARSE_LOG'] : ((isset($user->lang['PARSE_LOG'])) ? $user->lang['PARSE_LOG'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'PARSE_LOG'))) . ' 	}')) . '</a><br /><br />
      
      <table width="100%" border="0" cellpadding="3" cellspacing="0" class="borderless">
        <tr>
          <td colspan="3">' . ((isset($this->_tpldata['.'][0]['L_SEARCH_MEMBERS'])) ? $this->_tpldata['.'][0]['L_SEARCH_MEMBERS'] : ((isset($user->lang['SEARCH_MEMBERS'])) ? $user->lang['SEARCH_MEMBERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SEARCH_MEMBERS'))) . ' 	}')) . ': <input type="text" name="memberSearch" size="35" maxlength="255" value="" class="input" onkeyup="fnSearch(this.name, \'member_name\')" /></td>
		</tr>
        <tr>
          <td>
          <select size="30" name="member_name" class="input" onchange="addMember(this.value);">
            ';// BEGIN members_row
$_members_row_count = (isset($this->_tpldata['members_row.'])) ?  sizeof($this->_tpldata['members_row.']) : 0;
if ($_members_row_count) {
for ($_members_row_i = 0; $_members_row_i < $_members_row_count; $_members_row_i++)
{
echo '
            <option value="' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['VALUE'])) ? $this->_tpldata['members_row.'][$_members_row_i]['VALUE'] : '') . '">' . ((isset($this->_tpldata['members_row.'][$_members_row_i]['OPTION'])) ? $this->_tpldata['members_row.'][$_members_row_i]['OPTION'] : '') . '</option>
            ';}}
// END members_row
echo '
          </select>
          </td>
          <td width="20" valign="middle"><input type="button" name="button" value="&gt;&gt;" accesskey="m" onclick="addMember(document.post.member_name.options[document.post.member_name.selectedIndex].value);" class="liteoption" /></td>
          <td><textarea name="raid_attendees" cols="25" rows="30" id="attendees" class="input">' . ((isset($this->_tpldata['.'][0]['RAID_ATTENDEES'])) ? $this->_tpldata['.'][0]['RAID_ATTENDEES'] : '') . '</textarea></td>
        </tr>
      </table>
    </td>
    <td width="100%" valign="top" class="row2">
      <b>' . ((isset($this->_tpldata['.'][0]['L_EVENT'])) ? $this->_tpldata['.'][0]['L_EVENT'] : ((isset($user->lang['EVENT'])) ? $user->lang['EVENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'EVENT'))) . ' 	}')) . ':</b> <span class="small">(<a href="' . ((isset($this->_tpldata['.'][0]['U_ADD_EVENT'])) ? $this->_tpldata['.'][0]['U_ADD_EVENT'] : '') . '" class="small">' . ((isset($this->_tpldata['.'][0]['L_ADD_EVENT'])) ? $this->_tpldata['.'][0]['L_ADD_EVENT'] : ((isset($user->lang['ADD_EVENT'])) ? $user->lang['ADD_EVENT'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_EVENT'))) . ' 	}')) . '</a>)</span><br />
      ';// IF S_EVENT_MULTIPLE
if ($this->_tpldata['.'][0]['S_EVENT_MULTIPLE']) { 
echo '
      <select name="raid_name[]" class="input" size="10" multiple="multiple">
      ';// ELSE
} else {
echo '
      <select name="raid_name" class="input">
        <option value=""></option>
      ';// ENDIF
}
// BEGIN events_row
$_events_row_count = (isset($this->_tpldata['events_row.'])) ?  sizeof($this->_tpldata['events_row.']) : 0;
if ($_events_row_count) {
for ($_events_row_i = 0; $_events_row_i < $_events_row_count; $_events_row_i++)
{
echo '
        <option value="' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['VALUE'])) ? $this->_tpldata['events_row.'][$_events_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['SELECTED'])) ? $this->_tpldata['events_row.'][$_events_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['events_row.'][$_events_row_i]['OPTION'])) ? $this->_tpldata['events_row.'][$_events_row_i]['OPTION'] : '') . '</option>
        ';}}
// END events_row
echo '
      </select>' . ((isset($this->_tpldata['.'][0]['FV_EVENT_NAME'])) ? $this->_tpldata['.'][0]['FV_EVENT_NAME'] : '') . '
      <br /><br />
      <b>' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . ':</b><br /><span class="small">(' . ((isset($this->_tpldata['.'][0]['L_ADDRAID_VALUE_NOTE'])) ? $this->_tpldata['.'][0]['L_ADDRAID_VALUE_NOTE'] : ((isset($user->lang['ADDRAID_VALUE_NOTE'])) ? $user->lang['ADDRAID_VALUE_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDRAID_VALUE_NOTE'))) . ' 	}')) . ')</span><br />
      <input type="text" name="raid_value" size="8" maxlength="7" value="' . ((isset($this->_tpldata['.'][0]['RAID_VALUE'])) ? $this->_tpldata['.'][0]['RAID_VALUE'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_VALUE'])) ? $this->_tpldata['.'][0]['FV_VALUE'] : '') . '
    </td>
  </tr>
  <tr>
    <td width="100%" valign="top" class="row2">
      <b>' . ((isset($this->_tpldata['.'][0]['L_DATE'])) ? $this->_tpldata['.'][0]['L_DATE'] : ((isset($user->lang['DATE'])) ? $user->lang['DATE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DATE'))) . ' 	}')) . ':</b> <input type="text" name="mo" size="3" maxlength="2" value="' . ((isset($this->_tpldata['.'][0]['MO'])) ? $this->_tpldata['.'][0]['MO'] : '') . '" id="mo" class="input" />/<input type="text" name="d" size="3" maxlength="2" value="' . ((isset($this->_tpldata['.'][0]['D'])) ? $this->_tpldata['.'][0]['D'] : '') . '" id="d" class="input" />/<input type="text" name="y" size="5" maxlength="4" value="' . ((isset($this->_tpldata['.'][0]['Y'])) ? $this->_tpldata['.'][0]['Y'] : '') . '" id="y" class="input" /><br />' . ((isset($this->_tpldata['.'][0]['FV_MO'])) ? $this->_tpldata['.'][0]['FV_MO'] : '') . '' . ((isset($this->_tpldata['.'][0]['FV_D'])) ? $this->_tpldata['.'][0]['FV_D'] : '') . '' . ((isset($this->_tpldata['.'][0]['FV_Y'])) ? $this->_tpldata['.'][0]['FV_Y'] : '') . '
      <br />
      <b>' . ((isset($this->_tpldata['.'][0]['L_TIME'])) ? $this->_tpldata['.'][0]['L_TIME'] : ((isset($user->lang['TIME'])) ? $user->lang['TIME'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'TIME'))) . ' 	}')) . ':</b> <input type="text" name="h" size="3" maxlength="2" value="' . ((isset($this->_tpldata['.'][0]['H'])) ? $this->_tpldata['.'][0]['H'] : '') . '" id="h" class="input" />:<input type="text" name="mi" size="3" maxlength="2" value="' . ((isset($this->_tpldata['.'][0]['MI'])) ? $this->_tpldata['.'][0]['MI'] : '') . '" id="mi" class="input" />:<input type="text" name="s" size="3" maxlength="2" value="' . ((isset($this->_tpldata['.'][0]['S'])) ? $this->_tpldata['.'][0]['S'] : '') . '" id="s" class="input" /><br />' . ((isset($this->_tpldata['.'][0]['FV_H'])) ? $this->_tpldata['.'][0]['FV_H'] : '') . '' . ((isset($this->_tpldata['.'][0]['FV_MI'])) ? $this->_tpldata['.'][0]['FV_MI'] : '') . '' . ((isset($this->_tpldata['.'][0]['FV_S'])) ? $this->_tpldata['.'][0]['FV_S'] : '') . '
      <br /><b class="small">' . ((isset($this->_tpldata['.'][0]['L_NOTE'])) ? $this->_tpldata['.'][0]['L_NOTE'] : ((isset($user->lang['NOTE'])) ? $user->lang['NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NOTE'))) . ' 	}')) . ':</b> <span class="small">' . ((isset($this->_tpldata['.'][0]['L_ADDRAID_DATETIME_NOTE'])) ? $this->_tpldata['.'][0]['L_ADDRAID_DATETIME_NOTE'] : ((isset($user->lang['ADDRAID_DATETIME_NOTE'])) ? $user->lang['ADDRAID_DATETIME_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDRAID_DATETIME_NOTE'))) . ' 	}')) . '</span>
    </td>
  </tr>
  <tr>
    <td width="100%" valign="top" class="row2"><b>' . ((isset($this->_tpldata['.'][0]['L_NOTE'])) ? $this->_tpldata['.'][0]['L_NOTE'] : ((isset($user->lang['NOTE'])) ? $user->lang['NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NOTE'))) . ' 	}')) . ':</b> <input type="text" name="raid_note" size="35" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['RAID_NOTE'])) ? $this->_tpldata['.'][0]['RAID_NOTE'] : '') . '" class="input" /></td>
  </tr>
  <tr>
    <th align="center" colspan="2">
    ';// IF S_ADD
if ($this->_tpldata['.'][0]['S_ADD']) { 
echo '
    <input type="submit" name="add" value="' . ((isset($this->_tpldata['.'][0]['L_ADD_RAID'])) ? $this->_tpldata['.'][0]['L_ADD_RAID'] : ((isset($user->lang['ADD_RAID'])) ? $user->lang['ADD_RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_RAID'))) . ' 	}')) . '" class="mainoption" /> <input type="reset" name="reset" value="' . ((isset($this->_tpldata['.'][0]['L_RESET'])) ? $this->_tpldata['.'][0]['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET'))) . ' 	}')) . '" class="liteoption" />
    ';// ELSE
} else {
echo '
    <input type="submit" name="update" value="' . ((isset($this->_tpldata['.'][0]['L_UPDATE_RAID'])) ? $this->_tpldata['.'][0]['L_UPDATE_RAID'] : ((isset($user->lang['UPDATE_RAID'])) ? $user->lang['UPDATE_RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPDATE_RAID'))) . ' 	}')) . '" class="mainoption" /> <input type="submit"  name="delete" value="' . ((isset($this->_tpldata['.'][0]['L_DELETE_RAID'])) ? $this->_tpldata['.'][0]['L_DELETE_RAID'] : ((isset($user->lang['DELETE_RAID'])) ? $user->lang['DELETE_RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE_RAID'))) . ' 	}')) . '" class="liteoption" />
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