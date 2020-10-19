@extends('layout/app')

@section('title','Register as a new user')

@section('content')
<br><br>
 <a href="/login" class="btn btn-info float-right">LOGIN</a>
  <div class="container col-6">
    <form class="form-control" action="/register" method="post">
    @csrf

      <h3 class="text-center text-success">REGISTRATION FORM</h3>
      <input type="text" class="form-control" name="username" placeholder="Username" value="{{ old('username') }}">
      @error('username')
         <div class="text-danger">{{ $message }}</div>
      @enderror
      <br>


      <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
      @error('email')
       <div class="text-danger">{{ $message }}</div>
      @enderror
      <br>

      <input type="text" class="form-control" name="phone" placeholder="+880********" value="{{ old('phone') }}">
      @error('phone')
        <div class="text-danger">{{ $message }}</div>
      @enderror
      <br>

        <table>
            <tr>
              <th>Your Date of Birth :</th>
               <td>
                <input type="date" id="birthday" class="form-control" name="birthday" placeholder="Birthday" value="{{ old('birthday') }}">
              </td>
            </tr>
            <tr>
              <th>Gender :</th>
            <td>
              <span class="col-sm-6"><input type="radio" name="gender" value="male" > Male </span><br>
              <span class="col-sm-6"><input type="radio" name="gender" value="female"> Female </span><br>
              <span class="col-sm-6"><input type="radio" name="gender" value="other"> Other </span><br>
            </td>
            </tr>
        </table><br>

      <input type="password" class="form-control" name="password" placeholder="Password" value="{{ old('password') }}">
      @error('password')
        <div class="text-danger">{{ $message }}</div>
      @enderror
      <br>

      <input type="submit" class="form-control btn-info" value="REGISTER" name="register">
    </form>
  </div>
@stop