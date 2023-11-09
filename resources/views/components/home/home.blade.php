@section('home')
<!-- home section starts  -->

<section class="home">

    <div class="image">
        <img src="{{ asset('assets/images/DLweb.jpg') }}" alt="">
    </div>

    <div class="content">
        <h3>Hi, I am DL Gamoso</h3>
        <p>A 20-year's-old BSIT Student based in Ilocos Sur, Philippines.</p>
        <span>BSIT Student of Ilocos Sur Polytechnic State College</span>

        <pre>
        <a href="/about">
<button onclick="#" style="background-color:crimson;padding: 8px;color:#ffffff;border-radius:5px; font-size: 20px; font-family: 'Poppins', sans-serif;cursor:pointer;
 animation:movedown 1s linear 1;animation-delay:0.5s;visibility:hidden;animation-fill-mode:forwards">  About Me  <i class="fas fa-user" style="font-size: 30apx" style='align-items:center;';></i>  </button>
        </a>
        <pre>

        <p id="test"></p>

        <script>
            function doSomething(){
                document.getElementById("test").innerHTML = "";
            }
        </script>
    </div>


</section>

<!-- home section ends -->
