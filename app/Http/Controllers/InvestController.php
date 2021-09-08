<?php

namespace App\Http\Controllers;

use App\Invest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvestController extends Controller
{
    public function index()
    {
            return view('admin.invest.manage-invest');
    }

    public function investDone(Request $request)
    {
        $this->validate($request,[
            'investment' => 'required',
            'daily_income' => 'required'
        ]);
        
            $invested = new Invest();

            $invested->investment = $request->investment ;
            $invested->daily_income = $request->daily_income;

            $invested->save();

            return redirect("/daily/income")->with('success','Invest and Income Updated Successfully');

    }

    public function showIncome()
    {
        $invests = Invest::all();

        return view('admin.invest.daily-income',[
            'invests' =>$invests
        ]);
    }

    public function destroy($id)
    {
        DB::table('invests')->where('id', '=', $id)->delete();
        // $user->delete();
        return redirect()->route('show-income')->with('success','invest and daily income has been deleted.');
    }

}
