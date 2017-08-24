<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProfile extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ( $this->profile->user_id == \Auth::user()->id )
        {
            return true;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'display_name' => [
                'sometimes',
                Rule::unique('profiles')->ignore(\Auth::user()->id, 'user_id' ),
            ]
        ];
    }

    public function persist($profile)
    {

        $profile->update(request()->all());

        flash('Your profile was updated successfully.', 'success');

    }

}
