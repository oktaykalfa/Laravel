<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FormRequests extends FormRequest
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
            'post_media' => 'mimes:jpeg,bmp,png',
            'post_publish_date' => 'required|date_format:d.m.Y H:i|after_or_equal:' . date("d.m.Y H:i"),
            'post_content' => 'required|max:255',

        ];


    }
}
