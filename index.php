<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Orbitron:wght@400..900&family=Ruwudu:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <title>Weerbericht</title>
</head>

<body>
    <?php require_once __DIR__ . "/header.php"; ?>
    <main>
        <h2>Vandaag</h2>
        <div class="image1">
            <div class="group1">
                <img src="img/partly_cloudy_day_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="Gedeeltelijk bewolkt">
            </div>
            <p><strong>16°C</strong></p>
        </div>
        <section class="week-verwachting" aria-label="Weeroverzicht voor de komende week">
            <div class="verwachting">
                <span>Woensdag</span>
                <img src="img/partly_cloudy_day_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="Gedeeltelijk bewolkt">
                <strong>15°C</strong>
            </div>
            <div class="verwachting">
                <span>Donderdag</span>
                <img src="img/partly_cloudy_day_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="Gedeeltelijk bewolkt">
                <strong>15°C</strong>
            </div>
            <div class="verwachting">
                <span>Vrijdag</span>
                <img src="img/cloud_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="Gedeeltelijk bewolkt">
                <strong>14°C</strong>
            </div>
            <div class="verwachting">
                <span>Zaterdag</span>
                <img src="img/partly_cloudy_day_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="Gedeeltelijk bewolkt">
                <strong>12°C</strong>
            </div>
            <div class="verwachting">
                <span>Zondag</span>
                <img src="img/partly_cloudy_day_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="Gedeeltelijk bewolkt">
                <strong>13°C</strong>
            </div>
            <div class="verwachting">
                <span>Maandag</span>
                <img src="img/partly_cloudy_day_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="Gedeeltelijk bewolkt">
                <strong>11°C</strong>
            </div>
            <div class="verwachting">
                <span>Dinsdag</span>
                <img src="img/partly_cloudy_day_24dp_E3E3E3_FILL0_wght400_GRAD0_opsz24.svg" alt="Gedeeltelijk bewolkt">
                <strong>11°C</strong>
            </div>
        </section>
    </main>
    <?php require_once __DIR__ . "/footer.php"; ?>
</body>

</html>