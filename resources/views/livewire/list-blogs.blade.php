<div class="p-6">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Title</th>
            <th>Is Published</th>
            <th>Date Published</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($blogs as $blog)
            <tr>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->is_published }}</td>
                <td>{{ date_format($blog->created_at,'Y-m-d') }}</td>
                <td>
                    <div class="margin">
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-success">Actions</button>
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-icon" data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="{{ route('manage.blog.edit', $blog) }}">Edit</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('blog.show', ['blog' => $blog]) }}">View</a>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
</div>



@push('page_scripts')
    @include('layouts.datatables_js')
    <script>
        $("#example1").DataTable({
            "responsive": true, "lengthChange": true, "autoWidth": false, "ordering": false, "info": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        /*$('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        });*/
    </script>
@endpush

@push('page_css')
    @include('layouts.datatables_css')


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush
