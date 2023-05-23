1. Both String be in lower case.<br>
{$str1|lower}<br>
{$str2|lower}
<br><br>
2. Replace ucertify with uCertify in both the String.<br>
{$str1|Replace:'ucertify':'uCertify'}<br>
{$str2|Replace:'ucertify':'uCertify'}<br><br>
3. Wrap the word only 30 character in a line.<br>
{$str1|wordwrap:30:'<br/></n>'}<br><br>
4. Merge both Strings<br>
{$str1|cat:$str2}

<hr>
{html_checkboxes name='id' options=$cust_checkboxes
   selected=$customer_id separator='<br />'}
<br>
<br>