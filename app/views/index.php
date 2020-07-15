<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>Currency</title>
</head>
<body>
<div class="container">
    <form class="form" method="post">
        <div class="form-group">
            <label for="sum">Введите сумму в долларах</label><br>
            <input type="text" id="sum" name="sum" placeholder="Сумма">
        </div>
        <div class="form-group">
            <label for="curr">Выберите валюту</label><br>
            <select id="curr" name="curr" class="form-control">
                <option value="UAH">Українська гривня</option>
                <? foreach ($currencies as $key => $currency): ?>
                    <option <?= $curr === $currency['cc'] ? 'selected' : ''?> value="<?= $currency['cc'] ?>"><?= $currency['txt'] ?></option>
                <? endforeach ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Расчитать</button>
    </form>
</div>

<div class="answer">
    <? if ($sum && $convert_sum): ?>
        <h2><b><?= $sum ?> USD</b> = <?= $convert_sum ?> <?= $curr ?></h2>
    <? endif ?>
</div>

</body>
</html>