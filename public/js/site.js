const navigationToggle = document.querySelector('.nav-toggle');
const navigation = document.querySelector('.site-nav');

if (navigationToggle && navigation) {
  navigationToggle.addEventListener('click', () => {
    const expanded = navigationToggle.getAttribute('aria-expanded') === 'true';
    navigationToggle.setAttribute('aria-expanded', String(!expanded));
    navigation.classList.toggle('is-open', !expanded);
  });

  navigation.addEventListener('click', (event) => {
    if (event.target instanceof Element && event.target.closest('a')) {
      navigationToggle.setAttribute('aria-expanded', 'false');
      navigation.classList.remove('is-open');
    }
  });
}

document.querySelectorAll('[data-destination-filter]').forEach((button) => {
  button.addEventListener('click', () => {
    const filter = button.dataset.destinationFilter;
    document.querySelectorAll('[data-destination-filter]').forEach((item) => {
      item.setAttribute('aria-pressed', String(item === button));
    });
    document.querySelectorAll('[data-destination-category]').forEach((card) => {
      card.hidden = filter !== 'all' && card.dataset.destinationCategory !== filter;
    });
  });
});

const imageModal = document.querySelector('[data-image-modal]');

if (imageModal instanceof HTMLDialogElement) {
  const modalImage = imageModal.querySelector('[data-image-modal-image]');
  const modalCaption = imageModal.querySelector('[data-image-modal-caption]');
  const closeButton = imageModal.querySelector('[data-image-modal-close]');

  if (modalImage instanceof HTMLImageElement && modalCaption && closeButton) {
    document.querySelectorAll('[data-image-preview]').forEach((button) => {
      button.addEventListener('click', () => {
        const source = button.dataset.imageSrc;
        const alt = button.dataset.imageAlt;

        if (!source || !alt) {
          return;
        }

        modalImage.src = source;
        modalImage.alt = alt;
        modalCaption.textContent = alt;
        imageModal.showModal();
      });
    });

    closeButton.addEventListener('click', () => imageModal.close());
    imageModal.addEventListener('click', (event) => {
      if (event.target === imageModal) {
        imageModal.close();
      }
    });
  }
}
