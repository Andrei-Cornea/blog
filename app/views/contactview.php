<div class="container contact-page">
  <div class="row contact">
    <div class="col-sm-6 col-sm-push-6  col-md-6 col-md-push-6 author-section">
        <div class="author-cover-background">
        </div>
        <div class="author-avatar">
            <img height="100" width="200" src="<?php echo IMG.'me.jpg';?>" class="img-circle">
        </div>
        <div class="author-details text-center">
          <h2>ANDREI CORNEA</h2>
          <p class="margint20">Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
        </div>
        <form class="author-form">
          <fieldset>
            <legend>CURRENTLY</legend>
                <div class="works-details">
                    <p><i class="fa fa-apple"></i>Web Developer TO BE!</p>                        
                    <p><i class="fa fa-map-marker f-icon"></i>in <span class="active-color">Cluj-Napoca</span></p>      
                    <p><i class="fa fa-circle f-icontwo"></i>Avaible for Freelance</p>
                </div>
          </fieldset>
        </form>
    </div>
    <div class="col-sm-6 col-sm-pull-6  col-md-6 col-md-pull-6 contact-form ">
      
      <div class="title-area">
          <div class="title-light"><h1>CONTACT</h1></div>                           
      </div>
      <div class="margint30 ">
        <!--<form method="POST" >-->
        <!--  <input type="text" name="name" placeholder="Name..." required/><br>-->
        <!--  <input type="email" name="email" placeholder="Email..." required/><br>-->
        <!--  <textarea name ='msg' rows="4" cols="22" placeholder="Message..." required></textarea ><br>-->
        <!--  <input type="submit" name="submit" value="Submit"/>-->
        <!--</form>-->
        
          <form id="contactForm" method="POST" onsubmit="return false;" autocomplete="off">
              <div class="form-group">
                 <div class="row">
                   <div class="col-sm-7">
                    <label for="contactName">Your Name (required)</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name..."  />
                   </div>
                 </div>
              </div>
            <div class="form-group">
               <div class="row">
                 <div class="col-sm-7">
                  <label for="contactEmail">Your Email (required)</label>
                  <input type="email" class="form-control" id="email"  name="email" placeholder="Email..."  />
                  </div>
                </div>
            </div>
            <div class="form-group">
               <div class="row">
                 <div class="col-sm-8">
                    <label for="contactMessage">Your Message</label>
                    <textarea class="form-control" rows="4" cols="22" id="msg" name ='msg' placeholder="Message..."  ></textarea>
                 </div>
               </div>
            </div>
              <input type="submit" name="submit" class="btn btn-default btn-red contactBtn" value="SEND"/>
          </form>
          
      </div>
    </div>
  </div>
</div>

<?php  echo $feedback ;?>