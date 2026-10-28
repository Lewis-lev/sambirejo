const bookingOptions = {
  'Balkondes': ['Family Room', 'Couple Room', 'Extra Bed'],
  'Room Mahika': ['Couple Room Mahika'],
  'Paket Study': ['Paket Sambi 1', 'Paket Sambi 2', 'Paket Sambi 3', 'Paket Sambi A', 'Paket Sambi B', 'Paket Sambi C'],
  'Jeep Breksi': ['Short Trip Atas', 'Short Trip Bawah', 'Medium Trip', 'Long Trip'],
  'Camping Mahika Ayu': ['Paket Mandiri', 'Paket Relax', 'Paket Regular', 'Paket Medium', 'Paket Premium', 'Paket Campervan'],
};

const bookingPackage = document.getElementById('booking-package');
const bookingType = document.getElementById('booking-type');

if (bookingPackage && bookingType) {
  const updateBookingTypes = (selectedType = '') => {
    bookingType.replaceChildren();
    const placeholder = document.createElement('option');
    placeholder.value = '';
    placeholder.textContent = 'Pilih jenis paket';
    bookingType.append(placeholder);

    (bookingOptions[bookingPackage.value] || []).forEach((label) => {
      const option = document.createElement('option');
      option.value = label;
      option.textContent = label;
      option.selected = label === selectedType;
      bookingType.append(option);
    });
  };

  bookingPackage.addEventListener('change', () => updateBookingTypes());
  if (bookingPackage.value) {
    updateBookingTypes(bookingType.dataset.currentType);
  }
}
