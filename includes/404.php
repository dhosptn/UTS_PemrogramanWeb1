<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>404 Not Found</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
  body,
  html {
    height: 100%;
    margin: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #89f7fe 0%, #66a6ff 100%);
    font-family: Arial, sans-serif;
    color: #333;
  }

  h1 {
    font-size: 5rem;
    font-weight: bold;
    color: #fff;
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);
    animation: float 2s infinite ease-in-out;
  }

  .error-message {
    color: #fff;
    font-size: 1.5rem;
    margin-top: 20px;
  }

  .home-button {
    background-color: #ff6b6b;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 1rem;
    border-radius: 5px;
    margin-top: 20px;
    transition: background-color 0.3s ease;
    text-decoration: none;
  }

  .home-button:hover {
    background-color: #ff4757;
    color: #fff;
  }

  @keyframes float {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-15px);
    }
  }
  </style>
</head>

<body>
  <div class="text-center">
    <h1>404 Not Found</h1>
    <p class="error-message">Sorry, the page you're looking for doesn't exist.</p>
    <a href="/" class="home-button">Go Back Home</a>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>