<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return "This is the teacher list page";
    }

    public function show(string $id)
    {
        return "Showing teacher details with ID: {$id}";
    }

    public function create()
    {
        return "This is the add teacher page";
    }

    public function edit(string $id)
    {
        return "This is the edit teacher page with ID: {$id}";
    }

    public function store()
    {
        return "Adding new teacher data";
    }

    public function update(string $id)
    {
        return "Updating teacher data with ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Deleting teacher data with ID: {$id}";
    }
}
