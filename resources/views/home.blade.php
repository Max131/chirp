<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>
    <div class="max-w-2xl mx-auto">
        @foreach ($chirps as $chirp)
            <article class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <div class="font-semibold">{{ $chirp['author'] }}</div>
                        <div class="mt-1">{{ $chirp['message'] }}</div>
                        <time class="text-sm text-gray-500 mt-2"
                            datetime="{{ $chirp['time'] }}">{{ $chirp['time'] }}</time>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
    <!-- <div class="max-w-2xl mx-auto"> -->
    <!--     <div class="card bg-base-100 shadow mt-8"> -->
    <!--         <div class="card-body"> -->
    <!--             <div> -->
    <!--                 <h1 class="text-3xl font-bold">Welcome to Chirper!</h1> -->
    <!--                 <p class="mt-4 text-base-content/60">This is your brand new Laravel application. Time to make it -->
    <!--                     sing (or chirp)!</p> -->
    <!--             </div> -->
    <!--         </div> -->
    <!--     </div> -->
    <!-- </div> -->
</x-layout>
