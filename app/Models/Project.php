<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
		'project_name',
		'project_password',
		'project_time',
		'project_tags',
		'project_file'
    ];
}
