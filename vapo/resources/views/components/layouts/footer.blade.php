<!--
    - FOOTER
  -->

<footer>
    <div class="footer-nav">

        <div class="container">

            <ul class="footer-nav-list">

                <li class="footer-nav-item">
                    <h2 class="nav-title">Popular Categories</h2>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Fashion</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Electronic</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Cosmetic</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Health</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Watches</a>
                </li>

            </ul>

            <ul class="footer-nav-list">

                <li class="footer-nav-item">
                    <h2 class="nav-title">Products</h2>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Prices drop</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">New products</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Best sales</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Contact us</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Sitemap</a>
                </li>

            </ul>

            <ul class="footer-nav-list">

                <li class="footer-nav-item">
                    <h2 class="nav-title">Our Company</h2>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Delivery</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Legal Notice</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Terms and conditions</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">About us</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Secure payment</a>
                </li>

            </ul>

            <ul class="footer-nav-list">

                <li class="footer-nav-item">
                    <h2 class="nav-title">Services</h2>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Prices drop</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">New products</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Best sales</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Contact us</a>
                </li>

                <li class="footer-nav-item">
                    <a href="#" class="footer-nav-link">Sitemap</a>
                </li>

            </ul>

            <ul class="footer-nav-list">

                <li class="footer-nav-item">
                    <h2 class="nav-title">Contact</h2>
                </li>

                <li class="footer-nav-item flex">
                    <div class="icon-box">
                        <ion-icon name="location-outline"></ion-icon>
                    </div>

                    <address class="content">
                        419 State 414 Rte
                        Beaver Dams, New York(NY), 14812, USA
                    </address>
                </li>

                <li class="footer-nav-item flex">
                    <div class="icon-box">
                        <ion-icon name="call-outline"></ion-icon>
                    </div>

                    <a href="tel:+607936-8058" class="footer-nav-link">(607) 936-8058</a>
                </li>

                <li class="footer-nav-item flex">
                    <div class="icon-box">
                        <ion-icon name="mail-outline"></ion-icon>
                    </div>

                    <a href="mailto:example@gmail.com" class="footer-nav-link">example@gmail.com</a>
                </li>

            </ul>

            <ul class="footer-nav-list">

                <li class="footer-nav-item">
                    <h2 class="nav-title">Follow Us</h2>
                </li>

                <li>
                    <ul class="social-link">

                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </a>
                        </li>

                        <li class="footer-nav-item">
                            <a href="#" class="footer-nav-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>

        </div>

    </div>

    <div class="footer-bottom">

        <div class="container">

            <img src="{{ asset('img/payment.png') }}" alt="payment method" class="payment-img">

            <p class="copyright">
                Copyright &copy; <a href="#">Anon</a> all rights reserved.
            </p>

        </div>

    </div>

</footer>


<!--
    - custom js link
  -->
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/user.js') }}"></script>
<script src="{{ asset('js/endereco.js') }}"></script>





 {{-- Formatar celular , cpf e cep --}}

<script>
    function formatarCelular(input) {
        // Remove todos os caracteres não numéricos do valor de entrada
        const inputValue = input.value.replace(/\D/g, '');

        // Verifica se o valor é um número válido (10 ou 11 dígitos)
        if (inputValue.length === 10) {
            input.value = '(' + inputValue.substring(0, 2) + ') ' + inputValue.substring(2, 6) + '-' + inputValue
                .substring(6);
        } else if (inputValue.length === 11) {
            input.value = '(' + inputValue.substring(0, 2) + ') ' + inputValue.substring(2, 7) + '-' + inputValue
                .substring(7);
        } else {
            // Caso contrário, mantém o valor original
            input.value = inputValue;
        }
    }
</script>
<script>
    function formatarCpf(input) {
        // Remove todos os caracteres não numéricos do valor de entrada
        const inputValue = input.value.replace(/\D/g, '');

        // Formata o CPF
        if (inputValue.length <= 3) {
            input.value = inputValue;
        } else if (inputValue.length <= 6) {
            input.value = inputValue.replace(/(\d{3})(\d+)/, '$1.$2');
        } else if (inputValue.length <= 9) {
            input.value = inputValue.replace(/(\d{3})(\d{3})(\d+)/, '$1.$2.$3');
        } else {
            input.value = inputValue.replace(/(\d{3})(\d{3})(\d{3})(\d+)/, '$1.$2.$3-$4');
        }
    }
</script>
<script>
    function formatarCep(input) {
        // Remove todos os caracteres não numéricos do valor de entrada
        const inputValue = input.value.replace(/\D/g, '');

        // Formata o CEP
        if (inputValue.length <= 5) {
            input.value = inputValue;
        } else {
            input.value = inputValue.replace(/(\d{5})(\d+)/, '$1-$2');
        }
    }
</script>



 {{-- Slick-slider link --}}

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>

<script>
    $('.detail-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
</script>


 {{-- jquery link --}}

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        let currentPromocao = 0;

        function switchPromocao() {
            const promoCount = $('.promocao').length;

            // Esconda a promoção atual
            $('.promocao').eq(currentPromocao).hide();

            // Avance para a próxima promoção
            currentPromocao = (currentPromocao + 1) % promoCount;

            // Mostre a próxima promoção
            $('.promocao').eq(currentPromocao).show();

            // Inicie o countdown novamente para a próxima promoção
            startCountdown();
        }

        function startCountdown() {
            let timeLeft = 24 * 60 * 60; // 24 horas em segundos

            function updateCountdown() {
                const hours = Math.floor(timeLeft / 3600);
                const minutes = Math.floor((timeLeft % 3600) / 60);
                const seconds = timeLeft % 60;

                // Atualize a exibição do countdown
                $('.display-number').eq(0).text(hours);
                $('.display-number').eq(1).text(minutes);
                $('.display-number').eq(2).text(seconds);

                // Verifique se o tempo acabou e mude para a próxima promoção
                if (timeLeft <= 0) {
                    switchPromocao();
                } else {
                    timeLeft--;
                    setTimeout(updateCountdown, 1000);
                }
            }

            updateCountdown();
        }

        // Inicie o countdown para a primeira promoção
        startCountdown();
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        setTimeout(function(){
            $(".alert").fadeOut("slow");
        }, 5000); // 3000 milissegundos = 3 segundos
    });
</script>


<!--
    - ionicon link
  -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<script>
    function exibirConfirmacao(enderecoId) {
        if (confirm('Tem certeza de que deseja excluir este endereço?')) {
            document.getElementById('deleteForm_' + enderecoId).submit();
        }
    }
</script>