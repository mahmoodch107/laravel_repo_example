<?php
/**
 * Created by PhpStorm.
 * User: ma
 * Date: 12/9/18
 * Time: 1:42 PM
 */

namespace App;
use Illuminate\Support\Collection;
use Jsdecena\Baserepo\BaseRepositoryInterface;


interface StudentRepositoryInterface extends BaseRepositoryInterface
{
    public function listStudents(string $order = 'id', string $sort = 'desc', $except = []) : Collection;

    public function createStudent(array $params) : Student;

    public function updateStudent(array $params) : Student;

    public function findStudentById(int $id) : Student;

    public function deleteStudent() : bool;

}
