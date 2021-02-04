<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;
use App\Models\Titles;
class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
        $this->middleware('signed')->only('verify');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $customer= Customer::paginate(15);
        return view('dashboard', compact('customer'));
        
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $customer = Customer::where('id',$id)->first();
        return view('edit', compact('customer'));
    }

    public function editSave(Request $request)
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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'max:255',
        ]);

        // The blog post is valid...
    }


}
