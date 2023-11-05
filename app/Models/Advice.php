<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Advice extends Model
{
  use HasFactory;

  protected $fillable  = [
    'name', 'status',
    'created_by_id', 'updated_by_id'
  ];
  public function createdBy(): BelongsTo
  {
    return $this->belongsTo(User::class, 'created_by_id', 'id');
  }
  public function updatedBy(): BelongsTo
  {
    return $this->belongsTo(User::class, 'updated_by_id', 'id');
  }
}
