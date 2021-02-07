<?php

namespace App\Http\Controllers\Cpanel\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cpnale\USer\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($lang)
    {
        return view('cpanel.user.index', [
            'users' => User::with('articles')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($lang)
    {
        return view('cpanel.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     * @return void
     */
    public function store($lang, UserRequest $request)
    {

        $user = new User();
        $user->fill($request->all());

        $user->setAttribute('password', bcrypt($request->get('password')));
        $user->save();

        return redirect()->route('cp.users.index', app()->getLocale())->with('alert', 'Пользователь добавлен');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return Response
     */
    public function edit($lang, User $user)
    {
        return view('cpanel.user.edit',[
            'user'=>$user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest $request
     * @param User $user
     * @return void
     */
    public function update($lang, UserRequest $request, User $user)
    {
        $user->fill($request->all());

        if($request->has('password')){
            $user->setAttribute('password', bcrypt($request->get('password')));
        }

        $user->save();

        return redirect()->route('cp.users.index', app()->getLocale())->with('alert', 'Пользователь изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return Response
     * @throws \Exception
     */
    public function destroy($lang, User $user)
    {
        $user->delete();
        return redirect()->route('cp.users.index', app()->getLocale())->with('alert', 'Пользователь удален');
    }
}
