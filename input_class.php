<?php
// セッションスタート
session_start();
//require('/Users/koidet/skillengine/valfunction.php');
require('valfunction.php');
if (isset($_POST["submit"])) {//*確認するボタンが押されたとき処理を実行
    $_SESSION = $_POST;
    $obj = new validclass();
    $obj->validname($_SESSION['name']);
    $obj->validkana($_SESSION['kana']);
    if (!(isset($_POST['back']))) {//*confirmから戻るボタンが押されたとき実行させない
        $errors = [
                  'name' => $obj->err_name,
                  'kana' => $obj->err_kana
        ];
        $count="";
        foreach ($errors as $key => $value) {
            $count .= $value;
        }
        if (empty($count)) {
            header('location: confirm.php');
        }
    }
}
?>

<html>

<body>
    <form method="post" action="input_class.php">
        <!-- //エラーが有った場合はメッセージを画面に表示させる -->
        <?php
    if (isset($errors)) {
        foreach ($errors as $error) {
            echo $error;
        }
    }
    ?>
        <input type="text" name="name" value="<?php echo $_SESSION['name'] ?>" />
        <input type="text" name="kana" value="<?php echo $_SESSION['kana'] ?>" />
        <input type="submit" name="submit" value="確認する">
    </form>
</body>

</html>