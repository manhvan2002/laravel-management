@extends('admin.layouts.home')

@section('title','Danh sách bài viết')

@section('main_content')

    <main id="main" class="main">

    <div class="pagetitle">
    <h1>Quản trị bài viết</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item">Quản trị bài viết</li>
        <li class="breadcrumb-item active">Danh sách khách hàng</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <div class="row">

        <div class="col-lg-12">

        <!-- thông báo xóa thành công -->
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <!-- end thông báo xóa thành công -->

        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Danh sách khách hàng</h5>

            <!-- Table with stripped rows -->
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($allPosts as $key=>$post) { $post_id = $post->id; ?>
                <tr>
                    <th scope="row"><?php echo $key + 1; ?></th>
                    <td><?php echo $post->name; ?></td>
                    <td><?php echo $post->email; ?></td>
                    <td><?php echo $post->phone; ?></td>
                    <td><?php echo $post->address; ?></td>
                    <td>
                        <a href="<?php echo route('admin.post.update', ['id'=>$post_id]); ?>">
                            <button type="button" class="btn btn-success"><i class="bx bxs-comment-edit"></i></button>
                        </a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletePostModal_<?php echo $post_id; ?>"><i class="bx bxs-trash"></i></button>
                    </td>

                    <!-- start: hộp thoại xóa bài viết -->
                    <div class="modal fade" id="deletePostModal_<?php echo $post_id; ?>" tabindex="-1">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title">Bạn có muốn xóa bài viết</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php echo $post->title; ?>
                            </div>
                            <div class="modal-footer">
                            <a href="<?php echo route('admin.post.delete', ['id'=>$post_id]); ?>"><button type="button" class="btn btn-danger">Xóa</button></a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                            
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- end: hộp thoại xóa bài viết -->
                </tr>

                <?php } ?>
                
                </tbody>
            </table>
            <!-- End Table with stripped rows -->

            </div>
        </div>

        </div>
    </div>
    </section>

    </main>

@endsection