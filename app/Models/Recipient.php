<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16.06.2016
 * Time: 13:57
 */


namespace App\Models;
use PC;
use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    protected $table = 'recipient';

    /**
     * @return \___PHPSTORM_HELPERS\static|mixed
     */
    public function getNextEmail(){
        $data = Recipient::all();//получаем всех админов
        $i = -1; //счетчик для переброса
        $count = count($data);

        foreach ($data as $key=>$value){
            $i++;

            if ($value['last_recipient']==1){
                Recipient::where('id',$value['id'])
                    ->update(['last_recipient' => 0]);

                $i++;
                if ($count==$i){
                    Recipient::where('id',$data[0]['id'])
                        ->update(['last_recipient' => 1]);
                }
                else{
                    Recipient::where('id',$data[$i]['id'])
                        ->update(['last_recipient' => 1]);
                }
                return $value;
                break;
            }
        }
    }
}