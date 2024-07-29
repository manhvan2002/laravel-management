<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


// Khai báo Models Posts...
use App\Models\Admin\Posts;


class PostController extends Controller
{
    
    public function index() 
    {

        $user = Auth::user();

        $allPosts = Posts::all();
        
        return view('admin.post.index', ['allPosts'=>$allPosts, 'user'=>$user]);
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function saveCreate() {
        $name = '';
        $email = '';
        $phone = '';
        $address = '';

        if (isset($_POST['name'])) {
            $name = $_POST['name'];
        }
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }
        if (isset($_POST['phone'])) {
            $phone = $_POST['phone'];
        }
        if (isset($_POST['address'])) {
            $address = $_POST['address'];
        }

        $newPost = new Posts;
        $newPost->name = $name;
        $newPost->email = $email;
        $newPost->phone = $phone;
        $newPost->address = $address;
       

        $newPost->save();

        return redirect(route('admin.post.index'));

    }

    public function update(Request $request)
    {

        $post_id = $request->id;

        $edit_post = Posts::find($post_id);

        return view('admin.post.update', ['edit_post'=>$edit_post]);
    }

    public function saveEdit() 
    {
        //----- hàm xử lý lưu dữ liệu Sửa bài viết -----
        // echo '<pre>';
        // print_r($_POST);
        // echo '</pre>';
        $post_id= 0;
        $name = '';
        $email = '';
        $phone = '';
        $address = '';


        if (isset($_POST['name'])) {
            $name = $_POST['name'];
        }
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
        }
        if (isset($_POST['phone'])) {
            $phone = $_POST['phone'];
        }
        if (isset($_POST['address'])) {
            $address = $_POST['address'];
        }
        if (isset($_POST['post_id'])) {
            $post_id = $_POST['post_id'];
        }

        $edit_post = Posts::find($post_id);
        $edit_post->name = $name;
        $edit_post->email = $email;
        $edit_post->phone = $phone;
        $edit_post->address = $address;

        $edit_post->save();

        return redirect(route('admin.post.index'));
    }

    public function delete(Request $request)
    {
        
        $post_id = $request->id;

        $delete_post = Posts::find($post_id);

        $delete_post->delete();

        return redirect(route('admin.post.index'))
        ->with('success', 'Xóa thành công');
    }

    

}