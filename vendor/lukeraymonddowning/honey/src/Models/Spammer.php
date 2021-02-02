<?php


namespace Lukeraymonddowning\Honey\Models;


use Illuminate\Database\Eloquent\Model;
use Lukeraymonddowning\Honey\Tests\Factories\SpammerFactory;

class Spammer extends Model
{
    protected $guarded = [];

    public static function factory()
    {
        return new SpammerFactory();
    }

    public static function isBlocked($ip)
    {
        return static::where('ip_address', $ip)->blocked()->exists();
    }

    public static function markAttempt($ip)
    {
        if (empty($ip)) {
            return null;
        }

        $spammer = Spammer::firstOrNew(['ip_address' => $ip], ['attempts' => 0]);
        $spammer->attempts++;
        if ($spammer->attempts == config('honey.spammer_blocking.maximum_attempts')) {
            $spammer->blocked_at = now();
        }

        $spammer->save();
    }

    public function scopeBlocked($query)
    {
        $query->whereNotNull('blocked_at');
    }

    public function getTable()
    {
        return config('honey.spammer_blocking.table_name');
    }

}