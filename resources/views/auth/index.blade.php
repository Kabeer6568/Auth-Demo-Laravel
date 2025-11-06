@extends('auth.app')

@section('content')
<main>
        <h1>Get In Touch</h1>
        <form action="{{route('auth.register')}}" method="POST"  >
            @csrf
            <div>
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required value="{{old('name')}}">
            </div>

            <div>
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="your.email@example.com" required value="{{old('email')}}">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" id="phone" name="password" placeholder="**********" value="{{old('password')}}">
            </div>

            <!-- <div>
                <label for="subject">Subject</label>
                <select id="subject" name="subject" required>
                    <option value="">Select a subject</option>
                    <option value="general">General Inquiry</option>
                    <option value="support">Support</option>
                    <option value="feedback">Feedback</option>
                    <option value="other">Other</option>
                </select>
            </div> -->

            <!-- <div>
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Write your message here..." required></textarea>
            </div> -->

            <button type="submit">Register Now</button>
        </form>
    </main>

    @endsection