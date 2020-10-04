<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login(Request $request){
		//入力内容をチェックする
		$user_id = $request->input("user_id");
		$password = $request->input("password");
var_dump($user_id);
var_dump($password);
		//ログイン成功
		if($user_id == "hogehoge" && $password == "fugafuga"){
            session()->put("auth", true);
			return redirect("/sub");
		}

		// ログイン失敗
		return redirect("/home")->withErrors([
			"login" => "ユーザーIDまたはパスワードが違います"
		]);
		
	}
}
