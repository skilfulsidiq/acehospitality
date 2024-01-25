<?php

namespace App\Models;

use Filament\Models\Contracts\HasName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable implements HasName
{
    use HasFactory;
    protected $fillable = [];


    // public function getUserName(Model | Authenticatable $user): string
    // {
    //     if ($user instanceof HasName) {
    //         return $user->getFilamentName();
    //     }

    //     return $user->getAttributeValue('firstname');
    // }

    public function getFilamentName(): string
    {
        return "{$this->firstname} {$this->lastname}";
    }
}
