<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Media;
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

    public function show(Package $package)
    {
        $userName = auth()->user()->name;
        $currentUser = auth()->user();

        $medias = Media::where('package_id', $package->id)->paginate(10);

        return Inertia::render('Packages/Show', ['pack' => $package,'userName' => $userName, 'medias' => $medias]);
    }

    public function edit(Package $package)
    {
        return Inertia::render('Packages/Edit', ['pack' => $package]);
    }

    public function update(PackageRequest $request, Package $package)
    {
        $data = $request->validated();
        $package->update($data);

        return redirect('/packages');
    }

    public function destroy($id)
    {
        //
    }
}
