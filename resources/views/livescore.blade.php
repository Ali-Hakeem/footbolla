@extends('layouts.layouts')

@section('content')
<section class="m-t">
    <div class="container py-5 col-xxl-6 text-uppercase">
        <div class="player-data m-2">
        <h2 class="text-center"><b><i>Live <span class="text-warning">Score</span></i></b></h2>
        
        <script type="text/javascript" src="https://www.livescore.bz/api.livescore.0.1.js" 
        api="livescore" async></script><a href="https://www.livescore.bz" 
        sport="football(soccer)" data-1="today" lang="en">Loading</a>
        </div>
    </div>  
</section>
@endsection