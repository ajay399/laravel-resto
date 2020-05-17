<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\restaurant;
use App\user;
use Session;

class RestoController extends Controller
{
    

function index()
{

	return view('home');
}

function list()
{


	$data=restaurant::all();
	return view('list',['data'=>$data]);
}

function add(Request $req)
{

$data=new restaurant();
$data->name=$req->input('name');
$data->email=$req->input('email');
$data->address=$req->input('address');
$data->save();
$req->Session()->flash('message', 'Restaurant Added Successfully !');

return redirect('list');



}

function delete($id)
{

restaurant::find($id)->delete();
Session()->flash('delete', 'Restaurant Deleted Successfully !');
return redirect('list');



}

function edit($id)
{

$data=restaurant::find($id);

return view('edit',['data'=>$data]);




}

function update(Request $req)
{

$data=restaurant::find($req->input('id'));

$data->name=$req->input('name');
$data->email=$req->input('email');
$data->address=$req->input('address');
$data->save();
$req->Session()->flash('message', 'Restaurant Updated Successfully !');

return redirect('list');





}

function register(Request $req)
{

	$data=new user();
	
$data->name=$req->input('name');
$data->email=$req->input('email');
$data->password=encrypt($req->input('password'));
$data->save();

$req->session()->put('user',$req->input('name'));

return redirect('/');


}

function login(Request $req)
{

$user=user::where('email',$req->input('email'))->get();

if(empty($user[0]))
{
	return redirect('login');
}


echo $password=decrypt($user[0]['password']);
if($password==$req->input('password'))
{
	
	$req->session()->put('user',$user[0]['name']);
	return redirect('/');
}
else
{
	return redirect('login');
}


}



}
