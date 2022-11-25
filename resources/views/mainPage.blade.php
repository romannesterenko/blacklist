
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Myblacklist - Czarna lista kupujących w Polsce</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>
</head>
<body>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="bootstrap" viewBox="0 0 118 94">
        <title>Bootstrap</title>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
    </symbol>
    <symbol id="home" viewBox="0 0 16 16">
        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
    </symbol>
    <symbol id="speedometer2" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
    </symbol>
    <symbol id="table" viewBox="0 0 16 16">
        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
    </symbol>
    <symbol id="people-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
    </symbol>
    <symbol id="grid" viewBox="0 0 16 16">
        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
    </symbol>
</svg>

<main>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">My Blacklist</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item"><a href="/#check_buyer" class="nav-link px-2 text-white">Sprawdź Kupującego</a></li>
                    <li class="nav-item"><a href="/#add_to_black_list" class="nav-link px-2 text-white">Dodać do czarnej listy</a></li>
                    <li class="nav-item"><a href="/#how_its_works" class="nav-link px-2 text-white">Jak to działa?</a></li>
                    <li class="nav-item"><a href="/#feedback" class="nav-link px-2 text-white">Informacja zwrotna</a></li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="container" style="padding-top: 3rem">
            <h1 class="display-5 fw-bold">MyBlackList - czarna lista kupujących w Polsce</h1>
            <p class="col fs-4 py-4" style="text-align: justify">Baza kupujących bez skrupułów, którzy nie odebrali towaru po zamówieniu usługi pocztowej (płatność za pobraniem), podczas gdy sprzedawca ponosił straty i płacił za dostawę. Czarna lista jest wypełniona sprzedawcami towarów. Administracja serwisu nie ponosi odpowiedzialności za informacje zamieszczane przez użytkowników.</p>
            <h2 class="text-center">Największa baza nieuczciwych klientów w Polsce</h2>
            <h2 class="text-center">Zaufało nam ponad <span class="text-danger fw-bold">1000</span> sklepów. W naszej bazie mamy ponad <span class="text-danger fw-bold count">5000</span> klientów</h2>
        </div>
        <div class="container" id="check_buyer">
            <div class="row">
                <h2 class="text-center py-5">Sprawdźmy razem kupującego</h2>
                <div class="col-2 d-none d-md-block"></div>
                <div class="col-md-8 p-4">
                    <form class="needs-validation" novalidate="">
                        <div class="row g-3 py-2">
                            <div class="col-12">
                                <label for="firstName" class="form-label py-1 fw-bold">Telefon kupującego</label>
                                <span class="d-flex">
                                    <div class="form-check py-1">
                                        <input class="form-check-input phone_name" style="width: 25px; height: 25px; margin-right: 10px;" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                    </div>
                                    <input type="text" class="form-control phone_number" id="firstName" placeholder="" value="">
                                </span>
                            </div>
                        </div>
                        <div class="row g-3 py-2">
                            <div class="col-12">
                                <label for="lastName" class="form-label py-1 fw-bold">Imię lub nazwisko kupującego</label>
                                <span class="d-flex">
                                    <div class="form-check py-1">
                                        <input class="form-check-input" style="width: 25px; height: 25px; margin-right: 10px;" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    </div>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="">
                                </span>
                            </div>
                        </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Sprawdź Kupującego</button>
                    </form>
                </div>
                <div class="col-2 d-none d-md-block"></div>
            </div>
        </div>
        <div class="container" id="add_to_black_list">
            <div class="row">
                <h2 class="text-center py-5">Dodać do czarnej listy</h2>
                <form class="needs-validation" novalidate="">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="col py-2">
                                <label for="Telefon" class="form-label">Telefon kupującego <span class="text-danger">*</span></label>
                                <input type="text" class="form-control phone_number" id="Telefon" placeholder="" value="">
                            </div>
                            <div class="col py-2">
                                <label for="firstName" class="form-label">Nazwisko kupującego <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            </div>
                            <div class="col py-2">
                                <label for="firstName" class="form-label">Imię kupującego</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col py-2">
                                <label for="country" class="form-label">Dostawa</label>
                                <select class="form-select" id="country" required="">
                                    <option value="">Wybierz usługę dostawy...</option>
                                    <option value="in_post">InPost</option>
                                    <option value="dpd">DPD</option>
                                    <option value="poland_post">Poczta Polska</option>
                                    <option value="gls">GLS</option>
                                    <option value="ups">UPS</option>
                                    <option value="furgonetka">Furgonetka</option>
                                </select>
                            </div>
                            <div class="col py-2">
                                <label for="firstName" class="form-label">Numer listu przewozowego <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            </div>
                            <div class="col py-2">
                                <label for="firstName" class="form-label">Komentarz <span class="text-danger">*</span></label>
                                <textarea name="" class="form-control" rows="4" placeholder="Klient nie odebrał towaru. Nadawca poniósł koszty wysyłki." required></textarea>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Dodaj nieuczciwego kupca do bazy</button>
                </form>
            </div>
        </div>
        <div class="container px-4" id="how_its_works">
            <h2 class="text-center py-5">Jak to działa?</h2>
            <div class="row g-4 row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                        <span class="badge bg-primary rounded-pill">1</span>
                    </div>
                    <div>
                        <h4>Dodanie do bazy</h4>
                        <p>Jeśli trafisz na pozbawionego skrupułów kupca i zechcesz dodać go do bazy, wystarczy wypełnić formularz</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                        <span class="badge bg-primary rounded-pill">2</span>
                    </div>
                    <div>
                        <h4>List przewozowy</h4>
                        <p>Obowiązkowe jest wskazanie listu przewozowego usługi dostawy w celu potwierdzenia wniosku</p>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                    <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                        <span class="badge bg-primary rounded-pill">3</span>
                    </div>
                    <div>
                        <h4>Dla sprzedawcy</h4>
                        <p>Przed wysłaniem towaru wystarczy, że sprzedawca po prostu sprawdzi odbiorcę i bezpiecznie wyśle towar za pobraniem</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="feedback">
            <div class="row">
                <h2 class="text-center py-5">Formularz zwrotny</h2>
                <p class="text-center">Czy masz jakieś sugestie lub uwagi dotyczące usługi? Wypełnij formularz zwrotny z komentarzem, zostaw swój numer telefonu, a my oddzwonimy!</p>
                <form class="needs-validation" novalidate="">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">First name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col py-2">
                            <label for="firstName" class="form-label">Komentarz <span class="text-danger">*</span></label>
                            <textarea name="" class="form-control" rows="4" placeholder="Klient nie odebrał towaru. Nadawca poniósł koszty wysyłki." required></textarea>
                        </div>
                    </div>

                    <hr class="my-4">
                    <button class="w-100 btn btn-primary btn-lg" type="submit">Dodaj nieuczciwego kupca do bazy</button>
                </form>
            </div>
        </div>
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
        <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <p class="text-muted">© 2022</p>
        </div>

        <div class="col mb-3">

        </div>

        <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
        </div>

        <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
        </div>
    </footer>
</main>

<script src="/js/jquery-3.6.1.min.js"></script>
<script src="/js/jquery.mask.min.js"></script>
<script src="/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="/js/custom.js"></script>


</body>
</html>
