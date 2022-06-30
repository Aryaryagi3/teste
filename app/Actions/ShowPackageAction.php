<?php

namespace App\Actions;

use App\Models\Media;
use Spatie\QueryBuilder\QueryBuilder;

class ShowPackageAction
{
    public function execute(Object $package)
    {
        $medias = QueryBuilder::for(Media::class)
            ->where('package_id', $package->id)
            ->get();

        return $medias;
    }
}
