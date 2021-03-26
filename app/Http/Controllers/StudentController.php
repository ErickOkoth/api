<?php

namespace App\Http\Controllers;
use App\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
public function createStudent(Request $request){
    $student=Student::create($request->all());
    return['status'=>true,'message'=>'Student added successfully'];

}
public function getStudent($id){
    $student=Student::find($id);
    return['status'=>true,'student'=>$student];
    
}
public function getAllStudent(){
    $student=Student::all();
    return['status',true,'list'=>$student];

}
public function updateStudent(Request $request,$id){
    $student=Student::find($id);
    $student->update($request->all());
    return['status'=>true,'message'=>'student updated successfully'];

}
public function deleteStudent($id){
    $student=Student::find($id);
    $student->delete();
    return['status'=>true,'message'=>'student removed successfully'];
}


}
