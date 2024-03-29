<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequestForm;
use App\Http\Requests\StudentUpdateRequestForm;
use App\Services\itf\ProfileServiceInterface;
use App\Services\itf\StudentServiceInterface;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * @var StudentServiceInterface
     */
    private $studentService;
    /**
     * @var ProfileServiceInterface
     */
    private $profileService;

    public function __construct(StudentServiceInterface $studentService,
                                ProfileServiceInterface $profileService)
    {
        $this->middleware('auth');

        $this->studentService = $studentService;
        $this->profileService = $profileService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.index')
            ->with('students', $this->studentService->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->studentService->create($request);
        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = $this->studentService->findById($id);
        if ($student->profile == null) {
            return view('profile.create', compact('student'));
        }
        return view('student.info', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('student.update')
            ->with('student', $this->studentService->findById($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StudentUpdateRequestForm $requestStudent
     * @param ProfileUpdateRequestForm $requestProfile
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentUpdateRequestForm $requestStudent,
                           ProfileUpdateRequestForm $requestProfile, $id)
    {
        $this->studentService->update($requestStudent, $id);
        $this->profileService->update($requestProfile, $id);

        return redirect()->route('students.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->studentService->delete($id);
        return redirect()->route('students.index');
    }
}
