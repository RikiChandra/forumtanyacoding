@extends('layout.app')
@section('title', 'Buat Pertanyaan')

@section('content')
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('/send/questions') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title"
                            name="title">
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Image</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Question</label>
                        <input id="body" type="hidden" name="body">
                        <trix-editor input="body"></trix-editor>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Ask</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
