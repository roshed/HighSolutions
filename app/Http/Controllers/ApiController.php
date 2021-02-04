<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
class ApiController extends Controller
{
    public function index(Request $request)
    {
        $customer = Customer::sortable();

            if ($request->has('name')) {
                if(!empty($request->name))
                $customer->where('name', $request->name);
            }
        
            if ($request->has('gender')) {
                if($request->gender != 'all')
                $customer->where('gender', $request->gender);
            }

        $customer = $customer->paginate(15);
        return view('api', compact('customer'));
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $customer = Customer::where('id',$id)->first();
        return view('edit', compact('customer'));
    }

    public function store(Request $request)
    {
        $id = $request->id;

        
        $customer = Customer::where('id',$id)->first();
        $customer->name = $request->name;
        $customer->gender = $request->gender;
        $customer->culture = $request->culture;
        $customer->born = $request->born;
        $customer->died = $request->died;
        $customer->father = $request->father;
        $customer->mother = $request->mother;
        $customer->save();

        return redirect()->back()->withSuccess('Dane zostały prawidłowo zmienione');
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $customer = Customer::where('id',$id)->first();
        $customer->delete();

        return response()->json(null, 204);
    }

    
}
