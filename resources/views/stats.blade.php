@extends('layouts.layouts')

@section('content')
<section class="m-t">
    <div class="container py-5 col-xxl-6">
    <div class="player-data m-2">
        <h4>
         <b><i>PLAYER DATA <span class="text-warning">{{$player->name}}</span></i></b>
        </h4>

        <img class="img-fluid" src="https://img.a.transfermarkt.technology/portrait/medium/default.jpg?lm=1">

        <div class="value">
         <span class="label col-md-2">
          Name:
         </span>
         {{$player->name}}
        </div>
        <div class="value">
         <span class="label">
          Height:
         </span>
         {{$player->height}} cm
        </div>
        <div class="value">
            <span class="label">
             Weight:
            </span>
            {{$player->weight}} cm
           </div>
        <div class="value">
         <span class="label">
          Citizenship:
         </span>
         <img alt="Flag of Denmark" class="flag" height="15" src="https://flagicons.lipis.dev/flags/4x3/{{$player->nation}}.svg" width="20"/>
        </div>
        <div class="value">
         <span class="label">
          Position:
         </span>
         {{$player->position}}
        </div>
        <div class="value">
         <span class="label">
          Foot:
         </span>
         {{$player->foot}}
        </div>
        <div class="value">
         <span class="label">
          Current club:
         </span>
         {{$player->club}} <b>#{{$player->number}}</b>
        </div>
        <div class="value">
         <span class="label">
          *Overall Rating:
         </span>
         <?php
         $a=array($player->def,$player->dri,$player->pas,$player->sho,$player->pac,$player->phy);
         echo round(array_sum($a)/6);
         ?>
        </div>
    </div>
    </div>
    </section>
@endsection