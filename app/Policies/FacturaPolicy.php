<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Factura;

class FacturaPolicy
{
    use HandlesAuthorization;

    public function author(User $user,Factura $factura ){

        if($user->cod_client == $factura->Cod_Clien_Temp)
        {
            return true;
        }else
        {
            return false;
        }

    }
}
