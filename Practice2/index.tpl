1. Example of html_options.<br>
{html_options name=htmlOption selected=$myOptions options=$Options}<br><br>
2. Example of Escape.<br>
{$escStr|escape:'html'}<br><br>
3. Write a Program to print a table of 5.<br>
{for $val = $start to $end step $skip}
{$val}
{/for}<br><br>
4. Concatenate two Strings.<br>
{$conStr|cat:' String'}<br><br>
5. Difference between counter and cycle<br>
{counter start=0 skip=2}
{counter}<br>
{section name=jaiho loop=$cycle}
<tr class={cycle values="odd even"}><td>{$cycle[jaiho]}</td></tr>
{/section}<br><br>
8. Our Cultures<br>
{foreach $Culture as $culture}
{foreach $culture as $cult}
<ul><li>{$cult}</li></ul>
{/foreach}
{/foreach}
9. Controls using Smarty<br>
{html_checkboxes name=htmlCheckboxes selected=$myOptions options=$Options}<br>
{html_radios name=htmlRadio selected=$myOptions options=$Options}

