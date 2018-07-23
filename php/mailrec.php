<?php
require_once __DIR__ . '/php/recaptchalib.php';
// Введите свой секретный ключ
$secret = "6LdXtmUUAAAAANDnlYkSFzAOAPXu3CaArUrnfKlE";
// пустой ответ каптчи
$response = null;
// Проверка вашего секретного ключа
$reCaptcha = new ReCaptcha($secret);
if ($_POST["g-recaptcha-response"]) {
$response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST['nam1']) && (empty($_POST['uemail']) || empty($_POST['uphone']))){
    echo '<p class="fail">Ошибка. Вы заполнили не все обязательные поля!</p>';
  } else {
    if ($response != null && $response->success) {
    if (isset($_POST['nam1'])) {
      $uname = strip_tags($_POST['nam1']);
      $unameFieldset = "<b>Имя пославшего:</b>";
    }
    if (isset($_POST['uemail'])) {
      $uemail = strip_tags($_POST['uemail']);
      $uemailFieldset = "<b>Почта:</b>";
    }
    if (isset($_POST['tel'])) {
      $uphone = strip_tags($_POST['tel']);
      $uphoneFieldset = "<b>Телефон:</b>";
    }
    if (isset($_POST['formInfo'])) {
      $formInfo = strip_tags($_POST['formInfo']);
      $formInfoFieldset = "<b>Тема:</b>";
    }

    $to = "al-nevsk@mail.ru"; /*Укажите адрес, на который должно приходить письмо*/
    $sendfrom = "tvc@.su"; /*Укажите адрес, с которого будет приходить письмо, можно не настоящий, нужно для формирования заголовка письма*/
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $headers .= "Content-Transfer-Encoding: 8bit \r\n";
    $subject = "$formInfo";
    $message = "$unameFieldset $uname<br>
                $uemailFieldset $uemail<br>
                $uphoneFieldset $uphone<br>
                $formInfoFieldset $formInfo";

    $send = mail ($to, $subject, $message, $headers);
        if ($send == 'true') {
            echo '<p class="success">Спасибо за отправку вашего сообщения!</p>';
        } else {
          echo '<p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p>';
        }
    } else {
      echo '<p class="success">Не пройдена каптча! Попробуйте еще раз!</p>';
    }
  }
} else {
  header ("Location: http://localhost:8888/ajshop"); // главная страница вашего лендинга
}
