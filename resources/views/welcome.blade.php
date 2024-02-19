@extends('layouts.default')

@section('content')
    <div class="card p-5 d-flex flex-column align-items-center">
        <h1>Whatsapp Gateway</h1>
        <div class="p-5 d-flex flex-column align-items-center gap-3">
            <img id="status-image" src="https://media.tenor.com/_62bXB8gnzoAAAAj/loading.gif" alt="QR Code"
                style="height: 200px;">
            <div id="qr-code"></div>
            <div>
                <div>Status: <span id="status">Waiting connection from server</span></div>
            </div>
        </div>
        <button id="start-btn" class="btn btn-primary">Start Server</button>
    </div>
@endsection
