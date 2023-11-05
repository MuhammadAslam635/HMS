<?php

namespace App\Models;

use App\Http\Jambasangsang\Traits\updatableAndCreatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BillingInvoiceDetail extends Model
{
    use HasFactory;


    protected $fillable  = [
        'item_amount', 'item_total_amount', 'status',
        'billing_invoice_id', 'created_by_id', 'updated_by_id'
    ];
    public function billing_invoice(): BelongsTo
    {
        return $this->belongsTo(BillingInvoice::class, 'billing_invoice_id', 'id');
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
