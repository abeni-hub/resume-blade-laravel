@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <h1>Contact Me</h1>
    <form method="POST" action="#">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Message:</label><br>
        <textarea name="message" rows="4" required></textarea><br><br>

        <button type="submit">Send</button>
    </form>
@endsection
