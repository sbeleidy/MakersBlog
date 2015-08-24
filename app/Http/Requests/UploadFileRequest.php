<?php
namespace Makersblog\Http\Requests;

use Makersblog\Http\Requests\Request;

class UploadFileRequest extends Request
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
            'file'     => 'required',
            'folder'  => 'required',
        ];
    }
}