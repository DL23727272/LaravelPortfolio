@section('contact')
<!-- contact section starts  -->

<section class="contact">

    <h1 class="heading"> contact <span>me</span> </h1>

    <div class="row">

        <div class="info-container">

            <h1>get in touch</h1>

            <p>For any sort of help or inquiries, feel free to send me an email and I'll get back to you soon.</p>

            <div class="box-container">

                <div class="box">
                    <i class="fas fa-map"></i>
                    <div class="info">
                        <h3>address :</h3>
                        <p>Ilocos Sur, Philippines - 1233</p>
                    </div>
                </div>

                <div class="box">
                    <i class="fas fa-envelope"></i>
                    <div class="info">
                        <h3>email :</h3>
                        <p>dldoesvisuals@gmail.com</p>
                    </div>
                </div>

                <div class="box">
                    <i class="fas fa-phone"></i>
                    <div class="info">
                        <h3>number :</h3>
                        <p>+639456221399</p>
                    </div>
                </div>

            </div>

            <div class="share">
                <a href="https://www.facebook.com/DLuvsss/" target="_blank" class="fab fa-facebook-f"> </a>
                <a href="https://www.instagram.com/_youngdl/" target="_blank" class="fab fa-instagram"></a>
                <a href="#" target="_blank" class="fab fa-github"></a>
            </div>

        </div>

        <form class="gform pure-form pure-form-stacked" method="POST" data-email="dldoesvisuals@gmail.com"
        action="#">


            <div class="inputBox">
                <input type="text" name="name" placeholder="Your Name">
                <input type="number" name="number" placeholder="Your Number">
            </div>

            <div class="inputBox">
                <input type="email" name="email" placeholder="Your Email">
                <input type="text" name="subject" placeholder="Your Subject">
            </div>

            <textarea name="message" placeholder="Your Message" id="" cols="30" rows="10"></textarea>

            <input type="submit" value="send message" class="btn">
            <br> </br>
            <div class="thankyou_message" style="display:none;background-color: #84b124;
            border:8px solid #84b124;border-radius: 30px;width: 200px;padding-top: 5px;padding-bottom: 10px;
            padding-left: 5px;padding-right: 5px;">

                <h1 style="color: white;text-align: center;font-size:medium;">Message Sent</h1>

        </form>

    </div>

    </section>

    <!-- contact section ends -->
