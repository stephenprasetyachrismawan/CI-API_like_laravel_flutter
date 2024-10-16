<?php

namespace App\Controllers;

use App\Models\MProduk;

class ProdukController extends RestfulController
{
    public function create()
    {
        $data = [
            'kode_produk' => $this->request->getVar('kode_produk'),
            'nama_produk' => $this->request->getVar('nama_produk'),
            //Khusus untuk atribut yang memiliki tipe data integer
            'harga' => (int)$this->request->getVar('harga') // Convert to integer
        ];
        $model = new MProduk();
        $model->insert($data);
        $produk = $model->find($model->getInsertID());
        //Khusus untuk atribut yang memiliki tipe data integer
        $produk['id'] = (int)$produk['id']; // Convert to integer
        $produk['harga'] = (int)$produk['harga']; // Convert to integer
        return $this->responseHasil(200, true, $produk);
    }

    public function list()
    {
        $model = new MProduk();
        $produk = $model->findAll();
        //Khusus untuk atribut yang memiliki tipe data integer
        foreach ($produk as &$item) {
            $item['id'] = (int)$item['id']; // Convert to integer
            $item['harga'] = (int)$item['harga']; // Convert to integer
        }
        return $this->responseHasil(200, true, $produk);
    }

    public function detail($id)
    {
        $model = new MProduk();
        $produk = $model->find($id);
        //Khusus untuk atribut yang memiliki tipe data integer
        $produk['id'] = (int)$produk['id']; // Convert to integer
        $produk['harga'] = (int)$produk['harga']; // Convert to integer
        return $this->responseHasil(200, true, $produk);
    }

    public function ubah($id)
    {
        $data = [
            'kode_produk' => $this->request->getVar('kode_produk'),
            'nama_produk' => $this->request->getVar('nama_produk'),
            'harga' => (int)$this->request->getVar('harga') // Convert to integer
        ];
        $model = new MProduk();
        $model->update($id, $data);
        $produk = $model->find($id);
        //Khusus untuk atribut yang memiliki tipe data integer
        $produk['id'] = (int)$produk['id']; // Convert to integer
        $produk['harga'] = (int)$produk['harga']; // Convert to integer
        return $this->responseHasil(
            200,
            true,
            $produk
        );
    }

    public function hapus($id)
    {
        $model = new MProduk();
        $produk = $model->delete($id);
        return $this->responseHasil(200, true, true); // Convert to integer untuk atribut id yang memiliki tipe data integer
    }
}
