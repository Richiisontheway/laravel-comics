@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <section class="comix--newText d-grid">
        <div class="container">
            <div class="d-flex align-items-center row ">
                @foreach ($comics as $item)
                    <div class="col-2 comix--col ">
                        <div class="comix--imgContainer">
                            <img src="{{$item['thumb']}}" alt="ciaone">
                        </div>
                        <h5>
                            {{ $item['title'] }}
                        </h5>
                    </div>
                @endforeach      
            </div>
        </div>
    </section>
@endsection
