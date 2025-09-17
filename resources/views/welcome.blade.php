<x-layout>
    <div class="space-y-10">
        <section>
            <x-section-hedding>Top Job</x-section-hedding>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>

        </section>

        <section>
            <x-section-hedding>Tags</x-section-hedding>

            <div class="flex flex-wrap gap-3 mt-6">
                <x-tag>Design</x-tag>
                <x-tag>Product</x-tag>
                <x-tag>Engineering</x-tag>
                <x-tag>Marketing</x-tag>
                <x-tag>Customer Success</x-tag>
                <x-tag>Human Resource</x-tag>
                <x-tag>Finance</x-tag>
            </div>

        </section>

        <section>
            <x-section-hedding>Recent Jobs</x-section-hedding>

        </section>
    </div>
</x-layout>