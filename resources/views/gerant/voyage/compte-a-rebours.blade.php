<div class="row">
    <div class="col-lg-4">

    </div>
    <div class="col-lg-4">
        <table class="compte_a_rebours_container">
            <tr class="info">
                <td colspan="4">
                    Prochain voyage dans
                </td>
            </tr>
            <tr class="info">
                <td id="jours"></td>
                <td id="heures"></td>
                <td id="minutes"></td>
                <td id="secondes"></td>
            </tr>
            <tr>
                <td>Jours</td>
                <td>Heures</td>
                <td>Minutes</td>
                <td>Secondes</td>
            </tr>
        </table>
    </div>
</div>
<script>
    function compte_a_rebours() {
        var date_actuelle = new Date();
        var date_database = new Date({{ $annee }}, {{ $mois }}, {{ $jours }} ); //Date de la base donnees

        var total_secondes = (date_actuelle - date_database) / 1000;

        if (total_secondes < 0)
        {
            total_secondes = Math.abs(total_secondes); // On ne garde que la valeur absolue
        }

        if (total_secondes > 0)
        {
            // A faire, tous nos calculs
        }

        var jours = Math.floor(total_secondes / (60 * 60 * 24));
        var heures = Math.floor((total_secondes - (jours * 60 * 60 * 24)) / (60 * 60));
        var minutes = Math.floor((total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60))) / 60);
        var secondes = Math.floor(total_secondes - ((jours * 60 * 60 * 24 + heures * 60 * 60 + minutes * 60)));


        if (jours < 24) {
            jours = 0;
        } else {
            jours;
        }

        heures = (heures < 10) ? "0"+ heures : heures;
        minutes = (minutes < 10) ? "0"+ minutes : minutes;
        secondes = (secondes < 10) ? "0"+ secondes : secondes;

        document.getElementById("jours").textContent = jours;
        document.getElementById("jours").innerText = jours;

        document.getElementById("heures").textContent = heures;
        document.getElementById("minutes").textContent = minutes;
        document.getElementById("secondes").textContent = secondes;

        setTimeout(compte_a_rebours, 1000);

    }

    compte_a_rebours();
</script>
