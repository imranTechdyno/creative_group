<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;


class MailController extends Controller {
   public function html_email(Request $request) {

       $to_email = GeneralSetting::first();
       $sitename = $to_email->sitename;
       $to_email = $to_email->site_email;
       $email = $request->email;
       
      $data = array('name'=>$request->name,"contac_no"=>$request->contac_no,"email"=>$request->email,"message_text"=>$request->message);
      Mail::send('mail', $data, function($message) use ($to_email,$sitename,$email) {
         $message->to($to_email, $sitename)->subject
            ('Query from '.$sitename);
         $message->from($email,$sitename);
      });
      Alert::success('Success', 'Thank you for contacting us.Your message has been received.');
      return redirect()->back();
   }
}