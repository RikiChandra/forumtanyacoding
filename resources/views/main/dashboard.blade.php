@extends('layout.app')
@section('title', 'ForumTanyaCoding')

@section('content')
    {{-- <div class="row"> --}}
    {{-- <div class="col-lg-10"> --}}
    @if ($dataPublic->count())

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
    @else
        <div class="alert alert-secondary mt-2" role="alert">
            <h4 class="alert-heading">Tidak ada pertanyaan!</h4>
            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a
                bit longer so that you can see how spacing within an alert works with this kind of content.</p>
            <hr>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and
                tidy.</p>
        </div>
    @endif
    {{-- </div> --}}


@endsection
