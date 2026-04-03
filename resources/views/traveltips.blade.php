<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body>
    <div data-aos="fade-up">
    <h1>Animated Content</h1>
</div>

<!-- Advanced settings -->
<div data-aos="flip-left" data-aos-delay="200" data-aos-duration="1000">
    <p>Delayed flip animation</p>
</div>
</body>
</html>