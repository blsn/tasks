<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Task extends Model {
    use HasFactory, Sortable;

    protected $table = 'tasks';
    public $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'due_date',
        'status'
    ];

	public $sortable = ['id', 'name', 'due_date', 'status', 'created_at', 'updated_at'];
}
