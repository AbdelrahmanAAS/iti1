<head>
  <link href="{{asset('assets/css/login.css')}}" rel="stylesheet">
  @include('admin.head')
</head>
<header>
  @include('admin.header')
</header>
<div class="login-page">
  <div class="form">
    <form class="login-form">
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="{{route('registration')}}">Create an account</a></p>
    </form>
  </div>
</div>