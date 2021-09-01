<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PractiseModel;

class PractiseController extends Controller
{
    public function home(){
        $students = PractiseModel::paginate(4); 
        // $student = PractiseModel::all();  //to show all data
        
      return view('welcome',compact('students'));

    }

    public function create(){
        return view('create');
  
      }

      public function store(Request $request){
          $this->validate($request,[
              'fname' => 'required',
              'lname' => 'required',
              'email' => 'required',
              'phone' => 'required'

          ]);

          $student = new PractiseModel;
          $student->first_name = $request->fname;
          $student->last_name = $request->lname;
          $student->email = $request->email;
          $student->phone = $request->phone;
          $student->save();
          return redirect(route('home'))->with('success', "Details Successfully added");
      }

      public function edit($id){
          $student = PractiseModel::find($id);
          return view('edit',compact('student'));

      }

      public function apis(){
        return PractiseModel::all();
      }

      public function update(Request $request, $id){
        $this->validate($request,[
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required'

        ]);

        $student = PractiseModel::find($id);
        $student->first_name = $request->fname;
        $student->last_name = $request->lname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        return redirect(route('home'))->with('success', "Details Successfully updated");
      }

      public function delete($id){
        PractiseModel::find($id)->delete();
        return redirect(route('home'))->with('success', "Details Successfully deleted");
        

      }

}
