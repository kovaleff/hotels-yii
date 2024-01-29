<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
$this->registerJsFile("/js/script.js");
$this->registerCssFile("/css/style.css");
?>
<div class="site-index">
    <h1>Топ-
        3 наиболее продуктивных менеджеров:</h1>
    <ul id="managers">
    </ul>

    <h1>Топ-3 отеля, в которых
        было больше всего заездов:</h1>
    <ul id="hotels">
    </ul>

    <h1>Топ 3 компаний клиентов, которые
        создали больше заявок, чем другие:</h1>

    <ul id="clients">
    </ul>
</div>
