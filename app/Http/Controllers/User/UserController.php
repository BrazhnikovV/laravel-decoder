<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;

/**
 * @UserController
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('users.list', [
            'users' => DB::table('users')->paginate(2)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return View
     */
    public function show(User $user): View
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Handle an incoming user update request.
     *
     * @param Request $request
     * @return RedirectResponse
     *
     */
    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'id'    => ['required'],
            'name'  => ['required','string','max:255'],
            'email' => ['required','string','max:255','email',Rule::unique('users')->ignore($request->id)]
        ]);

        DB::table('users')->where('id', $request->id)->update([
            'name'  => $request->name,
            'email' => $request->email
        ]);

        return redirect(RouteServiceProvider::USER_LIST);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return RedirectResponse
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();

        return redirect(RouteServiceProvider::USER_LIST);
    }
}
