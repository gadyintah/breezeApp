<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

/**
 * Class UsersController
 * @property User user
 * @package App\Http\Controllers
 */
class UsersController extends Controller
{
    /**
     * @var User
     */
    protected $user;

    /**
     * UsersController constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get users for the data table.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getUsersForDataTable(Request $request)
    {
        $users = $this->user->all();

        return Inertia::render('UsersTable', [
            'users' => $users
        ]);
        // return UserResource::collection($users);
    }
}