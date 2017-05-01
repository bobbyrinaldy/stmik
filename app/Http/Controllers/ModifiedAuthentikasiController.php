<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
use App\User;

class ModifiedAuthentikasiController extends Controller
{
    //
    public function index(){
      $search = \Request::get('search');
      // $kerjasamas = DB::table('tbl_kerjasamas')->Where('perusahaan', '=' , $search)->paginate(20);
      $modifauths = User::where('email', 'like' , '%'.$search.'%')->paginate(20);

      // dd($kerjasamas);
      return view('admin.ruby.modifiedauth.index', ['modifauth' => $modifauths]);
    }

    public function edit($id){
      // echo "string ".$id;
      $modifauths = User::find($id);
      if (!$modifauths) {
        abort(404);
      }

      // echo "string ".$modifauths->name;
      return view('admin.ruby.modifiedauth.update', ['modifauth' => $modifauths]);

    }

    public function update(Request $request, $id){
      // echo "update";
      // echo "<br>";
      // echo "string ID".$id;
      // echo "<br>";
      // echo "string Request ".$request->name." ".$request->email." ".$request->password." ";
      // return Validator::make($request, [
      //     'name' => 'required|max:255',
      //     'email' => 'required|email|max:255',
      //     'password' => 'required|min:6|confirmed',
      // ]);
      $this->validate($request, [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255',
        'password' => 'required|min:6|confirmed',
        ]);


                // echo "pass ".$request->password;
                // echo "<br> ";
                // echo "pass ".bcrypt($request->password);

        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->save();

         return redirect('superadmin/modifauth');

    }

    public function destroy($id){
      $users = User::find($id);
      $users->delete();
      return redirect('superadmin/modifauth');
    }
}
