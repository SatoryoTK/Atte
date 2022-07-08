<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>会員登録ページ</title>
  <style>
    main {
      background-color:#F2F2F2;
    }
    h1 {
      margin-left:3%;
    }
    h2,
    p {
      text-align:center;
    }
    table {
      margin-left:43%;
    }

  </style>
</head>
<body>
  <header>
    <h1>Atte</h1>
  </header>
  <main>
    <h2>会員登録</h2>
    <form action="/store" method="POST">
      <table>
        @csrf
        <tr>
          <th>
            <input type="text" name="name" placeholder="名前" required>
          </th>
        </tr>
        <tr>
          <th>
            <input type="email" name="email" placeholder="メールアドレス" required>
          </th>
        </tr>
        <tr>
          <th>
            <input type="password" name="password" placeholder="パスワード" id="password" required>
          </th>
        </tr>
        <tr>
          <th>
            <input type="password" name="Confirm" placeholder="確認用パスワード" id="passwordConfirm" oninput="CheckPassword(this)" required>
          </th>
        </tr>
        <tr>
          <th>
            <button class="register">会員登録</buttin>
          </th>
        </tr>
      </table>
      <p>アカウントをお持ちの方はこちらから<br>
        <a href="/login">ログイン</a></p>
    </form>
    <script>
	    function CheckPassword(confirm){
		  // 入力値取得
		  var input1 = password.value;
		  var input2 = confirm.value;
		  // パスワード比較
		  if(input1 != input2){
			  confirm.setCustomValidity("入力値が一致しません。");
		  }else{
			  confirm.setCustomValidity('');
		  }
	    }
    </script>
  </main>
  <footer>
    <p>Atte,inc.</p>
  </footer>
</body>
</html>