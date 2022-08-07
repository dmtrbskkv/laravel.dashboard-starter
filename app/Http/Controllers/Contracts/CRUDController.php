<?php

namespace App\Http\Controllers\Contracts;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

interface CRUDController
{

    public function showAll(Request $request): View;

    public function showForm(Request $request, $id = null): View;

    public function update(Request $request, $id);

    public function create(Request $request);

    public function remove(Request $request, $id);
}
