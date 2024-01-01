<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Aws\AbstractConfigurationProvider;
use Aws\AwsClient;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Inertia\Response;
use Aws\S3\S3Client;

class S3Controller extends Controller
{
    public function index()
    {
        return view('S3.index');
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        $path = Storage::disk('s3')->putFile('public', $file);

        if (empty($path)) {
            Log::error('ファイルアップロードに失敗しました。');
        } else {
            Log::info('ファイルアップ完了: ' . $path);
        }
    }
}
