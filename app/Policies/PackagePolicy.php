<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Package;
use Illuminate\Auth\Access\HandlesAuthorization;

class PackagePolicy
{
    public function show(User $user, Package $package)
    {
        return $this->canHandle($user, $package);
    }

    public function edit(User $user, Package $package)
    {
        return $this->canHandle($user, $package);
    }

    public function update(User $user, Package $package)
    {
        return $this->canHandle($user, $package);
    }

    public function delete(User $user, Package $package)
    {
        return $this->canHandle($user, $package);
    }

    public function canHandle(User $user, Package $package)
    {
        return $package->user_id == $user->id;
    }
}
