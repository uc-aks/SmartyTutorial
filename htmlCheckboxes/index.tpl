<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<h1 style="text-align:center;">Smarty Template</h1>
</body>
</html>
{html_checkboxes name='id' options=$cust_checkboxes
   selected=$customer_id separator='<br />'}

{html_options name=foo options=$myOptions selected=$mySelect}
<hr>
{html_table loop=$data}
<hr>
{assign var=pageTitle value=Page2}
{$pageTitle}
<hr>
{$smarty.const.CONST_VAL}
<hr>
{$arr[0]}
{$arr[1]}
{$arr[2]}

