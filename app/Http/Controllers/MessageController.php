<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Answer;
use App\Repositories\MessageRepository;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function index(MessageRepository $messageRepo)
    {
        $messages= $messageRepo->get_active_messages();
        $all_messages = count($messageRepo->all_messages());
        $week_messages = count($messageRepo->messages_last_week());
        $month_messages = count($messageRepo->messages_last_month());

        return view('a_panel.messages.messages', ["messagesList"=>$messages ,
                                                "allmessages"=>$all_messages , 
                                                "weekmessages"=>$week_messages ,
                                                "monthmessages"=>$month_messages]);  
    }

    public function client_messages(MessageRepository $messageRepo)
    {    
        $messages = $messageRepo->get_messages_by_client(Auth::id());

        return view('c_panel.message', ["messagesList" => $messages]);
    }

    public function client_messages_details(MessageRepository $messageRepo, $id)
    {
        $message = $messageRepo->find($id);
        $answer = Answer::where('message_id', $id)->get();

        return view('c_panel.message_detail', ["message" => $message ,
                                                "answer" => $answer]);
    }

    public function get_details(MessageRepository $messageRepo, $id)
    {
        $message = $messageRepo->find($id);

        return view('a_panel.messages.messages_profile', ["message" => $message]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'topic'=> 'required',
            'question'=> 'required',
        ]);

        $message = new Message;
        $message->client_id = Auth::id();
        $message->topic = $request->input('topic');
        $message->question= $request->input('question');
        $message->status = 'active';

        $message->save();

        return back()->with('success','Wiadomość została wysłana');

    }

    public function create_answer(MessageRepository $messageRepo, $id)
    {
        $question = $messageRepo->find($id);

        return view('a_panel/messages/messages_answer', ["question" => $question]);
    }

    public function admin_answer(Request $request)
    {
        $request->validate([
            'answerbody'=> 'required',
        ]);

        $answer = new Answer;
        $answer->message_id = $request->input('messageid');
        $answer->answer_body = $request->input('answerbody');

        $status = Message::find($answer->message_id);
        $status->status = 'unactive';

        $status->save();
        $answer->save();

        return back()->with('success','Odpowiedź została wysłana');
    }
}
