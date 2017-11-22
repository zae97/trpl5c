<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Test;
use App\TestAnswer;
use App\Topic;
use App\Question;
use App\QuestionsOption;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTestRequest;
use datetime;


class TestsController extends Controller
{
    /**
     * Display a new test.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      if(Auth::guard('web_user')->user()->status == 'verifikasi'){
        // $topics = Topic::inRandomOrder()->limit(10)->get();
        $cek=Auth::guard('web_user')->user()->id;

        $jawaban = DB::table('test_answers')->where('user_id',$cek)->first();
        // dd($jawaban);
        if($jawaban == null){
          $questions = Question::inRandomOrder()->limit(50)->get();
          foreach ($questions as &$question) {
              $question->options = QuestionsOption::where('question_id', $question->id)->inRandomOrder()->get();

            }
        }
        else {
          return view('tests.eror');
        }

        /*
        foreach ($topics as $topic) {
            if ($topic->questions->count()) {
                $questions[$topic->id]['topic'] = $topic->title;
                $questions[$topic->id]['questions'] = $topic->questions()->inRandomOrder()->first()->load('options')->toArray();
                shuffle($questions[$topic->id]['questions']['options']);
            }
        }
        */

        return view('tests.create', compact('questions'));
      }
      else{
      return view('eror.index');
      }

    }

    /**
     * Store a newly solved Test in storage with results.
     *
     * @param  \App\Http\Requests\StoreResultsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $cek=Auth::guard('web_user')->user()->id;
      // dd($cek);
        $result = 0;

        $test = Test::create([
            'user_id' => $cek,
            'result'  => $result,
        ]);

        foreach ($request->input('questions', []) as $key => $question) {
            $status = 0;

            if ($request->input('answers.'.$question) != null
                && QuestionsOption::find($request->input('answers.'.$question))->correct
            ) {
                $status = 1;
                $result++;
            }
            TestAnswer::create([
                // 'user_id'     => Auth::id(),
                'user_id'     => $cek,
                'test_id'     => $test->id,
                'question_id' => $question,
                'option_id'   => $request->input('answers.'.$question),
                'correct'     => $status,
            ]);
        }

        $test->update(['result' => $result]);

        $soal=DB::table('test_answers')->where('user_id',$cek)->where('correct',1)->count();
        // dd($soal);
        $soal=$soal*0.7;
        DB::table('penilaian')->insert(
        [
        'users_id' =>$cek,
        'soal' =>$soal,
        'total' =>$soal,
        'created_at' => new DateTime(),
        'updated_at' => new DateTime(),

      ]);
        return view('tests.done');
        // return view('user.home')->with('pesan_sukses','Simpan Sukses');

        // return redirect()->route('results.show', [$test->id]);
        //
        // return redirect()->route('user_home');
    }
}
