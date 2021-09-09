<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Money;
use App\ScreenShoot;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoneyController extends Controller
{
    public function saveMoney(Request $request)
    {
        $this->validate($request,[
            'bikash' => 'required',
            'product_image' => 'required',
            'r_name' => 'required',
            'r_num' => 'required',
        ]);




        $product_image = $request->file('product_image');


        // return $product_image;


        $imageName = $product_image->getClientOriginalName();

        $directory = 'admins/product-images/';
        $imageUrl = $directory.$imageName;
        $product_image->move($directory,$imageName);

        $money = new Money();
        $money->bikash = $request->bikash ;
        $money->r_name = $request->r_name;
        $money->r_num = $request->r_num;

        $money->product_image=$imageUrl;



        // $money->save();


        // $usersAll = User::all();
        $users = Auth::user();
        $money->name = $users->name;
        $money->email = $users->email;
        $money->save();

        $invest =$users->invest + $request->bikash ;

        // $users->save();

        DB::table('users')
                    ->where('id',$users->id)
                    ->update(['invest' => $invest]);


        // $request->image->store('images','public');
        // $request->file('product_image')->store('public');

        // $money->save();

        // return 'Uploadeddddddd';

            // return redirect("/home")->with('success','Invested Money Successfully');
            return view('front-end.deposit.deposit_success');
    }

    public function showDiposit(){

        $diposits = Money::all();
        // $diposits = User::all();

        return view('admin.diposit.diposit',[
           'diposits' => $diposits,
        //    'money' =>$money,
        ]);
    }

    public function destroy($id)
    {
        DB::table('money')->where('id', '=', $id)->delete();
        // $user->delete();
        return redirect()->route('manage-deposit')->with('success','Diposit Man has  deleted successfully.');
    }

    public function personDetails()
    {
        $screenShoots = ScreenShoot::all();

        return view('admin.screenshoot.screenshoot',[
           'screenShoots' => $screenShoots
        ]);
    }

    public function personDestroy($id)
    {
        DB::table('screen_shoots')->where('id', '=', $id)->delete();
        // $user->delete();
        return redirect()->route('person-details')->with('success','Screenshoot has  deleted successfully.');
    }

}
