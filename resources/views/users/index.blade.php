@extends('layouts.default')
@section('title', '所有用户')

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <h1>所有用户</h1>
        <ul class="users">
            @foreach ($users as $user)
                @include('users._user')
            @endforeach
        </ul>
        {!! $users->render() !!}
    </div>
@stop
<script>
    function sumbit_sure(){
        var gnl=confirm("确定要删除该用户?");
        if (gnl==true){
            return true;
        }else{
            return false;
        }
    }
</script>