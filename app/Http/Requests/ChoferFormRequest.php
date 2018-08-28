<?php

namespace isw\Http\Requests;

use isw\Http\Requests\Request;

class ChoferFormRequest extends Request
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
        'rut_conductor'=>'required',
        'patente'=>'required',
        'nombre_conductor'=>'required',
        'pass_conductor'=>'required',
        ];
    }
}
