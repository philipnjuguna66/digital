<div>
    <form action="#" method="POST" wire:submit.prevent="submit">
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="mt-5 md:mt-0 md:col-span-2">

                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">


                            <div class="col-span-6 sm:col-span-3">
                                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                <input type="text"  wire:model.lazy="title" id="title" autocomplete="family-name"
                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">


                                <span class="text-red-600">
                                    @error('title') {{  $message }} @enderror
                                </span>
                            </div>


                            <div class="col-span-6 sm:col-span-3">
                                <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                                <input type="text"  wire:model.lazy="price" id="price" autocomplete="family-name"
                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">


                                <span class="text-red-600">
                                    @error('price') {{  $message }} @enderror
                                </span>
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                                <input type="text"  wire:model.lazy="location" id="location" autocomplete="family-name"
                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">


                                <span class="text-red-600">
                                    @error('location') {{  $message }} @enderror
                                </span>
                            </div>

                            <div>
                                <label for="content" class="block text-sm font-medium text-gray-700">
                                    Content
                                </label>
                                <div class="mt-2 bg-white" wire:ignore>
                                    <div id="editor">
                                        {!! $content !!}

                                        <span class="text-red-600">
                                    @error('content') {{  $message }} @enderror
                                </span>
                                    </div>



                                </div>

                            </div>


                            <div>
                                <label class="block text-sm font-medium text-gray-700">
                                    Cover photo
                                </label>
                                <div
                                    class="mt-1 ">
                                    <div class="space-y-1 text-center">

                                        <div class="flex text-sm text-gray-600">
                                            <label for="featured_image"
                                                   class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="photos" wire:model="photos"  type="file" multiple>
                                            </label>
                                            <div>
                                                @if (! is_null($photos))
                                                    @foreach($photos as $photo)
                                                    Photo Preview:
                                                   <div class="flex col-span-3">
                                                       <img src="{{ $photo->temporaryUrl() }}" width="300" height="500">
                                                   </div>
                                                    @endforeach
                                                @endif
                                            </div>

                                        </div>
                                        <p class="text-xs text-gray-500">
                                            PNG, JPG up to 1MB
                                        </p>

                                        <span class="text-red-600">
                                    @error('photos.*') {{  $message }} @enderror
                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="mt-5 md:mt-0 md:col-span-1">

                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">SEO SETTINGS</h3>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="seo_slug" class="block text-sm font-medium text-gray-700">Slug</label>
                                <input type="text" wire:model.lazy="seo_slug" id="seo_slug" autocomplete="family-name"
                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">



                                <span class="text-red-600">
                                    @error('seo_slug') {{  $message }} @enderror
                                </span>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="meta_title" class="block text-sm font-medium text-gray-700">SEO TITLE</label>
                                <input type="text" wire:model.lazy="meta_title" id="meta_title" autocomplete="family-name"
                                       class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                <span class="text-red-600">
                                    @error('meta_title') {{  $message }} @enderror
                                </span>
                            </div>



                            <div>
                                <label for="meta_description" class="block text-sm font-medium text-gray-700">
                                    SEO Description
                                </label>
                                <div class="mt-1">
                                    <textarea id="meta_description" wire:model.lazy="meta_description"rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="you@example.com"></textarea>


                                    <span class="text-red-600">
                                    @error('meta_description') {{  $message }} @enderror
                                </span>
                                </div>

                            </div>

                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="is_published"  wire:model="is_published" type="checkbox" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">

                                    <span class="text-red-600">
                                    @error('is_published') {{  $message }} @enderror
                                </span>

                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="is_published" class="font-medium text-gray-700">Is Published</label>

                                </div>
                            </div>

                            <div class="md:col-span-1">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">SERP Preview</h3>
                                <div class="mt-1 text-sm text-gray-500">
                                    <div class="text-blue-700">{{ env('APP_URL'). '/blog/' . $seo_slug  }}</div>
                                    <div class="h1 text-bold"><b>{{ Str::title( Str::limit($meta_title , 60 ,  ' ... '))  }}</b></div>
                                    <p class="text-sm">{{ Str::limit($meta_description , 160 , '...') }}</p>

                                </div>
                            </div>


                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </form>
</div>

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.0.0/classic/ckeditor.js"></script>

    <script>

        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    console.log(editor.getData())
                    @this.set('content', editor.getData());
                })
            })
            .catch( error => {
                console.error( error );
            } );
    </script>
@endpush
