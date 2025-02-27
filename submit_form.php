<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // 这里可以添加表单验证和数据存储逻辑

    // 发送邮件
    $to = "DavidIndustry@hotmail.com";
    $subject = "新留言：$name";
    $body = "姓名：$name\n邮箱：$email\n留言：$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "感谢您的留言，我们会尽快与您联系！";
    } else {
        echo "邮件发送失败，请稍后重试。";
    }
}
?>
