<?php

namespace App\Models;

use CodeIgniter\Model;

class MusikModel extends Model
{
    protected $table = 'musik';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'artist', 'album', 'duration', 'playlist_name'];

    public function getMusikWithPlaylists()
    {
        return $this->db->table('musik')
            ->select('musik.*, playlists.name AS playlist_name') // Pilih nama playlist
            ->join('playlists', 'musik.playlist_name = playlists.id', 'left') // Gabungkan dengan tabel playlists
            ->get()
            ->getResultArray();
    }
}
