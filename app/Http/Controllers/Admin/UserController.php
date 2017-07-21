<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Role;

use Illuminate\Http\Request;

class UserController extends Controller
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
    		$users = User::paginate(15);
        return view('backend.users.index')->with('users',$users);
    }

  	public function edit($id)
  	{
        $user = User::findOrFail($id);
        $roles = Role::where('id','>=',2)->pluck('name','id');

        return view('backend.users.edit')->with('user',$user)->with('roles',$roles);
  	}

    public function new()
  	{

      $roles = Role::where('id','>=',2)->pluck('name','id');
      return view('backend.users.new')->with('roles',$roles);
  	}

    public function update(Request $request)
    {
      $this->validate($request, [
          'email' => 'required|unique:users,id,'.$request->input('email'),
      ]);

      $user = User::findOrFail($request->input('id'));
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->password = bcrypt($request->input('password'));
      $user->role = $request->input('role');

      $request->session()->flash('alert-success', 'Επιτυχής ενημέρωση στοιχείων χρήστη');
      $user->save();

      return redirect()->route('users.index');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
          'email' => 'required|unique:users',
      ]);

      $user = new User();
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->password = bcrypt($request->input('password'));
      $user->role = $request->input('role');
      $user->status = 1;

      if(User::where('email',$user->email)->count() == 0)
      {
        $request->session()->flash('alert-success', 'Επιτυχής καταχώρηση χρήστη');
        $user->save();
      }
      else
        $request->session()->flash('alert-danger', 'Το email ['.$user->email.'] υπάρχει ήδη');




      return redirect()->route('backend.users.index');
    }

    public function delete($id)
    {
        $collab = User::findOrFail($id);
        $collab -> delete();

        return redirect()->route('backend.users.index');
    }


}
