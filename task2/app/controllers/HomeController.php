<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    
        public function showArtistList()
	{
            $artists = Artist::all();
            return View::make('task2.artistList',['artists' => $artists]);
	}
    
    
    
	public function showArtistById($id)
	{
            $id = (int)$id;
            $albums = Artist::find($id)->albums()->get()->toArray();
            $name =  Artist::find($id)->Name;
//            echo "<pre>";
//            var_dump($artist);
//             echo "</pre>";
            return View::make('task2.artist', ['albums' => $albums, 'name'=>$name]);
	}
        
        
        public function showAlbumById($id)
	{
            $id = (int)$id;
            $trackObj = Album::find($id)->tracks();
            $tracks = $trackObj->get()->toArray();
            //variant 1 - step-by-step data retrieval
            $albumId =(int) $tracks[0]['AlbumId'];
            $artistId =(int) Album::find($albumId)->ArtistId;   
            $artistName = Artist::where('ArtistId',$artistId)->get();
            $artistName = $artistName[0]['Name'];
           
            return View::make('task2.album',['artistName'=>$artistName,'tracks'=>$tracks]);
	}
    
    
    
	public function showTrackById($id)
	{
            $id = (int)$id;
            $trackObj = Track::find($id); 
            //variant 2 - use belongsTo       
            $genre = $trackObj->genre->Name;
            $album = $trackObj->album->Title;
            $artist = $trackObj->album->artist->Name;
            $time =round(((int) $trackObj['Milliseconds'])/60000,2);
            
            $name=$trackObj['Name'];
            $track=[
                'Album'=>$album,
                'Artist'=>$artist,
                'Genre'=>$genre,
                'Composer'=>$trackObj['Composer'],
                'Time(min)'=>$time,
                'Bytes'=>$trackObj['Bytes'],
                'UnitPrice'=>$trackObj['UnitPrice']
                ];
        
            return View::make('task2.track', ['track'=>$track, 'nameTrack'=>$name]);
	}

}
