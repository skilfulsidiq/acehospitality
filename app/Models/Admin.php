<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Filament\Models\Contracts\HasTenants;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

class Admin extends Authenticatable implements FilamentUser, HasName, HasTenants
{
    use HasFactory;
    protected $fillable = [
        'firstname',
        'latname',
        'email',
        'phone',
        'password',
        'gender',
        'last_login_at',
        'last_login_ip',
    ];
    protected $hidden = [
        'password',
        'user_pin',
        'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function canAccessPanel(Panel $panel): bool
    {
        // return str_ends_with($this->email, '@yourdomain.com') && $this->hasVerifiedEmail();
        // return $this->hasRole('Admin');
        return true;
    }
    public function getFilamentName(): string
    {
        return "{$this->firstname} {$this->lastname}";
    }

    public function hotels(): BelongsToMany
    {
        return $this->belongsToMany(Hotel::class);
    }

    public function getTenants(Panel $panel): Collection
    {
        return $this->hotels;
    }

    public function canAccessTenant(Model $tenant): bool
    {
        return $this->hotels->contains($tenant);
    }

    
}
