<?php

namespace App\Actions;

use App\Models\Package;
use Spatie\QueryBuilder\QueryBuilder;

class IndexPackageAction
{
    public function execute(Object $currentUser)
    {
        $packages = QueryBuilder::for(Package::class)
            ->where('user_id', $currentUser->id)
            ->paginate(5);

        return $packages;
    }
}
