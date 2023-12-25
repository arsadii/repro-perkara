<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IncomingPayment extends Model
{
    use HasFactory;

    protected $fillable = ['case_no', 'case_category_id', 'name', 'amount', 'date'];

    public function caseCategory(): BelongsTo
    {
        return $this->belongsTo(CaseCategory::class);
    }
}
