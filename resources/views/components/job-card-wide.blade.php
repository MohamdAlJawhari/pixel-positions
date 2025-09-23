@props(['job'])

<x-panel class="flex flex-wrap gap-6 mt-6 ">

    <div class="flex justify-between items-center mt-auto">
        <x-employer-logo :employer="$job->employer" />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>

        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-400 transition-colors duration-300 group font-bold">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">${{ $job->salary }}</p>
    </div>

    <div>
        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach
    </div>

</x-panel>
