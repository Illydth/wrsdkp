<?php
if ($this->security()) {
// INCLUDE page_header.html
$this->assign_from_include('page_header.html');
echo '
<script language="JavaScript" type="text/javascript">
<!--
function check_form()
{
    if ((document.post.select_item_name.value.length < 2) && (document.post.item_name.value.length < 2))
    {
        alert(\'' . ((isset($this->_tpldata['.'][0]['MSG_NAME_EMPTY'])) ? $this->_tpldata['.'][0]['MSG_NAME_EMPTY'] : '') . '\');
        return false;
    }
    if (document.post.raid_id.value.length < 1)
    {
        alert(\'' . ((isset($this->_tpldata['.'][0]['MSG_RAID_ID_EMPTY'])) ? $this->_tpldata['.'][0]['MSG_RAID_ID_EMPTY'] : '') . '\');
        return false;
    }
    if (document.post.item_value.value.length < 1)
    {
        alert(\'' . ((isset($this->_tpldata['.'][0]['MSG_VALUE_EMPTY'])) ? $this->_tpldata['.'][0]['MSG_VALUE_EMPTY'] : '') . '\');
        return false;
    }
    return true;
}

function switch_item_val()
{
  document.post.item_name.value  = document.post.select_item_name.options[document.post.select_item_name.selectedIndex].value;
  document.post.item_value.value = document.post.select_item_name.options[document.post.select_item_name.selectedIndex].text.replace(/[^\\.0-9]/g, "");
}

function pop_search()
{
    search = window.open(\'additem.php' . ((isset($this->_tpldata['.'][0]['SID'])) ? $this->_tpldata['.'][0]['SID'] : '') . '&mode=search\',\'search\',\'resizable=yes,toolbar=no,status=yes,height=150,width=400,screenX=50,screenY=25,left=100,top=75\')
    search.focus();
}
function fnSearch( searchField, searchItem )
{
    thisForm = document.post;
    
    searchBox = thisForm.elements[searchField];
    selectBox = thisForm.elements[searchItem];
    
    // Don\'t select anybody if the search box is blank
    if ( searchBox.value == "" )
    {
        return;
    }
    
    reSearch = new RegExp( searchBox.value, "i" );
    
    len = selectBox.options.length;
    for ( var i = 0; i < len; i++ )
    {
        selectBox.options[i].selected = false;
        
        if ( reSearch.test(selectBox.options[i].value) )
        {
            selectBox.options[i].selected = true;
            break;
        }
    }
}

function fnAddMember()
{
    form = document.post;
    fromField = form.all_members;
    toField = form.elements["item_buyers[]"];

    fromSize = fromField.options.length
    toSize = toField.options.length

    aSelected = new Array();

    // Build an array of the selected members
    for ( i = 0; i < fromSize; i++ )
    {
        if ( fromField.options[i].selected == true )
        {
            aSelected[aSelected.length] = i;
        }
    }

    offset = 0;
    for( i = 0; i < aSelected.length; i++ )
    {
        index = aSelected[i];

        memberValue = fromField.options[index].value;
        memberText = fromField.options[index].text;

        // Remove the initial spacer member
        if ( (toSize == 1) && (toField.options[0].value == "") )
        {
            toSize = 0;
        }

        // Loop through the item_buyers list, don\'t add if it\'s a duplicate
        for ( j = 0, exists = false; j < toSize; j++ )
        {
            // Buyer already exists
            if ( toField.options[ j ].value == memberValue )
            {
                exists = true;
                offset++;
            }
        }

        // Buyer doesn\'t exist, add them
        if ( exists != true )
        {
            toField.options[toSize + i - offset] = new Option(memberText, memberValue);
            toField.options[toSize + i - offset].selected = true;
        }
    }
    
    // We\'re done - clear the search box and focus it for the next entry
    form.memberSearch.value = "";
    form.memberSearch.focus();

    return false;
}

function fnRemoveMember()
{
    form = document.post;
    toField = form.elements["item_buyers[]"];

    toSize = toField.options.length

    aSelected = new Array();

    for ( i = 0; i < toSize; i++ )
    {
        if ( toField.options[i].selected == true )
        {
            aSelected[aSelected.length] = i;
        }
    }

    selectedSize = aSelected.length;
    if ( selectedSize > 0 )
    {
        for ( i = selectedSize; i > -1; i-- )
        {
            index = aSelected[i];

            if ( index )
            {
                toField.options.remove(index);
            }
        }
    }
}
//-->
</script>

<form method="post" action="' . ((isset($this->_tpldata['.'][0]['F_ADD_ITEM'])) ? $this->_tpldata['.'][0]['F_ADD_ITEM'] : '') . '" name="post">
<input type="hidden" name="' . ((isset($this->_tpldata['.'][0]['URI_ITEM'])) ? $this->_tpldata['.'][0]['URI_ITEM'] : '') . '" value="' . ((isset($this->_tpldata['.'][0]['ITEM_ID'])) ? $this->_tpldata['.'][0]['ITEM_ID'] : '') . '" />
<input type="hidden" name="mode" value="' . ((isset($this->_tpldata['.'][0]['MODE'])) ? $this->_tpldata['.'][0]['MODE'] : '') . '" />
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center" colspan="2">' . ((isset($this->_tpldata['.'][0]['L_ADD_ITEM_TITLE'])) ? $this->_tpldata['.'][0]['L_ADD_ITEM_TITLE'] : ((isset($user->lang['ADD_ITEM_TITLE'])) ? $user->lang['ADD_ITEM_TITLE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_ITEM_TITLE'))) . ' 	}')) . '</th>
  </tr>
  <tr>
    <td width="350" valign="top" rowspan="3" nowrap="nowrap" class="row1">
    ' . ((isset($this->_tpldata['.'][0]['FV_ITEM_BUYERS'])) ? $this->_tpldata['.'][0]['FV_ITEM_BUYERS'] : '') . '<br /><b>' . ((isset($this->_tpldata['.'][0]['L_BUYERS'])) ? $this->_tpldata['.'][0]['L_BUYERS'] : ((isset($user->lang['BUYERS'])) ? $user->lang['BUYERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'BUYERS'))) . ' 	}')) . ':</b> <span class="small">' . ((isset($this->_tpldata['.'][0]['L_HOLD_CTRL_NOTE'])) ? $this->_tpldata['.'][0]['L_HOLD_CTRL_NOTE'] : ((isset($user->lang['HOLD_CTRL_NOTE'])) ? $user->lang['HOLD_CTRL_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'HOLD_CTRL_NOTE'))) . ' 	}')) . '</span><br />
      <table width="100%" border="0" cellpadding="3" cellspacing="0" class="borderless">
        <tr>
          <td colspan="3">' . ((isset($this->_tpldata['.'][0]['L_SEARCH_MEMBERS'])) ? $this->_tpldata['.'][0]['L_SEARCH_MEMBERS'] : ((isset($user->lang['SEARCH_MEMBERS'])) ? $user->lang['SEARCH_MEMBERS'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SEARCH_MEMBERS'))) . ' 	}')) . ': <input type="text" name="memberSearch" size="35" maxlength="255" value="" class="input" onkeyup="fnSearch(this.name, \'all_members\')" /></td>
        </tr>
        <tr>
          <td>
          <select name="all_members" size="25" multiple="multiple" class="input">
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
          <td width="50" align="center" valign="middle">
            <input type="button" name="button1" value="&lt;&lt;" accesskey="r" onclick="return fnRemoveMember()" class="liteoption" />
            <input type="button" name="button2" value="&gt;&gt;" accesskey="m" onclick="return fnAddMember()" class="liteoption" />
          </td>
          <td>
          <select name="item_buyers[]" size="25" multiple="multiple" class="input">
            <option value="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
            ';// BEGIN buyers_row
$_buyers_row_count = (isset($this->_tpldata['buyers_row.'])) ?  sizeof($this->_tpldata['buyers_row.']) : 0;
if ($_buyers_row_count) {
for ($_buyers_row_i = 0; $_buyers_row_i < $_buyers_row_count; $_buyers_row_i++)
{
echo '
            <option value="' . ((isset($this->_tpldata['buyers_row.'][$_buyers_row_i]['VALUE'])) ? $this->_tpldata['buyers_row.'][$_buyers_row_i]['VALUE'] : '') . '" selected="selected">' . ((isset($this->_tpldata['buyers_row.'][$_buyers_row_i]['OPTION'])) ? $this->_tpldata['buyers_row.'][$_buyers_row_i]['OPTION'] : '') . '</option>
            ';}}
// END buyers_row
echo '
          </select>
          </td>
        </tr>
      </table>
    </td>
    <td width="100%" valign="top" class="row2">
    <b>' . ((isset($this->_tpldata['.'][0]['L_RAID'])) ? $this->_tpldata['.'][0]['L_RAID'] : ((isset($user->lang['RAID'])) ? $user->lang['RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RAID'))) . ' 	}')) . ':</b> <span class="small">(<a href="' . ((isset($this->_tpldata['.'][0]['U_ADD_RAID'])) ? $this->_tpldata['.'][0]['U_ADD_RAID'] : '') . '" class="small">' . ((isset($this->_tpldata['.'][0]['L_ADD_RAID'])) ? $this->_tpldata['.'][0]['L_ADD_RAID'] : ((isset($user->lang['ADD_RAID'])) ? $user->lang['ADD_RAID'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_RAID'))) . ' 	}')) . '</a>)</span><br />
    <select name="raid_id" class="input">
      <option value=""></option>
      ';// BEGIN raids_row
$_raids_row_count = (isset($this->_tpldata['raids_row.'])) ?  sizeof($this->_tpldata['raids_row.']) : 0;
if ($_raids_row_count) {
for ($_raids_row_i = 0; $_raids_row_i < $_raids_row_count; $_raids_row_i++)
{
echo '
      <option value="' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['VALUE'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['SELECTED'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['raids_row.'][$_raids_row_i]['OPTION'])) ? $this->_tpldata['raids_row.'][$_raids_row_i]['OPTION'] : '') . '</option>
      ';}}
// END raids_row
echo '
    </select>' . ((isset($this->_tpldata['.'][0]['FV_RAID_ID'])) ? $this->_tpldata['.'][0]['FV_RAID_ID'] : '') . '
    <br /><br />
    <b class="small">' . ((isset($this->_tpldata['.'][0]['L_NOTE'])) ? $this->_tpldata['.'][0]['L_NOTE'] : ((isset($user->lang['NOTE'])) ? $user->lang['NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'NOTE'))) . ' 	}')) . ':</b> <span class="small">' . ((isset($this->_tpldata['.'][0]['L_ADDITEM_RAIDID_NOTE'])) ? $this->_tpldata['.'][0]['L_ADDITEM_RAIDID_NOTE'] : ((isset($user->lang['ADDITEM_RAIDID_NOTE'])) ? $user->lang['ADDITEM_RAIDID_NOTE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADDITEM_RAIDID_NOTE'))) . ' 	}')) . '</span>
    </td>
  </tr>
  <tr>
    <td width="100%" valign="top" class="row2">
    <b>' . ((isset($this->_tpldata['.'][0]['L_ITEM'])) ? $this->_tpldata['.'][0]['L_ITEM'] : ((isset($user->lang['ITEM'])) ? $user->lang['ITEM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ITEM'))) . ' 	}')) . ':</b> <span class="small">(<a href="javascript:pop_search();" class="small">' . ((isset($this->_tpldata['.'][0]['L_SEARCH'])) ? $this->_tpldata['.'][0]['L_SEARCH'] : ((isset($user->lang['SEARCH'])) ? $user->lang['SEARCH'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SEARCH'))) . ' 	}')) . '</a>)</span><br /><br />
    ' . ((isset($this->_tpldata['.'][0]['L_SEARCH_EXISTING'])) ? $this->_tpldata['.'][0]['L_SEARCH_EXISTING'] : ((isset($user->lang['SEARCH_EXISTING'])) ? $user->lang['SEARCH_EXISTING'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SEARCH_EXISTING'))) . ' 	}')) . ': <input type="text" name="itemSearch" size="35" maxlength="255" value="" class="input" onkeyup="fnSearch(this.name, \'select_item_name\'); switch_item_val();" /><br />
    ' . ((isset($this->_tpldata['.'][0]['L_SELECT_EXISTING'])) ? $this->_tpldata['.'][0]['L_SELECT_EXISTING'] : ((isset($user->lang['SELECT_EXISTING'])) ? $user->lang['SELECT_EXISTING'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'SELECT_EXISTING'))) . ' 	}')) . ':
    <select name="select_item_name" onchange="javascript:switch_item_val();" class="input">
      <option value=""></option>
      ';// BEGIN items_row
$_items_row_count = (isset($this->_tpldata['items_row.'])) ?  sizeof($this->_tpldata['items_row.']) : 0;
if ($_items_row_count) {
for ($_items_row_i = 0; $_items_row_i < $_items_row_count; $_items_row_i++)
{
echo '
      <option value="' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['VALUE'])) ? $this->_tpldata['items_row.'][$_items_row_i]['VALUE'] : '') . '"' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['SELECTED'])) ? $this->_tpldata['items_row.'][$_items_row_i]['SELECTED'] : '') . '>' . ((isset($this->_tpldata['items_row.'][$_items_row_i]['OPTION'])) ? $this->_tpldata['items_row.'][$_items_row_i]['OPTION'] : '') . '</option>
      ';}}
// END items_row
echo '
    </select>
    <br /><br /><b>- ' . ((isset($this->_tpldata['.'][0]['L_OR'])) ? $this->_tpldata['.'][0]['L_OR'] : ((isset($user->lang['OR'])) ? $user->lang['OR'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'OR'))) . ' 	}')) . ' -</b><br /><br />
    ' . ((isset($this->_tpldata['.'][0]['L_ENTER_NEW'])) ? $this->_tpldata['.'][0]['L_ENTER_NEW'] : ((isset($user->lang['ENTER_NEW'])) ? $user->lang['ENTER_NEW'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ENTER_NEW'))) . ' 	}')) . ': <input type="text" name="item_name" size="30" maxlength="255" value="' . ((isset($this->_tpldata['.'][0]['ITEM_NAME'])) ? $this->_tpldata['.'][0]['ITEM_NAME'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_ITEM_NAME'])) ? $this->_tpldata['.'][0]['FV_ITEM_NAME'] : '') . '
    </td>
  </tr>
  <tr>
    <td width="100%" valign="top" class="row2">
    <b>' . ((isset($this->_tpldata['.'][0]['L_VALUE'])) ? $this->_tpldata['.'][0]['L_VALUE'] : ((isset($user->lang['VALUE'])) ? $user->lang['VALUE'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'VALUE'))) . ' 	}')) . ':</b> <input type="text" name="item_value" size="6" maxlength="10" value="' . ((isset($this->_tpldata['.'][0]['ITEM_VALUE'])) ? $this->_tpldata['.'][0]['ITEM_VALUE'] : '') . '" class="input" />' . ((isset($this->_tpldata['.'][0]['FV_ITEM_VALUE'])) ? $this->_tpldata['.'][0]['FV_ITEM_VALUE'] : '') . '
    </td>
  </tr>
  <tr>
    <th align="center" colspan="2">
    ';// IF S_ADD
if ($this->_tpldata['.'][0]['S_ADD']) { 
echo '
    <input type="submit" name="add" value="' . ((isset($this->_tpldata['.'][0]['L_ADD_ITEM'])) ? $this->_tpldata['.'][0]['L_ADD_ITEM'] : ((isset($user->lang['ADD_ITEM'])) ? $user->lang['ADD_ITEM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'ADD_ITEM'))) . ' 	}')) . '" class="mainoption" /> <input type="reset" name="reset" value="' . ((isset($this->_tpldata['.'][0]['L_RESET'])) ? $this->_tpldata['.'][0]['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'RESET'))) . ' 	}')) . '" class="liteoption" />
    ';// ELSE
} else {
echo '
    <input type="submit" name="update" value="' . ((isset($this->_tpldata['.'][0]['L_UPDATE_ITEM'])) ? $this->_tpldata['.'][0]['L_UPDATE_ITEM'] : ((isset($user->lang['UPDATE_ITEM'])) ? $user->lang['UPDATE_ITEM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'UPDATE_ITEM'))) . ' 	}')) . '" class="mainoption" /> <input type="submit"  name="delete" value="' . ((isset($this->_tpldata['.'][0]['L_DELETE_ITEM'])) ? $this->_tpldata['.'][0]['L_DELETE_ITEM'] : ((isset($user->lang['DELETE_ITEM'])) ? $user->lang['DELETE_ITEM'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'DELETE_ITEM'))) . ' 	}')) . '" class="liteoption" />
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