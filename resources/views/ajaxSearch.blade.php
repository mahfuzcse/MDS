  @if(!empty($medicines))
   
      
     @foreach($medicines as $medicine)
                  
                  <a href="#">{{ $medicine->medicine_name}}
                  </a>
                  <br>
        @endforeach
    
    @endif 



