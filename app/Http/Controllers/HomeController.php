<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conductors = DB::table('conductors')->where('email', '=', Auth::user()->email )->get();
        if($conductors->count()==1) {
            $locations = DB::table('locations')->get();
            return view('answer')->with('locations', $locations);
        }else
            //return response('Be right back!', 503);
          return  redirect('/secret')->with('status', 'Your information will be saved during the process.');
        //return view('home');
    }


    public function show(Request $request)
    {
            $loc = $request->input('location');
            //$locations = DB::table('locations')->where('id', '=', $loc);
            $questions = DB::table('questions')->where('location', '=', $loc)->paginate(5);
            $questions->setPath(url()->full());
            return view('show')->with('questions', $questions);
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');
        //$locations = DB::table('locations')->where('id', '=', $loc);
        if(Auth::user()->email=="asd@asd.com")
        DB::table('questions')->where('id', '=', $id)->delete();
        //$questions = DB::table('questions')->where('location', '=', $loc)->simplePaginate(15);
        return back();
    }

    public function upload(Request $request){
        $path = $request->file('fileToUpload')->store('tables');

        $current_time = date('Y-m-d H:i:s');
        DB::table('updates')->insert(
            ['url' => env('APP_URL','')."storage/app/".$path, 'created_at'=>$current_time,'updated_at'=>$current_time]
        );


        return redirect('home')->with(['status' => "Successfully submited to server. "]);
    }



}
