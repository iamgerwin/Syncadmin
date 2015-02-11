@extends('layouts.master')

@section('TITLE', "Login")

@section('CONTENT')

    <div id="loginWindow" class="easyui-window"
       title="Login Window"
       closed="true"
       style="width:300px;padding:5px">
        <form id="loginForm" action="login" method="post" style="padding:10px 20px 10px 40px;">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div>
                <label for="username">Username:</label>
                <input type="text" class="easyui-validatebox" name="username" data-options="required:true">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" class="easyui-validatebox" name="password" data-options="required:true">
            </div>

            <div style="padding:5px;text-align:center;">
                <a class="easyui-linkbutton" iconCls="icon-ok" onclick="login()"></a>
                <a onclick="javascript:$('#loginWindow').panel('close')" class="easyui-linkbutton" icon="icon-cancel"></a>
            </div>
        </form>
    </div>
    <a href="#" class="easyui-linkbutton" onclick="javascript:$('#loginWindow').panel('open')">Login</a>
@stop


@section('FOOTER')
<script>
var url;
function login() {
     $('#loginForm').form('submit');
}




</script>
@stop
