<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Form\Users\UserCreateForm;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct() 
    {
        $this->index = route('cms.users.index');
        $this->contextData = [
            'title' => 'Users'
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->contextData['users'] = User::orderBy('id')->get();

        return view('cms.users.index', $this->contextData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->contextData['form'] = new UserCreateForm([
            "action" => route('cms.users.store'),
            "method" => "POST"
        ]);

        return view('cms.base_form', $this->contextData);
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
            "username" => "required|unique:users,username",
            "password" => "required",
            "password_confirmation" => "required|same:password",
            "status" => "required",
            "roles" => "required|array"
        ]);

        User::create([
            "username" => $request->username,
            "password" => bcrypt($request->password),
            "status" => $request->status,
        ])->assignRole($request->roles);

        return redirect($this->index);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->contextData['form'] = new UserCreateForm([
            "action" => route('cms.users.update', $user),
            "method" => "PUT",
            "data" => [
                "username" => $user->username,
                "status" => $user->status->value,
                "roles" => $user->roles->map(fn ($value) => $value->name)->toArray()
            ],
            "extra" => [
                "isUpdating" => true
            ]
        ]);

        return view('cms.base_form', $this->contextData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            "username" => "required",
            "password_confirmation" => "same:password",
            "status" => "required",
            "roles" => "required|array"
        ]);

        $user->status = $request->status;

        if ($request->has('password')) {
            $user->password = bcrypt($request->password);
        }

        $user->save();
        $user->syncRoles($request->roles);

        return redirect($this->index);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect($this->index);
    }
}
