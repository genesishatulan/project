<?php

namespace App\Modules\Project\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'description' => ['required'],
            'note' => ['required'],
            'status' => ['required'],
            'date_started' => ['required'],
            'date_finished' => ['required'],
            'deadline' => ['required']
        ];
    }

    // public function messages()
    // {
    //     return [
    //         //example:
    //         'name.required' => 'name is required';
    //     ];
    // }
}
