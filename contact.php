<?php require_once 'includes/header.php' ?>
<div class="mb-4" style="width: 100%; height: 150px; 
  color: black;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  ">
    <h2>Contact Us</h2>
    <p>We're Here to Help!</p>
</div>

<div class="container mb-5">
    <div class="row Contact border">
        <div class="col-lg-5 color-secondary-bg text-white p-4">
            <div class="address">
                <h3 class="font-rale m-0">Address</h3>
                <p class="font-rale">We're open for any suggestion or just to have a chat.</p>
                
                <div class="d-flex mt-2">
                  <i class="fa-solid fa-location-dot"></i>
                  <p class="ms-3 mt-3 font-16">Morigaon Assam, Near Morigaon College, 782105</p>
                </div>
                
                <div class="d-flex mt-2">
                  <i class="fa-solid fa-phone"></i>
                  <p class="ms-3 mt-3">Phone: <a href="tel: 9365910717">9365910717</a></p>
                </div>
                <div class="d-flex mt-2">
                  <i class="fa-solid fa-envelope"></i>
                  <p class="ms-3 mt-3">Email: <a href="mailto: 01tahirahmed@gmail.com">01tahirahmed@gmail.com</a></p>
                </div>
                

            </div>
        </div>
        <div class="col-lg-7 contactForm">
        <form action="" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-2">
                        <input type="text" name="firstName" class="form-control font-rubik" placeholder="Enter FirstName...">
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <div class="mb-2">
                        <input type="text" name="lastName" class="form-control font-rubik" placeholder="Enter LastName...">
                    </div>     
                </div>
            </div>
        
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-2">
                        <input type="phone" name="phone" class="form-control font-rubik" placeholder="Enter Phone...">
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <div class="mb-2">
                        <input type="email" name="email" class="form-control font-rubik" placeholder="Enter Email...">
                    </div>     
                </div>
            </div>
            <mb class="mb-2">
                <textarea name="message" rows="5" class="form-control font-rubik" placeholder="Write your query..."></textarea>
            </mb>

            <button type="submit" class="contactBtn btn btn-primary mt-3">Contact Us</button>
        </form>
        </div>
    </div>
    
</div>
<?php require_once 'includes/footer.php' ?>