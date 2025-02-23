<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Payment extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $fillable = ['enrollment_id', 'paid_date', 'amount'];
    use HasFactory;
 
 
   public function student()
    {
        return $this->belongsTo(Student::class);
        // neu $this->duration = 6 -> "6 Months"
    }   
    public function enrollment()
{
    return $this->belongsTo(Enrollment::class, 'enrollment_id');
}
 
    
}