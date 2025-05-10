<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnquiryFormRequest;
use App\Models\EnquiryForm;
use App\Traits\CommonFunctions;
use App\Traits\ResponseAPI;
use Exception;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class EnquiryFormController extends Controller
{
    use CommonFunctions;
    use ResponseAPI;

    public function enquiryDetails(EnquiryFormRequest $request)
{
    try {
        $newEnquiry = new EnquiryForm();
        $newEnquiry->{EnquiryForm::NAME} = $request->input(EnquiryForm::NAME);
        $newEnquiry->{EnquiryForm::PHONE_NUMBER} = $request->input(EnquiryForm::PHONE_NUMBER);
        $newEnquiry->{EnquiryForm::MESSAGE} = $request->input(EnquiryForm::MESSAGE);
        $newEnquiry->save();

        $response = $this->success("Thank you for your message. We will contact you shortly.", []);
    } catch (Exception $exception) {
        report($exception);
        $response = $this->error("Something went wrong. " . $exception->getMessage());
    }

    return $response;
}

    public function enquiryAdminPage(){
        return view("Dashboard.Pages.enquiryAdmin");
    }

    public function enquiryDataTable(){
        
        $query = EnquiryForm::select(
            EnquiryForm::NAME,             
            // EnquiryForm::EMAIL,
            // EnquiryForm::PACKAGE_NAME,
            EnquiryForm::PHONE_NUMBER,
            EnquiryForm::MESSAGE,
            // EnquiryForm::TRAVEL_DATE,
            // EnquiryForm::TRAVELLER_COUNT,
            EnquiryForm::ID,
            // DB::raw('DATE_FORMAT('.EnquiryForm::CREATED_AT.', "%W %M %e %Y %r") as created_at_formatted')
            DB::raw('DATE_FORMAT(CONVERT_TZ('.EnquiryForm::CREATED_AT.',"+00:00","+05:30"), "%W %M %e %Y %r") as created_at_formatted')
        );
        return DataTables::of($query)
            ->addIndexColumn()
            ->make(true);
    }
}
