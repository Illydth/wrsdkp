<?php
if ($this->security()) {
echo '<br />
';echo '<!-- 
    If you use this software and find it to be useful, we ask that you
    retain the copyright notice below.  While not required for free use,
    it will help build interest in the EQdkp project.
//-->';echo '
<div align="center" class="copy">Powered by <a href="http://eqdkp.com/" target="_new" class="copy">EQdkp</a> ' . ((isset($this->_tpldata['.'][0]['EQDKP_VERSION'])) ? $this->_tpldata['.'][0]['EQDKP_VERSION'] : '') . '<br />&copy; 2003 The EQdkp Project Team</div>
<br />
</body>
</html>';
}
?>