@yield('modal')

@if (Session::has('success'))
    <div class="modal testmodal" id="modalsuccess" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="modalfont"> {{ Session::get('success') }}</p>
                    <div class="btn-form">
                        <button type="button" class="btn btn-secondary" id="btnsuccess"
                            data-dismiss="modal">Выйти</button>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endif
<div class="modal" id="overlay" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{ url('phonesender') }}" method="post">
                    @csrf
                    <p class="modalfont">Позвоните нам <br><span class="number"><a>+7 (926) 249-02-84</a></span>
                        <br>или оставьте свой номер телефона
                        <input class="telephone" type="tel" id="tel" name="tel"
                            placeholder=" Введите ваш телефон">
                        , <br>мы Вам перезвоним.
                    </p>
                    <div class="btnform"><button type="submit" class="btn btn-primary senderbtn">Отправить</button>
                </form>
            </div>

        </div>

    </div>
</div>
