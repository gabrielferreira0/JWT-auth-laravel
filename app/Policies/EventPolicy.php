<?php

namespace App\Policies;

use App\Models\Event;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update()
    {
        return true;
    }


    public function create()
    {
        return  true;
    }

    public function delete()
    {
        return  true;
    }

    public function forceDelete()
    {
        return  true;
    }

    public function view()
    {
        return  true;
    }

    public function viewAny()
    {
        return  true;
    }

    public function restore()
    {
        return  true;
    }


}
