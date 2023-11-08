<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    // Enable mass assignment
    protected $fillable = ['name', 'address', 'website', 'email'];

    public function contacts()
    {
        return $this->hasMany(Contact::class); // Company model has many contacts
    }
}