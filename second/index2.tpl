{extends 'index.tpl'}
{block name='content'}
This is index2.tpl
<br>
{for $var=1 to 11 step 1}
{$var}
{/for}
<hr>
{function name=show}
this is function
{/function}
<h1 style="color:yellow;">{show}</h1>
{include 'inc.tpl'}
{/block}