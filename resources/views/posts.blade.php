<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-g-300">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tighter font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-900">
                <a href="#">{{ $post['author'] }}</a> | 1 Mei 2024
            </div>

            <p class="my-4 font-light ">{{ Str::limit($post['body'], 100) }}</p>

            <a href="/posts/{{ $post['slug'] }}" class="text-blue-500 font-medium hover:underline">Read more &raquo;</a>
        </article>
    @endforeach
</x-layout>
