<?php

namespace App\Models;

use CodeIgniter\Model;

class MusikModel extends Model
{
    protected $table            = 'musiks';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['playlist_id','title','artist','album','duration'];

    public function getMusikWithPlaylist()
    {
        return $this->select('musiks.*, playlists.name, playlists.description')
        ->join('playlists', 'playlists.id = musiks.playlist_id')->findAll();
    }
}
