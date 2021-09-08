<div class="mt-12 ">
    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">

        @foreach($properties as $property)
            <div class="pt-6 bg-white shadow-lg rounded-lg">
                <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">

                    <img
                        src="{{ asset('storage/'. $property->photos()->first()->path) }}"
                        class="w-3/4 h-1/2"

                        width="100%">
                    <div class="-mt-6">

                        <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">{{ $property->title }}</h3>
                        <p class="mt-5 text-base text-gray-500">
                            {!! $property->location !!}
                            <span>
                        @ {!! number_format(floatval($property->price) , 2) !!}
                    </span>
                        </p>

                        <div class="mt-3">
                            <a
                                class="bg-cyan-700 rounded-lg text-white p-2 mt-3 text-bold shadow-lg hover:bg-red-600 hover:border-transparentBlog"
                                href="{{ route('property.show', $property) }}">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


    </div>
    <div class="pagination">
        {!! $properties->links() !!}
    </div>
</div>
