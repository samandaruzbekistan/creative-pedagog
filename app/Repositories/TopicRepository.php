<?php

namespace App\Repositories;

use App\Models\Topic;

class TopicRepository
{
    public function getTopics(){
        return Topic::all();
    }

    public function newTopic($title, $body){
        $topic = new Topic;
        $topic->title = $title;
        $topic->body = $body;
        $topic->save();
    }

    public function getTopic($id){
        return Topic::find($id);
    }

    public function delete_topic($id){
        Topic::where('id', $id)->delete();
    }
}
