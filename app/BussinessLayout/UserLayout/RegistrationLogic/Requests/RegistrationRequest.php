<?php


namespace App\BussinessLayout\UserLayout\RegistrationLogic\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class RegistrationRequest extends FormRequest
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
            'email' => 'required|email:rfc,dns|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ];
    }
    /**
     * Get the validated data from the request.
     *
     * @param  string|null  $key
     * @param  mixed  $default
     * @return mixed
     */
    public function validated($key = null, $default = null)
    {
        $data = data_get($this->validator->validated(), $key, $default);
        if (is_array($data)){
            foreach ($data as $keyData => $itemData){
                if ($keyData === 'password' || $keyData === 'password_confirmation') $data[$keyData] = Hash::make($itemData);
            }
        } else {
            if ($key === 'password' || $key === 'password_confirmation') $data = Hash::make($data);
        }
        return $data;
    }
}
