<x-layout>
    <x-page-heding>New Job</x-page-heding>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$50,000" />
        <x-forms.input label="Location" name="location" placeholder="Beirut" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="Full-time">Full Time</option>
            <option value="Part-time">Part Time</option>
            <option value="Contract">Contract</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="http://acme.com/jobs/ceo-wanted" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Description" name="description" />
        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="video, education, programing" />

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>
</x-layout>