<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurent;
use Illuminate\Contracts\Session\Session;

class RestoController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function list()
    {
        $data = Restaurent::all();
        return view('list',['data'=>$data]);
    }
    public function add(Request $req)
    {
        $restro = new Restaurent();
        $restro->name = $req->input('name');
        $restro->email = $req->input('email');
        $restro->address = $req->input('address');
        $restro->save();
        $req->session()->flash("status","Added Successfully");
        return redirect('/list');
    }

    public function edit($id)
    {
        $data =  Restaurent::find($id);

        return view('edit',['data'=>$data]);
    }
    public function delete($id)
    {
        Restaurent::find($id)->delete();
        session()->flash("status","Deleted Successfully");
        return redirect('/list');
    }
    public function editPost(Request $req)
    {
        $restro =Restaurent::find($req->id);
      
        $restro->name = $req->name;
        $restro->email = $req->email;
        $restro->address = $req->address;
        $restro->update();
        session()->flash("status","Updated Successfully");
        return redirect("/list");
    }
}
