<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Domain's IM Klo by TPOH</title>
</head>
<body>

<div class="card text-center mx-auto" style="width: 30rem;">
    <div class="card-header text-center col-auto badge-dark" style="width: 35rem">
        Добавляем домены в IM Klo
    </div>
    <div class="card-body">
        <form class="order_form" action = "form.php" method = "POST" >

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Впишите домены</label>
                <textarea class="form-control" name = "domains" required = "" onmouseenter="this.placeholder='domain1.com\ndomain2.ru\ndomain3.info\ndomain4.org\ndomain5.biz';" rows="6" aria-describedby="domainsHelp"></textarea>
                <small id="domainsHelp" class="form-text text-muted">Каждый домен с новой строки</small>
            </div>


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="ImKloDomain">Домен IM Klo</label>
                    <input type = "text" class="form-control" name = "IMKlo_domain"  aria-describedby="IMKlo_domainHelp" placeholder = "http(s)://domainIMKlo.ru" >
                    <small id="IMKlo_domainHelp" class="form-text text-muted">Укажите домен на котором размещена IM Klo</small>
                </div>

                <div class="form-group col-md-6">
                    <label for="IMKloToken">API Ключ</label>
                    <input type = "text" class="form-control" id = "phone" name = "IMKlo_token" aria-describedby="IMKlo_tokenHelp" placeholder = "im-432d7ff4a85dfb8a1c8d22b5kr8491ns" >
                    <small id="IMKlo_tokenHelp" class="form-text text-muted">Переходим в IM Klo>Настройки</small>
                </div>
            </div>


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">Страны</label>
                    <input type="text" class="form-control" name="ImKlo_country" aria-describedby="ImKlo_CountryHelp" placeholder = "RU,CY,ES,MY,IT..." id="inputCity">
                    <small id="ImKlo_CountryHelp" class="form-text text-muted">Укажите список стран в формате Alpha2, через запятую.</small>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputState">State</label>
                    <select type="text" id="inputState" class="form-control" name="IMKlo_trf" aria-describedby="IMKlo_trfHelp">
                        <option value="ANY">Весь трафик</option>
                        <option value="MOB">Мобильный</option>
                        <option value="DESC">Десктоп</option>
                    </select>
                    <small id="IMKlo_trfHelp" class="form-text text-muted">Выберете принимаемый тип трафика.</small>
                </div>
            </div>


            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="Keitaro_true">
                <label class="form-check-label" for="exampleCheck1">Добавить домены в Keitaro</label>
            </div>

            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputApi">Ключ для Admin API</label>
                <input type="text" class="form-control" name="inputApi" aria-describedby="inputApi" placeholder = "b6290dx33r7m769703fbeffen9c5h2eec7" id="inputCity">
                <small id="inputApi" class="form-text text-muted">Keitaro > Обслуживание > Пользователи</small>
            </div>
            <div class="form-group col-md-6">
                <label for="inputApi">Домен Keitaro</label>
                <input type="text" class="form-control" name="keitaroDomain" aria-describedby="keitaroDomain" placeholder = "http(s)://moyakeitara.com" id="keitaroDomain">
                <small id="keitaroDomain" class="form-text text-muted">Домен на котором расположен трекер</small>
            </div>
            </div>

            <button type = "submit" class="btn btn-primary btn-outline-success text-light"> Отправить </button >
        </form >
    </div>
    <footer>
        <div class="container">
            <p class="copyright"><a href="https://vk.com/tron_cpa" target="_blank">© ТРОН, 2021</a></p>
        </div>
    </footer>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>