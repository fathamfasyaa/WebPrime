<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Carbon\Exceptions\InvalidFormatException;

class Blog extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'date', 'image', 'author'];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'date' => 'date',
    ];

    /**
     * Get the date attribute.
     *
     * @param  string  $value
     * @return string
     */
    public function getDateAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d/m/Y');
    }

    /**
     * Set the date attribute.
     *
     * @param  string  $value
     * @return void
     */
    public function setDateAttribute($value)
{
    try {
        $this->attributes['date'] = Carbon::parse($value)->format('Y-m-d');
    } catch (InvalidFormatException $e) {
        // Jika format tidak valid, gunakan tanggal hari ini sebagai fallback
        $this->attributes['date'] = Carbon::today()->format('Y-m-d');
    }
}
}