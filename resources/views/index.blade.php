@extends('layouts.app')
@section('content')
    <div class="chat" id="app">
        <div class="chat-title">
            <h1>{{ Auth::User()->name }}</h1>
            <h2>Supah</h2>
            <figure class="avatar">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/156381/profile/profile-80.jpg" />
            </figure>
        </div>
        <div class="messages">
            <div class="messages-content">
                <div class="container-fluid">
                    <chat-logs :messages="messages"></chat-logs>
                </div>
            </div>
        </div>
        <div class="message-box">
            <message-composer v-on:messagecreate="createMessage"></message-composer>
            {{--<textarea type="text" class="message-input" placeholder="Type message..."></textarea>--}}
            {{--<button type="submit" class="message-submit">Send</button>--}}
        </div>

    </div>
    <div class="bg"></div>

@endsection