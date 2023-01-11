@extends('layout.main')
@section('title', 'Detail Pertanyaan')
@section('content')
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <h1 style="font: inherit" class="fs-2">{{ $dataShow->title }}</h1>
                <p>{{ $dataShow->body }}</p>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                @if ($dataJwb->count())
                    <h1 style="font: inherit" class="fs-4">Jawaban</h1>
                    @foreach ($dataJwb as $item)
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="title-{{ $loop->index }}">
                                    <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Telah dijawab oleh {{ $item->user->name }} {{ $item->updated_at->diffForHumans() }}
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="title-{{ $loop->index }}">
                                    <div class="accordion-body">
                                        {{ $item->body }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h1 style="font: inherit" class="fs-4">belum ada jawaban</h1>
                @endif
            </div>
        </div>
        <form action="{{ route('/send/answers') }}" method="post">
            @csrf
            <div class="card mt-3">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Jawab Pertanyaan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Answers</button>
                </div>
            </div>
            <input type="text" value="{{ $dataShow->id }}" name="questions_id" hidden>
        </form>
    </div>
@endsection
