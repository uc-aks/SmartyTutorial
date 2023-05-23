
{$articleTitle}
<br>
{$articleTitle|escape}
<br>
{$articleTitle|escape:'html'}    {* escapes  & " ' < > *}
<br>
{$articleTitle|escape:'htmlall'} {* escapes ALL html entities *}
<br>
<a href="?title={$articleTitle|escape:'url'}">click here</a>
<br>
<a
href="?title=%27Stiff%20Opposition%20Expected%20to%20Casketless%20Funeral%20Plan%27">click here</a>
<br>
{$articleTitle|escape:'quotes'}
<br>
<a href="mailto:{$EmailAddress|escape:"hex"}">{$EmailAddress|escape:"hexentity"}</a>
<br>
{$EmailAddress|escape:'mail'}    {* this converts to email to text *}
<a href="mailto:%62%6f%..snip..%65%74">&#x62;&#x6f;&#x62..snip..&#x65;&#x74;</a>
<br>
{'mail@example.com'|escape:'mail'}
smarty [AT] example [DOT] com

