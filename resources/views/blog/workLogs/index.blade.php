@extends('blog.layouts.master',[
  'meta_description' => config('blog.description'),
  'tags'=>[],
])

@section('page-header')
    <div class="container" style="margin-top:5rem;">
        <div class="row justify-content-center mx-auto">
            <h3>记录每天的工作日志</h3>
        </div>
        <div class="row justify-content-center mt-5">
            <h5>每日一语：</h5>
        </div>
        <div class="row justify-content-center mt-3">
            <h5>不同的人生，有不同的幸福。去发现你所拥有幸运，少抱怨上苍的不公，把握属于自己的幸福。你，我，我们大家都可以经历幸福的人生。</h5>
        </div>
    </div>
@stop
@section('content')
    @foreach($workLogs as $workLog)
        <h5>{{$workLog['type']}}</h5>
        <time>{{$workLog['created_at']}}</time>
        <h3>{{$workLog['content']}}</h3>
    @endforeach
@stop
