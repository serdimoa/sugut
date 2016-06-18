<?php

namespace App\Http\Controllers;

use App\Models\Recipient;
use Config;
use Mail;
use PC;
use Response;
use App\Models\Client;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;

//use Input;
class SendEmailController extends Controller
{
    public function sendHeader(Request $request, Client $clientModel,Recipient $recipientModel){
//    public function sendHeader1(Request $request, Client $clientModel, Recipient $recipientModel){

//        $isActive = $clientModel->checkPhone($request->input('phone'));
        $isUser = Client::where('phone',$request->input('phone'))->first();
//        $user = 'test';
        if ($isUser){
            echo '2';
        }
        else{
            $user = new Client;
            $user->name=$request->input('name');
            $user->phone = $request->input('phone');
            $user->formName = $request->input('form_name');
            $user->page = $request->input('page');
            $user->save();
            $selectUser = Client::where('phone',$request->input('phone'))->first();
            $ID = $selectUser->id;
//            PC::debug(Config::get('mail'));
            $email = $recipientModel->getNextEmail();
            $data = ['email' => $email];
            PC::debug($selectUser);
            Mail::send('emeiltoadmin',
                [
                    'id'=>$selectUser->id,
                    'name'=>$selectUser->name,
                    'phone'=>$selectUser->phone,
                    'page'=>$selectUser->page,
                    'formName'=>$selectUser->formName,
                    'created_at'=>$selectUser->created_at,
                ],
                function($message) use ($data)
                {
                    $message->from('my.custom@yandex.ru', 'Site');
                    $message->to($data['email'])->subject('Заявка с сайта');
                }
            );
            echo '1';

        }
        return;
    }
    public function sendHeader1(Recipient $rec){
       $data = $rec->getNextEmail();
    }
}
