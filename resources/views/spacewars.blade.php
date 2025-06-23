<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Spacewar - Minijuego</title>
    <style>
        canvas {
            background: black;
            display: block;
            margin: 0 auto;
            border: 2px solid white;
        }
    </style>
</head>
<body>
    <canvas id="game" width="600" height="400"></canvas>

    <script>
        const canvas = document.getElementById('game');
        const ctx = canvas.getContext('2d');

        const ship1 = { x: 100, y: 200, angle: 0, color: 'lime', keys: { left: 'a', right: 'd', up: 'w' } };
        const ship2 = { x: 500, y: 200, angle: Math.PI, color: 'cyan', keys: { left: 'ArrowLeft', right: 'ArrowRight', up: 'ArrowUp' } };
        const ships = [ship1, ship2];
        const speed = 2;
        const radius = 8;

        const keysPressed = {};

        document.addEventListener('keydown', e => keysPressed[e.key] = true);
        document.addEventListener('keyup', e => keysPressed[e.key] = false);

        function updateShip(ship) {
            if (keysPressed[ship.keys.left]) ship.angle -= 0.05;
            if (keysPressed[ship.keys.right]) ship.angle += 0.05;
            if (keysPressed[ship.keys.up]) {
                ship.x += speed * Math.cos(ship.angle);
                ship.y += speed * Math.sin(ship.angle);
            }

            // screen wrap
            if (ship.x < 0) ship.x = canvas.width;
            if (ship.x > canvas.width) ship.x = 0;
            if (ship.y < 0) ship.y = canvas.height;
            if (ship.y > canvas.height) ship.y = 0;
        }

        function drawShip(ship) {
            ctx.save();
            ctx.translate(ship.x, ship.y);
            ctx.rotate(ship.angle);
            ctx.beginPath();
            ctx.moveTo(10, 0);
            ctx.lineTo(-10, -7);
            ctx.lineTo(-10, 7);
            ctx.closePath();
            ctx.fillStyle = ship.color;
            ctx.fill();
            ctx.restore();
        }

        function loop() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            for (const ship of ships) {
                updateShip(ship);
                drawShip(ship);
            }

            requestAnimationFrame(loop);
        }

        loop();
    </script>
</body>
</html>