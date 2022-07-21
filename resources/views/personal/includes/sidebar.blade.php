<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('personal.main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Главная
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('personal.liked.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-heart"></i>
                    <p>
                        Понравившиеся посты
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('personal.comment.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-comment"></i>
                    <p>
                        Комментарии
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('post.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-clone"></i>
                    <p>
                        Обзоры игр
                    </p>
                </a>
            </li>
            @if(auth()->user()->role === 0)
            <li class="nav-item">
                <a href="{{ route('admin.post.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-user"></i>
                    <p>
                        Панель
                    </p>
                </a>
            </li>
            @endif
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
