@extends('layouts.app')

@section('content')
        <h1>WebRTC DataChannel Chat</h1>

        <p>This chat application uses WebRTC to create a peer-to-peer, server-less connection between you and
            the recipient of your chat messages, a bit like Skype!</p>
        <hr>

        <div>
            <message-list></message-list>
        </div>

        <div>
            <message-form></message-form>
        </div>
@endsection