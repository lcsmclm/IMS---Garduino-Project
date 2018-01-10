@foreach($plants as $plant)
 <div class='plantlist-single-container'>
 <!-- <p>{{ $plant->plantlist_name }}</p> -->
 <a data-id='{{$plant->plantlist_id}}' href='#'>
   <div class='plantlist-single-preview'>
     <h3>{{$plant->plantlist_name}}</h3>
     </a>
   </div><div class='arrow'><i class='fa fa-chevron-right' aria-hidden='true'></i></div></div>
   @endforeach
