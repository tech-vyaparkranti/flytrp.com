<?php

namespace App\Http\Controllers;

use App\Http\Requests\TourTypeRequest;
use App\Models\Tour;
use App\Models\PackageMaster;
use App\Traits\CommonFunctions;
use Exception;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class TourTypeController extends Controller
{
    use CommonFunctions;
    //

    public function tourSlider(){
        // $package_types = PackageMaster::PACKAGE_TYPES;
        return view("Dashboard.Pages.manageTourType");
        // return view("Dashboard.Pages.manageTourType", compact("package_types"));

    }

    public function tourData(){
        try{
            $query = Tour::select(Tour::IMAGE,
            Tour::ID,
            Tour::TITLE,
            Tour::CONTENT,
            Tour::META_TITLE,
            Tour::META_KEYWORD,
            Tour::META_DESCRIPTION,
            // Tour::Tour_DATE,
            Tour::TOUR_SORTING,
            Tour::TOUR_STATUS);
        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($row){
                $btn_edit = '<a data-row="' . base64_encode(json_encode($row)) . '" href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>';

                $btn_disable = ' <a   href="javascript:void(0)" onclick="Disable('.$row->{Tour::ID}.')" class="btn btn-danger btn-sm">Disable</a>';
                $btn_enable = ' <a   href="javascript:void(0)" onclick="Enable('.$row->{Tour::ID}.')" class="btn btn-primary btn-sm">Enable </a>';
                if($row->{Tour::TOUR_STATUS}==Tour::TOUR_STATUS_DISABLED){
                    return $btn_edit.$btn_enable;
                }else{
                    return $btn_edit.$btn_disable;
                }
            })->addColumn(Tour::CONTENT."_row",function ($row){
                return $this->getModal($row->{Tour::ID},$row->{Tour::CONTENT}??" ",'View tour Details',$row->{Tour::TITLE}??"tour Title");
                })
            ->rawColumns(['action',Tour::CONTENT,Tour::CONTENT."_row"])
            ->make(true);
        }
        catch(Exception $except){
            dd([$except->getMessage()]);
        }
    }

    public function savetour(TourTypeRequest $request){
        try{
            switch($request->input("action")){
                case "insert":
                    $return = $this->inserttour($request);
                    break;
                case "update":
                    $return = $this->updatetour($request);
                    break;
                case "enable":
                case "disable":
                    $return = $this->enableDisabletour($request);
                    break;
                default:
                $return = ["status"=>false,"message"=>"Unknown case","data"=>""];
            }
        }catch(Exception $exception){
            $return = $this->reportException($exception);
        }
        return response()->json($return);
    }

    public function inserttour(TourTypeRequest $request){
        $imageUpload = $this->tourImageUpload($request);
        if($imageUpload["status"]){
            $tour = new tour();
            $tour->{tour::IMAGE} = $imageUpload["data"];
            $tour->{tour::TITLE} = $request->input(tour::TITLE);
            $tour->{tour::CONTENT} = $request->input(tour::CONTENT);
            $tour->{tour::META_TITLE} = $request->input(tour::META_TITLE);
            $tour->{tour::META_KEYWORD} = $request->input(tour::META_KEYWORD);
            $tour->{tour::META_DESCRIPTION} = $request->input(tour::META_DESCRIPTION);
            // $tour->{tour::Tour_DATE} = $request->input(tour::Tour_DATE);
            $tour->{tour::TOUR_SORTING} = $request->input(tour::TOUR_SORTING);
            $tour->{tour::TOUR_STATUS} = $request->input(tour::TOUR_STATUS);
            $tour->{tour::STATUS} = 1;
            $tour->{tour::CREATED_BY} = Auth::user()->id;
            $tour->save();
            $return = ["status"=>true,"message"=>"Saved successfully","data"=>null];
            $this->forgetSlides();
        }else{
            $return = $imageUpload;
        }
        return $return;
    }

    public function tourImageUpload(TourTypeRequest $request){
        $maxId = tour::max(tour::ID);
        $maxId += 1;
        $timeNow = strtotime($this->timeNow());
        $maxId .= "_$timeNow";
        return $this->uploadLocalFile($request,"image","/website/uploads/tour/","slide_$maxId");
    }

    public function updatetour(TourTypeRequest $request){
        $check = tour::where([tour::ID=>$request->input(tour::ID),tour::STATUS=>1])->first();
        if($check){
            if($request->hasFile('image')){
                $imageUpload =$this->tourImageUpload($request);
                if($imageUpload["status"]){
                    $check->{tour::IMAGE} = $imageUpload["data"];
                    $check->{tour::TOUR_SORTING} = $request->input(tour::TOUR_SORTING);
                    $check->{tour::TITLE} = $request->input(tour::TITLE);
                    $check->{tour::CONTENT} = $request->input(tour::CONTENT);
                    $check->{tour::META_TITLE} = $request->input(tour::META_TITLE);
                    $check->{tour::META_KEYWORD} = $request->input(tour::META_KEYWORD);
                    $check->{tour::META_DESCRIPTION} = $request->input(tour::META_DESCRIPTION);
                    // $check->{tour::Tour_DATE} = $request->input(tour::Tour_DATE);
                    $check->{tour::TOUR_STATUS} = $request->input(tour::TOUR_STATUS);
                    $check->{tour::UPDATED_BY} = Auth::user()->id;
                    $check->save();
                    $this->forgetSlides();
                    $return = ["status"=>true,"message"=>"Updated successfully","data"=>null];
                }else{
                    $return = $imageUpload;
                }
            }else{
                $check->{tour::TITLE} = $request->input(tour::TITLE);
                $check->{tour::TOUR_SORTING} = $request->input(tour::TOUR_SORTING);
                $check->{tour::CONTENT} = $request->input(tour::CONTENT);
                $check->{tour::META_TITLE} = $request->input(tour::META_TITLE);
                $check->{tour::META_KEYWORD} = $request->input(tour::META_KEYWORD);
                $check->{tour::META_DESCRIPTION} = $request->input(tour::META_DESCRIPTION);
                // $check->{tour::Tour_DATE} = $request->input(tour::Tour_DATE);
                $check->{tour::TOUR_STATUS} = $request->input(tour::TOUR_STATUS);
                $check->{tour::UPDATED_BY} = Auth::user()->id;
                $check->save();
                $this->forgetSlides();
                $return = ["status"=>true,"message"=>"Updated successfully","data"=>null];
            }
        }else{
            $return = ["status"=>false,"message"=>"Details not found.","data"=>null];
        }
        return $return;
    }

    public function enableDisabletour(TourTypeRequest $request){
        $check = tour::find($request->input(tour::ID));
        if($check){
            $check->{tour::UPDATED_BY} = Auth::user()->id;
            if($request->input("action")=="enable"){
                $check->{tour::TOUR_STATUS} = tour::TOUR_STATUS_LIVE;
                $return = ["status"=>true,"message"=>"Enabled successfully.","data"=>""];
            }else{
                $check->{tour::TOUR_STATUS} = tour::TOUR_STATUS_DISABLED;
                $return = ["status"=>true,"message"=>"Disabled successfully.","data"=>""];
            }
            $this->forgetSlides();
            $check->save();
        }else{
            $return = ["status"=>false,"message"=>"Details not found.","data"=>""];
        }
        return $return;
    }
}
