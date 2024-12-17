@extends('layouts.layouts')

@section('content')
    <section>
        <div class="container py-5 col-xxl-6">
            <h1 class="fw-bold mb-3 text-center text-capitalize m-t">login</h1>

            <form action="/login" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                    <button type="submit" class="btn btn-success">Login</button>
            </form >
        </div>
    </section>
@endsection