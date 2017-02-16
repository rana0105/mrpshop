<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use Storage;
use Session;
use App\Client;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $input = $request->all();
        if($request->get('serach')){
            $clients = Client::where("phone", "LIKE", "{$request->get('serach')}")->paginate(5);
        }else{
            $clients = Client::paginate(5);
        }
        // return response($clients);   
        return view('admin.clients.index');
    }

    public function create()
    {
        return view('admin.clients.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' =>  "requeired",
            'phone' => "requeired|integer|max:15",
            'email' => "requeired|email|max:100",
            'address' => "requeired",
            'p_quantity' => "requeired|integer",
            't_p_quantity' => "requeired|integer",
            'u_price' => "requeired|integer",
            't_price' => "requeired|requeired",
            ));
        $client = new Client;

        $client->name = $request->name;
        $client->phone = $request->phone;
        $client->email = $request->email;
        $client->address = $request->address;
        $client->p_quantity = $request->p_quantity;
        $client->t_p_quantity = $request->t_p_quantity;
        $client->u_price = $request->u_price;
        $client->t_price = $request->t_price;
        $client->save();

        return redirect() -> route('clients.show', $client->id)->with('success','Data Successfully Save !!');
    }

    public function show($id)
    {
        $clients = Client::find($id);
        return view('admin.clients.show');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
