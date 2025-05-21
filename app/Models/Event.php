<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'description',
        'type',
        'date',
        'end_date',
        'location',
        'virtual_link',
        'capacity',
        'status',
        'organizer_id',
        'image',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date' => 'datetime',
        'end_date' => 'datetime',
    ];

    /**
     * Get the organizer of the event.
     */
    public function organizer()
    {
        return $this->belongsTo(User::class, 'organizer_id');
    }

    /**
     * Get the attendees of the event.
     */
    public function attendees()
    {
        return $this->belongsToMany(User::class, 'event_attendees')
                    ->withTimestamps();
    }

    /**
     * Get the number of attendees.
     */
    public function getAttendeesCountAttribute()
    {
        return $this->attendees()->count();
    }

    /**
     * Scope a query to only include upcoming events.
     */
    public function scopeUpcoming($query)
    {
        return $query->where('date', '>=', now())
                    ->where('status', 'active')
                    ->orderBy('date', 'asc');
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
} 