<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kadai</title>
</head>
<body>
    <h1>1人掲示板</h1>
    <h3><?php print $message;?></h3>
    <p><?php print $subMessage;?></p>
    <form action="controller.php" method="POST">
      <table>
        <div>Name</div>
        <div><input type="text" name="user" placeholder="ニックネームを入力" required/></div>
        <div>Message</div>
        <div><input type="text" name="message" placeholder="メッセージを入力" required/></div>
        <p><button id="send">送信</button></p>
      </table>
    </form>

</body>
</html>