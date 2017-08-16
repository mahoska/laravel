<?php

class Album extends Eloquent
{
    protected $table = 'Album';
    protected $primaryKey = 'AlbumId';

    public function tracks()
    {
        return $this->hasMany('Track', 'AlbumId', 'AlbumId');
    }

}
