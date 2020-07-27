<?php
    require __DIR__ . '/app.php';
    include('views/header.php');
?>
        <section class="hero"> <!-- pirmos sekcijos pradzia -->
            <div class="container">
                <h1>Grožis ir pasitikėjimas savimi <br> prasideda čia</h1>
                <p>Rūpinkitės savo veido oda kasdien ir tai atsispindės ateityje.</p>
                <!-- paspaudus nuveda iki registracijos formos -->
                <a href="#registracija" class="registracija">Registracija vizitui</a>
            </div>
        </section> <!-- pirmos sekcijos pabaiga -->
        <section class="about-us"> <!-- sekcija apie-mus nukreipia i kita psl-->
            <div class="container">
                <h2>Apie mus</h2>
                <p>Savo veiklą vykdau daugiau nei 3 metus, kasdien tobulindamasi <br> ir gilindama žinias ne tik teoriškai, bet ir praktiškai. </p>
                <a href="/views/apie_mus.php" class="about-us-button">Skaityti daugiau</a>
            </div>
        </section> <!-- sekcijos apie-mus pabaiga -->

        <section class="nuotraukos container"> <!-- ivaizdines foto -->
            <div class="galerija">
                <img src="images/IMG_1637.jpg" alt="Skaistinamoji-procedūra">
                <img src="images/IMG_1638.jpg" alt="Veido-valymas">
                <img src="images/IMG_1639.jpg" alt="Drėkinančioji-procedūra">
                <img src="images/IMG_1636.jpg" alt="Veido-procedūra">
            </div>
        </section> <!-- ivaizdines foto -->

        <section class="paslaugos"> <!-- trumpai apie paslaugas, nukreipia i psl paslaugos -->
            <div class="container">
                <h2>Veido procedūros</h2>
                <div class="proceduros">
                    <div class="proceduros-item">
                        <h3>Veido valymas</h3>
                        <img src="images/proc1.jpg" alt="Veido valymas">
                        <p>Pašalinami inkštirai, <br> kitos veido problemos...</p>
                        <a href="paslaugos.php" class="read-more">Skaityti daugiau</a>
                    </div>
                    <div class="proceduros-item">
                        <h3>Aparatinis valymas</h3>
                        <img src="images/proc2.jpg" alt="Veido Valymas">
                        <p>Aparato pagalba išvalomi <br> inkštirai...</p>
                        <a href="paslaugos.php" class="read-more">Skaityti daugiau</a>
                    </div>
                    <div class="proceduros-item">
                        <h3>Skaistinamoji procedūra</h3>
                        <img src="images/proc3.jpg" alt="Skaistinamoji procedūra">
                        <p>Priemonių pagalba odai <br> suteikiama...</p>
                        <a href="paslaugos.php" class="read-more">Skaityti daugiau</a>
                    </div>
                </div>
            </div>
        </section> <!-- trumpai apie paslaugas pabaiga -->

        <section class="registracija" id="registracija"> <!-- registracijos formos pradzia -->
            <div class="container">
                <p class="regisrtacija-aprasymas">Užpildykite registracijos formą ir susisieksiu su Jumis per 24 val. <br> arba registruokitės telefonu: (8-699) 99899</p>
            </div>
            <div class="container registracija-holder">
                <div class="registracija-left">
                    <img src="images/aiste.jpg" alt="Hipokratė">
                </div>

                <div class="registracija-forma">
                    <form class="contact-form" action="projektas.php" method="post">
                        <div class="input-row">
                            <input type="text" id="name" name="name" placeholder="Įveskite vardą" required>
                            <input type="email" name="email" placeholder="Įveskite el.paštą" required>
                        </div>
                        <div class="input-row">
                            <select id="proceduros-pavadinimas" name="procedurospavadinimas">
                                <option value="veido-valymas1">Veido valymas1</option>
                                <option value="veido-valymas2">Veido valymas2</option>
                                <option value="veido-valymas3">Veido valymas3</option>
                                <option value="veido-valymas4">Veido valymas4</option>
                                <option value="veido-valymas5">Veido valymas5</option>
                            </select>
                            <input type="tel" id="phone" name="phone" required placeholder="Įveskite savo telefoną">
                        </div>
                        <div class="input-row">
                            <input type="date" id="date" name="date" required>
                            <input type="time" id="time" name="time" required>
                        </div>
                        <div class="text-row">
                            <textarea name="message" rows="8" placeholder="Palikite komentarą"></textarea>
                        </div>
                        <div class="submit-row">
                            <input type="submit" class="btn btn-form" name="Registruotis" value="Registruotis">
                        </div>
                    </form>
                </div>
            </div>
        </section> <!-- registracijos formos pabaiga -->
<?php
    include('views/footer.php');
?>
