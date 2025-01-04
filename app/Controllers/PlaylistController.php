<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PlaylistModel;
use CodeIgniter\HTTP\ResponseInterface;

class PlaylistController extends BaseController
{
    protected $modelPlaylist;
    
    public function __construct()
    {
        $this->modelPlaylist = new PlaylistModel();
    }
    public function index()
    {
        $data['playlist'] = $this->modelPlaylist->findAll();
        return view('playlist/index', $data);
    }
    public function create()
    {
        return view('playlist/create');
    }
}
