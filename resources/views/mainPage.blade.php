@extends('layouts.app')

@section('content')
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
                <form class="needs-validation check_buyer">
                    <div class="row g-3 py-2">
                        <div class="col-12">
                            <label for="firstName" class="form-label py-1 fw-bold">Telefon kupującego</label>
                            <span class="d-flex">
                                <div class="form-check py-1">
                                    <input class="form-check-input" data-type="phone_number" style="width: 25px; height: 25px; margin-right: 10px;" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                </div>
                                <input type="text" class="form-control phone_number" data-type="phone_number" id="firstName">
                            </span>
                        </div>
                    </div>
                    <div class="row g-3 py-2">
                        <div class="col-12">
                            <label for="lastName" class="form-label py-1 fw-bold">Imię lub nazwisko kupującego</label>
                            <span class="d-flex">
                                <div class="form-check py-1">
                                    <input class="form-check-input" data-type="check_by_name" style="width: 25px; height: 25px; margin-right: 10px;" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                </div>
                                <input type="text" class="form-control" data-type="check_by_name" id="firstName" placeholder="" value="">
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
            <form class="needs-validation add_black_list">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="col py-2">
                            <label for="Telefon" class="form-label">Telefon kupującego <span class="text-danger">*</span></label>
                            <input type="text" class="form-control phone_number" id="Telefon" name="phone" required>
                        </div>
                        <div class="col py-2">
                            <label for="firstName" class="form-label">Nazwisko kupującego <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="firstName" placeholder="Nazwisko kupującego" name="last_name" required>
                        </div>
                        <div class="col py-2">
                            <label for="firstName" class="form-label">Imię kupującego</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Imię kupującego" name="name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="col py-2">
                            <label for="dostawa" class="form-label">Dostawa</label>
                            <select class="form-select" id="dostawa" name="delivery" required>
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
                            <input type="text" class="form-control" id="firstName" name="ttn" required="">
                        </div>
                        <div class="col py-2">
                            <label for="firstName" class="form-label">Komentarz</label>
                            <textarea class="form-control" rows="4" name="comment" placeholder="Klient nie odebrał towaru. Nadawca poniósł koszty wysyłki."></textarea>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div id="alert_black_list">
                </div>
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
@endsection
