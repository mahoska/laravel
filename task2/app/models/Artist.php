<?php

class Artist extends Eloquent
{
    protected $table = 'Artist';
    protected $primaryKey = 'ArtistId';
    
     public function albums()
    {
        return $this->hasMany('Album', 'ArtistId', 'ArtistId');    
    }
}
