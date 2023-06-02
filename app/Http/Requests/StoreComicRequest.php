<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'type' => 'required | max:100',
            'title' => 'required | min:5 | max:200',
            'series' => 'required | min:5 | max:300',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required | min:2 | max:10',
            'sale_date' => 'required|date_format:Y-m-d',
        ];
    }

    public function messages() {
        return [
            'type.required' => "E' obbligatorio inserire il tipo di fumetto",
            'type.max' => 'Il massimo di caratteri è :max',
            'title.required' => "E' obbligatorio inserire il titolo del fumetto",
            'title.min' => 'Il minimo di caratteri è :min',
            'title.max' => 'Il massimo di caratteri è :max',
            'series.required' => "E' obbligatorio inserire l'edizione",
            'series.min' => 'Il minimo di caratteri è :min',
            'series.max' => 'Il massimo di caratteri è :max',
            'description.required' => "E' obbligatorio inserire una descrizione del fumetto",
            'thumb.required' => "E' obbligatorio inserire un immagine",
            'price.required' => "E' obbligatorio inserire un prezzo",
            'price.min' => "I caratteri inseriti non sono sufficienti per stabilire un prezzo",
            'price.max' => "Il numero di caratteri che puoi inserire è :max",
            'sale_date.required' => "E' obbligatorio inserire la data di uscita",
            'sale_date.date_format' => "Il format deve essere YYYY-MM-DD",
        ];
    }
}
