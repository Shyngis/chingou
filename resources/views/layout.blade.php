<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<body class="bg-dark ">
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 bg-dark border-bottom shadow-sm">
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <span class="fs-4" ><font color="#7fffd4"> Chingou</font>></span>
    </a>

    <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 text-white text-decoration-none" href="/main">Price list</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="/about">About us</a>
        <a class="me-3 py-2 text-white text-decoration-none" href="/address">Our address's</a>
    <!-- <a class="py-2 text-white text-decoration-none" href="/pink">reviews</a> -->

    </nav>
    <a class="btn btn-sm btn-outline-warning" href="/ordering">Start ordering</a>
</div>


<div class="container">

    @yield('same_content')


</div>
</body>
</html>
<!-- Footer -->
<footer class="bg-dark width=100%    text-center text-white">
    <hr style="width:100%" size="5" >
    <section class="mb-4 width=100%">
        <h3>
            As we are constantly striving to improve our reporting,
            we would very much welcome your feedback.
        </h3>
    </section>
    <section class="">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h8 class="text-uppercase">We are on social media</h8>
                <ul class="list-unstyled mb-0">
                    <li>
                        <a href="https://instagram.com/rodnoiburger?igshid=YmMyMTA2M2Y=" target="blank" class="text-white">Instagram</a>
                    </li>
                    <li>
                        <a href="https://chatwith.io/s/shyngys" target='blank' class="text-white">WhatsApp</a>
                    </li>
                    <li>
                        <a href="https://vk.com/burgerking_kz" target="blank" class="text-white">Vkontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    </div>

    <div class="text-center p-3 bg-dark" style="background-color:;">
        © 2022 Chingou:
        <a class="text-white" href="#">Fast-food</a>
    </div>
</footer>



