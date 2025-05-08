<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingEqRequest;
use App\Models\BookingEnquiry;
use App\Traits\CommonFunctions;
use App\Traits\ResponseAPI;
use Exception;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class BookingEnquiryController extends Controller
{
    use CommonFunctions;
    use ResponseAPI;

    public function bookingEnquiry(BookingEqRequest $request){
        try{
            BookingEnquiry::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'destination' => $request->destination,
                'destination_date' => $request->destination_date,
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Thank you for your message. We will contact you shortly.'
            ]);        
        }catch(Exception $exception){
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong: ' . $exception->getMessage()
            ]);        }
    }

    public function bookingEnquiryPage(){
        return view("Dashboard.Pages.bookingEnquiryPage");
    }

    public function bookingEnquiryData(){
        
        $query = BookingEnquiry::select(
            'phone','name','destination','destination_date','id',
            DB::raw('DATE_FORMAT(CONVERT_TZ('.'created_at'.',"+00:00","+05:30"), "%W %M %e %Y %r") as created_at_formatted')
        );
        return DataTables::of($query)
            ->addIndexColumn()
            ->make(true);
    }
}
