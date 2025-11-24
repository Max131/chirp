<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>
    <div class="max-w-2xl mx-auto">
        @forelse ($chirps as $chirp)
            <x-chirp :chirp="$chirp" />
        @empty
            <p class="text-gray-500">No chirps yet. Be the first to chirp!</p>
        @endforelse
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
