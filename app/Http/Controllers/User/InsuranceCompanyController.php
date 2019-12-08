<?php
# @Author: Mohammed Cherbatji <mo>
# @Date:   2019-10-17T14:31:42+01:00
# @Filename: InsuranceCompanyController.php
# @Last modified by:
# @Last modified time: 2019-12-08T19:27:33+00:00




namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\InsuranceCompany;

class InsuranceCompanyController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:user');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insuranceCompanies = InsuranceCompany::all();

        return view('user.insuranceCompanies.index')->with([
          'insuranceCompanies' => $insuranceCompanies
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $insuranceCompany = InsuranceCompany::findOrFail($id);

        return view('user.insuranceCompanies.show')->with([
          'insuranceCompany' => $insuranceCompany
        ]);
    }
}
