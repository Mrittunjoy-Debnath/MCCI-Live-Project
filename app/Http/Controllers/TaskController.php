<?php

namespace App\Http\Controllers;
use App\Address;
use App\User;
use App\Task;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {

        // $users = Auth::user();
        // $addresses = Address::all();

        // $id = Auth::user()->id;
        // $addresses = User::find($id);


        $users = Auth::user();

        $email = $users->email;

        // $addresses = Address::where('email','=',$email)->get();
        $addresses = User::where('email','=',$email)->get();

        return view('front-end.task.address.address',[
            'addresses' => $addresses,
            // 'users' => $users,
        ]);
    }

    // public function saveAddress(Request $request)
    // {

    //     $this->validate($request,[
    //         'bikash' => 'required',
    //         'phone' => 'required',
    //         'address' => 'required',
    //     ]);

    //     $users = Auth::user();
    //     $addresses = new Address();
    //     $addresses->name = $users->name;
    //     $addresses->email = $users->email;

    //     $addresses->phone = $request->phone;
    //     $addresses->bikash = $request->bikash;
    //     $addresses->address = $request->address;



    //     $addresses->save();

    //     // $id = Auth::user()->id;
    //     // $addresses = User::find($id);
    //     // $addresses = Address::all();

    //     $users = Auth::user();

    //     $email = $users->email;

    //     $addresses = Address::where('email','=',$email)->get();


    //     return view('front-end.task.address.address',[
    //         'addresses' => $addresses,
    //     ]);
    //     // return redirect("/home")->with('success','Invested Money Successfully');
    //     // return redirect()->route('save-address')->with('success','Address has  created successfully.');
    // }

    public function bankAccount()
    {
        $users = Auth::user();

        $email = $users->email;

        // $addresses = Address::where('email','=',$email)->get();

        $addresses = User::where('email','=',$email)->get();
        return view('front-end.task.address.bankaccount',[
            'addresses' => $addresses,
        ]);
    }
    public function withdraw()
    {

        return view('front-end.task.withdraw.withdraw');
    }

    public function withdrawAmount(Request $request)
    {
        $this->validate($request,[
            'w_taka' => 'required',
            'w_msg' => 'required',
        ]);

        // $addresses = new Address();
        $users = Auth::user();
        $withdraw = new Withdraw();


        $email = $users->email;

        // $addresses = Address::where('email','=',$email)->first();
        $addresses = User::where('email','=',$email)->first();

        $withdraw->name = $addresses->name;
        $withdraw->email = $addresses->email;
        $withdraw->phone = $addresses->phone;
        $withdraw->w_taka = $request->w_taka;
        $withdraw->w_msg = $request->w_msg;

        $withdraw->save();

        return view('front-end.task.withdraw.w_draw_r');
    }

    public function invite()
    {
        return view('front-end.task.invite.invite');
    }

    public function taskAll()
    {
        return view('admin.task.task');
    }

    public function addTask(Request $request)
    {
        $this->validate($request,[
            'media_name' => 'required',
            'media_link' => 'required'
        ]);

            $task = new Task();

            $task->media_name = $request->media_name ;
            $task->media_link = $request->media_link ;

            $task->save();

            return redirect("/taskforall")->with('success','Task Added Successfully');

    }

    public function receiveTask()
    {
        $receivetasks = Task::all();

        return view('front-end.task.receive.receivetask',[
            'receivetasks' => $receivetasks,
        ]);
    }

    public function manageTask()
    {
        $managetasks = Task::all();

        return view('admin.task.manage_task',[
            'managetasks' => $managetasks,
        ]);
    }

    public function destroy($id)
    {
        DB::table('tasks')->where('id', '=', $id)->delete();
        return redirect()->route('manage-task')->with('success','Task deleted Successfully.');
    }

    public function totalIncome()
    {
        $users = Auth::user();
        $name = $users->name;
        $email = $users->email;
        $invest = $users->invest;
        $balance = $users->balance;
        $w_draw = $users->withdraw;

        $users->total_balance = $invest+$balance-$w_draw;
        $users->save();

        $total_balance = $users->total_balance;
        // $addresses = User::where('email','=',$email)->first();

        return view('front-end.income.totalincome',[
            'name' =>  $name,
            'email' =>$email,
            'invest' => $invest,
            'balance' => $balance,
            'w_draw' =>$w_draw,
            'total_balance' => $total_balance,
        ]);
    }
}
