<x-app-layout>

    @push('page_css')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @endpush

    @section('content')
        <livewire:create-blog/>

    @endsection

</x-app-layout>
