<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>フォーム入力</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>フォーム入力</h1>
    <form action="confirm.php" method="post" accept-charset="UTF-8">
        <label for="name">名前:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="age">年齢:</label>
        <input type="number" id="age" name="age" min="0" max="150" required><br><br>

        <label for="phone">電話番号:</label>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="email">メールアドレス:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="address">住所:</label>
        <input type="text" id="address" name="address" required><br><br>

        <label for="question">質問:</label>
        <input type="text" id="question" name="question" required><br><br>

        <label for="gender">性別:</label>
        <select id="gender" name="gender" required>
            <option value="male">男性</option>
            <option value="female">女性</option>
            <option value="other">その他</option>
        </select><br><br>

        <button type="submit">送信</button>
    </form>
</body>
</html>
