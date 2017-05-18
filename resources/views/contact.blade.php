@extends('layout1')

@section('body-content')
<h3>Contact Form</h3>

<div class="container">
     <div class="row">
       <div class="col-md-3">
           
       </div>
       <div class="col-md-6">
        <form action="/action_page.php">
    
             <div class="form-group">
                   <label class="label-control" for="fname">Name</label>
                  <input type="text" id="name" name="name" placeholder="Your name.." required="required" class="form-control"/>
             </div>
               
              <div class="form-group">
                  <label for="email" class="">Email</label>
                 <input type="email" id="email" name="email" placeholder="Your last name.." required="required" class="form-control" />   
               </div>      
              <div class="form-group">
                          <label for="subject">Subject</label>
                           <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                           </select>
              </div>
           
              <div class="form-group">
                  
                  <label for="name"> Message</label>
                  <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>

              </div>  

    <!-- <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea> -->
    <div class="form-group">
       <input type="submit" value="Submit">
    </div>
   
  </form>
       </div>
       <div class="col-md-4">
         
       </div>
     </div>
</div>
@endsection