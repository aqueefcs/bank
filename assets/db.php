<?php 
    $con = new mysqli('remotemysql.com','JJCvmoGHpG','zDedCzDbbK','JJCvmoGHpG');
    define('bankName', 'MCB Bank',true);
    $ar = $con->query("select * from userAccounts,branch where id = '$_SESSION[userId]' AND userAccounts.branch = branch.branchId");
    $userData = $ar->fetch_assoc();
?>
<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
