
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="nav-icon fas fa-chart-pie"></i>
        <p>
            Blogs
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('blog.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Blogs</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('blogs.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Add Blog</p>
            </a>
        </li>

    </ul>
</li>
