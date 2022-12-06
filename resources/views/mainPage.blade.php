@extends('layouts.app')
 
@section('content')
    <div class="container my_container" style="padding-top: 3rem">
        <h1 class="fw-bold text-center">MyBlackList - czarna lista kupujących w Polsce</h1>
        <p class="col fs-5 py-4" style="text-align: justify">Baza kupujących bez skrupułów, którzy nie odebrali towaru po zamówieniu usługi pocztowej (płatność za pobraniem), podczas gdy sprzedawca ponosił straty i płacił za dostawę. Czarna lista jest wypełniona sprzedawcami towarów. Administracja serwisu nie ponosi odpowiedzialności za informacje zamieszczane przez użytkowników.</p>
        <h2 class="text-center">Największa baza nieuczciwych klientów w Polsce</h2>
        <h2 class="text-center">Zaufało nam ponad <span class="text-danger fw-bold">521</span> sklepów. W naszej bazie mamy ponad <span class="text-danger fw-bold count">{{$users_count}}</span> klientów</h2>
    </div>
    <div class="container" id="check_buyer">
        <div class="row">
            <h2 class="text-center pt-5 my_container">Sprawdźmy razem kupującego</h2>
            <p class="fs-4 text-center">Do tej pory zweryfikowano już <span class="fw-bold text-danger">{{ $today_checked }}</span> kupujących, z czego <span class="fw-bold text-danger">{{ $finded }}</span> okazało się nieuczciwych.</p>
            <div class="col-md-6 p-4">
                <form class="needs-validation check_buyer">
                    <div class="row g-3 py-2">
                        <div class="col-12">
                            <label for="find_phone" class="form-label py-1 fw-bold">Telefon kupującego</label>
                            <span class="d-flex">
                                <div class="form-check py-1">
                                    <input class="form-check-input" data-type="phone_number" style="width: 25px; height: 25px; margin-right: 10px;" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                </div>
                                <input type="text" class="form-control phone_number check" data-type="phone_number" id="find_phone">
                            </span>
                        </div>
                    </div>
                    <div class="row g-3 py-2">
                        <div class="col-12">
                            <label for="find_name" class="form-label py-1 fw-bold">Nazwisko kupującego</label>
                            <span class="d-flex">
                                <div class="form-check py-1">
                                    <input class="form-check-input" data-type="check_by_name" style="width: 25px; height: 25px; margin-right: 10px;" type="radio" name="flexRadioDefault">
                                </div>
                                <input type="text" class="form-control check" data-type="check_by_name" id="find_name" placeholder="" value="">
                            </span>
                        </div>
                    </div>

                    <hr class="my-4">

                    <button class="w-100 btn btn-primary btn-lg" type="submit">Sprawdź Kupującego</button>
                </form>
            </div>
            <div class="col-md-6 p-4 result_info">
                <label class="form-label py-1 fw-bold search_lbl" style="margin-top: 5px;">Chcesz pomóc projektowi?</label>
                <p style="text-align: justify">Później opublikujemy rzeczywiste szczegóły, aby pomóc projektowi. W tej chwili wszystkie funkcje są bezpłatne.</p>
            </div>
        </div>
    </div>
    <div class="container" id="add_to_black_list">
        <div class="row">
            <h2 class="text-center pt-5 pb-3 my_container">Dodaj kupującego do czarnej listy</h2>
            <p class="fs-4 text-center">Kupujący nie odebrał przesyłki? Dodajmy go do naszej bazy danych. Poinformuj innych sprzedawców, aby uważali na tego kupującego. Dzisiaj dodano <span class="fw-bold text-danger">{{ $today_added }}</span> pozbawionych skrupułów kupujących</p>
            <form class="needs-validation" id="add_black_list">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="col py-2">
                            <label for="add_phone" class="form-label">Telefon kupującego <span class="text-danger">*</span></label>
                            <input type="text" class="form-control phone_number" id="add_phone" name="phone" required>
                        </div>
                        <div class="col py-2">
                            <label for="add_last_name" class="form-label">Nazwisko kupującego <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="add_last_name" placeholder="Nazwisko kupującego" name="last_name" required>
                        </div>
                        <div class="col py-2">
                            <label for="add_name" class="form-label">Imię kupującego <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="add_name" placeholder="Imię kupującego" name="name" required>
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
                            <label for="add_ttn" class="form-label">Numer listu przewozowego <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="add_ttn" name="ttn" required="">
                        </div>
                        <div class="col py-2">
                            <label for="add_comment" class="form-label">Komentarz</label>
                            <textarea class="form-control" id="add_comment" rows="4" name="comment" placeholder="Klient nie odebrał towaru. Nadawca poniósł koszty wysyłki."></textarea>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div id="alert_black_list"></div>
                <button class="w-100 btn btn-primary btn-lg" type="submit">Dodaj nieuczciwego kupca do bazy</button>
            </form>
        </div>
    </div>
    <div class="container px-4" id="how_its_works">
        <h2 class="text-center py-5 my_container">Jak to działa?</h2>
        <div class="row g-4 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <span class="badge bg-primary rounded-pill">1</span>
                </div>
                <div>
                    <h3>Dodanie do bazy</h3>
                    <p>Jeśli trafisz na pozbawionego skrupułów kupca i zechcesz dodać go do bazy, wystarczy wypełnić formularz</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <span class="badge bg-primary rounded-pill">2</span>
                </div>
                <div>
                    <h3>List przewozowy</h3>
                    <p>Obowiązkowe jest wskazanie listu przewozowego usługi dostawy w celu potwierdzenia wniosku</p>
                </div>
            </div>
            <div class="col d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <span class="badge bg-primary rounded-pill">3</span>
                </div>
                <div>
                    <h3>Dla sprzedawcy</h3>
                    <p>Przed wysłaniem towaru wystarczy, że sprzedawca po prostu sprawdzi odbiorcę i bezpiecznie wyśle towar za pobraniem</p>
                </div>
            </div>
        </div>
    </div>
@endsection
