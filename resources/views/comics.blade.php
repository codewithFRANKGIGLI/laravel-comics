@extends('layouts.app')

@section('page-title')
    Comics
@endsection

@section('content')
    <section id="sections_bar">
        <div class="container">
            <div class="row p-5 d-flex justify-content-center align-items-center gap-2">
                    @foreach ($comics as $comic)
                        {{-- Single comic --}}
                            <div class="col p-3">
                                <img src="{{ $comic['thumb']}}" alt="" class="">
                                <div id="title" class="fw-semibold py-2">{{ $comic['title'] }}</div>
                            </div>
                    @endforeach
            </div>
        </div>
    </section>
    
    <section class="products"></section>
@endsection
