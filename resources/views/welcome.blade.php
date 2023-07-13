<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Jeopardy</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    
    <style>
        .description {
            color: #5726c2;
        }
    </style>
</head>
<body>
<main class="container">
    <h1>Welcome to Jeopardy!</h1>

    <div class="content">
        <h3>Using the API</h3>

        <p>
            <b class="description">Retrieving a random question</b> <br>
            <strong>Method:<strong> GET <br>
            URL: <a href="/api/random">/api/random</a> <br>
            Function: Retrieves a random question from the over 200 000 possible jeopardy questions without the answer to the question. To retrieve the answer along with the question in the same request, use <a href="/api/random/true">/api/random/true</a>.
        </p>

        <p>
            <b class="description">Retrieving an answer</b> <br>
            <strong>Method:<strong> GET <br>
            URL: <a href="#">/answer/{questionId}</a> <br>
            Function: Retrieves the answer to the question specified by the `questionId` value.
        </p>

        <p>
            <b class="description">Retrieving a list of categories</b> <br>
            <strong>Method:<strong> GET <br>
            URL: <a href="/api/categories">/api/categories</a> <br>
            Function: Retrieves a list of possible question categories.
        </p>

        <p>
            <b class="description">Retrieving a random category</b> <br>
            <strong>Method:<strong> GET <br>
            URL: <a href="/api/categories/random">/api/categories/random</a> <br>
            Function: Retrieves a random category.
        </p>

        <p>
            <b class="description">Retrieving a question from a given category</b> <br>
            <strong>Method:<strong> GET <br>
            URL: <a href="#">/api/categories/question/{categoryId}</a> <br>
            Function: Retrieves a random question from the specified `categoryId`.
        </p>
    </div>
</main>
</body>
</html>