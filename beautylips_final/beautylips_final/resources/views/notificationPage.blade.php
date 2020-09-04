@extends('layouts.layout') @section('content')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active show" data-toggle="tab" href="#all">All</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#unread">Unread</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#read">Read</a>
    </li>
</ul>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active show" id="all">
        
        <table class="table table-hover">
            <tbody>
            @foreach ($notice as $n)
            <tr>
                @if($n->isread == 0)
                    <td><a href="/notification/update/{{$n->notificationID}}" class="text-primary" style="font-size:1.2rem;">Your Order PONum {{$n->PONum}} is already {{$n->status}} {{$n->time}}</a></td>
                @endif
                @if($n->isread == 1)
                    <td><a href="/notification/update/{{$n->notificationID}}" class="text-secondary" style="font-size:1.2rem;">Your Order PONum {{$n->PONum}} is already {{$n->status}} {{$n->time}}</a></td>
                @endif
            </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    <div class="tab-pane fade" id="unread">
        <table class="table table-hover">
            <tbody>
            @foreach ($notice as $n) @if($n->isread == 0)
            <tr>
                <td><a href="/notification/update/{{$n->notificationID}}" class="text-primary" style="font-size:1.2rem;">Your Order PONum {{$n->PONum}} is already {{$n->status}} {{$n->time}}</a></td>
            </tr>
            @endif @endforeach
            </tbody>
        </table>
    </div>
    <div class="tab-pane fade" id="read">
        <table class="table table-hover">
            <tbody>
            @foreach ($notice as $n) @if($n->isread == 1)
            <tr>
                <td><a href="/notification/update/{{$n->notificationID}}" class="text-secondary" style="font-size:1.2rem;">Your Order PONum {{$n->PONum}} is already {{$n->status}} {{$n->time}}</a></td>
            </tr>
            @endif @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection