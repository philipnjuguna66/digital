<div class="pt-6" x-data="{open:false}">
    <dt class="text-lg">
        <!-- Expand/collapse question button -->
        <button @click="open=!open"
                class="text-left w-full flex justify-between items-start text-gray-400">
              <span :class="{ 'text-blue-700': open === true }" class="font-medium text-gray-900">
                {{ $attributes['title'] }}
              </span>
            <span class="ml-6 h-7 flex items-center">
                <svg :class="{ '-rotate-180 ': open === true }" class="h-6 w-6 transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
              </span>
        </button>
    </dt>
    <dd x-show="open"
        x-transition:enter="transition ease-out duration-500"
        x-transition:enter-start="opacity-0 translate-y-1"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-1"
        class="mt-2 pr-12">
        <p class="text-base text-gray-600">
            {{$slot}}
        </p>
    </dd>
</div>
