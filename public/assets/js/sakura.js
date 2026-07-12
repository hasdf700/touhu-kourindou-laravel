/**
 * Sakura Particles - Canvas Animation
 * 東方 Touhou - Cherry Blossom Effect
 */
(function () {
  var COLORS = ['#FFB7C5', '#FFC8D5', '#FFAABB', '#FF99AA', '#FFD0DC', '#FFCCDD'];

  function initSakura(canvasId, count) {
    count = count || 20;
    var canvas = document.getElementById(canvasId);
    if (!canvas) return;
    var ctx = canvas.getContext('2d');
    var petals = [];
    var t = 0;

    function resize() {
      canvas.width = canvas.offsetWidth;
      canvas.height = canvas.offsetHeight;
    }
    resize();
    window.addEventListener('resize', resize);

    function createPetal() {
      return {
        x: Math.random() * canvas.width,
        y: -20,
        size: Math.random() * 8 + 5,
        speed: Math.random() * 1.5 + 0.5,
        angle: Math.random() * Math.PI * 2,
        spin: (Math.random() - 0.5) * 0.08,
        sway: Math.random() * 60 + 20,
        swaySpeed: Math.random() * 0.01 + 0.005,
        swayOffset: Math.random() * Math.PI * 2,
        opacity: Math.random() * 0.5 + 0.4,
        color: COLORS[Math.floor(Math.random() * COLORS.length)]
      };
    }

    // Scatter initial petals
    for (var i = 0; i < count; i++) {
      var p = createPetal();
      p.y = Math.random() * canvas.height;
      petals.push(p);
    }

    function drawPetal(p) {
      ctx.save();
      ctx.globalAlpha = p.opacity;
      ctx.translate(p.x, p.y);
      ctx.rotate(p.angle);
      ctx.beginPath();
      ctx.moveTo(0, -p.size);
      ctx.bezierCurveTo(p.size * 0.8, -p.size * 0.5, p.size * 0.8, p.size * 0.5, 0, p.size * 0.3);
      ctx.bezierCurveTo(-p.size * 0.8, p.size * 0.5, -p.size * 0.8, -p.size * 0.5, 0, -p.size);
      ctx.fillStyle = p.color;
      ctx.fill();
      ctx.restore();
    }

    function animate() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      t++;
      petals.forEach(function (p) {
        p.y += p.speed;
        p.x += Math.sin(t * p.swaySpeed + p.swayOffset) * 0.5;
        p.angle += p.spin;
        if (p.y > canvas.height + 30) {
          var fresh = createPetal();
          for (var k in fresh) p[k] = fresh[k];
        }
        drawPetal(p);
      });
      requestAnimationFrame(animate);
    }
    animate();
  }

  // Export
  window.initSakura = initSakura;
})();

