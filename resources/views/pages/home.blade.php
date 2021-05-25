@extends('base.frontEnd')

@php
  $CurrentDay = date('l');

  switch ($CurrentDay) {
    
    case 'Saturday':
      $dayColor = '#F62B00';
      break;

    case 'Sunday':
      $dayColor = '#6500BF';
      break;

    case 'Monday':
      $dayColor = '#FE8002';
      break;

    case 'Tuesday':
      $dayColor = '#FFE60F';
      break;

    case 'Wednesday':
      $dayColor = '#00B9FF';
      break;

    case 'Thursday':
      $dayColor = '#BD3AFF';
      break;

    case 'Friday':
      $dayColor = '#36FF00';
      break;
    
    default:
      return "Days Are over... (base blade)";
      break;
  }
  
@endphp

   @section('content')

{{-- Main Slide --}}
      <section class="iq-main-slider p-0">

         <div id="tvshows-slider">
            @foreach ($featuredVideo as $Fvideo)
               <div>
                  <a href="/play/{{ $Fvideo->code }}">
                     <div class="shows-img" style="margin-top:5%; height: 80vh">
                        

                           <iframe style="height:80vh" class="w-100" src="https://www.youtube.com/embed/{{ $Fvideo->code }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                           <div class="shows-content">
                              <h4 class="text-white mb-1">{{ $Fvideo->title }}</h4>
                              <div class="movie-time d-flex align-items-center">
                                 <span class="text-white">{{ $Fvideo->description }}</span>
                              </div>
                           </div>

                        
                        
                     </div>
                  </a>
               </div>
            @endforeach
         </div>
      
      </section>





<!-- MainContent -->
      <div class="main-content">

         <section id="iq-favorites">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12 overflow-hidden">
                     <div class="iq-main-header d-flex align-items-center justify-content-between">
                        <h4 class="main-title" style="color:{{ $dayColor }}">Videos for Today</h4>
                     </div>

                     <div class="favorites-contens">
                        <div class="list-inline row p-0 mb-0">
                           
                           @foreach ($allVideos as $avideo)
                              <div class="col-lg-3 col-md-4 col-sm-12">
                                 <a href="/play/{{ $avideo->code }}">

                                    <div class="shows-img" style="margin-top:5%; padding-left: 10px">
                                       
                                       <iframe src="https://www.youtube.com/embed/{{ $avideo->code }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                       <div class="shows-content">
                                          <h4 class="text-white mb-1">{{ $avideo->title }}</h4>
                                          <div class="movie-time d-flex align-items-center">
                                             <span class="text-white">{{ $avideo->description }}</span>
                                          </div>
                                       </div>

                                    </div>

                                 </a>
                              </div>
                           @endforeach
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>

      </div>

   @endsection

   
   