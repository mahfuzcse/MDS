@extends('layout1')

@section('body-content')
<div class="container">
<form action="{{url('/storeContactMsg')}}" method="POST" role="form" enctype="multipart/form-data">
{{csrf_field()}}
    <div>
      @if(session('msg'))
        <div class="alert alert-success">
          {{session('msg')}}
        </div>
      @endif
    </div>

     <div class="row">
       <div class="col-md-6">
         <form role="form" action="/action_page.php">
           <fieldset>
             <h3>Contact Form</h3>
             <hr class="colorgraph">
             <div class="form-group">
                   <label class="label-control" for="fname">Name</label>
                  <input type="text" id="name" name="name" class="form-control input-lg" placeholder="Your name.." required="required"/>
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
       <input type="submit" class="btn btn-info" value="Submit">
    </div>
   </fieldset>
  </form>
       </div>
     </div>
</form>
</div>
@endsection