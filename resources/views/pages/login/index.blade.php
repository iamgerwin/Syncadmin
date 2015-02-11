@extends('layouts.master')

@section('TITLE', "Login")

@section('CONTENT')
    
    <div class="easyui-panel layout" title="Login" style="width:400px">
        <div style="padding:10px 60px 20px 60px;">
            <form data-options="novalidate:true" id="loginForm" class="easyui-form" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
               <table cellpadding="5">
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" data-options="required:true" class="easyui-textbox"/></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" data-options="required:true" class="easyui-textbox"/></td>
                    </tr>
                </table>
            </form>
            <div style="text-align:center;padding:5px">
                <a href="javascript:void(0)" class="easyui-linkbutton" onclick="submitForm()">Submit</a>
                <a href="javascript:void(0)" class="easyui-linkbutton" onclick="clearForm()">Clear</a>

            </div>
        </div>

    </div>


@stop


@section('FOOTER')
<script>
    function submitForm() {
            $.ajax({
                url: "{{route('login.store')}}",
                type: 'post',
                dataType: 'json',
                data: $('form#loginForm').serialize(),
                beforeSend: function( data ) {
                    console.log(data);
                },
                success: function(data) {
                    window.location.replace("{{route('api.v1.jobtype.index')}}");
                },
                
                })
            };
    function clearForm() {
        $('#loginForm').form('clear');
    }
</script>
@stop


@section('HEADER')
<style>
    .panel {
        padding-top: 20%;
        display: block;
        margin: 0 auto;
    }
</style>
@stop