@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <form method="post" action="{{route('update')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="avatarImage">
                        <input type="submit" name="submit">
                    </form>

                </div>
            </div>
        </div>
    </div>
    @endsection
