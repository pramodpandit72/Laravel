<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
	public function uploadFile(Request $request)
	{
		$validated = $request->validate([
			'file' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
		]);

		$file = $validated['file'];
		$path = $file->store('uploads', 'public');
		$url = Storage::url($path);

		return view('upload', [
			'fileUrl' => $url,
			'originalName' => $file->getClientOriginalName(),
		]);
	}
}
