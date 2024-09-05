@extends('frontend.layouts.main')
@section('content')
<section id="contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
      <div>
          <h2>Contact Us</h2>
      </div>
                <form id="contact_form" name="contact_form" method="post">
        <div class="mb-5 row">
        <div class="col">
            <label>First Name</label>
            <input type="text" required maxlength="50" class="form-control" id="first_name" name="first_name">
        </div>
        <div class="col">
            <label>Last Name</label>
            <input type="text" required maxlength="50" class="form-control" id="last_name" name="last_name">
        </div>
        </div>
        <div class="mb-5 row">
            <div class="col">
                <label for="email_addr">Email address</label>
                <input type="email" required maxlength="50" class="form-control" id="email_addr" name="email"
            placeholder="name@example.com">
            </div>
            <div class="col">
                <label for="phone_input">Phone</label>
                <input type="tel" required maxlength="50" class="form-control" id="phone_input" name="Phone"
            placeholder="Phone">
            </div>
            </div>
            <div class="mb-5">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-dark px-4 btn-lg">Post</button>
        </form>
            </div>
  </div>
    </div>

</section>
@endsection
