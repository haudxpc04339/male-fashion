@extends('client.layout.master')
@section('content')
<!-- Map Begin -->
  <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d111551.9926412813!2d-90.27317134641879!3d38.606612219170856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1597926938024!5m2!1sen!2sbd" height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<!-- Map End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__text">
                    <div class="section-title">
                        <span>Thông tin</span>
                        <h2>Liên hệ</h2>
                        <p>Như bạn có thể mong đợi về một công ty bắt đầu với tư cách là nhà thầu nội thất cao cấp, chúng tôi rất chú ý.</p>
                    </div>
                    <ul>
                        <li>
                            <h4>Kiên Giang</h4>
                            <p>ấp Tà Lóc, xã Sơn Kiên huyện Hòn Đất, tỉnh Kiên Giang<br />+43 982-314-0958</p>
                        </li>
                        <li>
                            <h4>Cần Thơ</h4>
                            <p>Trần Chiên, Cái Răng, Cần Thơ <br />+12 345-423-9893</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Message"></textarea>
                                <button type="submit" class="site-btn">Gửi tin nhắn</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@endsection