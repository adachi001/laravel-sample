@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
            @endif
                <div class="mb-3">
                    <label>楽曲を選択してください<span class="text-danger">*</span></label>
                    <form method="POST" action="{{ url('/postStore') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" id="file" name="file" class="form-control" />
                </div>
                @csrf
                <div class="mb-3">
                    <textarea type="text" class="form-control" name="contents" autocomplete="contents" autofocus
                        required>{{old('contents')}}</textarea>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Save</button>
                    <a href="{{ url('home') }}" class="btn btn-danger">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endSection