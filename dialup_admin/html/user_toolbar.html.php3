<?php
print <<<EOM
<tr valign=top>
<td align=center bgcolor="black" width=100>
<a href="user_admin.php3?login=$login" title="Show User Information"><font color="white"><b>SHOW</b></font></a></td>
<td align=center bgcolor="black" width=100>
<a href="user_edit.php3?login=$login" title="Change User Dialup Settings"><font color="white"><b>EDIT</b></font></a></td>
<td align=center bgcolor="black" width=100>
<a href="user_accounting.php3?login=$login" title="Show User Accounting Information"><font color="white"><b>ACCOUNTING</b></font></a></td>
<td align=center bgcolor="black" width=100>
<a href="badusers.php3?login=$login" title="Show User Unauthorized Actions"><font color="white"><b>BADUSERS</b></font></a></td>
<td align=center bgcolor="black" width=100>
<a href="user_delete.php3?login=$login" title="Delete User"><font color="white"><b>DELETE</b></font></a></td>
<td align=center bgcolor="black" width=100>
<a href="user_test.php3?login=$login" title="Test User"><font color="white"><b>TEST</b></font></a></td>
</tr>
EOM;
?>
