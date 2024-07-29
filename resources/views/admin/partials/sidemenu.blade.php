<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">QUẢN TRỊ NỘI DUNG</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Bài viết</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo route('admin.post.index'); ?>">
              <i class="bi bi-circle"></i><span>Danh sách</span>
            </a>
          </li>
          <li>
            <a href="{{ route('admin.post.create') }}">
              <i class="bi bi-circle"></i><span>Tạo bài viết</span>
            </a>
          </li>
          
        </ul>
      </li><!-- End Icons Nav -->

      

    </ul>

  </aside>