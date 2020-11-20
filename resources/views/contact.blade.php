@extends('layouts.base')

@section("content")
<div class="d-flex flex-column align-items-center">
    <div class="w-50 justify-content-center">
        <img src="/images/contact-us.png" alt="Contact Us Icon" class="img-fluid">
    </div>
    <section class="col-md-10">
        <div class="message-text"><span style="font-size:17px; font-weight:bold; ">BeMo Academic Consulting Inc.
            </span><br /><span><span style="font-size:13px; font-weight:bold; "><u>Toll Free</u></span><span
                    style="font-size:13px; ">: </span><span style="font-size:14px; ">1-855-900-BeMo
                    (2366)</span><span style="font-size:13px; "><br /></span><span
                    style="font-size:13px; font-weight:bold; "><u>Email</u></span><span style="font-size:13px; ">:
                </span><span style="font-size:14px; "><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                        data-cfemail="1a73747c755a787f77757b797b7e7f777379797574696f766e73747d34797577">[email&#160;protected]</a></span>
        </div><br />
        <form action="/contact" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Name:</label> *<br />
                <input class="form-control" type="text" value="" name="name" size="40" /><br /><br />
            </div>
            <div class="form-group">
                <label>Email Address:</label> *<br />
                <input class="form-control" type="text" value="" name="email" size="40" /><br /><br />
            </div>
            <div class="form-group">
                <label>How can we help you?</label> *<br />
                <textarea class="form-control" name="message" rows="8" cols="38"></textarea><br /><br />
            </div>
            <div style="display: none;">
                <label>Spam Protection: Please don't fill this in:</label>
                <textarea name="comment" rows="1" cols="1"></textarea>
            </div>
            <input class="btn btn-info btn-lg" type="submit" name="submitButton" value="Submit" />
        </form>
        <br />
        <div class="form-footer"><span style="font-size:15px; font-weight:bold; "><u>Note</u></span><span
                style="font-size:15px; ">: If you are having difficulties with our contact us form above, send us an
                email to <a href="mailto:email@exampledomain.com" class="__cf_email__"
                    data-cfemail="1a73747c755a787f77757b797b7e7f777379797574696f766e73747d34797577">email@exampledomain.com</a>
                </span><span style="font-size:13px; "><br /></span>
        </div>
    </section>
</div>
@endsection
