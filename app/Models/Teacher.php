<?php

 namespace App\Models;
 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teachers';
    protected $primaryKey = 'id';
    protected $fillable =['name','address','mobile','age'];


    use HasFactory;
}


// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory;  // Import HasFactory

// class Student extends Model
// {
//     protected $table = 'students';  // Table name (optional if it's 'students')
//     protected $primaryKey = 'id';   // Corrected the typo
//     protected $fillable = ['name', 'address', 'mobile'];  // Mass assignable attributes

//     use HasFactory;  // Use the HasFactory trait
// }

