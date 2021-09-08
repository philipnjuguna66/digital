<main class="flex-1 relative overflow-y-auto focus:outline-none" tabindex="0">
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
           {{-- {{ Breadcrumbs::render() }}--}}
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <!-- Replace with your content -->
            <div class="py-4">
                <div class="rounded-lg h-96">
                    {{$slot}}
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </div>
</main>
