{* Accessing a 2-D array using for loop*}

<ul>
{for $a=0 to 1}
    {for $b=0 to 1}
        <li>{$arr[$a][$b]}</li>
    {/for}
{/for}
</ul>
<br/>
<ul>
{foreach $myPeople as $key=>$value}
   <li>{$key}:{$value}</li>
{/foreach}
</ul>
<br>
<br>
<br>
{function name='hello'}
This is my function
{/function}
{call hello}
<hr>
{call hello}



