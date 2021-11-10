<div>


    <div class="card card-default mt-4 mr-6 bg-gray-100">
        <div class="card-header">


            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            <form
                method="POST"
                wire:submit.prevent="submit"
                class="form-horizontal"
                enctype="multipart/form-data"
                autocomplete="off">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" wire:model.lazy="title" id="title" autocomplete="family-name"
                                   class="mt-1 form-control focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            <span class="text-red-600">
                    @error('title') {{  $message }} @enderror
                        </span>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group" wire:ignore >
                            <label>Content</label>

                            <textare id="editor"> {!! $content !!}</textare>


                                <span class="text-red-600">
                                    @error('content') {{  $message }} @enderror
                                </span>

                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label></label>
                            <div class="md:col-span-1">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">SERP Preview</h3>
                                <div class="mt-1 text-sm text-gray-500">
                                    <div class="text-green">{{ env('APP_URL'). '/blog/' . $seo_slug  }}</div>
                                    <div class="text-bold">
                                        <b class="text-green">{{ Str::title( Str::limit($title , 60 ,  ' ... '))  }}</b></div>
                                    <p class="text-sm">{{ Str::limit($meta_description , 160 , '...') }}</p>

                                </div>
                            </div>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text"
                                   wire:model.lazy="seo_slug"
                                   id="seo_slug"
                                   autocomplete="family-name"
                                   class="mt-1 form-control focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">


                            <span class="text-red-600">
                            @error('seo_slug') {{  $message }} @enderror
                        </span>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Meta Title</label>

                            <input type="text" wire:model.lazy="meta_title" id="meta_title" autocomplete="family-name"
                                   class="mt-1 form-control focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('meta_title')
                            <span class="text-red-600">
                           {{  $message }}
                                </span>
                            @enderror
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Meta Description</label>

                            <textarea wire:model.lazy="meta_description" class="quform-textarea form-control"></textarea>
                            @error('meta_title')
                            <span class="text-red-600">
                           {{  $message }}
                                </span>
                            @enderror
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Is Published</label>

                            <input type="checkbox" wire:model.lazy="is_published" class="quform-element-checkbox">
                            @error('meta_title')
                            <span class="text-red-600">
                           {{  $message }}
                                </span>
                            @enderror
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Featured Image</label>

                            <input id="featured_image" wire:model.lazy="featured_image" type="file"
                                   class="">

                            <div>
                                @if ($featured_image_path && ! $featured_image)
                                    Photo Preview:
                                    <img src="{{  $featured_image_path }}" width="300"
                                         height="500">
                                @elseif($featured_image)
                                    Photo Preview:
                                    <img src="{{  $featured_image->temporaryUrl() }}" width="300"
                                         height="500">
                                @endif
                            </div>
                        </div>
                        <button type="submit"
                                class="inline-flex  btn btn-success justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                </div>
            </form>

        </div>
    </div>
</div>

@push('page_scripts')
    <script src="https://cdn.ckeditor.com/4.16.2/standard-all/ckeditor.js"></script>


    <script type="module">

        CKEDITOR.disableAutoInline = true;

        var editor = CKEDITOR.replace('editor');

        editor.on('change',function(){
        @this.set('content', editor.getData());
        });

        console.log(editor)
        /*ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    console.log(editor.getData())
                @this.set('content', editor.getData());
                })
            })
            .catch(error => {
                console.error('Oops, something went wrong!');
                console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
                console.warn('Build id: fsy8957et48w-nohdljl880ze');
                console.error(error);
            });*/


    </script>
@endpush

