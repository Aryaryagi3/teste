<?php

namespace App\Actions;

use App\Models\Package;

class StorePackageAction
{
    public function execute(object $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        $data['status'] = 'Aguardando recebimento na transportadora';

        return $data;
    }
}