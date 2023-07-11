<?php
$menu = [
    [
        'text' => 'CHARACTERS',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'COMICS',
        'url' => '#',
        'current' => true,
    ],
    [
        'text' => 'MOVIES',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'TV',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'GAMES',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'COLLECTIBLES',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'VIDEOS',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'FANS',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'NEWS',
        'url' => '#',
        'current' => false,
    ],
    [
        'text' => 'SHOP',
        'url' => '#',
        'current' => false,
    ],
];
?>

<header id="header">
    <div class="container">
        <div>
            <a href="#">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
            </a>
        </div>

        <nav>
            <ul>
                @foreach ($menu as $sezione)
                    <li>
                        <a href={{ $sezione['url'] }}>
                            {{ $sezione['text'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
