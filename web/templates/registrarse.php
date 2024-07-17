<?php
include ('./web/templates/layout.php');
?>
<div class="auth-container mt-5">
    <div class="container" id="main">
        <div class="sign-up">
            <form action="#" method="post">
                <h1 class="mb-3">Crea una cuenta</h1>
                <input type="text" name="name" placeholder="Nombre y Apellidos" required="">
                <input type="text" name="user" placeholder="Usuario" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="pass1" placeholder="Contraseña" required="">
                <input type="password" name="pass2" placeholder="Repite contraseña" required="">
                <button type="button" id="createAccountBtn">Crea tu cuenta</button> <!-- Cambiado a button y añadido id -->
            </form>
        </div>
        <div class="sign-in">
            <form action="#" method="post">
                <h1 class="mb-3">Inicia Sesión</h1>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="pass1" placeholder="Contraseña" required="">
                <a href="#">¿Has olvidado tu contraseña?</a>
                <button name="bAceptar">Inicia sesión</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>¡Te echábamos de menos!</h1>
                    <p>Para mantenernos en contacto por favor regístrate con tu información personal</p>
                    <button id="sign-in">Inicia Sesión</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>¡Bienvenid@!</h1>
                    <p>Introduce tus datos y comienza tu aventura con nosotros</p>
                    <button id="sign-up">Regístrate</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="termsModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Términos y Condiciones</h2>
              
            </div>
            <div class="modal-body">
                <p>Aquí van los términos y condiciones. Puedes añadir todo el contenido legal necesario para tu aplicación o sitio web.</p>
                <ul>
                    <li>Artículo 1: Aceptación de términos.</li>
                    <li>Artículo 2: Uso del servicio.</li>
                    <li>Artículo 3: Derechos y responsabilidades.</li>
                    <li>Artículo 4: Limitaciones de responsabilidad.</li>
                    <li>Artículo 5: Modificaciones de los términos.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button id="acceptTermsBtn">Acepto los términos</button>
                <button id="closeModalBtn">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const signUpButton = document.getElementById('sign-up');
    const signInButton = document.getElementById('sign-in');
    const container = document.getElementById('main');

    signUpButton.addEventListener('click', () => {
        container.classList.add('right-panel-active');
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove('right-panel-active');
    });

    // Obtener el modal y los botones
    const modal = document.getElementById('termsModal');
    const closeModalButton = document.getElementById('closeModal');
    const closeModalBtn = document.getElementById('closeModalBtn');
    const acceptTermsBtn = document.getElementById('acceptTermsBtn');
    const createAccountBtn = document.getElementById('createAccountBtn');

    // Mostrar el modal al hacer clic en "Crea tu cuenta"
    if (createAccountBtn) {
        createAccountBtn.addEventListener('click', () => {
            modal.style.display = 'block';
            document.querySelector('.auth-container').classList.add('modal-active'); // Oculta el contenido de autenticación
        });
    }

    // Aceptar los términos y condiciones y ocultar el modal
    if (acceptTermsBtn) {
        acceptTermsBtn.addEventListener('click', () => {
            modal.style.display = 'none';
            document.querySelector('.auth-container').classList.remove('modal-active'); // Muestra el contenido de autenticación
        });
    }

    // Cerrar el modal
    if (closeModalButton) {
        closeModalButton.addEventListener('click', () => {
            modal.style.display = 'none';
            document.querySelector('.auth-container').classList.remove('modal-active'); // Muestra el contenido de autenticación
        });
    }

    if (closeModalBtn) {
        closeModalBtn.addEventListener('click', () => {
            modal.style.display = 'none';
            document.querySelector('.auth-container').classList.remove('modal-active'); // Muestra el contenido de autenticación
        });
    }

    // Cerrar el modal al hacer clic fuera de él
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
            document.querySelector('.auth-container').classList.remove('modal-active'); // Muestra el contenido de autenticación
        }
    });
});
</script>
