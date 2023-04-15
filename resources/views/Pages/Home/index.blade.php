@extends('Modules.layouts.Apollo ')

@section('content')

<!--Online player and server name -->
@include('Modules.Includes.Core.OnlinePlayers')

@include('Modules.Includes.GallerySmall')

@include('Modules.Includes.About.Main')

@include('Modules.Includes.Staff.Main')


<!-- Set spacing between footer -->
 <!-- <div class="mt-20"></div> 

<div class="flex flex-row justify-center space-x-5 ">
<div class="card w-96 glass">
  <div class="card-body">
    <h2 class="text-xl font-extrabold text-center text-indigo-300">Server Hardware</h2>
    <h3 class="my-2 text-indigo-100">CPU:</h3>
    <p class="mx-4 my-2 font-mono font-medium text-indigo-200 text-md">2x E5 2690v4 28C/56T @3-3.4GHz.</p> -->
  <!--  <h3 class="my-2 text-indigo-100">System Memory:</h3>
    <p class="mx-4 my-2 font-mono font-medium text-indigo-200 text-md">DDR4 ECC 128GB</p>
    <h3 class="my-2 text-indigo-100">Storage:</h3>
    <p class="mx-4 my-2 font-mono font-medium text-indigo-200 text-md">2x1TB SSD RAID 1</p>
    <h3 class="my-2 text-indigo-100">OS:</h3>
    <p class="mx-4 my-2 font-mono font-medium text-indigo-200 text-md">Ubuntu 20</p>
    <div class="justify-end card-actions">
      <button class="btn btn-primary">Learn now!</button>
    </div>
  </div>
</div>

<div class="card w-96 glass">
  <div class="card-body">
    <h2 class="text-xl font-extrabold text-center text-indigo-300">Guest Mode</h2>
    <p class="mx-4 my-2 font-mono font-medium text-indigo-200 text-md"> Come take a peek on our server with the Apollo Guest plugin witch let new members login while not be
            attacked by mobs or starve to
            death in there first couple moments, have a conversation with our online community & staff and
            explore there Minecraft builds </p>
    <div class="justify-end card-actions">
      <button class="btn btn-primary">Learn now!</button>
    </div>
  </div>
</div> -->
<!-- Footer gets rendered here by default -->

@endsection


