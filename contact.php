<?php require_once 'includes/header.php' ?>
<div class="bg-dark mb-4" style="width: 100%; height: 150px; 
  color: white;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  ">
    <h2>Contact Us</h2>
    <p>We're Here to Help!</p>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-lg-5">
            Address
        </div>
        <div class="col-lg-7">
        <form action="" method="POST">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-2">
                        <input type="text" name="fullname" class="form-control" placeholder="Enter Name...">
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <div class="mb-2">
                        <input type="email" name="email" class="form-control" placeholder="Enter Email...">
                    </div>     
                </div>
            </div>
        
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-2">
                        <input type="phone" name="phone" class="form-control" placeholder="Enter Phone...">
                    </div>
                    
                </div>
                <div class="col-lg-6">
                    <div class="mb-2">
                        <input type="email" name="email" class="form-control" placeholder="Enter Email...">
                    </div>     
                </div>
            </div>
            <mb class="mb-2">
                <textarea name="message" rows="5" class="form-control" placeholder="Write your query..."></textarea>
            </mb>

            <button type="submit" class="btn btn-primary mt-3">Contact Us</button>
        </form>
        </div>
    </div>
    
</div>
<?php require_once 'includes/footer.php' ?>