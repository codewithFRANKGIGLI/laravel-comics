@extends('layouts.app')

@section('content')
    <section id="jumbotron">

    </section>
    <section id="app_comics">
        <div class="container">
            <span class="section_comics blue_ticket">
                CURRENT SERIES
            </span>
            <div class="row px-2 py-3 justify-content-center">
                <AppComics />
            </div>
            <div class="d-flex justify-content-center">
                <span class="blue_ticket text-center mb-3">
                    <a class="text-decoration-none text-white" href="##">LOAD MORE</a>
                </span>
            </div>
        </div>
    </section>
@endsection
