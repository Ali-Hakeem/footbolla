@extends('layouts.layouts')

@section('content')
<section class="m-t">
    <div class="container py-5 col-xxl-6 text-uppercase">
        <h2 class="text-center"><b><i>PES Player <span class="text-warning">Database</span> Unofficial</i></b></h2>
        
        <div class="container">
            <div class="row">
                <div class="w-full">
                    <form action="/player/search" method="GET">
                        <div class="w-full form-group ms-auto">
                            <div class="input-group">
                                <input type="text" name="search" placeholder="Search .." value="{{ old('search') }}" class="form-control"/>
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="container">
                <h4 class="mt-5 text-center mb-2">Top Competitions </h4>
                <div class="container overflow-hidden">
                    <div class="row justify-content-md-center">

                        <div class="col-lg-2 col-md-3 col mt-2">
                            <div class="cad container p-0">
                                <a href="/league/england"> <figure class="m-0 p-2">
                                    <img class="img-fluid" loading="lazy" src="https://tmssl.akamaized.net/images/logo/homepageWappen150x150/gb1.png">
                                    <figcaption class="m-0 p-2 text-center">
                                        <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/gb-eng.svg">
                                    </figcaption>
                                    </figure></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3 col mt-2">
                            <div class="cad container p-0">
                                <a href="/league/spain"><figure class="m-0 p-2">
                                <img class="img-fluid" loading="lazy" src="https://tmssl.akamaized.net//images/logo/homepageWappen150x150/es1.png?lm=1725974302">
                                <figcaption class="m-0 p-2 text-center">
                                    <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/es.svg">
                                </figcaption>
                                </figure></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3 col mt-2">
                            <div class="cad container p-0">
                                <figure class="m-0 p-2">
                                <img class="img-fluid" loading="lazy" src="https://tmssl.akamaized.net//images/logo/homepageWappen150x150/it1.png?lm=1656073460">
                                <figcaption class="m-0 p-2 text-center">
                                    <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/it.svg">
                                </figcaption>
                                </figure>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3 col mt-2">
                            <div class="cad container p-0">
                                <figure class="m-0 p-2">
                                <img class="img-fluid" loading="lazy" src="https://tmssl.akamaized.net//images/logo/homepageWappen150x150/l1.png?lm=1525905518">
                                <figcaption class="m-0 p-2 text-center">
                                    <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/de.svg">
                                </figcaption>
                                </figure>
                            </div>
                        </div>

                    </div>
                </div>     
                <hr>   
            </div>

            <div class="container">
                <h4 class="mt-2 text-center mb-2">Nations</h4>
                <div class="container overflow-hidden">
                    <div class="row justify-content-md-center">

                        <div class="col-lg-2 col-md-3 col mt-2">
                            <div class="cad container p-0">
                                <a class="text-decoration-none" href="#"> <figure class="text-center m-0 p-2">
                                    <h4 class="fw-bold">Europe</h4>
                                    <figcaption class="m-0 p-2 text-center">
                                        <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/es.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/fr.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/gb-eng.svg">
                                        <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/be.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/de.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/nl.svg">
                                        <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/hr.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/it.svg">
                                    </figcaption>
                                    </figure>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3 col mt-2">
                            <div class="cad container p-0">
                                <a class="text-decoration-none" href="#"> <figure class="text-center m-0 p-2">
                                    <h4 class="fw-bold">Africa</h4>
                                    <figcaption class="m-0 p-1 text-center">
                                        <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/za.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/cm.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/ng.svg">
                                        <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/eg.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/ma.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/sn.svg">
                                        <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/ci.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/dz.svg">
                                    </figcaption>
                                    </figure>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3 col mt-2">
                            <div class="cad container p-0">
                                <a class="text-decoration-none" href="#"> <figure class="text-center m-0 p-2">
                                    <h4 class="fw-bold">Asia</h4>
                                    <figcaption class="m-0 p-2 text-center">
                                        <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/jp.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/ir.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/kr.svg">
                                        <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/th.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/iq.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/id.svg">
                                        <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/cn.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/au.svg">
                                    </figcaption>
                                    </figure>
                                </a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-3 col mt-2">
                            <div class="cad container p-0">
                                <a class="text-decoration-none" href="#"> <figure class="text-center m-0 p-2">
                                    <h4 class="fw-bold">America</h4>
                                    <figcaption class="m-0 p-2 text-center">
                                        <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/br.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/ar.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/cl.svg">
                                        <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/ca.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/us.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/mx.svg">
                                        <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/uy.svg"> <img class="flag" src="https://flagicons.lipis.dev/flags/4x3/co.svg">
                                    </figcaption>
                                    </figure>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>     
                <hr>   
            </div>

            <div class="container text-center text-uppercase mt-2">
                <h4>most valuable players</h4>
            </div>

            
           
            <div class="container">
            <div class="row justify-content-md-center">
                @foreach ($top as $item)
                <div  class="bg-warning col-lg-2 col-md-2 col mt-2 p-2 mx-2">
                    <a class="text-decoration-none" href="/player/stats/{{$item->id}}">
                    <tr>
                        <td></td>
                        <td>
                            <div> 
                                <b> <img class="flag" src="https://img.a.transfermarkt.technology/portrait/medium/default.jpg?lm=1">{{$item->name}}</b>
                                <p class="text-capitalize mini">{{$item->position}}</p>
                                
                            </div>
                        </td>
                        <td>
                            <p class="mt-2">{{$item->club}}</p>
                        </td>
                        <td>
                            <img class="flag mt-2" src="https://flagicons.lipis.dev/flags/4x3/{{$item->nation}}.svg">
                        </td>
                    </tr> 
                    </a>
                </div>
                @endforeach  
            </div>
            </div>
            <div class="container">
                <hr class="mt-4">
                <p class="fw-bold">Your Best <span class="text-warning">Eleven</span> Today</p>
                <div class="table-responsive mt-3">
                    <table class="table table-bordered" height="200px">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Ovr</th>
                                <th>Club</th>
                                <th>Nation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($players as $item)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>
                                    <div class=""> 
                                        <b> <img class="flag" src="https://img.a.transfermarkt.technology/portrait/medium/default.jpg?lm=1"><a class="text-decoration-none" href="/player/stats/{{$item->id}}">{{$item->name}}</a></b>
                                        <p class="text-capitalize mini">{{$item->position}}</p>
                                        
                                    </div>
                                </td>
                                <td>
                                    <?php
                                    $a=array($item->def,$item->dri,$item->pas,$item->sho,$item->pac,$item->phy);
                                    echo round(array_sum($a)/5.5);
                                    ?>
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
                </div>
                </div>

            <div>
                <p class="text-capitalize text-center">Footbolla was developed for educational purposes.</p>
            </div> 
        </div>  
        
        

    </section>
@endsection