<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;



class RegistrationController extends Controller
{
    public function registarion()
    {


        return view('form');
    }



    public function store(Request $req)
    {
        // Validate the incoming request data
        $req->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:customers,email',
                'password' => 'required|string|min:8'
            ]
        );
        // Create a new customer instance
        $users = new Customers;


        $users->name = $req->input('name');
        $users->email = $req->input('email');
        $users->password =  bcrypt($req->input('password'));
        $users->save();
        return redirect('/form/view');
    }

    public function View()
    {
        $peoples = Customers::all(); // Fetch all data from 'Customers' table in DB and store on 'peoples' variable
        $data = compact('peoples'); //function creates an array containing the variable name 'peoples' as the key and the value of the variable $peoples.


        return view('view')->with($data);
    }

    // TRASH FUNCTION

    public function trashed()
    {
        $peoples = Customers::onlyTrashed()->get();
        $data = compact('peoples');
        return view('trash')->with($data);
    }


    public function Delete($id)
    {

        $customer_dlt =  Customers::find($id);

        if ($customer_dlt) {

            Customers::find($id)->delete();
        }

        return redirect('/form/view');
    }
    public function edit($id)
    {

        $customer_edt =  Customers::find($id);

        if (!$customer_edt) {

            return redirect('/form/view');
        } else {
            $title = "Update Customer";
            $url = ('/form/update') . "/" . $id;
            $data = compact('customer_edt', 'url', 'title');
            return view('update', $data);
        }
    }


    public function update($id, Request $req)
    {

        // Find the customer by ID
        $customer_update = Customers::find($id);

        // Check if the customer exists
        if (!$customer_update) {
            return redirect('/form/view');
        }

        // Update the customer's data
        $customer_update->name = $req->input('name');
        $customer_update->email = $req->input('email');
        $customer_update->save();

        // Redirect to the view page with a success message
        return redirect('/form/view');
    }

    public function restore($id)
    {
        $peoples = Customers::withTrashed()->find($id);
        if ($peoples) {
            $peoples->restore();
        }
        return redirect('form/view');
    }

    public function force_dlt($id)
    {
        $peoples = Customers::withTrashed()->find($id);
        if ($peoples) {
            $peoples->forceDelete();
        }
        return redirect('form/view');
    }
}
