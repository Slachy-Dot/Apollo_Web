@extends('Modules.layouts.Apollo')

@section('content')
  <!-- PLAYER HEADS AND TOOL NEWS -->
  <div class="container w-24 max-w-xs px-4 py-8 mx-auto mt-20:">
    <div class="bg-gray-700 border-4 border-blue-400 shadow-2xl">
      <img 
        class="object-cover w-full h-full"  
        alt="Wanderer"
        src="{{ asset('storage/images/misc/wander.jpg') }}"
        loading="lazy">



    <div class="px-5 pt-6 mx-auto mt-2 text-lg font-semibold text-center text-gray-800 bg-gray-300 border-l-2 border-gray-200 border-opacity-60">
      <h1>Obtain Player Heads from the Wandering Trader</h1>
      <span class="time">18-Feb-2021</span>

      <ul class="mt-4 font-mono text-base font-semibold">
        <li>
          You are now able to obtain 
          <em class="italic text-indigo-400">Player Heads</em> 
          by trading with a naturally spawned Wandering Trader.
        </li>
        <li>
          There is an 80% chance that a Wandering Trader spawns with a 
          <em class="italic text-indigo-400">Player Head Trade</em>, 
          and a 40% chance of having multiple 
          <em class="italic text-indigo-400">Player Heads Trades</em> 
          in stock.
        </li>
      </ul>

      <h1 class="mt-8">
        Players who have not been online for 360 days will be automatically removed from the Wandering Trader's player head list.
      </h1>

      <hr class="h-px my-8 bg-gray-600 border-none">

      <h1 class="text-lg font-semibold">
        New command to make linking Nether Portals easy
      </h1>
      <p class="mt-4 italic text-indigo-400">
        /pcoords
        <span class="font-mono text-base font-semibold text-gray-800">
          - Shows the coordinates of the other world that a portal should be placed to link up with that location
        </span>
      </p>

      <hr class="h-px my-8 bg-gray-600 border-none">

      <h1 class="text-lg font-semibold">
        Redstone Rotation & Glazed Terracotta Rotation Tool
      </h1>
      <p class="mt-4 font-mono text-base font-semibold text-gray-800">
        With this brand new tool, you are able to rotate Redstone components and Glazed Terracotta. This makes building farms or decoration even more fun in tricky situations.
      </p>
      <p class="mt-4 italic font-semibold text-red-500">
        Players who don't have build trust inside your claims won't be able to rotate your Redstone components or Glazed Terracotta.
      </p>
      <p class="mt-4 italic font-semibold text-red-500">
        We are not using the included custom texture pack, so this item looks like a carrot on a stick.
      </p>


      <hr class="h-px my-8 bg-gray-600 border-none">

    <div class="px-8 pt-6 pb-8 mb-4 rounded shadow-md">
      <h1 class="mb-6 text-lg font-semibold">Updated Discord Donation Tag</h1>

      <p class="mb-4 font-mono text-base font-semibold text-gray-800">
        All members that have made a previous donation will have a none purple Donator tag.
      </p>
      <p class="mb-4">
        All members that will make a donation to World of Apollo this year will get a purple Donations_2021 tag.
      </p>
      <p class="mb-4">
        Giving a donation will not add any extra permissions or higher rank. It's only a cosmetic tag to show someone
        has/is supporting the World of Apollo community.
      </p>
      <p class="mb-4">
        We welcome all members to our server so don't feel bad if you are unable to make a donation. We would rather have
        you online more than anything else!
      </p>

      <hr class="h-px my-6 bg-gray-600 border-none">

      <div class="flex items-center mt-8 mb-4 -ml-3 user">
        <div class="user-logo">
          <img class="object-cover w-10 h-10 mx-4 rounded-full shadow sm:w-12 sm:h-12"
            src="./storage/images/main/Apollo_logo.png" alt="avatar">
        </div>
        <p class="text-xl text-gray-500">@Slachy</p>
      </div>

      <div class="h-px my-0 border-none"></div>
    </div>
  </div>
</div>
@endsection