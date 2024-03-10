<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $table = 'events';
    protected $fillable = [
        'title',
        'description',
        'id_image',
        'created_by',
        'price',
        'status',
        'acceptation',
        'place_number',
        'city_id',
        'deadline',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function reservationsCount()
    {
        return $this->hasMany(Reservation::class)->where('status', '0');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class)->where('status', '1');
    }
    public function reservers()
    {
        return $this->belongsToMany(User::class, 'reservation', 'event_id', 'user_id')->withPivot('id', 'status');
    }

}
