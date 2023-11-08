<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tribute;
use App\Models\TributePerson;
use App\DataTables\TributeDataTable;
use App\DataTables\TributePersonDataTable;
use Validator;
use Token;
class TributeController extends Controller
{
    //
    public function welcome(TributeDataTable $dataTable)
    {
        $data = TributePerson::all();
        return $dataTable->render('welcome',compact('data'));
    }

    //
    public function persom(TributePersonDataTable $dataTable)
    {
        $title ='Deaceased Persons';
        return $dataTable->render('tribute.person',compact('title'));
    }

    public function tributes(TributeDataTable $dataTable)
    {
        $title ='Submited Tribute(s)';
        return $dataTable->render('tribute.person',compact('title'));
    }

    public function storeuser(Request $request)
    {

 $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
        ]);

        $media = $request->file('profile');

        $user = new TributePerson();
        $user->token = 'FNFT-'.strtoupper(Token::Unique('tribute_people', 'token', 6 ));
        if($request->hasfile('profile'))

             {
                   if (!empty($media))

                    {
                       $destinationPath = public_path('files');

                       $fname0 = $media->getClientOriginalName();

                       $filename = 'FT00-'.$fname0.'.'.$media->getClientOriginalExtension();

                       $media->move($destinationPath, $filename);

                       $user->profile = $filename;

                     }
               }
        $user->first_name= $request['first_name']??'';
        $user->last_name= $request['last_name']??'';
        $user->email= $request['email']??'';
        $user->message= $request['message']??'';
        $user->yob= $request['yob']??'';
        $user->yod= $request['yod'] ??'';
        $user->save();

        return back()->with('status','Update completed successfully');




    }

    public function storetribute(Request $request)
    {

 $validator = Validator::make($request->all(), [
            'tribute_to' => 'required',
            'first_name' => 'required|string|min:3',
            'last_name' => 'required|string|min:3',
        ]);

        $medias = $request->file('photos');

        $user = new Tribute();
        if($request->hasfile('photos'))

             {
                  foreach($medias as $media)
                  {



                    {
                       $destinationPath = public_path('files');

                       $fname0 = $media->getClientOriginalName();

                       $filename = 'FT00-'.$fname0.'.'.$media->getClientOriginalExtension();

                       $media->move($destinationPath, $filename);

                       $filename[] =$filename;

                     }
                    }
               }
        $user->tribute_to = $request['tribute_to']??'';

        $user->first_name = $request['first_name']??'';

        $user->last_name = $request['last_name']??'';

        $user->subject = $request['subject']??'';

        $user->message = $request['message']??'';

        if(isset($filename))
        {
            $user->photos = implode(',', $filename);
        }



        $user->save();

        return back()->with('status','Update completed successfully');


        $offerData = [
            'name' => 'BOGO',
            'body' => 'Your default password is 12345678 to change your passw.',
            'thanks' => 'Thank you',
            'offerText' => 'Check out the offer',
            'offerUrl' => url('/'),
            'offer_id' => 007
        ];

        Notification::send($user, new NewuserNotification($offerData));
        return back()->with('status','User successfully Created.');

    }
}
