// Add event listener to watch trailer buttons
const watchTrailerButtons = document.querySelectorAll('.watch-trailer');
watchTrailerButtons.forEach((button) => {
  button.addEventListener('click', () => {
    const trailerUrl = button.dataset.trailerUrl;
    if (trailerUrl) {
      window.open(trailerUrl, '_blank');
    }
  });
});
