<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CRUDController;
use App\Models\Role;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class UsersController extends CRUDController
{
    protected string $routeList = 'users';
    protected string $viewDirectory = 'users';
    protected string $viewEntitiesKey = 'users';
    protected string $viewEntityKey = 'user';
    protected string $model = User::class;

    public function showAll(Request $request): View
    {
        /** @var Collection $entities */
        $entities = (new $this->model)::where('email','!=','root')->get();

        return view("dashboard.pages.{$this->viewDirectory}.list", [$this->viewEntitiesKey => $entities]);
    }

    protected function createOrUpdate(Request $request, $id = null): array
    {
        $email    = $request->post('email');
        $password = $request->post('password');
        $isClient = $request->has('is_client');
        $roles    = $request->post('roles');

        if ($id) {
            $user = User::find($id);
        } else {
            if ( ! $email || ! $password) {
                return [false, ['Необходимо заполнить почту и пароль']];
            }
            $user = new User();
            $user->setAttribute('email', $email);
        }

        if ($password) {
            $password = bcrypt($password);
            $user->setAttribute('password', $password);
        }
        $user->setAttribute('is_client', $isClient);

        try {
            $user->save();
        } catch (\Exception $e) {
            return [false, ['Не получается сохранить пользователя' . $e->getMessage()]];
        }

        if ($roles && is_array($roles)) {
            $user->roles()->delete();
            foreach ($roles as $role) {
                if ( ! in_array($role, Role::ROLE_ACCESS_TYPES)) {
                    continue;
                }

                $roleModel = new Role();
                $roleModel->setAttribute('role', $role);
                $roleModel->user()->associate($user);
                try {
                    $roleModel->save();
                } catch (\Exception $e) {
                    continue;
                }
            }
        }

        return [true, ''];
    }
}
