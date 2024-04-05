<section class="subscribe_section">
    <div class="container-fuild">
       <div class="box">
          <div class="row">
             <div class="col-md-6 offset-md-3">
                <div class="subscribe_form ">
                   <div class="heading_container heading_center">
                      <h3>Subscribe To Get Discount Offers</h3>
                   </div>
                   @if(session()->has('massage'))
                   <div class="alert alert-success">
                       <button class="close" type="close" data-dismiss="alert" aria-hidden="true">x</button>
                       {{session()->get('massage')}}


                      </div>
                       @endif
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                   <form action="{{ url('subscribe_for_Discount') }}" method="POST">
                    @csrf
                    @method('Post')
                      <input type="email" placeholder="Enter Your Mail" name="email" >
                      <button>
                      subscribe
                      </button>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
