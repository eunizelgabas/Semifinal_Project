<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Illuminate\Http\Request;

class InvestorController extends Controller
{
    public function index(){
        $investors = Investor::orderBy('name')->get();
        return view ('investors.index',[
            'investors' =>$investors
          ]);
    }

    public function view(Investor $investor){
        return view('investors.show',[
            'investor'=>$investor
        ]);
    }

    public function edit(Investor $investor){
        return view('investors.edit',[
            'investor'=>$investor
        ]);
    }

    public function update(Investor $investor, Request $request){
        $investor->update($request->all());
        return redirect('investor/'. $investor->id);
    }

    public function delete(Investor $investor){
        return view('investors.confirm-delete',[
            'investor'=>$investor
        ]);

    }

    public function destroy(Investor $investor){
        $investor->delete();
        return redirect('/investor');
    }

    public function store(Request $request){
        Investor::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
            'investment'=>$request->investment
        ]);

        return redirect('/investor');
    }
}
