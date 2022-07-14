<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();

        if (isset($data['avatar'])) {
            $data['avatar'] = Storage::disk('public')->put('/images', $data['avatar']);
        }

        $user->update($data);
        return view('admin.user.show', compact('user'));
    }
}
