<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Investigation extends Model
{
    use HasFactory;

    protected $fillable  = [
        'stat', 'ot_required', 'result', 'status',
        'test_type_id', 'patient_id', 'patient_visit_id', 'user_id',
        'created_by_id', 'updated_by_id'
    ];
    public function test_type(): HasMany
    {
        return $this->hasMany(TestType::class, 'test_type_id', 'id');
    }
    public function patient_vist(): HasMany
    {
        return $this->hasMany(Patient::class, 'patient_visit_id', 'id');
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
