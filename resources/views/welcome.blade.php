<x-musu.layout>
    @if (Route::has('login'))
    <nav class="flex justify-center items-center h-full">


        <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Log in
        </a>

        <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Register
        </a>





    </nav>
    @endif

    <div class="bg-zinc-800 text-white min-h-screen flex items-center justify-center">
        <div class="container mx-auto px-6 py-12">
            <div class="grid grid-cols-1 items-center md:grid-cols-2 gap-8">
                <div class="space-y-6 text-center md:text-left">
                    <h1 class="text-4xl font-bold leading-tight">Noliktava.LV</h1>
                    <p class="text-zinc-300">Sveiki! Esam noliktava.LV pie mums uzglabā visāda klāsta preces, vairākas firmas, kā <b>4.games</b>, <b>1A LV</b> un citi!</p>
                    <div class="space-x-4">
                        <a href="{{ route('register') }}" class="rounded bg-purple-600 px-4 py-2 font-bold text-white">Register</a>
                        <a href="{{ route('login') }}" class="rounded bg-purple-600 px-4 py-2 font-bold text-white">Log In</a>
                    </div>
                </div>
                <div class="mt-6 flex justify-center md:mt-0">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVAtVDlaAADR8cROrsYuNT2XDU2vpKzNU7VSr1UQjQhb1OkR6Ay46nv13rY5id2tspbrc&usqp=CAU/400x30v" alt="Business Interaction" class="rounded-lg shadow-lg max-w-full h-auto" />
                </div>
            </div>
            <div class="mt-12">
                <p class="text-center text-xs uppercase text-zinc-400">Trusted by your favored top tech companies</p>
                <div class="mt-4 flex justify-center space-x-12">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrE2I5R9gGYtHzwuZcds0Awu5-qQkwncmKEo9M01fqIw&s/100x60" alt="1A LV" class="opacity-75 max-w-full h-auto" />
                    <img src="https://pbs.twimg.com/profile_images/1192081535891103744/oJrGxZmf_200x200.jpg" alt="RD Electronics" class="opacity-75 max-w-full h-auto" />
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyu_9eEM5tcqKHQnpadU3uYmeu6thOwk315sHLuR7cOw&s" alt="220.lv" class="opacity-75 max-w-full h-auto" />
                </div>
            </div>
        </div>
    </div>
</x-musu.layout>



