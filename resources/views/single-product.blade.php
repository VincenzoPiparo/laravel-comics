@extends('layouts.app')

@section('main_content')
    <div class="container">
        <div class="second_container">
            <div>
                <h1>{{ $comics_info['title'] }}</h1>
            </div>
            <div class="box">
                <h3>{{ $comics_info['price'] }}</h3>
            </div>
            <div class="box">
                <p>{{ $comics_info['description'] }}</p>
            </div>
            <div class="box_img">
                <img src="{{ $comics_info['thumb'] }}" alt="">
            </div>
        </div>
            <div class="bottom_container">
                <div class="row">
                    <div class="col-6">
                        <div>
                            <h3>TALENT</h3>
                        </div>
                        <div>
                             {{-- <h3>Art by {{ $comics_author['artists'] }}</h3> --}}
                        </div>
                        <div>
                             {{-- <h3>Written by {{ $comics_info['writers'] }}</h3>  --}}
                        </div>
                </div>
                <div class="col-6">
                    <div>
                        <h3>TALENT</h3>
                    </div>
                    <div>
                        <h3>Art by</h3>
                    </div>
                    <div>
                        <h3>Written by </h3>
                    </div>
                </div>
            </div>
    
    </div>
   
@endsection