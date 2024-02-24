@php
    $icon_blue = [
        [
            'name'=> 'Digital Comics',
            'image'=> 'resources/img/buy-comics-digital-comics.png'
        ],[
            'name'=> 'Dc Merchandise',
            'image'=> 'resources/img/buy-comics-merchandise.png'
        ],[
            'name'=> 'Subscriptions',
            'image'=> 'resources/img/buy-comics-shop-locator.png'
        ],[
            'name'=> 'Comic shop locator',
            'image'=> 'resources/img/buy-comics-subscriptions.png'
        ],[
            'name'=> 'Dc power visa',
            'image'=> 'resources/img/buy-dc-power-visa.svg'
        ]
    ];   
@endphp

<footer>
    <section class="comix--blueSection d-flex ">
            <div class="container d-flex align-self-center justify-content-center">
                <div class="container-img">
                    @foreach ($icon_blue as $icon)
                        <img src="{{Vite::asset($icon['image'])}}" alt="" class="me-2">
                        <span class="me-5 text-light ">
                            {{$icon['name']}}
                        </span>
                    @endforeach
                </div>
            </div>
    </section>
    <section class="heroes-background d-flex ">
        <div class="container d-flex">
            <div class="list-container">
                <div class="list">
                    <h4>DC COMICS</h4>
                    <ul>
                        <li>Character</li>
                        <li>Comics</li>
                        <li>Movies</li>
                        <li>TV</li>
                        <li>Games</li>
                        <li>Videos</li>
                        <li>News</li>
                    </ul>
                </div>
                <div>
                    <h4>Shop</h4>
                    <ul>
                        <li>Shop DC</li>
                        <li>Shop DC Collectibles</li>
                    </ul>
                </div>
            </div>
            <div class="list-container">
                    <h4>DC</h4>
                    <ul>
                        <li>Terms of use</li>
                        <li>Privacy Policy</li>
                        <li>Add Choise</li>
                        <li>Adverserting</li>
                        <li>Jobs</li>
                        <li>Subscrition</li>
                        <li>Talent Workshop</li>
                        <li>CPSC</li>
                        <li>Rating</li>
                        <li>Shop Help</li>
                        <li>Conctacs us</li>
                    </ul>
                </div>
                <div class="list-container">
                    <h4>Sites</h4>
                    <ul>
                        <li>Terms of use</li>
                        <li>Privacy Policy</li>
                        <li>Add Choise</li>
                        <li>Adverserting</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center overflow-hidden ms-5">
    
                    <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
                
                </div>
            </div>
        </div>
    </section>
</footer>
