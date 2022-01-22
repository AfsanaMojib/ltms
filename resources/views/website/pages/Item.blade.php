<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
<!------ Include the above in your HEAD tag ---------->

  <form class="form-horizontal" action="{{route('website.user.do.item')}}" method='post'> 
  
    @csrf
   <fieldset>
    <div class="control-group">  
       <!-- Username  -->
      <label class="control-label"  for="username">Plant</label> 
      <div class="controls">
      <select name="plant" id="text">
    <option value="vagetable">Vegetable</option>
    <option value="flower">Flower</option>
    <option value="fruit">Fruit</option>
    <option value="medicinal plant">Medicinal Plant</option>
     </select>
        <!-- <input name="plant" type="text" id="username" name="username" placeholder="" class="input-xlarge"> -->
        
      </div>
    </div>  
 
     <div class="control-group">
       <!-- E-mail  -->
       <label class="control-label" for="email">Tool</label>
      <div class="controls">
      <select name="tool" id="text">
    <option value="hoe">Hoe</option>
    <option value="fork">Fork</option>
    <option value="spade">Spade</option>
    <option value="garden glove">Garden Glove</option>
    <option value="rake">Rake</option>
     </select>

        <!-- <input name="tool" type="text" id="email" name="email" placeholder="" class="input-xlarge"> -->
        
      </div>
    </div>

    <div class="control-group">
       <!-- E-mail  -->
       <label class="control-label" for="email">Soil</label>
      <div class="controls">
      <select name="soil" id="text">
    <option value="sand">Sand</option>
    <option value="clay">Clay</option>
    <option value="silt">Slit</option>
     </select>
        <!-- <input name="soil" type="text" id="email" name="email" placeholder="" class="input-xlarge"> -->
        
      </div>
    </div>
    
    <div class="control-group">
       <!-- E-mail  -->
       <label class="control-label" for="email">Pesticide</label>
      <div class="controls">
      <select name="pesticide" id="text">
    <option value="insecticide">Insecticide</option>
    <option value="herbicide">Herbicide</option>
    <option value="fungicide">Fungicide</option>
    <option value="bactericides">Bactericides</option>
     </select>
        <!-- <input name="pesticide" type="text" id="email" name="email" placeholder="" class="input-xlarge"> -->

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








