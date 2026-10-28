const plannerCatalog = {
  'Balkondes': { 'Family Room': 2200000, 'Couple Room': 600000, 'Extra Bed': 110000 },
  'Room Mahika': { 'Couple Room Mahika': 500000 },
  'Paket Study': { 'Paket Sambi 1': 95000, 'Paket Sambi 2': 120000, 'Paket Sambi 3': 145000, 'Paket Sambi A': 150000, 'Paket Sambi B': 180000, 'Paket Sambi C': 220000 },
  'Jeep Breksi': { 'Short Trip Atas': 360000, 'Short Trip Bawah': 360000, 'Medium Trip': 450000, 'Long Trip': 600000 },
  'Camping Mahika Ayu': { 'Paket Mandiri': 50000, 'Paket Relax': 350000, 'Paket Regular': 450000, 'Paket Medium': 575000, 'Paket Premium': 695000, 'Paket Campervan': 1500000 },
};

const plannerForm = document.getElementById('planner-form');
const plannerPackage = document.getElementById('planner-package');
const plannerType = document.getElementById('planner-type');
const plannerDuration = document.getElementById('planner-duration');
const plannerBudget = document.getElementById('planner-budget');
const plannerResults = document.getElementById('planner-results');
const plannerEstimate = document.getElementById('planner-estimate');
const plannerBudgetMessage = document.getElementById('planner-budget-message');
const plannerList = document.getElementById('planner-list');
const plannerTotal = document.getElementById('planner-total');
const plannerClear = document.getElementById('planner-clear');
const plannerItems = [];
const formatCurrency = (amount) => new Intl.NumberFormat('id-ID', {
  style: 'currency',
  currency: 'IDR',
  maximumFractionDigits: 0,
}).format(amount);

if (plannerForm && plannerPackage && plannerType) {
  plannerPackage.addEventListener('change', () => {
    plannerType.replaceChildren();
    const choices = plannerCatalog[plannerPackage.value] || {};
    Object.keys(choices).forEach((label) => {
      const option = document.createElement('option');
      option.value = label;
      option.textContent = label;
      plannerType.append(option);
    });
    plannerType.disabled = Object.keys(choices).length === 0;
    if (plannerType.disabled) {
      const placeholder = document.createElement('option');
      placeholder.value = '';
      placeholder.textContent = 'Pilih pengalaman terlebih dahulu';
      plannerType.append(placeholder);
    }
    plannerResults.hidden = true;
  });

  plannerForm.addEventListener('submit', (event) => {
    event.preventDefault();
    const selectedPackage = plannerPackage.value;
    const selectedType = plannerType.value;
    const duration = Number(plannerDuration.value);
    const rate = plannerCatalog[selectedPackage]?.[selectedType];

    if (!rate || !Number.isInteger(duration) || duration < 1 || duration > 30) {
      plannerForm.reportValidity();
      return;
    }

    const estimate = rate * duration;
    const budget = plannerBudget.value === '' ? null : Number(plannerBudget.value);
    plannerEstimate.textContent = formatCurrency(estimate);
    plannerBudgetMessage.textContent = budget === null
      ? 'Masukkan anggaran untuk melihat perbandingan.'
      : estimate <= budget
        ? `Masuk dalam anggaran ${formatCurrency(budget)}.`
        : `Melebihi anggaran ${formatCurrency(budget)} sebesar ${formatCurrency(estimate - budget)}.`;
    plannerResults.hidden = false;

    plannerItems.push({ packageName: selectedPackage, type: selectedType, duration, estimate });
    renderPlannerItems();
  });

  plannerList.addEventListener('click', (event) => {
    const button = event.target.closest('[data-remove-item]');
    if (!button) return;
    plannerItems.splice(Number(button.dataset.removeItem), 1);
    renderPlannerItems();
  });

  plannerClear.addEventListener('click', () => {
    plannerItems.length = 0;
    renderPlannerItems();
  });
}

function renderPlannerItems() {
  plannerList.replaceChildren();

  if (plannerItems.length === 0) {
    const empty = document.createElement('li');
    empty.className = 'planner-empty';
    empty.textContent = 'Belum ada pengalaman ditambahkan.';
    plannerList.append(empty);
  } else {
    plannerItems.forEach((item, index) => {
      const row = document.createElement('li');
      const details = document.createElement('span');
      details.textContent = `${item.packageName} · ${item.type} · ${item.duration} hari`;
      const action = document.createElement('span');
      const price = document.createElement('strong');
      price.textContent = formatCurrency(item.estimate);
      const remove = document.createElement('button');
      remove.type = 'button';
      remove.dataset.removeItem = String(index);
      remove.setAttribute('aria-label', `Hapus ${item.packageName} ${item.type}`);
      remove.textContent = 'Hapus';
      action.append(price, document.createTextNode(' '), remove);
      row.append(details, action);
      plannerList.append(row);
    });
  }

  plannerTotal.textContent = formatCurrency(plannerItems.reduce((sum, item) => sum + item.estimate, 0));
}
