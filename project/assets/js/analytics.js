// Verstuur een pageview event bij het laden van de pagina
fetch('track.php', {
    method: 'POST',
    body: JSON.stringify({
      type: 'pageview',
      url: window.location.pathname
    }),
    headers: {
      'Content-Type': 'application/json'
    }
  });
  
  // Verstuur een click event wanneer er op een link wordt geklikt
  document.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      fetch('track.php', {
        method: 'POST',
        body: JSON.stringify({
          type: 'click',
          target: link.href
        }),
        headers: {
          'Content-Type': 'application/json'
        }
      });
    });
  });
  