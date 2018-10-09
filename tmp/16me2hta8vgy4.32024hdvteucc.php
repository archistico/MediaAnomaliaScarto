<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?= ($media) ?> <br>
    <?= ($sqm) ?> <br>
    <?= ($msa) ?> <br>

    <script>
        function notify(message) {
            // Controlliamo se il browser supporta le notifiche
            if (!("Notification" in window)) {
                alert("Questo browser non supporta le Notification API, usa un browser moderno");
            }

            // Controlliamo se l'utente accetta le nostre notifiche
            else if (Notification.permission === "granted") {
                // Se è tutto a posto, creiamo una notifica
                var notification = new Notification(message);
            }

            // Se l'utente non ha accettato le notifiche, chiediamo il permesso
            else if (Notification.permission !== 'denied') {
                Notification.requestPermission(function (permission) {
                    // Se è tutto a posto, creiamo una notifica
                    if (permission === "granted") {
                        var notification = new Notification(message);
                    }
                });
            }

        }

        setTimeout(function () {

            notify("Nuovo appuntamento:\n Emilie ");

        }, 1000); 
    </script>
</body>

</html>