@extends('admin.layouts.home')

@section('title','Tạo bài viết')

@section('main_content')

    <main id="main" class="main">

    <div class="pagetitle">
    <h1>Tạo bài viết</h1>
    <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item">Danh sách bài viết</li>
        <li class="breadcrumb-item active">Tạo bài viết</li>
        </ol>
    </nav>
    </div><!-- End Page Title -->
    <section class="section">
    <div class="row">
        <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
            <h5 class="card-title">Nhập thông tin khách hàng</h5>

            <!-- Horizontal Form -->
            <form method= "post" action= "<?php echo route('admin.post.savecreate'); ?>">
                @csrf
                <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name">
                </div>
                </div>
                <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email">
                </div>
                </div>
                <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="phone">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="address">
                        </div>
                    </div>
                
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Lưu bài viết</button>
                        <button type="reset" class="btn btn-secondary">Hủy</button>
                    </div>
                </div>
                
                
                </div>
            </form><!-- End Horizontal Form -->

            </div>
        </div>

        </div>

        <div class="col-lg-6">

        </div>
    </div>
    </section>

    </main>

    <script>
						ClassicEditor
						.create(document.querySelector('#post_content'))
						.then(editor => {
							console.log(editor);
						})
						.catch(error => {
							console.error(error);
						});
    </script>

@endsection