{* If Else example*}
{if $var === 4}
<h1 style="color:red;">Data type & Data are same.</h1>
{else}
Data type & Data are different.
{/if}
{* End if Else example*}

{*nocache*}
Today's date is
{nocache}
{$smarty.now|date_format}
{/nocache}
{*end nocache*}
<hr>

{* section start *}
{section foo $custid step=2} {* short-hand *}
  {$custid[foo]}<br />
{/section}
{* /section end *}
<hr>

{* while start *}
{while $num > 0}
<div style="color:lightgreen;">{$num--}</div>
{/while}
{* while start *}
<hr>

{counter start=0 skip=3}