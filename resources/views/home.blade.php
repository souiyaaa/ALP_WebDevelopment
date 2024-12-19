<x-layout>
    <x-slot:layoutTitle>{{ $title }}</x-slot:layoutTitle>

    <div class="flex flex-row justify-center items-center gap-x-6">
        <div class="text-right">
            <div
                class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-pink-400 to-orange-400 font-bold text-4xl">
                Digital Creative
            </div>
            <div
                class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-pink-400 to-orange-400 font-bold text-4xl">
                Student Challenge
            </div>
        </div>
        <div
            class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 via-pink-400 to-orange-400 font-bold text-4xl">
            2025
        </div>
    </div>

    <h2 class="text-xl px-6 py-3">
        "{{ $competition->competition_name }}"
    </h2>

    <div>
        <h2 class="text-m px-6 py-3">
            Digital Creative Student Challenge adalah kompetisi internasional tahunan yang diselenggarakan oleh Student Council Universitas Ciputra. Kompetisi ini menjadi wadah bagi mahasiswa di seluruh dunia untuk menunjukkan bakat dan kreativitas mereka dalam bidang desain, fotografi, dan videografi.
        </h2>
    </div>

    <h2>Countdown:</h2>
    <p>{{ $countdown_days }} days remaining</p>
    <p>{{ $countdown_hours }} hours remaining</p>
    <p>{{ $countdown_minutes }} minutes remaining</p>


</x-layout>
