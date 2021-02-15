<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Skill extends Model
{
    use HasFactory;
    protected $guarded =
    [
        'id',
        'created_at',
        'updated_at'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }

    public function name($lang = null)
    {

        $lang = $lang ?? App::getLocale();

        return json_decode($this->name)->$lang; 
    }

    public function getStudentCount()
    {
        $studentNum = 0;
        foreach($this->exams as $exam)
        {
            $studentNum += $exam->users()->count();
        }

        return $studentNum;
    }
}
