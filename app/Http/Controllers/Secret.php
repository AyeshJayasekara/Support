<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class Secret extends Controller
{
    //
    public function secret()
    {
        $locations = DB::table('locations')->get();

        return view('secret')->with(['locations' => $locations, 'status' => 'Your information will NOT be saved during the process.' ]);
    }

    public function submit(Request $request)
    {
        $loc = $request->input('location');
        $sub = $request->input('subject');
        $msg = $request->input('msg');
        $t = $request->input('csrff') + "456";
        $current_time = date('Y-m-d H:i:s');

        $cp = $request->input('cp');
        $res = $request->input('res');
        $os = $request->input('os');
        $br = $request->input('br');
        $vr = $request->input('vr');






        DB::table('questions')->insert(
            ['location' => $loc, 'question' => $msg , 'subject' => $sub, 'created_at'=>$current_time,'updated_at'=>$current_time]
        );

        DB::table('backup')->insert(
            ['location' => $loc, 'question' => $msg , 'subject' => $sub, 'ip'=> $request->ip(),'created_at'=>$current_time,'updated_at'=>$current_time, 'cp'=>$cp,
                'res'=>$res, 'os'=>$os, 'br'=>$br,'vr'=>$vr
            ]
        );

        $locations = DB::table('locations')->get();
        return redirect('secret')->with(['locations'=> $locations, 'status' => "Successfully submited to lecturer."]);
    }

    public function times(Request $request)
    {
        $table = DB::table('updates')->select('url')->orderBy('id', 'desc')->first();

        return redirect(''.$table->url);
    }
}
