@extends('master') @section('content')

<section class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <div class="form-area">
        <form id="text" role="form">
          <br style="clear:both">
          <h5 class="h5h5" style="margin-bottom: 10px;">Contact Us!</h5>
          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>

          <div class="form-group">
            <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
          </div>
          <button type="button" id="submit" name="submit" class=" btn btn-outline-dark pull-right" style="color:green;">Submit</button>
        </form>
      </div>
    </div>
    <div class="padding3 col-1">
        <i class="green fab fa-reddit-square fa-5x"></i>
    </div>
    <div class="padding3 col-1">
        <i class="green fab fa-twitter fa-5x"></i>
    </div>
    <div class="padding3 col-1">
        <i class="green fab fa-instagram fa-5x"></i>
    </div>
    <div class="padding3 col-1">
        <i class="green fab fa-facebook-square fa-5x"></i>
    </div>
</div>

</section>
@endsection
