<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public const DRAFT = 'draft';
    public const FOR_SALE = 'for sale';
    public const UNDER_CONTRACT = 'under contract';
    public const SOLD = 'sold';

    public const STAUSES = [
        self::DRAFT,
        self::FOR_SALE,
        self::UNDER_CONTRACT,
        self::SOLD,
    ];

    protected $guarded = ['id'];

    protected $casts = [
        'active' => 'boolean',
        'features' => 'array',
    ];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
