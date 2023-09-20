@yield('footer')

<footer class = "about">
    <div class="container-fluid footertest">
        <div class="row">
            <div class="navmenu footer-container-box">
                <div class="texter">
                    <p class="footer">&#169; Нейла и Мартинас Гуляевы, <span class="lucida">2023</span></p>
                </div>
                <div class="texter">
                    <p class="footer">Дизайн: <a href="" class="contacta">Нейла</a> и Мартинас Гуляевы<br>Разработка: <a class="contacta"
                            href="http://gulyaevmartinas.ru/">Мартинас Гуляев</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Вариант 1: пакет jQuery и Bootstrap (включает Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
</script>
<script src="js/closemodal.js"></script>

<script src="js/maskinput.js"></script>
<script src="js/dropmenu.js"></script>
<script src="js/dropmodal.js"></script>
<script src="js/telmask.js"></script>
<script type="text/javascript">
    function disablecontext(e) {
        var clickedEl = (e==null) ? event.srcElement.tagName : e.target.tagName;
        if (clickedEl == "IMG") {
            alert(errorMsg);
            return false;
        }
    }
    var errorMsg = "Вы не можете сохранять изображения с этого сайта.";
    document.oncontextmenu = disablecontext;
</script>



</body>

</html>