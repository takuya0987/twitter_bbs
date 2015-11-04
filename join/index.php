<?php
	//
	session_start();
        //ボタンが押されてpost送信されたら
	if(!empty($_POST)){
		//エラー項目の確認、blankは空だったら
		if($_POST['name'] == ''){
			$error['name'] = 'blank';
		}
		if($_POST['email'] == ''){
			$error['email'] = 'blank';
		}
		//passwordが４文字以上
		if(strlen($_POST['password']) < 4){
			$error['password'] = 'length';
		}
		if($_POST['password'] == ''){
			$error['password'] = 'blank';
		}
		//emptyは正常に入力されていたら
		//$_SESSIONは変数...スーパーグローバル変数、各セッション毎に値を保持される
		if (empty($error)){
			$_SESSION['join'] = $_POST;
			//画面移動する際に使う書き方（画面遷移）
			header('Location: check.php');
			//正常に入力されればexitで終了
			exit();
		}
		# code...
	}

       
            // check.phpからpost（入力されたデータを貰う役割が$_POST）送信されたデータを受け取る。
            // $_POSTはスーパーグローバル変数という。
 //            // $nicknameは取ってきたデータを１つ１つ代入してる。
 //            $nickname=$_POST['name'];
 //            $email=$_POST['email'];
 //            $password=$_POST['password'];

 // //       

 // if($name == '' || $email == '' || $password == ''){
 //                 echo "データが入力されてません";
                 
 //                 //もしそれ以外だったら（$nickname,$email,$email）が空じゃなかったらデータベースに登録できる。
 //            }else{
 //            	//echo "データが入力されました";

 //            }
			
 // $nicknameは取ってきたデータを１つ１つ代入してる。
            // $nickname=$_POST['nickname'];
            // $email=$_POST['email'];
            // $=$password_POST['password'];

            // // イタズラされないように消毒している。　　　　　　　 
            // $nickname=htmlspecialchars($nickname);
            // $email=htmlspecialchars($email);
            // $password=htmlspecialchars($password);


            // //パターン１
            // if($nickname==''){
            //     print'入力されていません。<br/>';
            // }else if($nickname == '' || $email == '' || $password'){
            //     print '入力されました<br/>';
            // }else
            


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../style.css" />
<title>会員登録</title>
</head>

<body>
<div id="wrap">
<div id="head">
<h1>会員登録</h1>
</div>

<div id="content">
<p>次のフォームに必要事項をご記入ください。</p>
<form action="" method="post" enctype="multipart/form-data">
	<dl>
		<dt>ニックネーム<span class="required">必須</span></dt>
		<dd>
			<input type="text" name="name" size="35" maxlength="255" />
			<?php if (isset($error['name']) && ($error['name'] == 'blank')) : ?>
			<p class="error">* ニックネームを入力してください</p>
			<?php endif; ?>	
		</dd>
		<dt>メールアドレス<span class="required">必須</span></dt>
		<dd>
			<input type="text" name="email" size="35" maxlength="255" />
		</dd>
		<dt>パスワード<span class="required">必須</span></dt>
		<dd>
			<input type="password" name="password" size="10" maxlength="20" />
		</dd>
		<dt>写真など</dt>
		<dd>
			<input type="file" name="image" size="35" />
		</dd>
	</dl>
	<div><input type="submit" value="入力内容を確認する" /></div>
</form>
</div>

<div id="foot">
<p><img src="../images/txt_copyright.png" width="136" height="15" alt="(C) H2O SPACE, Mynavi" /></p>
</div>

</div>
</body>
</html>
