<?php
include('smarty/libs/Smarty.class.php');
$smarty = new Smarty;
$str1 = 'uCertify LEARN is specifically designed to deliver Higher Ed, vocational, workforce development & readiness, and corporate training programs to diverse audiences with different proficiency levels.';
$str2 = 'At uCertify, we believe that assessments are the key to both engaging learners and effective, focused learning.';
$smarty->assign('str1',$str1);
$smarty->assign('str2',$str2);
$smarty->assign('cust_checkboxes', array(
    1000 => 'Joe Schmoe',
    1001 => 'Jack Smith',
    1002 => 'Jane Johnson',
    1003 => 'Charlie Brown')
  );
$smarty->assign('customer_id', 1001);
$smarty->display('index.tpl');
?>

<form action="" method="post">
Enter Number : <input type="number" name="num" id=""> <input type="submit" name="submit" value="Submit">
</form>
<?php
if(isset($_REQUEST['submit'])){
   $number = $_POST['num'];
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