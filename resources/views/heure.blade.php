<x-layout>
    <x-slot:title>Heure</x-slot:title>

    <h1>Il est {{ now('Africa/Tunis')->format('H:i:s') }}</h1>
</x-layout>