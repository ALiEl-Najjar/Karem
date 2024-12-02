<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    // عرض صفحة تقديم الشكوى
    public function create()
    {
        return view('complaints.create');
    }

    // حفظ الشكوى في قاعدة البيانات
    public function store(Request $request)
    {
        // التحقق من البيانات المدخلة
        $request->validate([
            'title' => 'required|max:255',
            'mobile_phone' => 'required|max:15',
            'summary' => 'required',
        ]);

        // إنشاء الشكوى وتخزينها في قاعدة البيانات
        Complaint::create($request->all());

        return redirect()->route('complaints.index')->with('success', 'Complaint submitted successfully!');
    }

    // عرض جميع الشكاوى
    public function index()
    {
        $complaints = Complaint::orderBy('created_at', 'desc')->get();
        return view('complaints.index', compact('complaints'));
    }
}
