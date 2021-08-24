<?php

return [
    '~^contacts$~' => [controllers\ContactController::class, 'actionIndex'],
    '~^article/([0-9]+)$~' => [controllers\ArticleController::class, 'actionView'],
    '~^insert$~' => [controllers\ArticleController::class, 'actionInsert'],
    '~^article/([0-9]+)/update$~' => [controllers\ArticleController::class, 'actionUpdate'],
    '~^article/([0-9]+)/delete$~' => [controllers\ArticleController::class, 'actionDelete'],
    '~^$~' => [controllers\MainController::class, 'actionIndex']
];