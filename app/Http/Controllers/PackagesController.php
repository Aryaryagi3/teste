<?php

namespace App\Http\Controllers;

use App\Actions\IndexPackageAction;
use App\Actions\ShowPackageAction;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Media;
use Inertia\Inertia;
use App\Http\Requests\PackageRequest;
use App\Actions\StorePackageAction;
use App\Http\Resources\PackageResource;
use Spatie\QueryBuilder\QueryBuilder;

class PackagesController extends Controller
{
    public function index()
    {
        $currentUser = auth()->user();

        $packages = (new IndexPackageAction())->execute($currentUser);

        return Inertia::render('Packages/Index', [
            'packs' => $packages,
            'userName' => $currentUser->name
        ]);
    }

    public function create()
    {
        return Inertia::render('Packages/Create');
    }

    public function store(PackageRequest $request)
    {

        $package = Package::create((new StorePackageAction())->execute($request));

        return redirect('/packages');
    }

    public function show(Package $package)
    {
        $this->authorize('show', $package);

        $userName = auth()->user()->name;

        $medias = (new ShowPackageAction())->execute($package);

        return Inertia::render('Packages/Show', [
            'medias' => $medias,
            'pack' => $package,
            'userName' => $userName
        ]);
    }

    public function edit(Package $package)
    {
        $this->authorize('edit', $package);
        return Inertia::render('Packages/Edit', ['pack' => $package]);
    }

    public function update(PackageRequest $request, Package $package)
    {
        $this->authorize('update', $package);

        $data = $request->validated();
        $package->update($data);

        return redirect()->action(
            [PackagesController::class, 'show'], ['package' => $package]
        );
    }

    public function destroy(Package $package)
    {
        $this->authorize('delete', $package);

        $package->delete();
        return redirect('/packages');
    }
}
