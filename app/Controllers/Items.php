<?php

namespace App\Controllers;

use App\Models\ItemsModel;

class Items extends BaseController
{
    protected $items;

    function __construct()
    {
        $this->items = new ItemsModel();
    }

    public function index()
    {
        $data['items'] = $this->items->findAll();
        return view('items/index', $data);
    }
    public function create()
    {
        return view('items/create');
    }
    public function store()
    {
        if (!$this->validate([
            'nama_barang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jumlah_barang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->items->insert([
            'nama_barang' => $this->request->getVar('nama_barang'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang'),
        ]);
        session()->setFlashdata('message', 'Tambah Data Barang Berhasil');
        return redirect()->to('/items');
    }
    function edit($id)
    {
        $dataItems = $this->items->find($id);
        if (empty($dataItems)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Barang Tidak ditemukan !');
        }
        $data['items'] = $dataItems;
        return view('items/edit', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'nama_barang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
            'jumlah_barang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->items->update($id, [
            'nama_barang' => $this->request->getVar('nama_barang'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang'),
        ]);
        session()->setFlashdata('message', 'Update Data Barang Berhasil');
        return redirect()->to('/items');
    }
    function delete($id)
    {
        $dataItems = $this->items->find($id);
        if (empty($dataItems)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Barang Tidak ditemukan !');
        }
        $this->items->delete($id);
        session()->setFlashdata('message', 'Delete Data Barang Berhasil');
        return redirect()->to('/items');
    }
}