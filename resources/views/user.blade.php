<h1>Login</h1>
<form action="auth/user" method="POST">
  @csrf
  <input type="text" name="email" placeholder="Informe seu email."/>
  <br><br>
  <input type="password" name="password" placeholder="Informe sua senha"/>
  <br><br>
  <button type="submit" >Login</button>
</form>
