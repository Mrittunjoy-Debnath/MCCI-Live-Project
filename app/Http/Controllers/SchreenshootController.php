<?php

namespace App\Http\Controllers;
use App\User;
use App\ScreenShoot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class SchreenshootController extends Controller
{

    public function schreenshootDone(Request $request)
    {
        $this->validate($request,[
            'schreen_shoot' => 'required',

        ]);

        $users = Auth::user();
        $email = $users->email;

        $screenShoot = new ScreenShoot();


        $screenShoot_img = $request->file('schreen_shoot');


        // return $product_image;


        $imageName = $screenShoot_img->getClientOriginalName();

        $directory = 'admins/product-images/';
        $imageUrl = $directory.$imageName;
        $screenShoot_img->move($directory,$imageName);

        $screenShoot->schreen_shoot=$imageUrl;


        // ScreenShoot::update('update users set votes = 100 where name = ?', ['John']);
        // $screenShoot->balance = $screenShoot->balance+10;


        // $bal = $screenShoot->balance  + 10;
        // $rowId = $screenShoot->id();

        // ScreenShoot::update($rowId,$bal);
        // $screenShoot->increment('balance',50);
        // $screenShoot->balance = ScreenShoot::where('balance','')

        // DB::table('screen_shoots')
        // ->where('rowID', 1)
        // ->increment('column1', 2)




        $screenShoot->name= $users->name;
        $screenShoot->email = $users->email;

        // $screenShoot->schreen_shoot =$request->schreen_shoot;
        // $bal = $screenShoot->balance+20;
        //  ScreenShoot::update('update schreen_shoots set balance ='.$bal.'where id = ?', [3]);

        // $screenShoot->balance=DB::table('schreen_shoots')
        //       ->where('id', 3)
        //       ->update(['balance' => $bal]);

        $bal =$users->balance+ 5;
        $total = $users->total_balance+5;
        $id = $users->id;

            DB::table('users')
                    ->where('id', $id)
                    ->update(['balance' => $bal,'total_balance'=>$total]);




        // $users->save();

        $screenShoot->save();

            return redirect("/receivetask")->with('success','ScreenShoot Added Successfully');
    }
}
