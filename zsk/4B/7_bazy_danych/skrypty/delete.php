<?php
if (!empty($_GET['id'])) {
  require_once('./connect.php');
  $sql="DELETE FROM `users` WHERE `users`.`id` = $_GET[id]";
  $connect->query($sql);
  if($connect->affected_rows) {
    echo $connect->affected_rows;
    header("location: ../3_bazy_tabela_delete.php?deleteUser=$_GET[id]");
  }else{
    echo "Nie dało się usunąć rekordu!";
    header('location: ../3_bazy_tabela_delete.php?error=1;');
  }
}else {
  header('location: ../3_bazy_tabela_delete.php');

}

 ?>
