<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoModel;

class PagesController extends Controller
{
    public function home(){
        return view('pages/home');
    }

    public function viewtasks(){
        $list = new TodoModel();
        return view('pages/viewtasks', [
            'list' => $list->all()
        ]);
    }

    public function addtask(Request $request){
        if ($request->isMethod('post')) {
            $valid = $request->validate([
                'title' => 'required|min:4|max:100',
                'priopity' =>'required',
                'datestart'=>'required',
                'dateend'=>'required',
                'description'=>'required|min:10|max:100'
            ]);
            $model_todo = new TodoModel();
            $model_todo->title = $request->input('title');
            $model_todo->priopity = $request->input('priopity');
            $model_todo->datestart = date('Y-m-d', strtotime($request->input('datestart')));
            $model_todo->dateend = date('Y-m-d', strtotime($request->input('dateend')));
            $model_todo->description = $request->input('description');
            $model_todo->hidden = $request->input('hidden') ? True : False;
            $model_todo->save();
            return redirect('/addtask');
        }
        return view('forms/addtask');
    }

    public function login(){
        return view('forms/login');
    }
}
