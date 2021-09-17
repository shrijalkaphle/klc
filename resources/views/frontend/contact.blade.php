@extends('layout.frontend')


@section('title','Contact | ' . $sitesetting->title)

@section('body')


<div class="contact-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div id="status"></div>
                <div class="contact-info">
                    <span class="sub-title">Contact Details</span>
                    <h2>Get in Touch</h2>
                    <ul>
                        <li>
                            <div class="icon"><i class="bx bx-map"></i></div>
                            <h3>Our Address</h3>
                            <p>{{ $sitesetting->address }}</p>
                        </li>
                        <li>
                            <div class="icon"><i class="bx bx-phone-call"></i></div>
                            <h3>Contact</h3>
                            <p>
                                Mobile:
                                <a href="tel:{{ $sitesetting->phone }}">{{ $sitesetting->phone }}</a>
                            </p>
                            <p>
                                Mail:
                                <a href="mailto:{{ $sitesetting->email }}">{{ $sitesetting->email }}</a>
                          </p>
                        </li>
                        <li>
                          <div class="icon"><i class="bx bx-time-five"></i></div>
                          <h3>Hours of Operation</h3>
                          <p>Sunday - Friday: {{ $sitesetting->timing }}</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="contact-form">
                    <h2>Ready to Get Started?</h2>
                    <p> Your email address will not be published. Required fields are marked * </p>
                    <form id="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Your Name*" required value=""/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your email address*" required value=""/>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <input type="number" name="number" placeholder="Your phone number" value=""/>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <input type="text" name="subject" placeholder="Your Subject*" required value=""/>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" cols="30" rows="5" placeholder="Write your message..." required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-sm-12">
                                <button class="default-btn">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if($sitesetting->iframe)
    <div id="map">
      <iframe src="{{ $sitesetting->iframe }}" ></iframe>
    </div>
@endif

@endsection

@section('script')
    <script>
        $('.contact').addClass('active')
        $('#contactForm').submit(function(e) {
            var data = $('#contactForm').serializeArray();
            var formData = _.object(_.pluck(data, 'name'), _.pluck(data, 'value'));
            e.preventDefault();
            $.ajax({
                url: 'contact/sumbit',
                method: 'post',
                data: formData,
                dataType: 'JSON',
                success: function(data) {
                    console.log(data.status)
                    html = ''
                    if(data.status == 'success') {
                        html = '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong><i class="fas fa-check-circle"></i></strong>We have recieved your message! We will get back to you as soon as possible!</div>'
                    } else {
                        html = '<div class="alert alert-danger alert-dismissible fade show" role="alert"><strong><i class="fas fa-exclamation-circle"></i></strong>Sorry, There was an error processing your request! Try Again after some time!</div>'
                    }
                    $('#status').html(html)
                    $('#contactForm').trigger("reset");
                }
            })
        })
    </script>
@endsection