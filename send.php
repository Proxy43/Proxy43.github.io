<?php
// 送信先の捨てメアド
$to = "gyoze491@cocoro.uk";  // ←ここを送信先に変更

// フォームデータ
$name = htmlspecialchars($_POST["name"], ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST["message"], ENT_QUOTES, 'UTF-8');

// メール内容
$subject = "【お問い合わせ】ADSチーム Webサイトより";
$body = "名前: $name\nメッセージ:\n$message";

// ヘッダー
$headers = "From: noreply@yourdomain.com";

// メール送信
if (mail($to, $subject, $body, $headers)) {
  echo "お問い合わせ内容を送信しました。";
} else {
  echo "送信に失敗しました。";
}
?>
