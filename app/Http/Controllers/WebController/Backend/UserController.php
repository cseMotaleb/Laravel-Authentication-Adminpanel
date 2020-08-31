<?php

namespace App\Http\Controllers\WebController\Backend;

use App\Http\Controllers\Controller;
use App\User;
use DB;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Spatie\Permission\Models\Role;
use Brian2694\Toastr\Facades\Toastr;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $data = User::orderBy('id', 'ASC')
                ->where('user_type', '!=', 'User')
                ->paginate(5);
        return view('backend.users.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function members(Request $request)
    {
        $data = User::orderBy('id', 'ASC')
                ->where('user_type', '=', 'User')
                ->paginate(5);
        return view('backend.users.members', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function winnerList()
    {
        return view('backend.users.winnerList');
    }

    public function suspend()
    {
        return view('backend.users.suspend');
    }

    public function banUnban()
    {
        return view('backend.users.ban');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::where('name', '!=', 'Admin')->pluck('name', 'name')->all();
        return view('backend.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email',
            'username' => 'required|unique:users,username',
            'phone'    => 'required|unique:users,phone',
            'password' => 'required|same:confirm-password',
            'roles'    => 'required',
        ]);

        $input             = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        if ($user) {
            $roleIds = Role::whereIn('name', $request->input('roles'))->get();
            $idar    = [];
            foreach ($roleIds as $value) {
                array_push($idar, $value->id);
            }
            $ids   = implode(',', $idar);
            $userU = User::find($user->id);
            $userU->update($input +
                [
                    'role_id'   => $ids,
                    'user_type' => implode(',', $request->input('roles')),
                ]);
        }
        toastr()->success('User created successfully');
        return redirect()->route('users.index')
            ->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('backend.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user     = User::find($id);
        $roles    = Role::where('name', '!=', 'Admin')->pluck('name', 'name')->all();
        $aroles    = Role::where('name', '=', 'Admin')->pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('backend.users.edit', compact('user', 'roles', 'aroles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm-password',
            'roles'    => 'required',
        ]);

        $input = $request->except('roles');
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }
        $roleId  = implode(',', $request->input('roles'));
        $roleIds = Role::whereIn('name', $request->input('roles'))->get();
        $idar    = [];
        foreach ($roleIds as $value) {
            array_push($idar, $value->id);
        }
        $ids  = implode(',', $idar);
        $user = User::find($id);
        $user->update($input +
            [
                'role_id'   => $ids,
                'user_type' => implode(',', $request->input('roles')),
            ]);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));
        Toastr::success('User updated successfully :)','Success');
        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        toastr()->error('User deleted successfully');
        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
}
