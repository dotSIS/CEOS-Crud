<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name'];

    /**
     * Create a new student.
     *
     * @param  array  $data
     * @return \App\Models\Students
     */
    public static function createStudent(array $data)
    {
        try {
            // Create a new student and return the instance
            return self::create($data);
        } catch (\Exception $e) {
            // Handle any exceptions during the creation process
            throw new \Exception('Failed to create a new student. ' . $e->getMessage());
        }
    }

    /**
     * Update a student's information.
     *
     * @param  array  $data
     * @return void
     */
    public function updateStudent(array $data)
    {
        try {
            // Update the student's information
            $this->update($data);
        } catch (\Exception $e) {
            // Handle any exceptions during the update process
            throw new \Exception('Failed to update the student. ' . $e->getMessage());
        }
    }

    /**
     * Delete a student.
     *
     * @return void
     */
    public function deleteStudent()
    {
        try {
            // Delete the student
            $this->delete();
        } catch (\Exception $e) {
            // Handle any exceptions during the deletion process
            throw new \Exception('Failed to delete the student. ' . $e->getMessage());
        }
    }
}
