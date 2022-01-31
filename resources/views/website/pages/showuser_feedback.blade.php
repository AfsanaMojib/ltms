<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
@if(session()->has('msg'))
<p class="alert alert-success">{{session()->get('msg')}}</p>
@endif
  <form class="form-horizontal" action="{{route('website.user.do.feedback')}}" method='post'>

    @csrf
   <fieldset>

    <div class="control-group">
       <!-- Username  -->
      <label class="control-label"  for="username">User Name</label>
      <div class="controls">
        <input name="user_name" type="text" id="username" name="username" placeholder="" class="input-xlarge">

      </div>
    </div>

     <div class="control-group">
       <!-- E-mail  -->
       <label class="control-label" for="email">User Email</label>
      <div class="controls">
        <input name="user_email" type="email" id="email" name="email" placeholder="" class="input-xlarge">

      </div>
    </div>

    <div class="control-group">
       <!-- E-mail  -->
       <label class="control-label" for="email">User Phone Number</label>
      <div class="controls">
        <input name="user_phone_number" type="number" id="email" name="email" placeholder="" class="input-xlarge">

      </div>
    </div>

    <div class="control-group">
       <!-- E-mail  -->
       <label class="control-label" for="email">User Feedback</label>
      <div class="controls">
        <input name="user_feedback" type="text" id="email" name="email" placeholder="" class="input-xlarge">

      </div>
    </div>

    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Submit</button>
      </div>
    </div>






  </fieldset>
</form>



<!-- <div class="border-top card-body text-center">Have an Account? <a href="#">Sign Up</a></div>  -->

