<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

use App\Services\User\UserService;

class UserUpdatePasswordRequest extends FormRequest
{
    public function __construct(
        protected readonly UserService $user_service
    ){}

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
            'password'              =>  ["required","confirmed"]
        ];
    }
}
