<?php

namespace Comercio;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }
    
    /**
     * Este metodo sera responsavel e pegar
     * o perfil do usuario e ela criar a relacao
     * entre a tabela usuario e perfil
     */
    public function perfil()
    {
        return $this->hasOne("Comercio\Perfil");
    }

    public function phone()
    {
        return $this->hasOne("Comercio\Contact");
    }
    public function carrinho()
    {
        return $this->hasOne("Comercio\Carrinho");
    }
    public function encomendas()
    {
        return $this->hasMany('Comercio\Encomenda');
    }

}
