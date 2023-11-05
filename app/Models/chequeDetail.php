<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class chequeDetail extends Model
{
    use HasFactory;

    protected $fillable  = ['number', 'date', 'billing_transaction_id', 'created_by_id', 'updated_by_id'];
    public function billing_transaction(): HasMany
    {
        return $this->hasMany(BillingTransaction::class, 'billing_transaction_id', 'id');
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
