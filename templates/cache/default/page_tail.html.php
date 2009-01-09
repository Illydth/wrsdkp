<?php
if ($this->security()) {
// IF S_IN_ADMIN
if ($this->_tpldata['.'][0]['S_IN_ADMIN']) { 
echo '
    </td>
  </tr>
</table>
';// ENDIF
}
echo '
<br />
';// IF S_NORMAL_FOOTER
if ($this->_tpldata['.'][0]['S_NORMAL_FOOTER']) { 
// IF S_SHOW_QUERIES
if ($this->_tpldata['.'][0]['S_SHOW_QUERIES']) { 
echo '
<table width="100%" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <th align="center">Queries</th>
  </tr>
  ';// BEGIN query_row
$_query_row_count = (isset($this->_tpldata['query_row.'])) ?  sizeof($this->_tpldata['query_row.']) : 0;
if ($_query_row_count) {
for ($_query_row_i = 0; $_query_row_i < $_query_row_count; $_query_row_i++)
{
echo '
  <tr class="' . ((isset($this->_tpldata['query_row.'][$_query_row_i]['ROW_CLASS'])) ? $this->_tpldata['query_row.'][$_query_row_i]['ROW_CLASS'] : '') . '">
    <td width="100%">' . ((isset($this->_tpldata['query_row.'][$_query_row_i]['QUERY'])) ? $this->_tpldata['query_row.'][$_query_row_i]['QUERY'] : '') . '</td>
  </tr>
  ';}}
// END query_row
echo '
</table>
<br />
';// ENDIF
}
echo '<!-- 
    If you use this software and find it to be useful, we ask that you
    retain the copyright notice below.  While not required for free use,
    it will help build interest in the EQdkp project.
//-->';echo '
<center><span class="copy">' . ((isset($this->_tpldata['.'][0]['L_POWERED_BY'])) ? $this->_tpldata['.'][0]['L_POWERED_BY'] : ((isset($user->lang['POWERED_BY'])) ? $user->lang['POWERED_BY'] : '{ ' . ucfirst(strtolower(str_replace('_', ' ', 'POWERED_BY'))) . ' 	}')) . ' <a href="http://eqdkp.com/" target="_new" class="copy">EQdkp</a> ' . ((isset($this->_tpldata['.'][0]['EQDKP_VERSION'])) ? $this->_tpldata['.'][0]['EQDKP_VERSION'] : '') . '<br />&copy; 2003 The EQdkp Project Team</span></center>
<br />
';// IF S_SHOW_DEBUG
if ($this->_tpldata['.'][0]['S_SHOW_DEBUG']) { 
echo '
<center><span class="copy">' . ((isset($this->_tpldata['.'][0]['EQDKP_RENDERTIME'])) ? $this->_tpldata['.'][0]['EQDKP_RENDERTIME'] : '') . ' | ' . ((isset($this->_tpldata['.'][0]['EQDKP_QUERYCOUNT'])) ? $this->_tpldata['.'][0]['EQDKP_QUERYCOUNT'] : '') . ' | <a href="http://validator.w3.org/check/referer" target="_top" class="copy">XHTML Validate</a></span></center>
';// ENDIF
}
// ENDIF
}
echo '
</body>
</html>';
}
?>