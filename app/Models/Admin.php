<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    const STATUS_ACTIVE = 'enable';
    const STATUS_INACTIVE = 'disable';

    const SUPER_ADMIN = 'super_admin';
    const RESTRICTED_ADMIN = 'restricted_admin';

    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'status',
        'admin_type',
        'remember_token'
    ];

    public function isSuperAdmin()
    {
        return $this->admin_type === self::SUPER_ADMIN;
    }

    public function isRestrictedAdmin()
    {
        return $this->admin_type === self::RESTRICTED_ADMIN;
    }


}
