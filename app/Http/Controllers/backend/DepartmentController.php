<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Exception;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DepartmentController extends Controller
{
    protected function _rules(): array
    {
        return [
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'status'      => 'required|in:active,inactive',
        ];
    }

    /**
     * List departments
     */
    public function index(): View
    {
        return view('backend.index', [
            'content'     => 'backend.contents.departments.index',
            'pageTitle'   => 'Department List',
            'departments' => Department::orderBy('id', 'desc')->paginate(10),
        ]);
    }

    /**
     * Show create form
     */
    public function create(): View
    {
        return view('backend.index', [
            'content'   => 'backend.contents.departments.create',
            'pageTitle' => 'Create Department',
        ]);
    }

    /**
     * Store department
     */
    public function store(Request $request)
    {
        $request->validate($this->_rules());

        try {
            Department::create([
                'name'        => $request->name,
                'description' => $request->description,
                'status'      => $request->status,
                'created_by'  => auth()->user()->name ?? 'system',
            ]);

            if ($request->action === 'save_close') {
                return redirect()
                    ->route('backend.department.index')
                    ->with('success', 'Department created successfully');
            } else {
                return redirect()
                    ->back()
                    ->with('success', 'Department created successfully. You can add another.');
            }

        } catch (Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Failed to create department: ' . $e->getMessage());
        }
    }

    /**
     * Show detail
     */
    public function detail(Department $department): View
    {
        return view('backend.index', [
            'content'    => 'backend.contents.departments.detail',
            'pageTitle'  => 'Department Detail',
            'department' => $department,
        ]);
    }

    /**
     * Show edit form
     */
    public function edit(Department $department): View
    {
        return view('backend.index', [
            'content'    => 'backend.contents.departments.edit',
            'pageTitle'  => 'Update Department',
            'department' => $department,
        ]);
    }

    /**
     * Update department
     */
    public function update(Request $request, Department $department)
    {
        $request->validate($this->_rules());

        try {
            $department->update(array_merge(
                $request->only(['name', 'description', 'status']),
                ['updated_by' => auth()->user()->name ?? 'system']
            ));

            return redirect()
                ->back()
                ->with('success', 'Department updated successfully');

        } catch (Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Failed to update department: ' . $e->getMessage());
        }
    }

    /**
     * Delete department
     */
    public function destroy(Department $department)
    {
        $department->delete();

        return redirect()
            ->route('backend.department.index')
            ->with('success', 'Department deleted successfully');
    }
}
