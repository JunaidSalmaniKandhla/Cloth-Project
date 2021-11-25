
<footer>
        <section>

            <div class="part">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-9">
                            <h1>Vikas Saree & Mens Wear</h1>
                            <p><b>Vikas Saree Emporium</b> is one of the fastest growing names in the era of selling clothes as per the orders and requirements defined by the customers.</p>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <button class="btn btn-dark"><a href="contact.php">Contact Us</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of part -1 -->
            <div class="foot-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md col-lg">
                            <h3>About Us</h3>
                            <p>Looking to dress for a particular occasion? Visit our Shop  <b>Vikas Saree Emporium</b> and look out for our top recommendations for work, party, weekend, college and gym for both men and women. Pack a punch through girly sequins or tomboyish jersey tees in tops for women.</p>
                            <button class="btn btn-dark mb-3"><a href="about.php">About Us</a></button>
                        </div>
                        <div class="col-md col-lg">
                            <div class="foot-2">
                                <h3>Contact Info</h3>
                                <p>Address: Gandhi Market,<br> Etah, 207001</p>
                                <p>Hours Open: 9:30 am - 9:30 pm</p>
                                <p><a href="tel:+919412282654" class="Blondie"  data-toggle="tooltip" title="Click to call" >Phone: 9412282654 , </a>  <a href="tel:+919997579199"  class="Blondie"  data-toggle="tooltip" title="Click to call">9997579199 </a> 
                                    </p>
                                
                            </div>
                        </div>
                        <div class="col-md col-lg">
                            <h3>Sign Up Newsletter</h3>
                            <form>
                                <input type="email" name="email" placeholder="Email" class="form-control"><br><br>
                                <button class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of foot-main -->
            <div class="foot3">
                <p class="text-center">&copy; 2019 Basic Business Style. All Rights Reserved | Design & Developed By <span><a href="https://www.indiawebpro.com">www.IndiaWebPro.com</a></span></p>
            </div>

        </section>
    </footer>


        <!-- .modal-profile -->
	<div class="modal fade modal-profile" tabindex="-1" role="dialog" aria-labelledby="modalProfile" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
                        <h3 class="modal-title"></h3>
						<button class="close" type="button" data-dismiss="modal">×</button>
					</div>
					<div class="modal-body">
					</div>
					<div class="modal-footer">
						<button class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
        
			</div>
		</div>
	<!-- //.modal-profile -->


<script>
$(document).ready(function() {
/* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
    	event.preventDefault();
    	var content = $('.modal-body');
    	content.empty();
      	var title = $(this).attr("title");
      	$('.modal-title').html(title);      	
      	content.html($(this).html());
      	$(".modal-profile").modal({show:true});
    });

  });
</script>