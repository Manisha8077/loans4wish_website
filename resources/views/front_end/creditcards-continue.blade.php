@extends('front_end_layout.home')
@section('content')
<style>
  section.banner-img:before {
    display: none;
}
.first-form form{margin: 0px;}
.banner-img {
    min-height: auto;}
</style>
 <section class="banner-img">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 banner-img" style="background-image: url({{asset('assets/front_end/asset/img/slider-2.jpg')}});background-attachment: fixed;
    background-position: top;    flex-direction: column;
    justify-content: center;
    z-index: 1;
    color: #fff;">
         <h1 class="text-white text-center" style="z-index: 1;">Credit Card</h1>
         <h5 class="text-white text-center"  style="z-index: 1;">Quotes from 11 banks | Best Offers & Rewards Let’s find the best Credit Card for you!</h5>
      </div>
      <div class="col-md-8 p-5">
        <form>
          <div class="row">
             <div class="col-md-12">
            <h5 class="mb-3 font-weight-bold text-dark f-17">Provide few more details</h5>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Gender <span class="text-danger">*</span></label>
                <br>
                <input type="radio" name="residential" id="yes">
                <label for="Male">Male</label> &nbsp; <input type="radio" name="residential" id="no">
                <label for="Female">Female</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>PAN <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Please Mention PAN Number">
              </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group">
                <label>Aadhaar Number (Optional)</label>
                <input type="text" class="form-control" placeholder="Please Mention Aadhaar Number">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Residence Address <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Please Mention Residence Address">
              </div>
            </div>
          
            <div class="col-md-6">
              <div class="form-group">
                <label>Select State <span class="text-danger">*</span></label>
                <select class="form-control">
                <option value="0">Select State</option>
                <option value="m005">ANDAMAN & NICOBAR</option>
                <option value="037">ANDHRA PRADESH</option>
                <option value="240">ARUNACHAL PRADESH</option>
                <option value="229">ASSAM</option>
                <option value="m024">BIHAR</option>
                <option value="176">CHANDIGARH</option>
                <option value="036">CHATTISGARH</option>
                <option value="002">DAMAN & DIU</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Pincode <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Please Mention Pincode">
              </div>
            </div>
            <div class="col-md-12 text-right">
              <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
              <a href="thank-you.php" class="btn btn-primary">Submit</a>
            </div>

          </div>
        </form>
      </div>
      
    </div>
  </div>
</section>
<!-- <section>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="banner-box">
          <div class="icon">
            <i class="fa fa-balance-scale"></i>
          </div>
          <div class="dis">
            <p class="mb-2">It’s a Deal , you compare the quotes for Credit card, We get you, your CIBIL Score Absolutely free!</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="banner-box">
          <div class="icon">
            <i class="fa fa-tachometer"></i>
          </div>
          <div class="dis">
            <p class="mb-2">Get the CIBIL Edge before making a choice for your Credit card.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="banner-box">
          <div class="icon">
            <i class="fa fa-university "></i>
          </div>
          <div class="dis">
            <p class="mb-2">Quotes from 18 banks | Instant Approval | Maximum Loan Eligibility</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<section class="first-form d-none">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form class="pt-5 pb-5">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2>Credit Card</h2>
              <h5>Quotes from 11 banks | Best Offers & Rewards<br> Let’s find the best Credit Card for you!</h5>
            </div>
            <div class="col-md-12">
            <h5 class="mb-3 font-weight-bold text-dark f-17">Provide few more details</h5>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Gender <span class="text-danger">*</span></label>
                <br>
                <input type="radio" name="residential" id="yes">
                <label for="Male">Male</label> &nbsp; <input type="radio" name="residential" id="no">
                <label for="Female">Female</label>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>PAN <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Please Mention PAN Number">
              </div>
            </div>
            
            <div class="col-md-3">
              <div class="form-group">
                <label>Aadhaar Number (Optional)</label>
                <input type="text" class="form-control" placeholder="Please Mention Aadhaar Number">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Residence Address <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Please Mention Residence Address">
              </div>
            </div>
          
            <div class="col-md-3">
              <div class="form-group">
                <label>Select State <span class="text-danger">*</span></label>
                <select class="form-control">
                <option value="0">Select State</option>
                <option value="m005">ANDAMAN & NICOBAR</option>
                <option value="037">ANDHRA PRADESH</option>
                <option value="240">ARUNACHAL PRADESH</option>
                <option value="229">ASSAM</option>
                <option value="m024">BIHAR</option>
                <option value="176">CHANDIGARH</option>
                <option value="036">CHATTISGARH</option>
                <option value="002">DAMAN & DIU</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Pincode <span class="text-danger">*</span></label>
                <input type="text" class="form-control" placeholder="Please Mention Pincode">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
              <a href="thank-you.php" class="btn btn-primary">Submit</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
 @endsection