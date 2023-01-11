@extends('layout.main')
@section('title', 'ForumTanyaCoding')

@section('content')
    {{-- <div class="row"> --}}
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body ">
                <h1 style="font: inherit" class="fs-2">Pertanyaan saya</h1>
                <div class="d-flex justify-content-end">
                    <a href="" class="btn btn-primary">Bertanya</a>
                </div>
            </div>
        </div>
        <div class="list-group mt-2">
            <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small>And some small print.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small class="text-muted">And some muted small print.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small class="text-muted">And some muted small print.</small>
            </a>
        </div>
    </div>


@endsection
