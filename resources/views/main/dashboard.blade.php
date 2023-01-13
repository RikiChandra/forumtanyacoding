@extends('layout.app')
@section('title', 'ForumTanyaCoding')

@section('content')
    {{-- <div class="row"> --}}
    {{-- <div class="col-lg-10"> --}}
    <div class="list-group mt-2">
        @foreach ($dataPublic as $item)
            <a href="/questions/public/detail/{{ $item->id }}" class="list-group-item list-group-item-action"
                aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $item->title }}</h5>
                    <small>{{ $item->created_at->diffForHumans() }}</small>
                </div>
                <p class="mb-1">{{ $item->excp }}</p>
                <small>Ditanyakan oleh {{ $item->user->name }}</small><br>
                @if ($item->answers_count > 0)
                    <small>telah dijawab sebanyak {{ $item->answers_count }}</small>
                @else
                    <small>Belum ada yang jawab</small>
                @endif
            </a>
        @endforeach
    </div>
    {{-- </div> --}}


@endsection
