@php
    $links = [
        [
            'url' => '/character',
            'label' => 'Character',
        ],
        [
            'url' => '/comics',
            'label' => 'Comics',
        ],
        [
            'url' => '/movies',
            'label' => 'Movies',
        ],
        [
            'url' => '/tv',
            'label' => 'Tv',
        ],
        [
            'url' => '/games',
            'label' => 'Games',
        ],
        [
            'url' => '/collectbles',
            'label' => 'Collectbles',
        ],
        [
            'url' => '/videos',
            'label' => 'Videos',
        ],
        [
            'url' => '/fans',
            'label' => 'Fans',
        ],
        [
            'url' => '/news',
            'label' => 'News',
        ],
    ];
@endphp

<header>
    <section>
        <div class="bg-primary text-light d-flex justify-content-end">
            <span class="mx-5">
                DC POWER VISA
            </span>
        </div>
        <nav>
            <section class="d-flex align-items-center">
                <div class="container d-flex align-items-center justify-content-between">
                        <div class="img-container">
                            <img src="{{ Vite::asset ('resources/img/dc-logo.png') }}" alt="">
                        </div>
                    <ul>

                    </ul>
                </div>
            </section>
        </nav>
    </section>
</header>
