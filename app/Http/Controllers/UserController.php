<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Users;

class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $array =[
            'name' =>$request->name,
            'email'=> $request->email,
            'contact'=> $request->contact,
            'password'=> $request->password,
                    ];
        Users::insert($array);
        return redirect('user_list');
    }
    public function index()
    {
        $result= Users::get();
        return view('user_list',compact('result'));
    }
     public function delete($id)
    {
        Users::where('id','=',$id)->delete();
        return redirect('user_list');
    }
     public function edit($id)
    {
        $result=Users::where('id','=',$id)->first();
        return view('user_edit',compact('result'));
    }
     public function update(Request $request)
    {
        $id = $request->id;
        $array =[
            'name' =>$request->name,
            'email'=> $request->email,
            'contact'=> $request->contact,
            
                    ];
        Users::where('id','=',$id)->update($array);
        return redirect('user_list');
    }

    public function show(){
        return view('n');
    }
}
