@extends('layout.app')
@section('title', 'Detail Pertanyaan')
@section('content')
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <h1 style="font: inherit" class="fs-2">{{ $dataShow->title }}</h1>
                <div class="d-flex justify-content-end">
                    <a href="/questions/user/edit/{{ $dataShow->id }}" class="btn btn-warning me-1">Edit</a>
                    <form action="/questions/user/delete/{{ $dataShow->id }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Apakah anda ingin menghapus?')">Delete</button>
                    </form>
                </div>
                <div class="my-5 rounded-sm overflow-hidden">
                    <img src="{{ asset('storage/' . $dataShow->foto) }}" alt="{{ $dataShow->title }}" class="img-fluid"
                        height="">
                </div>
                <div class="body-post text-base text-gray-800 leading-relaxed font-serif">
                    {!! $dataShow->body !!}
                </div>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                @if ($dataJwb->count())
                    <h1 style="font: inherit" class="fs-4">{{ $totalJwb }} Jawaban</h1>
                    @foreach ($dataJwb as $item)
                        <div class="card mt-3">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('storage/' . $item->user->profile) }}" alt="{{ $item->user->name }}"
                                        class="img-fluid" height="32px" width="32px">
                                    <div>
                                        <h5 class="card-title mb-0">{{ $item->user->name }}</h5>
                                        <h6 class="card-subtitle text-muted">{{ $item->updated_at->diffForHumans() }}</h6>
                                    </div>
                                </div>
                                <p class="card-text mt-3">{!! $item->body !!}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="alert alert-secondary" role="alert">
                        <h4 class="alert-heading">Belum ada jawaban!</h4>
                        <p>Aww yeah, you successfully read this important alert message. This example text is going to run a
                            bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                        <hr>
                        <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and
                            tidy.</p>
                    </div>
                @endif
            </div>
        </div>
        <form action="{{ route('/send/answers') }}" method="post">
            @csrf
            <div class="card mt-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Jawab Pertanyaan</label>
                        <input id="body" type="hidden" name="body">
                        <trix-editor input="body"></trix-editor>
                    </div>
                    <button type="submit" class="btn btn-primary">Answers</button>
                </div>
            </div>
            <input type="text" value="{{ $dataShow->id }}" name="questions_id" hidden>
        </form>
    </div>
@endsection
