<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BrgyCert;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

use App\Repositories\BrgyCertRepository;

class BrgyCertController extends Controller
{

    // protected $model;
    // protected $modelRelationships = ['brgy_cert'];
    // protected $residentRecordRepository;

    protected $BrgyCertRepository;

    public function __construct(
        BrgyCertRepository $BrgyCertRepository
    )
    {
        $this->BrgyCertRepository = $BrgyCertRepository;
    }

    public function index() {
        return view('services.brgy_cert');
    }

    public function clearance() {
        return view('services.brgy_clearance');
    }

    public function spc() {
        return view('services.spc');
    }

    public function indigency() {
        return view('services.indigency');
    }

    public function permit() {
        return view('services.permit');
    }

    public function privacy_policy() {
        return view('privacy_policy');
    }
    
    public function disclaimer() {
        return view('disclaimer');
    }

    public function store(Request $request) {
        // dd('connected...');

        // dd($request);

        // dd($request->email);

        // validation
        $this->validate($request, [
            'first_name'        => 'required',
            'last_name'         => 'required',
            'birthdate'         => 'required',
            'addr4'             => 'required',
            'street'             => 'required',
            'purpose'           => 'required',
            'email'             => 'required',
            'mobile_number'     => 'required',
        ]);

        $address = trim($request->addr1." ".$request->addr2." ".$request->addr3." ".$request->addr4." ".$request->street);

        // $address = $request->addr4." ".$request->addr5;

        // dd($address);

        // $doc_type = "brgy_clearance";

        // dd($request);

        BrgyCert::create([
            'first_name'        => $request->first_name,
            'middle_name'       => $request->middle_name,
            'last_name'         => $request->last_name,
            'name_suffix'       => $request->name_suffix,
            'birthdate'         => $request->birthdate,
            'age'               => $request->age,
            'address'           => $address,
            'purpose'           => $request->purpose,
            'email'             => $request->email,
            'mobile_number'     => $request->mobile_number,
            'doc_type'          => $request->doc_type
        ]);

        // return view('welcome')->with('success', 'Certificate request created.');
        return redirect()->route('welcome')->with('success', 'We will keep in touch with your contact details and let you know when your request has been approved and when you can pick it up from the Barangay Hall.');
    }

    // public function getAll() : JsonResponse
    // {
        
    // }

    public function show($id) : JsonResponse
    {
        return response()->json($this->BrgyCertRepository->getAll());
    }
}
