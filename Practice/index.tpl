{html_options name=foo options=$option selected=$select}<br>
{$exampleOfEscape|escape:'html'}<br>
{for $val=$start to $end step $step}
{$val}
{/for}<br>
{$str|cat:' everyone!'}<br>
{counter start=0 skip=3}
{counter} 
{counter} <br>
{section name=data loop=$cycle}
<tr class="{cycle value="odd even"}">
<td>{$cycle[data]}</td>
</tr>
{/section}<br>
{html_checkboxes name=foo options=$option selected=$select}<br>
{html_radios name=foo options=$option selected=$select}<br>