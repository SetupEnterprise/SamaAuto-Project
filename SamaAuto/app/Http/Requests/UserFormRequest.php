<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'adresse' => 'required',
            'telephone' => 'required',
            'passwd' => 'required|min:4',
            'passwd_confirmation' => 'required'//|confirmed',
        ];
    }

    public function messages(){
        return [
            'nom.required' => 'vous devez saisir un nom',
            'prenom.required' => 'vous devez saisir le matricule',
            'email.required' => 'Vous devez saisir un email',
            'email.email' => "le texte saisi n'est pas un email ex:7tupenterprise@gmail.com",
            'telephone.required' => 'vous devez saisir un numero de telephone',
            'adresse.required' => 'vous devez saisir une adresse',
            'passwd.required' => 'vous devez saisir un mot de passe',
            'passwd.min' => 'le mot de passe devra etre supérieur a 4 caractères',
            'passwd_confirmation.required' => "Vous devez confirmer le mot de passe",
           // 'passwd_confirmation.confirmed' => 'le mot de passe nest pas conforme'
        ];
    }
}
