<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>打刻ページ</title>
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
    .home_tag {
      display:inline-block;
    }

  </style>
</head>
<body>
  <header>
    <h1>Atte</h1>
    <ul class="home_tag">
      <li>ホーム</li>
      <li>日付一覧</li>
      <li>ログアウト</li>
    </ul>
  </header>
  <main>
    <h2>ログイン</h2>
    <form action="/login" method="POST">
      <table>
        @csrf
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
            <button class="register">ログイン</buttin>
          </th>
        </tr>
      </table>
      <p>アカウントをお持ちでない方はこちらから<br>
        <a href="/register">会員登録</a></p>
    </form>
  </main>
  <footer>
    <p>Atte,inc.</p>
  </footer>
</body>
</html>