@extends('layout.app')
@section('title', 'Profile')
@section('content')



    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('profile.update', ['user' => $user->id]) }}" method="post"
                    enctype="multipart/form-data">
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name"
                            name="name" value="{{ old('name') ?? $user->name }}">
                    </div>
                    <input type="text" name="oldImage" id="" value="{{ $user->profile }}" hidden>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Profile</label>
                        <input class="form-control" type="file" id="formFile" name="profile">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Bio</label>
                        <input id="bio" type="hidden" name="bio" value="{{ old('name') ?? $user->bio }}">
                        <trix-editor input="bio"></trix-editor>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
