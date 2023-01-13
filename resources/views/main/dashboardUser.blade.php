@extends('layout.app')
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
                    <a href="/questions/user/detail/{{ $item->id }}" class="list-group-item list-group-item-action"
                        aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{ $item->title }}</h5>
                            <small>{{ $item->created_at->diffForHumans() }}</small>
                        </div>
                        <p class="mb-1">{{ $item->excp }}</p>
                        <small>{{ Auth()->user()->name }}</small>
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
    </div>
@endsection
