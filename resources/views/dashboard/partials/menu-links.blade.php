<a href="{{route('dashboard')}}" class="text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
    <!-- Current: "text-gray-300", Default: "text-gray-400 group-hover:text-gray-300" -->
    <!-- Heroicon name: outline/home -->
    <svg class="text-gray-300 mr-3 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
    </svg>
    Dashboard
</a>


<a href="{{ route('manage.blog.index') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white group flex items-center px-2 py-2 text-sm font-medium rounded-md">
    <!-- Heroicon name: outline/users -->
        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-400 group-hover:text-gray-300 mr-3 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
    Blogs
</a>

{{--<x-side-bar-drop-down label="Employment">
    <x-side-bar-drop-down-link label="Departments" url=""></x-side-bar-drop-down-link>
    <x-side-bar-drop-down-link label="Job Category" url=""></x-side-bar-drop-down-link>
    <x-side-bar-drop-down-link label="Job Position" url=""></x-side-bar-drop-down-link>

</x-side-bar-drop-down>--}}

 {{--<x-side-bar-drop-down label="Blog">
     <x-side-bar-drop-down-link label="Category" url=""></x-side-bar-drop-down-link>
     <x-side-bar-drop-down-link label="Post" url="{"></x-side-bar-drop-down-link>

 </x-side-bar-drop-down>--}}

<x-side-bar-drop-down label="Settings">
    <x-side-bar-drop-down-link label="Page Settings" url="#_">nsb</x-side-bar-drop-down-link>
    <x-side-bar-drop-down-link label="Feature Section Settings" url="#_"></x-side-bar-drop-down-link>
    <x-side-bar-drop-down-link label="Core Values" url="#_"></x-side-bar-drop-down-link>

</x-side-bar-drop-down>



