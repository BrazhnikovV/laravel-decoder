<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

/**
 * @UserController
 */
class UserController extends Controller
{
    /**
     * Показать всех пользователей приложения.
     * @return Application|Factory|View
     */
    public function list(): Application|Factory|View
    {
        return view('user.list', [
            'users' => DB::table('users')->paginate(2)
        ]);
    }

    /**
     * Редактировать выбранного пользователя
     * @param int $id - идентификатор
     * @return Application|Factory|View
     */
    public function edit(int $id): Application|Factory|View
    {
        return view('user.edit', ['id' => $id]);
    }
}
