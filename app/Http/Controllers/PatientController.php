<?php

namespace App\Http\Controllers;

use App\DataTables\PatientsDataTable;
use App\Models\Patient;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(PatientsDataTable $dataTable)
    {
        return $dataTable->render('patients.index');
    }

 
    
}
