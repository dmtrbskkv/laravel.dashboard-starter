<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Contracts\CRUDController as CRUDContract;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

abstract class CRUDController extends Controller implements CRUDContract
{
    protected string $routeList = '';
    protected string $viewDirectory = '';
    protected string $viewEntitiesKey = '';
    protected string $viewEntityKey = '';
    protected string $model = Model::class;

    public function showAll(Request $request): View
    {
        /** @var Collection $entities */
        $entities = (new $this->model)::all();

        return view("dashboard.pages.{$this->viewDirectory}.list", [$this->viewEntitiesKey => $entities]);
    }

    public function showForm(Request $request, $id = null): View
    {
        $viewData = [];
        if ($id){
            $entity = (new $this->model)::find($id);
            $viewData[$this->viewEntityKey] = $entity;
        }
        return view("dashboard.pages.{$this->viewDirectory}.form", $viewData);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        [$status, $errors]  = $this->createOrUpdate($request, $id);
        if (!$status){
            return back()->with('errors', $errors);
        }

        return redirect()->route($this->routeList);
    }

    public function create(Request $request): RedirectResponse
    {
        [$status, $errors]  = $this->createOrUpdate($request);
        if (!$status){
            return back()->with('errors', $errors);
        }

        return redirect()->route($this->routeList);
    }

    public function remove(Request $request, $id): RedirectResponse
    {
        /** @var SoftDeletes|Model $entity */
        $entity = (new $this->model)->find($id);
        $entity->delete();

        return redirect()->route($this->routeList);
    }

    abstract protected function createOrUpdate(Request $request, $id = null):array;
}
