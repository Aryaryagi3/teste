<?php

namespace App\Actions;

use App\Models\Media;

class StoreMediaAction
{
    public function execute(object $request)
    {
        $data = $request->validated();

        $extension = $request->media->extension();

        $imageName = md5($request->media->getClientOriginalName() . strtotime('now')) . '.' . $extension;

        $request->media->move(public_path('storage/media'), $imageName);

        $data['media'] = $imageName;

        return $data;
    }
}
