<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShowUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $userPaginate = User::latest('id')->paginate(10);

        return Inertia::render(
            'Users/Index',
            [
                'users' => $users,
                'categories' => $userPaginate
            ]
        );
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShowUser  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(User $blog)
    {
        //
    }

}