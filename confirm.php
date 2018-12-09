<?php
// セッションスタート
session_start();
?>
<html>

<body>
  <?php echo $_SESSION['name'] ?>
  <?php echo $_SESSION['kana'] ?>

  <form action="./input_class.php" method="post">
    <input type="submit" name="back" value="戻る" />
  </form>
  <form action="./complete.php" method="post">
    <input type="submit" value="送信する" />
  </form>
</body>

</html>