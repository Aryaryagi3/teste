<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Media;
use App\Http\Requests\MediaRequest;
use App\Actions\StoreMediaAction;

class MediaController extends Controller
{
    public function store(MediaRequest $request)
    {
        $media = Media::create((new StoreMediaAction())->execute($request));

        return redirect()->action(
            [PackagesController::class, 'show'], ['package' => $media->package_id]
        );
    }
}
