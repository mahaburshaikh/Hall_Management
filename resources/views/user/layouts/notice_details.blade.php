<div class="container mt-4">
    <h3 class="" style="color: #012911;border-bottom: 2px solid #067733">Notice Details</h3>
    <div class="row">

      {{-- <div class="col-md-8"> --}}
        <div class="card pointer single-notice_details wow slideInLeft">
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <img src="{{ asset('user/images/notice/1.jpg') }}" alt="" class="img img-fluid img-thumbnail" /> <br>
                <span class="text-muted">{{ $notice->created_at->toFormattedDateString() }}</span>
              </div>

              <div class="col-md-9">
                 <div style="font-size: 23px;color: #012911;border-bottom: 1px solid #067733"> {{ $notice->title }}</div> 
                  {{ $notice->body }}
              </div>
            </div>
          </div>
        </div> <!-- Single Notice -->
      {{-- </div>  --}}<!-- end .col-md-8 -->
    </div>
  </div>
  <!-- Main Content Parts -->
@section('notice')

@show