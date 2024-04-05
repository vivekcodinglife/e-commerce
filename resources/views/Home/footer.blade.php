<footer>
    <div class="container">
       <div class="row">
          <div class="col-md-4">
              <div class="full">
                 <div class="logo_footer">
                   <a href="#"><img width="210" src="images/logo.png" alt="#" /></a>
                 </div>
                 <div class="information_f">
                   <p><strong>ADDRESS:</strong> 28 White tower, Street Name New York City, USA</p>
                   <p><strong>TELEPHONE:</strong> +91 987 654 3210</p>
                   <p><strong>EMAIL:</strong> yourmain@gmail.com</p>
                 </div>
              </div>
          </div>
          <div class="col-md-8">
             <div class="row">
             <div class="col-md-7">
                <div class="row">
                   <div class="col-md-6">
                <div class="widget_menu">
                   <h3>Menu</h3>
                   <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Testimonial</a></li>
                      <li><a href="#">Blog</a></li>
                      <li><a href="#">Contact</a></li>
                   </ul>
                </div>
             </div>
             <div class="col-md-6">
                <div class="widget_menu">
                   <h3>Account</h3>
                   <ul>
                      <li><a href="#">Account</a></li>
                      <li><a href="#">Checkout</a></li>
                      <li><a href="#">Login</a></li>
                      <li><a href="#">Register</a></li>
                      <li><a href="#">Shopping</a></li>
                      <li><a href="#">Widget</a></li>
                   </ul>
                </div>
             </div>
                </div>
             </div>
             <div class="col-md-5">
                <div class="widget_menu">
                   <h3>Newsletter</h3>
                   <div class="information_f">
                     <p>Subscribe by our newsletter and get update protidin.</p>
                   </div>
                   <div class="form_sub">
                      <form  action="{{ url('subscribe') }}" method="POST">
                        @csrf
                        @method('POST')
                         <fieldset>
                            <div class="field">
                               <input type="email" placeholder="Enter Your Mail" name="email" />
                               <input type="submit" value="Subscribe" />
                            </div>
                         </fieldset>
                      </form>
                      @if(session()->has('massage'))
                <div class="alert alert-success">
                    <button class="close" type="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('massage')}}


                   </div>
                    @endif
                </div>
             </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#subscribeForm').submit(function(event) {
            event.preventDefault(); // Prevent form submission

            var email = $('#emailInput').val();

            // Make an AJAX request to send the email to Laravel backend
            $.ajax({
                url: '/subscribe', // Replace with your Laravel route URL
                method: 'POST',
                data: {
                    email: email
                },
                success: function(response) {
                    // Handle success response
                    console.log('Email sent successfully!');
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error(error);
                }
            });
        });
    });
</script>
