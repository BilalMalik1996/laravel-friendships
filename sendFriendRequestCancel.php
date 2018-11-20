public function sendFriendRequestCancel($recipient){
       
        return DB::table('friendships')
        ->Where('sender_id','=',Auth::ID())
        ->Where('sender_type','=', User::class)
        ->Where('recipient_id','=',$recipient->id)
        ->Where('recipient_type','=', User::class)
        ->Where('status','=', 0)
        ->delete();
        
    }
    
    
    Auth::user()->sendFriendRequestCancel(User::find($id));
