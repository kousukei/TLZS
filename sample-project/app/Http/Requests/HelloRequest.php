<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if($this->path()=="hello"){
            return true;
        }
        else{
            return false;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        //バリデーションの検証ルールを決める
        return [
                        //名前入力必須と設定
                        "name"=>"required",
                        //メールは有効なメールアドレスと設定
                        "mail"=>"email",
                        //年齢は数値と範囲内であることを設定
                        "age"=>"numeric|hello"
        ];
    }
    public function messages(){
        return [
            "name.required"=>"名前は必ず入力してください",
            "mail.email"=>"メールアドレスが必要です。",
            "age.numeric"=>"年齢を整数で記入下さい",
            "age.hello"=>"Hello!入力はのみ受け付けます",
        ];
    }
}
