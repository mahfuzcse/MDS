  @if(!empty($medicines))
   
      
     @foreach($medicines as $medicine)
                  
                  <a href="{{route('medicineDetail',['id'=>$medicine->id]) }}">{{ $medicine->medicine_name}}
                  </a>
                  <br>
        @endforeach
    
    @endif 



