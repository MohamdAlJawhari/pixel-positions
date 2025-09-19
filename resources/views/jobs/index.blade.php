<x-layout>
    <div class="space-y-10 pb-10">
        <section class="text-center pt-5">
            <h1 class="font-bold text-4xl ">Let's Find Your Next Job</h1>

            <form action="" class="mt-6">
                <input type="text" placeholder="Web Developer..."
                    class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full md:w-1/2 ">
            </form>
        </section>


        <section class="pt-10">
            <x-section-hedding>Top Job</x-section-hedding>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
            </div>

        </section>


        <section>
            <x-section-hedding>Tags</x-section-hedding>

            <div class="flex flex-wrap gap-1 mt-6">
                @foreach ($tags as $tag)
                    <x-tag :$tag>BackEnd</x-tag>
                @endforeach
            </div>
        </section>


        <section>
            <x-section-hedding>Recent Jobs</x-section-hedding>

            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
