<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力内容確認</title>
    <link rel="stylesheet" href="style_confirm.css">
</head>
<body>
    <div class="container">
        <h1>入力内容確認</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = trim($_POST["name"] ?? "");
            $age = trim($_POST["age"] ?? "");
            $phone = trim($_POST["phone"] ?? "");
            $email = trim($_POST["email"] ?? "");
            $address = trim($_POST["address"] ?? "");
            $question = trim($_POST["question"] ?? "");
            $gender = trim($_POST["gender"] ?? "");

            $genderLabels = [
                "male" => "男性",
                "female" => "女性",
                "other" => "その他",
            ];

            //バリデーション
            if (!preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z\s]+$/u", $name)) {
                echo "<p class=\"error-message\">名前はひらがな、カタカナ、漢字、英字のみ使用できます。</p>";
            } elseif (!is_numeric($age) || $age < 0 || $age > 150) {
                echo "<p class=\"error-message\">年齢は0〜150の間で入力してください。</p>";
            }  elseif (!preg_match("/^\d{2,4}-\d{2,4}-\d{3,4}$/", $phone)) {
                echo "<p class=\"error-message\">電話番号は半角数字とハイフンのみ使用できます。</p>";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<p class=\"error-message\">メールアドレスの形式が正しくありません。</p>";
            } elseif (!preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z0-9\-]+$/u", $address)) {
                echo "<p class=\"error-message\">住所はひらがな、カタカナ、漢字、英字、半角数字、ハイフンのみ使用できます。</p>";
            } elseif (!preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z0-9\s]+$/u", $question)) {
                echo "<p class=\"error-message\">質問はひらがな、カタカナ、漢字、英字、半角数字、スペースのみ使用できます。</p>";
            } elseif (!array_key_exists($gender, $genderLabels)) {
                echo "<p class=\"error-message\">性別は男性、女性、その他のいずれかを選択してください。</p>";
            } else {
                $genderDisplay = $genderLabels[$gender] ?? $gender;

                //入力内容の表示
                echo "<div class=\"confirmation-item\"><label>名前</label><p>" . htmlspecialchars($name, ENT_QUOTES, "UTF-8") . "</p></div>";
                echo "<div class=\"confirmation-item\"><label>年齢</label><p>" . htmlspecialchars($age, ENT_QUOTES, "UTF-8") . "</p></div>";
                echo "<div class=\"confirmation-item\"><label>電話番号</label><p>" . htmlspecialchars($phone, ENT_QUOTES, "UTF-8") . "</p></div>";
                echo "<div class=\"confirmation-item\"><label>メールアドレス</label><p>" . htmlspecialchars($email, ENT_QUOTES, "UTF-8") . "</p></div>";
                echo "<div class=\"confirmation-item\"><label>住所</label><p>" . htmlspecialchars($address, ENT_QUOTES, "UTF-8") . "</p></div>";
<<<<<<< HEAD
=======
                echo "<div class=\"confirmation-item\"><label>質問</label><p>" . htmlspecialchars($question, ENT_QUOTES, "UTF-8") . "</p></div>";
                echo "<div class=\"confirmation-item\"><label>性別</label><p>" . htmlspecialchars($genderDisplay, ENT_QUOTES, "UTF-8") . "</p></div>";
>>>>>>> feature-update
            }
        } else {
            echo "<p class=\"error-message\">データが送信されていません。</p>";
        }
        ?>
        <div class="button-group">
            <a href="form.php" class="button back-button">戻る</a>
        </div>
    </div>
</body>
</html>
