<?php

namespace App\Policies;

use App\Models\User;

class TeacherPanelPolicy
{
    public function access(User $user)
    {
        return in_array($user->role, ['professor', 'admin']);
    }
    public function __construct()
    {
        //
    }
}
