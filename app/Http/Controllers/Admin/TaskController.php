<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\Withdraw;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class TaskController extends Controller
{
    public function index()
    {
        $withdraws = Withdraw::all();
        return view('admin.withdraw.withdrawperson',[
            'withdraws' => $withdraws,
        ]);
    }

    public function destroy($id)
    {
        DB::table('withdraws')->where('id', '=', $id)->delete();
        // $user->delete();
        return redirect()->route('task-withdraw')->with('success','Person has been deleted.');
    }

    public function withdraw($id)
    {
        $users = DB::table('users')->where('id',$id)->first();

        return view('admin.withdraw.withdrawconfirm',[
            // 'id' => $id,
            'users' => $users,
        ]);
    }

    public function confirm(Request $request,$id)
    {
        $users = DB::table('users')
        ->where('id',$id)->first();

        $withdraw =$users->withdraw + $request->w_taka_c;

        DB::table('users')
        ->where('id',$id)
        ->update(['withdraw' => $withdraw]);


        // $total = $users->total_balance-$withdraw;

        $users = DB::table('users')
        ->where('id',$id)->first();

        $invest = $users->invest;
        $balance = $users->balance;
        $w_draw = $users->withdraw;



        $total = $invest+$balance-$w_draw;

        DB::table('users')
                    ->where('id',$id)
                    ->update(['total_balance' => $total]);
        // $users->total_balance = $users->total_balance-$request->w_taka_c;
        // $users->update($users->total_balance);

        return redirect()->route('user.withdraw',$id)->with('success','Withdraw has been Success.');;
    }


}
