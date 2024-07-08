<?php

namespace App\Http\Controllers;
use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function Home()
    {
        return view('Home');
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
