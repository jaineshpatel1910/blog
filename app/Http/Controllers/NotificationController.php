<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\OffersNotification;
use Illuminate\Support\Facades\Notification;


class NotificationController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    // public function index(){
    //     return view('');
    // }

    public function sendOfferNotification(){
        $user = User::all();

        $offerData = [
            'name' => 'BOGO',
            'body' => 'You recieved an offer.',
            'thanks' => 'Thank you',
            'offerText' => 'Check out the offer',
            'offerUrl' => url('/'),
            
        ];

        

        Notification::send($user, new OffersNotification($offerData));
        dd('Task completed!');

    }
}