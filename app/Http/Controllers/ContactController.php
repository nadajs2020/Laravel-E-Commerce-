<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function indexContact()
    {
        return view('Ecommer.contact_as');
    }

    public function saveFeedback(Request $request)
    {
        //	email	phone	feedback
        $rules = [
            'name' => 'required|max:60|min:3',
            'phone' => 'max:25|required',
            'email' => 'required|email|max:125',
            'feedback' => 'required|max:1000'
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return redirect('/contact')->withInput($data)
                ->withErrors($validator->errors());
        }


        $element = new Feedback();
        $element->name = $data['name'];
        $element->email = $data['email'];
        $element->phone = $data["phone"];
        $element->feedback = $data["feedback"];
        $element->save();

        return redirect('/contact')->with(["success" => "Add feedback success"]);
    }
}
