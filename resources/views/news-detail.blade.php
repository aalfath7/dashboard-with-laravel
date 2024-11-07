<x-layout>
    <x-header>Detail News</x-header>

    <div class="space-y-4 bg-white p-8 shadow rounded-lg">
        <h1 class="font-bold text-2xl">{{ $item['title'] }}</h1>
        <p>Author : {{ $item['author'] }}</p>
        <p>{{ $item['content'] }}</p>
    </div>
</x-layout>
