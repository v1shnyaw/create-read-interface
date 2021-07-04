<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
<div class="jumbotron">
    <div class="row">
        <div class="col-sm">
    <h2>Куда бы поехать летом? </h2>
    <form method="post" id="form_id" action="send.php">
        <div class="form-row">
                <label>Страна</label>
                <input type="text" id="country" class="form-control" name="country">
        </div>
            <div class="form-row">
                <label>Валюта</label>
                <input type="text" id="currency" class="form-control" name="currency">
        </div>
        <div class="form-row">
                <label>Климат</label>
                <select class="custom-select"  id="climate" name="climate">
                    <option>Тепло</option>
                    <option>Прохладно</option>
                </select>
        </div>
            <div class="form-row">
                <label >Виза</label>
                <select class="custom-select" id="visa" name="visa">
                    <option>Нужна</option>
                    <option>Нет</option>
                </select>
            </div>
        <br>
        <button class="btn btn-dark" type="submit" name="sub" id="sendForm" value="Submit">Submit form</button>
        <button class="btn btn-dark" type="submit"  id="getIt" value="Submit_order">Show orders</button>
    </form>
            <div id="errorMess"></div></div>
        <div class="col-sm" id="resultDiv">

        </div>
    </div>
    </div>
</div>
    <!-- Подключаем jQuery -->
<script ENGINE="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="get.js"></script>
</body>
</html>