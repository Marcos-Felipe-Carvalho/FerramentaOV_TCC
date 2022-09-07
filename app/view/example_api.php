<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Create Analysis for Text
    </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body style="margin: 10%">
    <script>
        function createAnalysisForDocument() {
            // Base URL for create endpoint
            const baseUrl = "https://api.humantic.ai/v1/user-profile/create"

            // API Key: required, Get the api key from environment variable or substitute it directly
            const apiKey = "chrexec_2e26433b3d70baecab2249442a80ec15"; //document.getElementById("apikey-id").value; // <Your API Key>

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
                console.log(response.results.userid);
                getAnalysisForDocument(response.results.userid);
                $("#demo").append("Output logged into Console<br\>")
            });
        }


        function getAnalysisForDocument(userId) {
            // Base URL for create endpoint
            const baseUrl = "https://api.humantic.ai/v1/user-profile/"

            // API Key: required, Get the api key from environment variable or substitute it directly
            const apiKey = "chrexec_2e26433b3d70baecab2249442a80ec15"; //document.getElementById("apikey-id").value; // <Your API Key>

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
                window.location.href=`../model/insert/insertTextAnalysis.php?agreeableness_level= ${response.results.personality_analysis.ocean_assessment.agreeableness.level}&agreeableness_score=${response.results.personality_analysis.ocean_assessment.agreeableness.score}&conscientiousness_level=${response.results.personality_analysis.ocean_assessment.conscientiousness.level}&conscientiousness_score=${response.results.personality_analysis.ocean_assessment.conscientiousness.score}&emotional_stability_level=${response.results.personality_analysis.ocean_assessment.emotional_stability.level}&emotional_stability_score= ${response.results.personality_analysis.ocean_assessment.emotional_stability.score}&extraversion_level=${response.results.personality_analysis.ocean_assessment.extraversion.level}&extraversion_score=${response.results.personality_analysis.ocean_assessment.extraversion.score}&openness_level=${response.results.personality_analysis.ocean_assessment.openness.level}&openness_score=${response.results.personality_analysis.ocean_assessment.openness.score}&about_me=${data}&user_api=${userId}`
            });
        }
    </script>

    <div style="margin: 10px; padding: 10px;">
        <label for="apikey-id">API Key: </label><input id="apikey-id" name="apiKey" placeholder="Enter your API Key" style="width: 50%;height:20px" /><br />
    </div>

    <div style="margin: 10px; padding: 10px;">
        <label for="userid-id">ID: </label><input id="userid-id" name="userId" placeholder="Enter the userId" style="width: 50%;height:20px"><br />
    </div>

    <div style="margin: 10px; padding: 10px;">
        <label for="text-id">Text: </label><textarea id="text-id" name="text" placeholder="text by candidate" cols="50" rows="6"> </textarea><br />
    </div>

    <button style="margin: 10px; padding: 10px; width: 50%;" type="submit" onclick="createAnalysisForDocument()">Create Analysis for Document</button>

    <p id="demo" style="margin: 10px; padding: 10px;color: green"></p>

</body>

</html>