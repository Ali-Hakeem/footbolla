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

        <div class="table-responsive py-3">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Pos</th>
                        <th>Club</th>
                        <th>Nation</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($player as $item)
                    <tr>
                        <td>{{$no++}} </td>
                        <td>
                            {{$item->name}}        
                        </td>
                        <td>
                            {{$item->position}}
                        </td>
                        <td>
                            {{$item->club}}
                        </td>
                        <td>
                            {{$item->nation}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>{!! $player->withQueryString()->onEachSide(0)->links('vendor.pagination.bootstrap-4') !!}</div>
        </div>
    </section>
@endsection