<header class="main-header mt-1">

      <div class="container" style="box-shadow: 0px 3px 28px -5px #414248;" > 
        <div class="row" style="margin-top: 30px;margin-bottom: 20px;border-bottom: 1px solid #067733">
          <div class="col-md-4"></div>
          <div class="col-md-4" style="">
            <h3 style="text-align: center">Provost Message</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10 provost_message ">
              <div>
                <img src="{{ asset('user/images/provost/advisor.jpg') }}" class="img img-responsive img-thumbnail_edit "  alt="Advisor">
              </div>
              <div style="margin-top: 20px;margin-bottom: 20px">
                {{ $message_details->message }}
              </div>
              <div class="clearfix"></div>
              <div></div>
            </div>
            
          
          <div class="col-md-1"></div> 
        </div>
      </div>

  </header>
