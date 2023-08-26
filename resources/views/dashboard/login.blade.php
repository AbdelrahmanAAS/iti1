
<head>
  <link href="{{asset('assets/css/login.css')}}" rel="stylesheet">
  @include('admin.head')
</head>
<header>
  @include('admin.header')
</header>


<div class="login-page">
  <div class="form">
    <form action="{{url('logins')}}" method="POST" class="login-form">
      @csrf
      <input type="text" placeholder="email" name="email" required/>
      <input type="password" placeholder="password" name="password" required/>
      @if($errors)

      {{$errors}}
      @endif
      <button>login</button>
    </form>
  </div>
</div>