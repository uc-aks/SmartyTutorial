<button type="Submit" id="butt">Button</button><br>
{$num = sizeof($arr)}
{$num}<br>
{literal}
<style>
#butt{color:red;}
</style>
{/literal}
<script language="javascript">
    var nm = document.getElementById("butt").addEventListener("click",dosomething);
    function dosomething() {
    console.log("foo is ");
  }
  dosomething();
</script>
<a href="{$smarty.server.SCRIPT_NAME}">click me</a>
<br>
{$arr|sizeof}