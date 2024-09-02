@component('mail::message')
    Hi, {{$user->name}}. Forgot Password
    <p>It Happens.</p>
@component('mail::button' , ['url' => url('reset/'.$user->remember_token)])
    Reset Your Password
@endcomponent
thanks <br>
{{config('app.name')}}
@endcomponent
