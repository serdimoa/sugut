<?php

namespace App\Http\Controllers;

use App\Models\Recipient;
use Config;
use Mail;
use Response;
use App\Models\Client;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;

class SendEmailController extends Controller
{
    /**
     * @param Request $request
     * @param Client $clientModel
     * @param Recipient $recipientModel
     * Возвращает 1 если ОК, Возвращает 2 если клиент уже есть в Базе
     */
    public function sendHeader(Request $request, Client $clientModel, Recipient $recipientModel){
        $isUser = Client::where('phone',$request->input('phone'))->first();
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
            $email = $recipientModel->getNextEmail();
            $data = ['email' => $email['email'],'name'=>$email['name']];
            Mail::send('emeiltoadmin',
                [
                    'id'=>$selectUser->id,
                    'name'=>$selectUser->name,
                    'phone'=>$selectUser->phone,
                    'page'=>$selectUser->page,
                    'formName'=>$selectUser->formName,
                    'created_at'=>$selectUser->created_at,
                    'emialto'=> $data['email'],
                    'adminName'=>$data['name']
                ],
                function($message) use ($data)
                {
                    $message->from(env('MAIL_USERNAME'), 'Site');
                    $message->to($data['email'])->subject('Заявка с сайта');
                }
            );

            Mail::send('emeiltoadmin',
                [
                    'id'=>$selectUser->id,
                    'name'=>$selectUser->name,
                    'phone'=>$selectUser->phone,
                    'page'=>$selectUser->page,
                    'formName'=>$selectUser->formName,
                    'created_at'=>$selectUser->created_at,
                    'emialto'=> $data['email'],
                    'adminName'=>$data['name']
                ],
                function($message) use ($data)
                {
                    $message->from(env('MAIL_USERNAME'), 'Site');
                    $message->to(env("ADMIN"))->subject('Заявка с сайта');
                }
            );
            $updateUser = Client::find($ID);
            $updateUser->admin = $data['email'];
            $updateUser->save();
            echo '1';

        }
        return;
    }

}
