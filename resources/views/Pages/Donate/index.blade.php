@include('Modules.layouts.Apollo ')

<x-Navbar/>

<x-Onlineplayers/>

<section class="flex justify-center ">
    <div class="container flex justify-center px-2 mx-4 mt-40 text-center">
    <div class="max-w-3xl card glass">
    <div class="card-body">
    <div class="justify-center card-actions">

        <form  action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="business" value="{{ env('PAYPAL_BUSINESS_EMAIL') }}">
            <input type="hidden" name="cmd" value="_donations">
            <input type="hidden" name="item_name" value="WorldofApollo_Donations">
            <input type="hidden" name="currency_code" value="USD">

            <button type="submit" name="submit" class="btn btn-primary">

                Donate

            </button>
        </form>
    </div>

    <div>
        <x-About name="About"/>
    </div>

    <div class="divider"></div>

    <div>
        <x-Serverspecs name="Specs"/>
    </div>

    <div class="divider"></div>

    <div class="flex justify-center">
        <div class="justify-end card-actions">

            <form  action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input type="hidden" name="business" value="{{ env('PAYPAL_BUSINESS_EMAIL') }}">
                <input type="hidden" name="cmd" value="_donations">
                <input type="hidden" name="item_name" value="WorldofApollo_Donations">
                <input type="hidden" name="currency_code" value="USD">

                <button type="submit" name="submit" class="btn btn-primary">

                    Donate

                </button>
            </form>
        </div>
    </div>
</section>

    <div class="mt-40">

<x-Footer/>
