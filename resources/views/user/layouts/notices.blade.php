<div class="container mt-4">
     <h3 style="color: #012911;border-bottom: 1px solid rgb(11, 76, 31);" class="wow bounceInLeft">Recent Notices From Hall</h3>
    <div class="row">

      @foreach($notices as $notice)
      <div class="col-md-6">
       
        
        <div class="card pointer single-notice wow slideInLeft">
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <img src="{{ asset('user/images/notice/1.jpg') }}" alt="" class="img img-fluid img-thumbnail" /> <br>
                <span class="text-muted">{{ $notice->created_at->toFormattedDateString() }}</span>
              </div>

              <div class="col-md-9"> 
                <a style="font-size: 23px;color: #012911;border-bottom: 2px solid #067733" href="{{ route('noticedetails',$notice->id )}}">
                  {{ $notice->title }}
                  </a> 
                  <br>
                  @php 
                    $description = str_limit($notice->body, 100);
                  @endphp
                  {!! $description.'...' !!}
                
              </div>
            </div>
          </div>
        </div> <!-- Single Notice -->
        
      </div> 
      @endforeach<!-- end .col-md-8 -->
  </div>
</div>
  <!-- Main Content Parts -->
@section('notice')

@show