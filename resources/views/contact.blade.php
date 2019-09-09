@extends('layout')

@section('content')
    <h1>Contact</h1>
    <form>
        <div><label for="name">Name</label>
        <input type="text" placeholder="name" id="name"></div>
        <div><label for="email">Email Address</label>
        <input type="text" placeholder="email" id="email"></div>
        <div><textarea name="email-content" id="email-content" cols="30" rows="10"></textarea></div>
        <button type="submit">Submit</button>
    </form>
@endsection
