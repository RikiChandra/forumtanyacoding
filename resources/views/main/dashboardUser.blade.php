@extends('layout.main')
@section('title', 'ForumTanyaCoding')

@section('content')
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body ">
                <h1 style="font: inherit" class="fs-2">Pertanyaan saya</h1>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('/questions/ask') }}" class="btn btn-primary">Bertanya</a>
                </div>
            </div>
        </div>
        @if ($dataAsk->count())
            <div class="list-group mt-2">
                @foreach ($dataAsk as $item)
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ $item->title }}</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">{{ $item->body }}</p>
                        <small>{{ Auth()->user()->name }}</small>
                    </a>
                @endforeach
            </div>
        @else
            <p class="text-center fs-4">Tidak ada pertanyaan</p>
        @endif
    </div>
@endsection
