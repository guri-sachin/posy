<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Chat;
class OpenChatAI extends Controller
{
    public function index(){
        $chats = Chat::all(); 
        return view('home',compact('chats'));
    }

   public function result(Request $input)
    {
        $input->validate([
            'title' => 'required',
            ]);
        $title = ltrim($input->title,'-');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer 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',
            'Content-Type: application/json',
        ]);
        
        $owned_ques_array = array('tutor', 'class', 'homework','quiz','test','project','guidance','academics','loan','financial aid','payment','lonely','mental','health','anxious','health counseling');
         
         if ( preg_match('('.implode('|',$owned_ques_array).')', $title))
         {
            curl_setopt($ch, CURLOPT_POSTFIELDS, "{
                \"model\": \"gpt-3.5-turbo\",
                \"max_tokens\": 200,
                \"temperature\":1,
                \"messages\": [
                {\"role\": \"system\", \"content\": \"PROMPT - You are a chatbot for ABC college. Your goal is to guide a struggling student to a great resource on campus. One of these resources for academics is Jane Doe who can be reached at (123) 456-7890 or via email at academics@college.edu. Jane Doe can help you with your academic work and you can arrange an appointment by emailing or calling their office. They are located in the XYZ Building, and they offer both in-person and tele-visits. The student can find more information about academics, tutoring, and their classes at their website, here: https://yourcollegewebsitehere.edu\"},
                {\"role\": \"user\", \"content\": \".$title.\"}
            ]}");
         }
         
         else{
             curl_setopt($ch, CURLOPT_POSTFIELDS, "{
                \"model\": \"gpt-3.5-turbo\",
                \"messages\": [
                {\"role\": \"user\", \"content\": \".$title.\"}
                ]}");
         }
    
        $result = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($result);
        $outputText = $result->choices[0]->message->content;
        $outputText = trim($outputText);    
        $savedata = new Chat();
        $savedata->title = $title;
        $savedata->result = $outputText;
        $savedata->ip_address = \Request::ip();
        if($savedata->save()){
            echo json_encode(['status'=>true,'outputText'=>$outputText,'question'=>$title]);
        }else{
            echo json_encode(['status'=>false]);
        }
    }

    public function allchats($ip_address){
        $chats = Chat::where('ip_address','=',$ip_address)->paginate(8);
        return view('all-chat',compact('chats'));
    }

    

    public function prevChat(){
      $ip_address = \Request::ip();
      $data = Chat::where('ip_address', $ip_address)->paginate(10);
        if($data->count() == 0){
            echo "No Data Found";
        }else{
          return view('prev-chat',compact('data'));
        }
    }

}

