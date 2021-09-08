<div class="hidden md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex flex-col h-0 flex-1">
            <div class="flex justify-center items-center h-16 flex-shrink-0 px-4  bg-gray-200">

                <x-jet-application-logo class=""/>
            </div>
            <div class="flex-1 flex flex-col overflow-y-auto">
                <nav class="flex-1 px-2 py-4  bg-cyan-700 space-y-1">
                  @include('dashboard.partials.menu-links')
                </nav>
            </div>
        </div>
    </div>
</div>
