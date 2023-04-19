<section>

    <h2 class="text-xl font-extrabold text-center text-indigo-300 my-card-title">About us</h2>

    <!-- Your child view content goes here -->
    <div>
        <div class="divider"></div>
     </div>

     <h2 class="mx-4 mt-4 ml-10 font-mono text-lg font-medium text-indigo-200 sm:ml-5">The World of Apollo </h2>

     <div class="mx-4 my-4 font-mono font-medium text-indigo-200 text-md">

         <p>

             has been a vibrant Minecraft community that's been going strong for over 10 years!
             We're also proud to say that many of our members have called us home from the start and are still around after all those years,
             and we've accomplished so much together. From building epic structures to organizing events, our community is what keeps Apollo running.

         </p>
         <p>
             But we need your help to keep things going!


             <div class="inline-flex ">
                 <form  action="https://www.paypal.com/cgi-bin/webscr" method="post">
                   <input type="hidden" name="business" value="{{ env('PAYPAL_BUSINESS_EMAIL') }}">
                   <input type="hidden" name="cmd" value="_donations">
                   <input type="hidden" name="item_name" value="WorldofApollo_Donations">
                   <input type="hidden" name="currency_code" value="USD">
                   <button type="submit" name="submit" class="font-semibold text-indigo-600 underline text-md">



                     the Donations
                   </button>
                 </form>
             </div>

         </p class="mx-4 my-4 font-mono font-medium text-indigo-200 text-md">
         <p>
             from our amazing community members help pay for the monthly cost of our server machine and the purchase of new plugins.
             And when you donate, you're not just helping us keep the lights on - you're investing in a community that values inclusivity and respect.
         </p>
         <p>
             At Apollo, we believe that everyone should feel welcome. That's why we don't offer paid ranks or perks that give some players an unfair advantage.
             Instead, we focus on building a community where everyone can have fun and make friends. And speaking of friends,
             our volunteer staff team is here to help you whenever you need it.

         </p>
         <p>

             They're a dedicated bunch who give their time freely, so please treat them with kindness and respect.
             Being rude or disrespectful towards our staff will result in a permanent ban from all Apollo-related games and communication.

         </p>
         <p>

             Thanks for being part of our amazing community. We can't wait to see what we'll accomplish together next!

         </p>

</section>



