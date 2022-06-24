<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Media;
use App\Http\Requests\MediaRequest;

class MediaController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {

    }

    public function store(MediaRequest $request)
    {   
        $data = $request->validated();

        $extension = $request->media->extension();

        $image_name = md5($request->media->getClientOriginalName() . strtotime('now')) . '.' . $extension;

        $request->media->move(public_path('img/media'), $image_name);

        $data['media'] = $image_name;

        $media = Media::create($data);

        return redirect()->action(
            [PackagesController::class, 'show'], ['package' => $package]
        );
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
