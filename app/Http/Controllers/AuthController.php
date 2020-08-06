<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register() {
        return view('register');}

    public function create() {}

    public function store(Request $request) {
        $nama_depan = $request['firstname'];
        $nama_belakang = $request['lastname'];
        $nama_lengkap = "$nama_depan $nama_belakang";
        return view('welcome', compact('nama_lengkap'));
    }

    public function show($id) {}

    public function edit($id) {}

    public function update(Request $request, $id) {}

    public function destroy($id){}
}