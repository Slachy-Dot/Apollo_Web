
    <section>

        <script>
            fetch('https://api.mcsrvstat.us/2/Worldofapollo.com')
                .then(response => response.json())
                .then(data => {
                    console.log(data.players.list)
                    let pList = document.getElementById('list')
                    pList.innerText = data.players.list
                    //display some data on page
                    //using data.players.list

                });

        </script>
        <script src="https://leonardosnt.github.io/mc-player-counter/dist/mc-player-counter.min.js" defer></script>

        <!-- Loads Appname from .env file -->
        <div class="mx-auto my-4 text-4xl text-center text-gray-200 md:container mt-28 mt-24:md group hover:text-blue-300 grow">
            {{ env('APP_NAME') }}
        </div>

        <!-- Breakline -->
        <hr class="mx-auto" style="width:30%">

        <!--Online player counter-->
        <div class="grid grid-cols-1 p-2">
            <div class="p-2 my-4 text-xl text-center rounded-lg box-decoration-clone bg-gradient-to-r from-slate-600 via-stone-600 to-slate-600 group grow place-self-center">
                <div class="text-indigo-300 group-hover:text-red-400">Currently
                <span class="px-1 font-bold text-red-400 group-hover:text-blue-300" data-playercounter-ip="{{ env('APOLLO_IP') }}">0
                </span> Other players Online

                <span class="pl-1 font-medium text-red-400 group-hover:text-blue-300 class=" clipboard data-clipboard-text="worldofapollo.com">worldofapollo.com</span>

            </div>

        </div>

    </div>
</section>
