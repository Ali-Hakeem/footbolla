@extends('layouts.layouts')

@section('content')
<section class="m-t">
    <div class="container py-5 col-xxl-6">
        <h2 class="text-center text-uppercase"><b><i>Player <span class="text-warning"> Data</span></i></b></h2>
    
        <div class="container">
            <div class="row">
                <div class="col-lg">
                    <form action="/player/search" method="GET">
                        <div class="col-lg-4 form-group ms-auto">
                            <div class="input-group">
                                <input type="text" name="search" placeholder="Search Name, Position, Club .." value="{{ old('search') }}" class="form-control"/>
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container">
        <div class="table-responsive mt-3">
            <table class="table table-bordered" height="200px">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Foot</th>
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
                        <td>{{$no++}}</td>
                        <td>
                            <div class=""> 
                                <b> <img class="flag" src="https://img.a.transfermarkt.technology/portrait/medium/default.jpg?lm=1"><a class="text-decoration-none" href="/player/stats/{{$item->id}}">
                                    {{$item->name}}</a></b><p>{{$item->position}}</p>
                                
                            </div>
                        </td>
                        <td>
                            {{$item->foot}}
                        </td>
                        <td>
                            {{$item->club}}
                        </td>
                        <td>
                            <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/{{$item->nation}}.svg">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div>{!! $player->withQueryString()->onEachSide(0)->links('vendor.pagination.bootstrap-4') !!}</div>
        </div>
        </div>
        
    </section>
@endsection