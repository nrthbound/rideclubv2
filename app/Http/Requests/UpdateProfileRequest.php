<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
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
            'name' => 'required',
            'display_name' => [
                'sometimes',
                Rule::unique('profiles')->ignore(\Auth::user()->id, 'user_id' ),
                'required'
            ],
            'password' => 'sometimes|nullable|min:6|confirmed'
        ];
    }

    public function persist($profile)
    {
        $data = request()->all();

        if ($data['password'])
        {
            $data['password'] = bcrypt($data['password']);
            $profile->user->update($data);
        } else {
            $profile->user->update(request()->except(['password','password_confirmation']));
        }

        // This is working fine
        $profile->update(request()->all());

        flash('Your profile was updated successfully.', 'success');
    }
}
