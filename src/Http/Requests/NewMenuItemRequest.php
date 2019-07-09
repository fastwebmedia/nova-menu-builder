<?php

namespace Fastwebmedia\MenuBuilder\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Fastwebmedia\MenuBuilder\MenuBuilder;
use Fastwebmedia\MenuBuilder\Classes\MenuItemText;

class NewMenuItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return resolve(MenuBuilder::class)->authorize(request()) ? true : false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return $this->get('class')::getRules();
    }
}
