<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="description" content="Contactez Abir Optic pour toute question. Nous sommes là pour vous aider à trouver les meilleures lunettes et répondre à vos besoins visuels.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
    <!--    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.min.css" />
-->
    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.4.0/dist/email.min.js">
    </script>

</head>

<body>

    <?php 
        include('back-end/back-end.php');
        include('php-help/session.php');
        include('php-composants/header.php'); 
    ?>
    <script>
    document.getElementById("contact").classList.add('selected-menu');
    </script>

    <section class="heading">
        <h1>nous contacter</h1>
        <p> <a href="accueil.php">accueil</a> >> contact </p>
    </section>

    <section class="contact">


        <div class="row">

            <form id="contact-form">
                <input id="nom" type="text" placeholder="Votre nom complet" class="box">
                <input id="tel" type="text" placeholder="Votre numero de telephone" class="box">
                <input id="email" type="email" placeholder="votre email" class="box">
                <textarea id="message" name="" placeholder="Votre message" id="" cols="30" rows="10"></textarea>
                <button type="submit" class="btn">Envoyer</button>
            </form>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.864154544723!2d-2.995980670560647!3d35.15306930116489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd77a9346cb45e6d%3A0x46c8fb4799bac4eb!2sAbir%20Optic!5e0!3m2!1sfr!2sfr!4v1695753681162!5m2!1sfr!2sfr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
    </section>

    <section class="banner">
        <!--https://zurb.com/playground/foundation-icon-fonts-3-->
        <div class="">
            <div class="panel-heading">

                <div class="">
                    <i class="fi-map"></i> Bd Mohamed V N 75 SEGANGANE
                </div>
                <div class="">
                    <i class="fi-telephone"></i> +212 536351121
                </div>
                <div class="">
                    <i class="fi-mail"></i> contact.abiroptic@gmail.com
                </div>
            </div>

        </div>
        <div class="">
            <div class="panel-heading">

                <div>
                    <strong>
                        Horaire d'overture:
                    </strong>
                </div>
                <div>
                    Lundi - Vendredi: 09:00-13:00 / 15:00-19:00
                </div>
                <div>
                    Samedi: 09:00-14:00
                </div>

            </div>

        </div>
    </section>

    <?php include('php-composants/footer.php'); ?>

    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
    <script type="text/javascript">
    window.onload = function() {
        Calendly.initBadgeWidget({
            url: 'https://calendly.com/yasminataif99/30min',
            text: 'Prendre un rendez-vous avec nous',
            color: '#0367A6',
            textColor: '#ffffff',
            branding: false
        });
    }
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/emailjs-com@2.4.0/dist/email.min.js">
    </script>
    <script type="text/javascript">
    function sendMessage() {
        let from_this_email = document.getElementById("email").value;
        let message = document.getElementById("message").value;
        let tel = document.getElementById("tel").value;
        let nom = document.getElementById("nom").value;

        emailjs.send("service_83185bj", "template_xc5kvg5", {
            from_name: from_this_email,
            to_name: nom,
            message: message,
            reply_to: tel,
        }).then(function(res) {
            console.log('res...', res);
            alert("res :" + res)
        }, function(error) {
            console.log('FAILED...', error);
            alert("error :" + error)
        });
    }
    </script>

    <script>
    (function() {
        emailjs.init("R6G3VN3HDr3ig-NUC");
    })();
    document.getElementById("contact-form").addEventListener("submit", function(event) {
        event.preventDefault();
        var form = this;
        var formData = new FormData(form);

        let from_this_email = document.getElementById("email").value;
        let message = document.getElementById("message").value;
        let tel = document.getElementById("tel").value;
        let nom = document.getElementById("nom").value;

        emailjs.send("service_83185bj", "template_xc5kvg5", {
            from_name: from_this_email,
            to_name: nom,
            message: message,
            reply_to: tel,
        }).then(function(res) {
            alert('Votre message a été envoyé', res);
            form.reset();
        }, function(error) {
            alert('Il y a eu une erreur lors de l\'envoi. Merci de réessayer ultérieurement.' + error);
            form.reset();
        });
    });
    </script>

</body>

</html>