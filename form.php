<?php
require ('IMKlo_AddDomain.php');
//если включен чекбокс, то выполняем скрипт ИМ Кло
if ($_POST['Keitaro_true'] == 'on') {
    require ('Keitaro.php');
} else {}

print("Работа закончена<br>" . PHP_EOL);

echo <<<HTML

	
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <input type="button" class="btn btn-primary" onclick="history.back();" value="Назад"/>






<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>	

HTML;




