<?php

namespace App\Http\Requests;

use App\Models\Tour;
use App\Traits\ResponseAPI;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class TourTypeRequest extends FormRequest
{
    use ResponseAPI;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    // public function rules()
    // {
    //     return [
    //         "id"=>"bail|required_if:action,update,enable,disable|nullable|exists:tours,id",
    //         "action"=>"bail|required|in:insert,update,enable,disable",
    //         "title"=>"bail|required|string|max:500",
    //         "content"=>"bail|required",
    //         "tour_date"=>"bail|required",
    //         "facebook_link"=>"bail|nullable|string|max:500",
    //         "instagram_link"=>"bail|nullable|string|max:500",
    //         "youtube_link"=>"bail|nullable|string|max:500",
    //         "twitter_link"=>"bail|nullable|string|max:500",
    //         "tour_category"=>"bail|nullable|string|max:500",
    //         "image"=>"bail|file|image|max:2048|required_if:action,insert",
    //         "tour_status"=>"required_if:action,update|in:live,disabled",
    //         "tour_sorting"=>"required_if:action,update,insert|numeric|gt:0"
    //     ];
    // }

    public function rules()
    {
        $action = $this->input('action');

        switch ($action) {
            case 'enable':
            case 'disable':
                return [
                    tour::ID => 'required|exists:tour,' . tour::ID,
                ];

            case 'insert':
                return [
                    tour::TITLE => 'required|string',
                    tour::CONTENT => 'required|string',
                    tour::META_KEYWORD => 'bail|nullable',
                    tour::META_TITLE => 'bail|nullable',
                    tour::META_DESCRIPTION => 'bail|nullable',
                    // tour::Tour_DATE => 'required|date',
                    tour::TOUR_SORTING => 'nullable|integer',
                    tour::TOUR_STATUS => 'required|in:live,disabled',
                    tour::IMAGE => 'nullable|image|mimes:jpeg,png,jpg',
                ];

            case 'update':
                return [
                    tour::ID => 'required|exists:tour,' . tour::ID,
                    tour::TITLE => 'required|string',
                    tour::CONTENT => 'required|string',
                    tour::META_KEYWORD => 'bail|nullable',
                    tour::META_TITLE => 'bail|nullable',
                    tour::META_DESCRIPTION => 'bail|nullable',
                    // tour::Tour_DATE => 'required|date',
                    tour::TOUR_SORTING => 'nullable|integer',
                    tour::TOUR_STATUS => 'required|in:live,disabled',
                    tour::IMAGE => 'nullable|image|mimes:jpeg,png,jpg',
                ];

            default:
                return [];
        }
    }
    public function messages()
    {
        return [
            // "heading_top.string"=>"Top Heading Text should be a valid string.",
            // "heading_top.max"=>"Top Heading Text should be ,ax 500 charaters long.",
            // "heading_middle.string"=>"Top Heading Text should be a valid string.",
            // "heading_middle.max"=>"Top Heading Text should be ,max 500 charaters long.",
            // "heading_bottom.string"=>"Top Heading Text should be a valid string.",
            // "heading_bottom.max"=>"Top Heading Text should be ,ax 500 charaters long.",
            "tour_status.required_if"=>"Slide status is requried.",
            "tour_status.in"=>"Slide status can be live or disabled.",
            "image.max"=>"Max image size should be 2 mb.",
            // "image.dimensions"=>"Dimensions should be in aspect ratio 16:9 or pixels w*h 1920*1080"
        ];
    }
    /**
    * Get the error messages for the defined validation rules.*
    * @return array
    */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException($this->error($validator->getMessageBag()->first(),200));
    }
}
