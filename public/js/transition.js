export function handleIntersect(entries, observer, className) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add(className);
      observer.unobserve(entry.target); // Hentikan pengamatan setelah objek terlihat
    }
  });
}

export function createObserver(className) {
  return new IntersectionObserver((entries, observer) => {
    handleIntersect(entries, observer, className);
  }, { threshold: 0.5 });
}
