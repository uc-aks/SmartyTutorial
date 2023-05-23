
{foreach $Contacts as $con}
<ul><li>{$con.fax}</li>
<li>{$con.email}</li>
<li>{$con.phone.home}</li>
<li>{$con.phone.cell}</li></ul>
<br>
{/foreach}
<br><br>
{foreach $our_culture as $val}
{foreach $val as $v}
<ul><li>{$v}</li></ul>
{/foreach}{/foreach}