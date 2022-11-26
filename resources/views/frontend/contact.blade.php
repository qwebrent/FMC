@extends('layouts.mainlayout')

@include('layouts.partials.sub-partials.crumbsContact')

@section('content')
    <!-- contact form -->
    <div class="contact-from-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="form-title">
                        <h2>Have you any question?</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Pariatur, ratione! Laboriosam est, assumenda. Perferendis, quo
                            alias quaerat aliquid. Corporis ipsum minus voluptate? Dolore,
                            esse natus!
                        </p>
                    </div>
                    <div id="form_status"></div>
                    <div class="contact-form">
                        <form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
                            <p>
                                <input type="text" placeholder="Name" name="name" id="name" />
                                <input type="email" placeholder="Email" name="email" id="email" />
                            </p>
                            <p>
                                <input type="tel" placeholder="Phone" name="phone" id="phone" />
                                <input type="text" placeholder="Subject" name="subject" id="subject" />
                            </p>
                            <p>
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </p>
                            <input type="hidden" name="token" value="FsWga4&@f6aw" />
                            <p><input type="submit" value="Submit" /></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-form-wrap">
                        <div class="contact-form-box">
                            <h4><i class="fas fa-map"></i> Shop Address</h4>
                            <p>
                                34/8, East Hukupara <br />
                                Gifirtok, Sadan. <br />
                                Country Name
                            </p>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="far fa-clock"></i> Shop Hours</h4>
                            <p>
                                MON - FRIDAY: 8 to 9 PM <br />
                                SAT - SUN: 10 to 8 PM
                            </p>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="fas fa-address-book"></i> Contact</h4>
                            <p>
                                Phone: +00 111 222 3333 <br />
                                Email: support@fruitkha.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact form -->

    <!-- find our location -->
    <div class="find-location blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p><i class="fas fa-map-marker-alt"></i> Find Our Location</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end find our location -->

    <!-- google map section -->
    <div class="embed-responsive embed-responsive-21by9">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3868.926208720335!2d121.30553301478379!3d14.14043579009683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd5d3b7c32a31d%3A0xef0ed0e396827c8c!2sFMC%20Catering%20Services!5e0!3m2!1sfil!2sph!4v1669431943010!5m2!1sfil!2sph"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- end google map section -->
@endsection
