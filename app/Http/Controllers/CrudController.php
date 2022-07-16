<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
Use Illuminate\Support\Facades\Session;
class CrudController extends Controller
{
    public function showData(){
        //$showData=Crud::all(); 
        //$showData=Crud::paginate(5);
        $showData=Crud::latest()->simplePaginate(5);
        return view('show_data',compact('showData'));
    }

    public function addData(){
        return view('add_data');
    }

    //add data
    public function storeData(Request $request){
        $rules= [
            'name'=>'required|max:10',
            'email'=>'required|email',
        ];
        $cm=[
            'name.required'=>'Enter your name',
            'name.max'=>'Your name can not contain more than 10 character',
            'email.required'=>'Enter your name',
            'email.email'=>"Email must be a valid email",
        ];
        $this->validate($request,$rules,$cm);

        $crud= new Crud();
        $crud->name=$request->name;
        $crud->email=$request->email;
        $crud->save();
        Session::Flash('msg','Data successfully Added');
        //return $request->all();
        return redirect('/');
    }

    //edit display data
    public function editData($id=null){
        $editData=Crud::find($id);
        return view('edit_data',compact('editData'));
    }
    //update

    public function updateData(Request $request,$id){
        $rules= [
            'name'=>'required|max:10',
            'email'=>'required|email',
        ];
        $cm=[
            'name.required'=>'Enter your name',
            'name.max'=>'Your name can not contain more than 10 character',
            'email.required'=>'Enter your name',
            'email.email'=>"Email must be a valid email",
        ];
        $this->validate($request,$rules,$cm);

        $updateData=Crud::find($id);
        $updateData->name=$request->name;
        $updateData->email=$request->email;
        $updateData->save();
        Session::Flash('msg','Data successfully Updated');
        return redirect('/');
    }
    //delete

    public Function deleteData($id){
        $deleteData=Crud::find($id);
        $deleteData->delete();
        Session::Flash('msg','Data successfully Deleted');
        return redirect('/');
    }
}
