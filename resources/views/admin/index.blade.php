@extends('layouts.layouts')

@section('content')
<section class="m-t">
    <div class="container py-5 col-xxl-6 text-uppercase">
        <h2 class="text-center racing">Data Player</h2>
        
        <div class="row">
            <div class="col-lg m-2">
                <form action="/dashboard/player/search" method="GET">
                    <div class="col-lg-4 form-group ms-auto">
                        <div class="input-group">
                            <input type="text" name="search" placeholder="Cari .." value="{{ old('search') }}" class="form-control"/>
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        
    </section>
@endsection