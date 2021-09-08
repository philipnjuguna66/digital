@props(['color' => 'green'])
<div class="pt-6">
    <div
        {{ $attributes->merge(['class' => 'hover:bg-'.$color.'-700']) }} class="group flow-root bg-gray-50 rounded-lg px-6 pb-8  hover:shadow-lg hover:border-transparent duration-700">
        <div class="-mt-6">
            <div>
                      <span
                          {{ $attributes->merge(['class' => 'bg-'.$color.'-600']) }} class="inline-flex items-center justify-center p-3 rounded-md shadow-lg">

                      {{$slot}}
                      </span>
            </div>
            <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight group-hover:text-white">{{$title}}</h3>
            <p class="mt-5 text-base text-gray-500 group-hover:text-white">
                {{$summary}}            </p>
        </div>
    </div>
</div>
