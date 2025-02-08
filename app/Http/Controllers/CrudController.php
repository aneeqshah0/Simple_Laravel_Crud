<?php

namespace App\Http\Controllers;
use App\Models\Crud;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function Home()
    {
        return view('Home');
    }
    public function AddBlog()
    {
        $users = Crud::all();
        return view('AddBlog', compact('users'));
    }
    
    public function BlogRecord()
    {
        $BlogDetail = Blog::with('user')->get();
        return view('BlogRecord', compact('BlogDetail'));
    }
    public function CreateBlogRecord(Request $data)
    {
        $user = new Blog();
        $user->title=$data->input('title');
        $user->description=$data->input('description');
        $user->user_id=$data->input('user_id');
        $user->save();
        return redirect()->back();
    }
    public function DeleteBlogRecord($id)
    {
        $User=Blog::find($id);
        $User->delete();
        return redirect()->back();
    }
    public function UpdateBlogdata(Request $data)
    {
        $User=Blog::find($data->input('id'));
        $User->title=$data->input('title');
        $User->description=$data->input('description');
        $User->user_id=$data->input('user_id');
        $User->save();
        return View('Home');
    }
    public function EditBlog($id)
    {
        $User=Blog::find($id);
        $users = Crud::all();
        return view('UpdateBlogRecord',compact('User','users'));
    }
    public function ShowUserBlog($id)
    {
        $user = Crud::findOrFail($id);
        $blogs = Blog::where('user_id', $id)->get();

        return view('ShowUserBlog', compact('user', 'blogs'));
    }
    public function AddRecord()
    {
        return view('AddRecord');
    }
    public function ShowRecord()
    {
        $User=Crud::all();
        return view('ShowRecord',compact('User'));
    }
    public function CreateRecord(Request $data)
    {
        $user = new Crud();
        $user->fullname=$data->input('fullname');
        $user->email=$data->input('email');
        $user->password=$data->input('password');
        $user->save();
        return redirect()->back();
    }
    public function Updatedata(Request $data)
    {
        $User=Crud::find($data->input('id'));
        $User->fullname=$data->input('fullname');
        $User->email=$data->input('email');
        $User->password=$data->input('password');
        $User->save();
        return View('Home');
    }
    public function DeleteRecord($id)
    {
        $User=Crud::find($id);
        $User->delete();
        return redirect()->back();
    }
    public function Edit($id)
    {
        $User=Crud::find($id);
        return view('UpdateRecord',compact('User'));
    }
}
