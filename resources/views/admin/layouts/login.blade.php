<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" action="{{route('user.do.login')}}" method="POST">
    @csrf
  <fieldset>
    <div id="legend">
      <legend class="">Login Info</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Name</label>
      <div class="controls">
        <input name="name" type="text" id="username" name="username" placeholder="" class="input-xlarge">
        
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">Email</label>
      <div class="controls">
        <input name="email" type="email" id="email" name="email" placeholder="" class="input-xlarge">
        
      </div>
    </div>
    
    
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input name="password" type="text" id="password" name="password" placeholder="" class="input-xlarge">
       
      </div>
    </div>
 
    
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Login</button>
      </div>
    </div>
  </fieldset>
</form>

<div class="border-top card-body text-center">Don't Have an account? <a href="{{route('user.registration')}}">Registration</a></div>