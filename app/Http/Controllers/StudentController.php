<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "This is the student list page";
    }

    public function show(string $id)
    {
        return "Showing student details with ID: {$id}";
    }

    public function create()
    {
        return "This is the add student page";
    }

    public function edit(string $id)
    {
        return "This is the edit student page with ID: {$id}";
    }

    public function store()
    {
        return "Adding new student data";
    }

    public function update(string $id)
    {
        return "Updating student data with ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Deleting student data with ID: {$id}";
    }
}
