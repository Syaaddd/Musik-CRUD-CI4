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
        $data = [
            'pageTitle' => 'Playlist'
        ];
        $playlistModel = new PlaylistModel();
        $data['playlists'] = $playlistModel->findAll(); // Asumsinya $playlistModel adalah instance model.

        // Ubah ke array jika diperlukan
        $data['playlists'] = json_decode(json_encode($data['playlists']), true);

        return view('backend/playlist/playlist', $data);
    }
    public function create()
    {
        $data = [
            'pageTitle' => 'Create Playlist'
        ];
        return view('backend/playlist/createplaylist', $data);
    }
    public function store()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ];

        $this->modelPlaylist->save($data);
        return redirect()->to('playlist');
    }

    public function delete($id)
    {
        $this->modelPlaylist->delete($id);
        return redirect()->to('playlist');
    }

    public function edit($id)
    {
        $data = [
            'pageTitle' => 'Edit Playlist'
        ];
        $data['playlist'] = $this->modelPlaylist->find($id);
        return view('backend/playlist/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ];

        $this->modelPlaylist->update($id, $data);
        return redirect()->to('/playlist')->with('success', 'Playlist updated successfully.');
    }
}
