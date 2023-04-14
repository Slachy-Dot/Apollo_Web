<nav class="flex justify-center px-4 text-gray-800 bg-transparent">
  <div class="container py-2">
    <hr class="h-px mt-3 border-gray-300 border-none dark:bg-gray-700">
    <div class="flex flex-col items-center justify-between mt-3 md:flex-row">
      <!-- Logo -->
      @include('Modules.Includes.Core.Apollo-Logo')

      <!-- Navbar items -->
      <div class="flex mt-6 md:mt-8">
        <div class="p-2 mx-2 space-x-6 uppercase bg-gray-900 border border-opacity-25 rounded-lg shadow md:space-x-8 xl:ml-10 xl:p-6 sm:p-4 bg-opacity-20 grow">

          <!-- Always show -->
          <a href="{{ route('home') }}" class="my-nav-items">Home</a>

          <!-- Donate button -->
          <div class="inline-flex my-0 my-nav-items">
          <form  action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="business" value="{{ env('PAYPAL_BUSINESS_EMAIL') }}">
            <input type="hidden" name="cmd" value="_donations">
            <input type="hidden" name="item_name" value="WorldofApollo_Donations">
            <input type="hidden" name="currency_code" value="USD">
            <button type="submit" name="submit" class="flex mx-2 space-x-6 uppercase bg-gray-900 shadow md:space-x-8 my-nav-items bg-opacity-20 grow">
              Donate
            </button>
          </form>
        </div>  
        
          <!-- Hide on sm and show from md screen -->
          <a href="{{ route('dynmap') }}" class="hidden sm:inline-flex my-nav-items md:block">Dynmap</a>

          <!-- Hide on md and show from lg screen -->
          <a href="{{ route('apply') }}" class="hidden lg:inline-flex my-nav-items xl:block">Apply</a>


          <!-- Dropdown menu -->
          <div class="inline-flex my-0 my-nav-items dropdown dropdown-end" tabindex="0">Menu
            <button tabindex="0" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bars"></i>
            </button>
            <ul tabindex="0" aria-label="Dropdown menu" class="mt-2 text-white bg-gray-900 rounded-lg shadow menu dropdown-content">
              <li>
                <a href="{{ route('dynmap') }}">Dynmap</a>
              </li>
              <li>
                <a href="{{ route('discord') }}">Discord</a>
              </li>
              <li>
                <a href="{{ route('apply') }}">Apply</a>
              </li>
            </ul>
          </div>


        </div>
      </div>
    </div>
  </div>
</nav>