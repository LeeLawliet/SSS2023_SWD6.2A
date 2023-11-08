<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Enable mass assignment
    protected $fillable = ['first_name', 'last_name', 'email', 'address'];

    // Establish a one to many relationship with company
    public function company()
    {
        return $this->belongTo(Company::class); // contact has one company, company has many contacts
    }
}