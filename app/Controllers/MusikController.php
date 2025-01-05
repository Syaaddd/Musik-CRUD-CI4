<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MusikModel;
use CodeIgniter\HTTP\ResponseInterface;

class MusikController extends BaseController
{
    protected $modelMusik;

    public function __construct()
    {
        $this->modelMusik = new MusikModel();
    }
    public function index()
    {
        $musikModel = new \App\Models\MusikModel();
        $musik = $musikModel->getMusikWithPlaylists();

        return view('backend/musik/musik', [
            'musik' => $musik
        ]);
    }

    public function create()
    {
        $data = [
            'pageTitle' => 'Create musik'
        ];
        return view('backend/musik/createmusik', $data);
    }
    public function store()
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ];

        $this->modelMusik->save($data);
        return redirect()->to('musik');
    }

    public function delete($id)
    {
        $this->modelMusik->delete($id);
        return redirect()->to('musik');
    }

    public function edit($id)
    {
        $data = [
            'pageTitle' => 'Edit musik'
        ];
        $data['Musik'] = $this->modelMusik->find($id);
        return view('backend/musik/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ];

        $this->modelMusik->update($id, $data);
        return redirect()->to('/musik')->with('success', 'musik updated successfully.');
    }
}
