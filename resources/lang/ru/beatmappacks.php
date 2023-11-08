<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'index' => [
        'description' => 'Предварительно упакованные коллекции карт, основанные на общей тематике.',
        'empty' => 'Скоро!',
        'nav_title' => 'список',
        'title' => 'Сборки карт',

        'blurb' => [
            'important' => 'ПРОЧТИТЕ ЭТО ПЕРЕД ЗАГРУЗКОЙ',
            'install_instruction' => 'Процесс установки: после загрузки сборки распакуйте её содержимое в папку Songs директории osu! — всё остальное сделает игра.',
            'note' => [
                '_' => 'Также строго советуем вам :scary, так как старые карты куда менее качественны, чем созданные совсем недавно.',
                'scary' => 'загружать карты, начиная со свежих',
            ],
        ],
    ],

    'show' => [
        'download' => 'Скачать',
        'item' => [
            'cleared' => 'пройдена',
            'not_cleared' => 'не пройдена',
        ],
        'no_diff_reduction' => [
            '_' => ':link могут помешать засчитать прохождение карт этой сборки.',
            'link' => 'Моды, упрощающие игру,',
        ],
    ],

    'mode' => [
        'artist' => 'Исполнители/Альбомы',
        'chart' => 'Чарты',
        'featured' => 'Избранные исполнители',
        'loved' => 'Любимые карты',
        'standard' => 'Стандартные',
        'theme' => 'Тематические',
        'tournament' => 'Турнирные',
    ],

    'require_login' => [
        '_' => 'Вы должны :link для загрузки',
        'link_text' => 'войти',
    ],
];
