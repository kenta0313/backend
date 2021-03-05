<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SampleFormController;

class SampleFormController extends Controller
{
	private $formItems = ["quantity1","quantity2","quantity3","quantity4"];

	function show(){
		return view("form");
	}

	function post(Request $request){

		$input = $request->only($this->formItems);

		$request->session()->put("form_input", $input);

		return redirect()->action([SampleFormController::class,'confirm']);
	}

    function confirm(Request $request){
		$input = $request->session()->get("form_input");

        if(isset($input["quantity1"]) && !isset($input["quantity2"]) && !isset($input["quantity3"]) && !isset($input["quantity4"])){
            $qrcode_number = "0001";
        }elseif(!isset($input["quantity1"]) && isset($input["quantity2"]) && !isset($input["quantity3"]) && !isset($input["quantity4"])){
            $qrcode_number = "0010";
        }elseif(!isset($input["quantity1"]) && !isset($input["quantity2"]) && isset($input["quantity3"]) && !isset($input["quantity4"])){
            $qrcode_number = "0100";
        }elseif(!isset($input["quantity1"]) && !isset($input["quantity2"]) && !isset($input["quantity3"]) && isset($input["quantity4"])){
            $qrcode_number = "1000";
        }elseif(isset($input["quantity1"]) && isset($input["quantity2"]) && !isset($input["quantity3"]) && !isset($input["quantity4"])){
            $qrcode_number = "0011";
        }elseif(isset($input["quantity1"]) && !isset($input["quantity2"]) && isset($input["quantity3"]) && !isset($input["quantity4"])){
            $qrcode_number = "0101";
        }elseif(isset($input["quantity1"]) && !isset($input["quantity2"]) && !isset($input["quantity3"]) && isset($input["quantity4"])){
            $qrcode_number = "1001";
        }elseif(!isset($input["quantity1"]) && isset($input["quantity2"]) && isset($input["quantity3"]) && !isset($input["quantity4"])){
            $qrcode_number = "0110";
        }elseif(!isset($input["quantity1"]) && isset($input["quantity2"]) && !isset($input["quantity3"]) && isset($input["quantity4"])){
            $qrcode_number = "1010";
        }elseif(!isset($input["quantity1"]) && !isset($input["quantity2"]) && isset($input["quantity3"]) && isset($input["quantity4"])){
            $qrcode_number = "1100";
        }elseif(isset($input["quantity1"]) && isset($input["quantity2"]) && isset($input["quantity3"]) && !isset($input["quantity4"])){
            $qrcode_number = "0111";
        }elseif(isset($input["quantity1"]) && isset($input["quantity2"]) && !isset($input["quantity3"]) && isset($input["quantity4"])){
            $qrcode_number = "1011";
        }elseif(isset($input["quantity1"]) && !isset($input["quantity2"]) && isset($input["quantity3"]) && isset($input["quantity4"])){
            $qrcode_number = "1101";
        }elseif(!isset($input["quantity1"]) && isset($input["quantity2"]) && isset($input["quantity3"]) && isset($input["quantity4"])){
            $qrcode_number = "1110";
        }else{
            $qrcode_number = "1111";
        }


		return view("form_confirm",["input" => $input],["qrcode_number" => $qrcode_number]);
	}

    function send(Request $request){
		$input = $request->session()->get("form_input");

		return redirect()->action([SampleFormController::class,'complete']);
	}

    function complete(){
		return view("form_complete");
	}
}
