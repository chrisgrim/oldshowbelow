<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
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
    public function rules()
    {
        return [
            'eventTitle' => 'required|max:50|min:2',
            'eventDescription' => 'required|max:200|min:2',
            'eventWebsite' => 'required',
            'eventPrice' => 'required',
            'eventTicketUrl' => 'required',
            'eventStreetNumber' => 'required',
            'eventStreetAddress' => 'required',
            'eventCity' => 'required',
            'eventState' => 'required',
            'eventCountry' => 'required',
            'eventLat' => 'required',
            'eventLong' => 'required',
        ];
    }
}
