@include('Modules.layouts.Apollo ')

<x-Navbar/>

<x-Onlineplayers/>

@includeIf('Modules.Includes.GallerySmall')

<x-Cards>

    <x-About name="About"/>

    <x-Guestmode name="Guest"/>

    <x-Serverspecs name="Specs"/>

    <x-Guidelines name="Guide"/>

</x-Cards>

<x-Cards>

    <x-Staffmembers name="Staff"/>

</x-Cards>

<div class="mt-40">

<x-Footer/>
