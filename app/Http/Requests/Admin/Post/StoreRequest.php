<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'preview_url' => 'nullable|string',
            'short_description' => 'required|string',
            'quote' => 'nullable|string',
            'author' => 'nullable|string',
            'content_title' => 'required|string',
            'conclusion' => 'nullable|string',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо для заполнения',
            'title.string' => 'Данные должны быть строкой',
            'content.required' => 'Это поле необходимо для заполнения',
            'content.string' => 'Данные должны быть строкой',
            'short_description.required' => 'Это поле необходимо для заполнения',
            'short_description.string' => 'Данные должны быть строкой',
            'quote.string' => 'Данные должны быть строкой',
            'author.string' => 'Данные должны быть строкой',
            'content_title.required' => 'Это поле необходимо для заполнения',
            'content_title.string' => 'Данные должны быть строкой',
            'conclusion.string' => 'Данные должны быть строкой',
            'preview_image.required' => 'Это поле необходимо для заполнения',
            'preview_image.file' => 'Необходимо выбрать файл',
            'preview_url.string' => 'Данные должны быть строкой',
            'main_image.required' => 'Это поле необходимо для заполнения',
            'main_image.file' => 'Необходимо выбрать файл',
            'category_id.required' => 'Это поле необходимо для заполнения',
            'category_id.integer' => 'Id категории должно быть числом',
            'category_id.exists' => 'Id категории должно быть в базе данных',
            'tag_ids.array' => 'Необходимо отправить массив данных',
        ];
    }
}
