<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static create(array $array)
 */
class History extends Model
{
    use HasFactory;

    protected $fillable = ['ip_address', 'user_id'];

    /**
     * @return Builder[]|Collection
     */
    public static function history()
    {
        return History::query()
            ->where('ip_address', request()->getClientIp())
            ->with(['user'])
            ->limit(HISTORY_SIZE)
            ->offset(1)
            ->orderBy('id', 'DESC')
            ->get();
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
