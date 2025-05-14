@extends('layouts.template')

@section('title', 'Detail Movie')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-3"">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $movie->cover_image }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{ $movie->synopsis }}</p>
                            <p class="card-text">Actors : {{ $movie->actors }}</p>
                            <p class="card-text">Category : {{ $movie->category->category_name }}</p>
                            <p class="card-text"><small class="text-body-secondary">Year : {{ $movie->year }}</small></p>
                            <a href="/" class="btn btn-success">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection