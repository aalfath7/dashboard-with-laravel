<x-layout>
    <x-header>Detail News</x-header>

    <div class="space-y-4 bg-white p-8 shadow rounded-lg">
        <h1 class="capitalize font-bold text-2xl">{{ $item['title'] }}</h1>
        <p class="capitalize">{{ $item->author->name }} | {{ $item->created_at->diffForHumans() }}</p>
        <p>{{ $item['content'] }}</p>
    </div>
</x-layout>
