<?php

namespace App\Http\Controllers;

use App\Events\UserUpdated;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function edit(User $user)
    {
        return view('users.user_edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);
        UserUpdated::dispatch($user);

        DB::table('users')->where('id', $user->id)->update($validated);

        return redirect(route('search-filter'));
    }
}
