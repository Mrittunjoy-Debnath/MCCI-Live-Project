<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmailController extends Controller
{
    public function index()
    {
        return view('admin.email.show-email');
    }

    public function showEmail()
    {
            $users = User::all();
            // $contents =User::content();

            // return $contents;

            return view('admin.email.manage-email',[
                'users' => $users,
                // 'contents' => $contents,
            ]);

            // return view('admin.email.manage-email',compact('users','users'));
    }

    // public function emailDelete(User $id){

    //         $id->delete();
    //         return redirect('/manage/email');
    // }

    public function destroy($id)
    {
        DB::table('users')->where('id', '=', $id)->delete();
        // $user->delete();
        return redirect()->route('manage-email')->with('success','Email has been deleted.');
    }
}
