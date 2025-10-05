<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <title>تم الإرسال</title>
  <link rel="stylesheet" href="style.css">
  <style>z{color:darkred}</style>
</head>
<body>
  <h2>تم إرسال الطلب </h2>

  <?php
    $building = htmlspecialchars($_POST['building'] ?? '');
    $issue = htmlspecialchars($_POST['issue'] ?? '');
    $details = htmlspecialchars($_POST['details'] ?? '');
  ?>
<z>
  <p><strong>المبنى:</strong> <?= $building ?></p>
  <p><strong>نوع المشكلة:</strong> <?= $issue ?></p>
  <p><strong>شرح المشكلة:</strong> <?= nl2br($details) ?></p></z>
</body>
</html>