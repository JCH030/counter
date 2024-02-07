
<html lang="en">
<head>
<title>Counter App</title>
</head>
<body>

<div class="container">
    <div class="counter" id="counter">0</div>
    <button onclick="inc()">Inc</button>
    <button onclick="dec()">Decr</button>
    <button onclick="reset()">Reset</button>
</div>

<script>
    let count = 0;
    const counterElement = document.getElementById('counter');

    function updateCounter() {
        counterElement.textContent = count;
    }

    function inc() {
        count++;
        updateCounter();
    }

    function dec() {
        count--;
        updateCounter();
    }

    function reset() {
        count = 0;
        updateCounter();
    }
</script>

</body>
</html>
