<!DOCTYPE html>
<html>
<head>
    <title>Портфолио переводчика</title>
    <style>
        .text-container {
            cursor: pointer;
        }
    </style>
    <script>
        function changeLanguage(element) {
            if (element.getAttribute("data-язык") === "русский") {
                element.textContent = "Seal causes a more or less pronounced golden, red or brown sheen on a black coat. This is often accompanied by a darker dorsal stripe and darker coloration on the lower legs, tail and face. Seal and ghost tan seem to be caused by incomplete dominant black that can’t fully mask a dog’s A-Locus pattern. But the genetics of seal is still a mystery.";
                element.setAttribute("data-язык", "английский");
            } else {
                element.textContent = "Seal вызывает более или менее выраженный золотистый, рыжий или коричневый блеск на черной шерсти. Это часто сопровождается более темной полосой на спине и более темным окрасом на голенях, хвосте и морде. Seal и Ghost Tan, по-видимому, обусловлены неполным доминированием черного пигмента, который не может полностью скрыть рисунок Локуса А у собаки. Но генетика Seal до сих пор остается загадкой.";
                element.setAttribute("data-язык", "русский");
            }
        }
    </script>
</head>
<body>
    <p class="text-container" data-язык="русский" onclick="changeLanguage(this)">Seal вызывает более или менее выраженный золотистый, рыжий или коричневый блеск на черной шерсти. Это часто сопровождается более темной полосой на спине и более темным окрасом на голенях, хвосте и морде. Seal и Ghost Tan, по-видимому, обусловлены неполным доминированием черного пигмента, который не может полностью скрыть рисунок Локуса А у собаки. Но генетика Seal до сих пор остается загадкой.</p>
    <!-- Добавьте другие абзацы с параллельными переводами в формате <p> -->
</body>
</html>
