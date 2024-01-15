<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Create a new student.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(Request $request)
    {
        try {
            // Validate and create a new student
            $newStudent = Students::create($request->all());

            return response()->json(['message' => 'Successfully created!', 'data' => $newStudent], 201);
        } catch (\Exception $e) {
            // Handle any exceptions during the creation process
            return response()->json(['error' => 'Failed to create a new student.', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Retrieve all students.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function read()
    {
        try {
            // Retrieve all students
            $students = Students::all();

            return $students;
        } catch (\Exception $e) {
            // Handle any exceptions during the retrieval process
            return response()->json(['error' => 'Failed to retrieve students.', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Update a student's information.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        try {
            // Find the student by ID
            $student = Students::findOrFail($id);

            // Update the student's information
            $student->update($request->all());

            return response()->json(['message' => 'Successfully updated!', 'data' => $student]);
        } catch (\Exception $e) {
            // Handle any exceptions during the update process
            return response()->json(['error' => 'Failed to update the student.', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Delete a student.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        try {
            // Find the student by ID and delete
            Students::findOrFail($id)->delete();

            return response()->json(['message' => 'Successfully deleted!']);
        } catch (\Exception $e) {
            // Handle any exceptions during the deletion process
            return response()->json(['error' => 'Failed to delete the student.', 'message' => $e->getMessage()], 500);
        }
    }
}
