<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Operation extends Model
{
    use HasFactory;

    protected $fillable  = [
        'operation_date', 'operation_time',
        'amount', 'description', 'status', 'operation_type_id',
        'patient_id', 'user_id', 'created_by_id', 'updated_by_id'
    ];
    public function operation_type(): BelongsTo
    {
        return $this->belongsTo(OperationType::class, 'operation_type_id', 'id');
    }
    public function patient(): HasMany
    {
        return $this->hasMany(Patient::class, 'patient_id', 'id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by_id', 'id');
    }
    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by_id', 'id');
    }
}
