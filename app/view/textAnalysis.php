<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questões - Modelo Big Five</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #d9dad5;
        }

        p {
            line-height: 28px;
        }

        li {
            line-height: 28px;
        }

        .card{
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <?php include"../view/navbar.php"?>
    <div class="container mt-3">
        <div class="card  mb-4">
            <div class="card-body">
                <h5 class="card-title">Redação - Big Five</h5>
                <p class="card-text">Escreva no campo abaixo uma redação falando sobre você. Você pode se orientar pelos
                    seguintes tópicos para escrever o texto:</p>
                <p class="card-text">
                <ul>
                    <li>Detalhes pessoais: sua idade, cidade, estado que reside, com quem mora, status de
                        relacionamento, profissão, onde trabalha.</li>
                    <li>Formação acadêmica: histórico escolar, onde estudou, escola (pública ou particular).</li>
                    <li>Interesses, hábitos, responsabilidade, objetivos e desafios.</li>
                    <li>O que você gosta de fazer? E o que não gosta de fazer?</li>
                    <li>Profissão das pessoas próximas de você (pais, irmãos ou amigos)</li>
                </ul>
                </p>
                <p class="card-text"><strong>LEMBRANDO!</strong> Os tópicos citados acima servem apenas de
                    direcionamento para você escrever sua redação. Cabe a você decidir se quer seguir ou não. A única
                    restrição estabelecida é que seu texto deve possuir no mínimo <strong>300 palavras</strong>, para
                    que a análise seja realizada com a precisão mínima. </p>
                <div class="form-group">
                    <label for="text-id">Escreva no campo abaixo:</label>
                    <textarea required class="form-control" id="text-id" style="resize: none;" rows="20"></textarea>
                </div>
                <div class="row mt-3">
                    <div class="col text-center">
                        <button type="submit" onclick="createAnalysisForDocument()" class="btn btn-primary">SALVAR E FINALIZAR REDAÇÃO</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function createAnalysisForDocument() {
            // Base URL for create endpoint
            const baseUrl = "https://api.humantic.ai/v1/user-profile/create"

            // API Key: required, Get the api key from environment variable or substitute it directly
            const apiKey = "chrexec_f939e9bf2be9d26406ab7420d1d9ccc4"; //document.getElementById("apikey-id").value; // <Your API Key>

            // Analysis ID: required; User profile link from LinkedIn or, User Email ID
            // or, for document or text, use any unique identifier. We suggest using a value that helps you identify the analysis easily.
            const userId = "<?php echo $_SESSION['email'] ?>" //document.getElementById("userid-id").value; // "https://www.linkedin.com/in/ramanaditya"  // or, "https://twitter.com/_adityaraman"

            const url = `${baseUrl}?apikey=${apiKey}&id=${userId}`

            // text: required for text based input
            // Minimum 300 words is expected to provide personality insights for acceptable confidence level.
            const data = document.getElementById("text-id").value;
            const payload = JSON.stringify({
                "text": data
            })

            const settings = {
                "url": url,
                "method": "POST",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": payload
            };

            //console.log(settings);
            $.ajax(settings).done(function(response) {
                console.log(response.results);
                getAnalysisForDocument(response.results.userid);
                $("#demo").append("Output logged into Console<br\>")
            });
        }


        function getAnalysisForDocument(userId) {
            // Base URL for create endpoint
            const baseUrl = "https://api.humantic.ai/v1/user-profile/"

            // API Key: required, Get the api key from environment variable or substitute it directly
            const apiKey = "chrexec_f939e9bf2be9d26406ab7420d1d9ccc4"; //document.getElementById("apikey-id").value; // <Your API Key>

            const url = `${baseUrl}?apikey=${apiKey}&id=${userId}`

            // text: required for text based input
            // Minimum 300 words is expected to provide personality insights for acceptable confidence level.
            const data = document.getElementById("text-id").value;
            const payload = JSON.stringify({
                "text": data
            })

            const settings = {
                "url": url,
                "method": "GET",
                "timeout": 0,
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": payload
            };

            console.log(settings);
            $.ajax(settings).done(function(response) {
                console.log(response);
                //console.log(response.results.personality_analysis.ocean_assessment);
                $("#demo").append("Output logged into Console<br\>");
                window.location.href = `../model/insert/insertTextAnalysis.php?agreeableness_level= ${response.results.personality_analysis.ocean_assessment.agreeableness.level}&agreeableness_score=${response.results.personality_analysis.ocean_assessment.agreeableness.score}&conscientiousness_level=${response.results.personality_analysis.ocean_assessment.conscientiousness.level}&conscientiousness_score=${response.results.personality_analysis.ocean_assessment.conscientiousness.score}&emotional_stability_level=${response.results.personality_analysis.ocean_assessment.emotional_stability.level}&emotional_stability_score= ${response.results.personality_analysis.ocean_assessment.emotional_stability.score}&extraversion_level=${response.results.personality_analysis.ocean_assessment.extraversion.level}&extraversion_score=${response.results.personality_analysis.ocean_assessment.extraversion.score}&openness_level=${response.results.personality_analysis.ocean_assessment.openness.level}&openness_score=${response.results.personality_analysis.ocean_assessment.openness.score}&about_me=${data}&user_api=${userId}`
            });
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>