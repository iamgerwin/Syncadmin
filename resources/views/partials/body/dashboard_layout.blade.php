@extends('layouts.master')


@section('CONTENT')

    <h1 id="ban-logo" class="col-sm-2 col-sm-offset-5"><a id="logo" href="{{route('dashboard')}}">Sync</a></h1>

    <div id="dashboard" class="easyui-layout" style="width:100%;height:480px;">
        <div data-options="region:'east',split:true" title="Profile" style="width:20%;">
        @yield('profile')
         <div style="padding:20px;">
            <ul>
               <li><a href="#" class="easyui-linkbutton" data-options="iconCls:'icon-man',size:'large',iconAlign:'top'">Users</a></li>
            </ul>
            </div>
        </div>
        <div data-options="region:'west',split:true" title="Maintenance" style="width:20%;">
 <div style="padding:20px;">
      @yield('maintainace')
       <ul>
           <li><a href="{{route('setup.machine.index')}}" class="easyui-linkbutton" data-options="iconCls:'icon-large-shapes',size:'large',iconAlign:'top'">Machines</a></li>
           
           <li><a href="{{route('setup.table.index')}}" class="easyui-linkbutton" data-options="iconCls:'icon-large-chart',size:'large',iconAlign:'top'">Tables</a></li>
           
           <li><a href="{{route('setup.jobtype.index')}}" class="easyui-linkbutton" data-options="iconCls:'icon-large-smartart',size:'large',iconAlign:'top'">Job Types</a></li>
       </ul>
    </div>
        </div>
        
        
        <div data-options="region:'center',title:'Dashboard'">
            
            @yield('dash')
            
        </div>
    </div>

@stop


@section('HEADER')

<style>
    ul
{
    list-style-type: none;
}
    #ban-logo{
    position: relative;
    }
    #logo {
        font-family: 'Rock Salt', cursive;
        text-decoration: none;
    }
</style>
@stop