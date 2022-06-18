<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificateModel extends Model
{
    use HasFactory;
    public $table= "student_table";
    public $timestamps=false;
    public $fillable = ['stu_name' ,'certificate_id','certificate_generated_date','stu_course','stu_admitted_date',
        'stu_course_completed_date','course_month','description' ];
}
