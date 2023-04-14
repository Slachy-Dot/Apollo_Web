@extends('Modules.layouts.Apollo ')

@section('content')

<!--Online player and server name -->
@include('Modules.Includes.Core.OnlinePlayers')

@include('Modules.Includes.GallerySmall')

@include('Modules.Includes.About.Main')

@include('Modules.Includes.Staff.Main')

<!-- Set spacing between footer -->
 <div class="mt-20"></div> 

<!-- Footer gets rendered here by default -->

@endsection


