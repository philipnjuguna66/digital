<div class="relative" x-data="{open:false}" x-on:click.away="open = false">
    <button type="button" @click="open=!open" :class="{ 'text-gray-900': open === true }"
            class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            aria-expanded="false">
        <span>{{ $attributes['title'] }}</span>
        <svg :class="{ 'text-gray-600': open === true }"
             class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
             aria-hidden="true">
            <path fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd"/>
        </svg>
    </button>
    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 translate-y-1"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 translate-y-1"
         class="absolute -ml-4 mt-3 transform z-10 px-2 w-screzen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
        <div class="flex-row w-60 bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
             {{$slot}}
        </div>
    </div>
</div>
