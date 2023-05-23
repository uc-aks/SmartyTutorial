<?php
include('smarty/libs/Smarty.class.php');
$smarty = new Smarty;

$smarty->assign('Options',array(1001=>'Rahul',1002=>'Shyam',1003=>'Mere Ram'));
$smarty->assign('myOptions',1001);

$smarty->assign('escStr','This is my Escape String');

$smarty->assign('start',5);
$smarty->assign('skip',5);
$smarty->assign('end',50);

$smarty->assign('conStr',"This is my Concatenate");

$smarty->assign('cycle',array('Jai Shree Ram','Jai Bajrang bali','Om Namah Shivaay'));

$our_culture = array(
    array(
        "point_one" => "To be the best in the world.",
    ),
    array(
        "point_two" => "We produce results.",
    ),
    array(
        "point_three" => "We keep our word - We do what we say we will do.",
    ),
    array(
        "point_four" => "Coach, mentor and help the team grow."
    )
    );
$smarty->assign('Culture',$our_culture);
$smarty->display('index.tpl');
?>

10. Perform a Task
<form action="" method="post">
Enter Number : <input type="number" name="number" id=""> <input type="submit" name="submit" value="Submit">
</form>
<?php
if(isset($_REQUEST['submit'])){
   $number = $_POST['number'];
   if($number % 2 == 0){
    echo 'Even Number';
   }else{
    echo 'Odd Number';
   }
   echo "<br>";
   for($i=1;$i<=10;$i++){
    echo $number*$i."<br>";
   }
   }
?>