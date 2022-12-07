<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'availability' => [
        'disabled' => 'Ця бітмапа тимчасово недоступна для завантаження.',
        'parts-removed' => 'Частини цієї мапи було видалено на вимогу автора або третіх осіб правовласників.',
        'more-info' => 'Для більш детальної інформації натисніть тут.',
        'rule_violation' => 'Деякі об\'єкти, що містяться на цій мапі були видалені після визнання їх непридатними для використання в osu!.',
    ],

    'cover' => [
        'deleted' => 'Видалена бітмапа',
    ],

    'download' => [
        'limit_exceeded' => 'Зменш темп, більше грай.',
    ],

    'featured_artist_badge' => [
        'label' => 'Обрані виконавці',
    ],

    'index' => [
        'title' => 'Список бiтмап',
        'guest_title' => 'Бітмапи',
    ],

    'panel' => [
        'empty' => ' бітмапи відсутні',

        'download' => [
            'all' => 'завантажити',
            'video' => 'завантажити з вiдео',
            'no_video' => 'завантажити без вiдео',
            'direct' => 'відкрити в osu!direct',
        ],
    ],

    'nominate' => [
        'hybrid_requires_modes' => 'Гібридна бітмапа вимагає обрати щонайменше один режим гри, котрий ви номінуватимете.',
        'incorrect_mode' => 'У вас недостатньо прав для номінування в режимі: :mode',
        'full_bn_required' => 'Ви маєте бути повноправним номінатором, що б здійснити цю кваліфікаційну номінацію.',
        'too_many' => 'Вимоги щодо номінації вже виконані.',

        'dialog' => [
            'confirmation' => 'Ви впевнені що хочете номінувати цю мапу?',
            'header' => 'Номінувати мапу',
            'hybrid_warning' => 'примітка: ви можете номінувати лише один раз, так що, переконайтеся в тому, що ви номінуєте всі режими, які  збиралися',
            'which_modes' => 'Номінувати для яких режимів?',
        ],
    ],

    'nsfw_badge' => [
        'label' => '18+',
    ],

    'show' => [
        'discussion' => 'Обговорення',

        'details' => [
            'by_artist' => 'від :artist',
            'favourite' => 'Додати мапу до вподобаних',
            'favourite_login' => 'Увійдіть, щоб додати цю мапу до вподобаних',
            'logged-out' => 'Необхідно ввійти для того що б завантажувати мапи!',
            'mapped_by' => 'створена :mapper',
            'unfavourite' => 'Видалити з вподобаного',
            'updated_timeago' => 'оновлена :timeago',

            'download' => [
                '_' => 'Завантажити',
                'direct' => '',
                'no-video' => 'без відео',
                'video' => 'з відео',
            ],

            'login_required' => [
                'bottom' => 'щоб отримати додаткові функції',
                'top' => 'Ввійдіть',
            ],
        ],

        'details_date' => [
            'approved' => 'затверджена :timeago',
            'loved' => 'улюблена :timeago',
            'qualified' => 'кваліфікована :timeago',
            'ranked' => 'рейтингова :timeago',
            'submitted' => 'завантажена :timeago',
            'updated' => 'оновлена :timeago',
        ],

        'favourites' => [
            'limit_reached' => 'Ви вподобали забагато мап! Будь ласка приберіть деякі та спробуйте знову.',
        ],

        'hype' => [
            'action' => 'Хайпніть цю мапу, якщо вам сподобалося в неї грати, щоб допомогти їй отримати статус <strong>Рангової</strong>.',

            'current' => [
                '_' => 'Ця мапа зараз :status.',

                'status' => [
                    'pending' => 'на розгляді',
                    'qualified' => 'кваліфікована',
                    'wip' => 'в процесі створення',
                ],
            ],

            'disqualify' => [
                '_' => 'Якщо ви знайшли проблему в цій мапі, будь ласка, дискваліфікуйте її :link.',
            ],

            'report' => [
                '_' => 'Якщо ви знайшли проблему в цій мапі, повідомте про це :link щоб наша команда дізналася.',
                'button' => 'Повідомити про проблему',
                'link' => 'тут',
            ],
        ],

        'info' => [
            'description' => 'Опис',
            'genre' => 'Жанр',
            'language' => 'Мова',
            'no_scores' => 'Дані все ще обробляються...',
            'nominators' => '',
            'nsfw' => ' Непристойний вміст',
            'offset' => 'Онлайн офсет',
            'points-of-failure' => 'Шкала провалів',
            'source' => 'Джерело',
            'storyboard' => 'Бітмапа містить сторіборд',
            'success-rate' => 'Шанс успіху',
            'tags' => 'Теги',
            'video' => 'Бітмапа містить відео',
        ],

        'nsfw_warning' => [
            'details' => 'Ця бітмапа містить непристойний, образливий або тривожний вміст. Все ще хочете її переглянути?',
            'title' => 'Непристойний вміст',

            'buttons' => [
                'disable' => 'Вимкнути попередження',
                'listing' => 'Список бітмап',
                'show' => 'Показати',
            ],
        ],

        'scoreboard' => [
            'achieved' => 'досягнуто :when',
            'country' => 'Рейтинг країни',
            'error' => 'Не вдалось завантажити рейтинг',
            'friend' => 'Рейтинг серед друзів',
            'global' => 'Рейтинг в світі',
            'supporter-link' => 'Натисніть <a href=":link">сюди</a> для перегляду всіх можливостей які ви отримаєте!',
            'supporter-only' => 'Ви повинні мати osu!supporter для доступу до рейтингу по друзям, країні та модам!',
            'title' => 'Табло',

            'headers' => [
                'accuracy' => 'Точність',
                'combo' => 'Макс. комбо',
                'miss' => 'Промахи',
                'mods' => 'Модифікатори',
                'pin' => 'Закріпити',
                'player' => 'Гравець',
                'pp' => '',
                'rank' => 'Ранг',
                'score' => 'Очки',
                'score_total' => 'Всього очок',
                'time' => 'Час',
            ],

            'no_scores' => [
                'country' => 'Ніхто з вашої країни ще не грав на цій мапі!',
                'friend' => 'Ніхто з ваших друзів ще не грав на цій мапі!',
                'global' => 'Ніхто ще не грав на цій мапі! Може ти спробуєш?',
                'loading' => 'Результати завантажуються...',
                'unranked' => 'Нерангова мапа.',
            ],
            'score' => [
                'first' => 'Лідирує',
                'own' => 'Ваш рекорд',
            ],
            'supporter_link' => [
                '_' => 'Натисніть :here для перегляду всіх цікавих можливостей що ви отримаєте!',
                'here' => 'сюди',
            ],
        ],

        'stats' => [
            'cs' => 'Розмір нот',
            'cs-mania' => 'Кількість нот',
            'drain' => 'Втрата HP',
            'accuracy' => 'Точність',
            'ar' => 'Темп подання',
            'stars' => 'Складність',
            'total_length' => 'Тривалість (Не враховуючи перерв :hit_length)',
            'bpm' => 'BPM',
            'count_circles' => 'Кількість нот',
            'count_sliders' => 'Кількість слайдерів',
            'offset' => 'Онлайн офсет :offset',
            'user-rating' => 'Рейтинг користувачів',
            'rating-spread' => 'Шкала рейтингу',
            'nominations' => 'Номінації',
            'playcount' => 'Кількість ігор',
        ],

        'status' => [
            'ranked' => 'Рейтингова',
            'approved' => 'Схвалена',
            'loved' => 'Улюблена',
            'qualified' => 'Кваліфікована',
            'wip' => 'В процесі створення',
            'pending' => 'На розгляді',
            'graveyard' => 'Закинута',
        ],
    ],

    'spotlight_badge' => [
        'label' => 'Відібране',
    ],
];
