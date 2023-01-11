@extends('layout.main')
@section('title', 'ForumTanyaCoding')

@section('content')
    {{-- <div class="row"> --}}
    <div class="col-lg-10">
        @foreach ($dataPublic as $item)
            <div class="list-group mt-2">
                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{ $item->title }}</h5>
                        <small>3 days ago</small>
                    </div>
                    <p class="mb-1">{{ $item->body }}</p>
                    <small>Ditanyakan oleh {{ $item->user->name }}</small>
                </a>
            </div>
        @endforeach
    </div>


@endsection
