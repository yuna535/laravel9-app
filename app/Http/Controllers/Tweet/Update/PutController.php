<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tweet\UpdateRequest;
use App\Models\Tweet;

class PutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateRequest $request)
    {
        $tweet = Tweet::where('id', $request->id())->firstOrfail();
        $tweet->content = $request->tweet();
        $tweet->save();
        return redirect()->route('tweet.update.index', ['tweetId' => $tweet->id])
                        ->with('feedback.success', "つぶやきを編集しました");
    }
}
