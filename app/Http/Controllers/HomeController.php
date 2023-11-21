<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $request->all([

            'name' => 'required',
            'email' => 'required',
            'cnic' => 'required',
            'dob' => 'required',
            'jobtitle' => 'required',
            'gender' => 'required',
            'number' => 'required',
            'address' => 'required',
            'qualification' => 'required',
            'university' => 'required',
            'cgpa' => 'required',
            'completion' => 'required',
            'experience' => 'required',
            'salary' => 'required',
            'working' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg,pdf,word|max:2048',
        ]);
        $input = $request->all();

        if ($file = $request->file('file')) {
            $destinationPath = 'file/';
            $profileFile = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move($destinationPath, $profileFile);
            $input['file'] = "$profileFile";
        }
        Home::create($input);
      
        return redirect()->route('home')->with('success','Student created successfully.');
    }
}
