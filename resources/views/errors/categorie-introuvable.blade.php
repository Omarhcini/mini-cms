<x-layout>
    <x-slot:title>Catégorie introuvable - Mini-CMS</x-slot:title>
    <h1 class="text-3xl font-bold text-gray-900">Catégorie introuvable</h1>
    <p class="mt-2 mb-8 text-gray-600">Cette catégorie n'existe pas ou a été supprimée.</p>
    <x-alert type="info" title="Erreur 404" class="max-w-2xl">
        Choisissez une catégorie existante dans la liste ci-dessous.
    </x-alert>
    <ul class="mt-6 flex flex-wrap gap-3">
        @foreach ($categories as $category)
            <li><a href="{{ route('posts.category', $category) }}" class="inline-block rounded-md border border-gray-300 bg-white px-3 py-1.5 text-sm text-gray-700 hover:border-indigo-600 hover:text-indigo-600">{{ $category->name }}</a></li>
        @endforeach
    </ul>
</x-layout>
