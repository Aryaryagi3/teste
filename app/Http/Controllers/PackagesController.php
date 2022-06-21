<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Adress;
use Inertia\Inertia;
use App\Http\Requests\PackageRequest;

class PackagesController extends Controller
{
    public function index()
    {
        $currentUser = auth()->user();
        $userName = $currentUser->name;

        return Inertia::render('Packages/Index', [
            'packs' => Package::where('user_id', $currentUser->id)->paginate(10)->through(fn($package) =>
            ['id' => $package->id,
            'name' => $package->name,
            'description' => $package->description,
            'status' => $package->status]),
            'userName' => $userName
        ]);
    }

    public function create()
    {
        return Inertia::render('Packages/Create');
    }

    public function store(PackageRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        $data['status'] = 'Aguardando recebimento na transportadora';
        $package = Package::create($data);

        return redirect('/packages');
    }

    public function show($id)
    {
        $package = Package::where('id', $id)->first();
        $userName = auth()->user()->name;

        return Inertia::render('Packages/Show', ['pack' => $package,'userName' => $userName]);
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
