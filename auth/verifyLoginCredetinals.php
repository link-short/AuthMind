<?php
// Проверяем, что параметр 'name' существует в запросе
if (isset($_GET['phone'])) {
    $name = $_GET['phone'];
    echo "Привет, твой номер " . htmlspecialchars($phone) . "!"; // Для безопасности используйте htmlspecialchars
}

// Проверяем и получаем параметр 'city'
if (isset($_GET['username'])) {
    $city = $_GET['username'];
    echo "<br>Ваш username " . htmlspecialchars($username) . ".";
}
?>
<!-- 




<html href=".././assets/github_logo.png"></html>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Forms Handler</title>
    <link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.css" />
</head>
<body>
    <div style="padding:20px;font-size:16px;">

        <div><button class="btn btn-sm btn-default" onclick="window.frameElement ? window.parent.location.reload() : history.back()">< Back to page</button></div>
        <br />
        <div>The form handler received this data:</div>
        <div style="padding-left: 10px; white-space: pre-line;" id="result"></div>
    </div>
</body>
</html>

<script>
    const params = new URLSearchParams(window.location.search);
   
    var result = '<br />';
    for (const [key, value] of params) {
        result += (key + " = " + value + "<br />");
    }

    document.getElementById("result").innerHTML = result; 

</script> -->
