{block name='content'}
<ul>
{for $i=1 to 3}
    <li>{$i}</li>
{/for}
</ul>
<hr>
{section name=rows loop=$data}
<tr class="{cycle values="odd,even"}">
   <td>{$data[rows]}</td>
</tr>
{/section}
<hr>
  {eval var=$foo}

<hr>
{assign 'name' 'akash'}
{$name}
<hr>

{$smarty.now|date_format:'%d/%m/%Y'}
{$date|date_format:'%m/%d/%Y'|date_format:'%m-%d-%Y'}
<hr>

{append arr 10}
{append arr 20}
{append arr 30}
{append arr 40}
{$arr[0]}
<hr>
{assign val 10}
{$val}
<a href="http://localhost/demosmarty/second/index2.php">Click here</a>
{/block}


