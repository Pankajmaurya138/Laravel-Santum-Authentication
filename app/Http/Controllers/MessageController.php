<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMessage;
use App\Models\Message;
use App\Models\User;
use Auth;
class MessageController extends Controller
{
    public function conversation($userId){
        $user = User::where('id','<>',Auth::id())->get();
        $friendInfo = User::findOrFail($userId);
        $myInfo = User::find($userId);

        $this->data['users'] = $user;
        $this->data['friendInfo'] = $friendInfo;
        $this->data['myInfo'] = $myInfo;
        $this->data['userId'] = $userId;
        return view('message.conversation',$this->data);
    }
}
