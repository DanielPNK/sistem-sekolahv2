<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Guru";
        $teachers = [
        [
            'id' => 1,
            'nip' => '198501012024',
            'name' => 'Budi Santoso',
            'gender' => 'Laki-Laki',
            'subject' => 'Akuntansi Dasar',
            'phone' => '081234560001',
            'status' => 'Aktif',
        ],
        [
            'id' => 2,
            'nip' => '198703152024',
            'name' => 'Siti Aminah',
            'gender' => 'Perempuan',
            'subject' => 'Jaringan Komputer',
            'phone' => '081234560002',
            'status' => 'Aktif',
        ]
];

        return view('teachers.index', [
            'title' => $title,
            'teachers' => $teachers
        ]);

    }

    public function show(string $id)
    {
        $title = "Menampilkan detail guru dengan ID: {$id}";
        return view('teachers.show', [
            'title' => $title
        ]);
    }

    public function create()
    {
        $title = "Ini adalah halaman tambah guru";
        return view('teachers.create', [
            'title' => $title
        ]);
    }

    public function edit(string $id)
    {
        $title = "Ini adalah halaman edit guru dengan ID: {$id}";
        return view('teachers.edit', [
            'title' => $title
        ]);
    }

    public function store()
    {
        return "Menambahkan data guru baru";
    }

    public function update(string $id)
    {
        return "Mengubah data guru dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data guru dengan ID: {$id}";
    }
}
