<?php

namespace isw\Http\Requests;

use isw\Http\Requests\Request;

class VehiculosFormRequest extends Request
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
        'patente'=>'required',
        'id_marca'=>'required',
        'modelo'=>'required',
        'tipo_neumatico'=>'required',
        'aro'=>'required',
        'tipo_combustible'=>'required',
        'kilometraje'=>'required',
        ];
    }
}
