<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DepartmentController extends Controller
{
    public function index(string $action = 'create'): View
    {
        $pages = [
            'create' => 'backend.contents.departments.create',
            'update' => 'backend.contents.departments.update',
            'list'   => 'backend.contents.departments.list',
            'detail' => 'backend.contents.departments.detail',
        ];

        $content = $pages[$action] ?? 'backend.contents.departments.list';

        return view('backend.index', [
            'content' => $content,
            'pageTitle' => ucfirst($action) . ' Department',
        ]);
    }
}
