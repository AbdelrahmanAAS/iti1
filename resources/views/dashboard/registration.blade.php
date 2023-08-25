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
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="{{route('login')}}">Sign In</a></p>
    </form>
  </div>
</div>