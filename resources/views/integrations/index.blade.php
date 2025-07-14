<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-pink-800 dark:text-pink-200 leading-tight drop-shadow">
            <span class="inline-flex items-center"><svg class="w-7 h-7 mr-2 text-pink-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg> Create Source</span>
        </h2>
    </x-slot>
    <div class="py-12 bg-gradient-to-br from-pink-50 via-yellow-50 to-blue-50 dark:from-gray-900 dark:via-gray-800 dark:to-gray-700 min-h-screen">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <!-- Page 0: Integration Platform Selection -->
            <section id="integration-setup" class="p-8 max-w-xl mx-auto">
    <h2 class="text-xl font-semibold mb-4 text-center">Select Integration Platform</h2>
    
    <label for="integration-select" class="block mb-2 font-medium">Choose a platform:</label>
    <select id="integration-select" class="w-full p-2 border rounded mb-4">
      <option value="" disabled selected>Select an option</option>
      <option value="Shopify">Shopify</option>
      <option value="WooCommerce" disabled>WooCommerce</option>
      <option value="Magento" disabled>Magento</option>
      <option value="BigCommerce" disabled>BigCommerce</option>
    </select>

    <input id="integration-name" type="text" placeholder="Or enter custom platform name" class="w-full p-2 border rounded mb-4">

    <button onclick="goToApiConfig()" class="w-full bg-black text-white p-2 rounded">Continue</button>
  </section>

  <!-- Page 1: Dashboard -->
  <section id="dashboard" class="hidden p-8 max-w-5xl mx-auto">
    <h2 class="text-2xl font-semibold mb-6">Welcome to Your Dashboard</h2>
    <div class="grid grid-cols-3 gap-4 mb-6">
      <div class="bg-white p-4 shadow rounded">Active Integrations<br><span class="font-bold">3</span></div>
      <div class="bg-white p-4 shadow rounded">Total Products<br><span class="font-bold">1,247</span></div>
      <div class="bg-white p-4 shadow rounded">Total Orders<br><span class="font-bold">89</span></div>
    </div>
    <div class="bg-white p-4 shadow rounded mb-6 text-center">
      <h3 class="mb-2 font-medium">Import product catalogs from your connected platforms</h3>
      <button onclick="goToApiConfig()" class="bg-blue-600 text-white px-4 py-2 rounded">+ Import Catalogs</button>
    </div>
  </section>

  <!-- Page 2: API Configuration -->
  <section id="api-config" class="hidden p-8 max-w-xl mx-auto">
    <h2 class="text-xl font-semibold mb-4">Configure API Settings</h2>
    <input type="text" id="api-password" required placeholder="Enter your api password" class="w-full p-2 border rounded mb-2">
    <!-- <input type="text" id="access-key" placeholder="Enter your access key" class="w-full p-2 border rounded mb-2">
    <input type="text" id="access-token" placeholder="Enter your access token" class="w-full p-2 border rounded mb-2">
    <input type="text" id="api-key" placeholder="Enter your API key" class="w-full p-2 border rounded mb-2"> -->
    <input type="text" id="domain-name" required placeholder="Enter your store domain" class="w-full p-2 border rounded mb-4">
    <div class="flex justify-between">
      <button onclick="alert('Connection successful!')" class="bg-gray-300 p-2 rounded">Test Connection</button>
      <button onclick="validateAndGoToOrdersList()" class="bg-black text-white p-2 rounded">Save Configuration</button>
    </div>
  </section>

  <!-- Page 3: Orders List -->
  <section id="orders-list" class="hidden p-8 max-w-4xl mx-auto">
    <h2 class="text-xl font-semibold mb-4">Import Orders</h2>
    <ul class="bg-white shadow p-4 rounded divide-y">
      <li class="flex items-center py-2">
        <input type="checkbox" class="mr-4 order-checkbox">#ORD-2025-001 – <span class="ml-auto">$129.99</span>
      </li>
      <li class="flex items-center py-2">
        <input type="checkbox" class="mr-4 order-checkbox">#ORD-2025-002 – <span class="ml-auto">$89.50</span>
      </li>
      <li class="flex items-center py-2">
        <input type="checkbox" class="mr-4 order-checkbox">#ORD-2025-003 – <span class="ml-auto">$199.99</span>
      </li>
    </ul>
    <div class="text-right mt-4">
      <button onclick="goToSelectedOrders()" class="bg-blue-500 text-white p-2 rounded">Process Selected</button>
    </div>
  </section>

  <!-- Page 4: Selected Orders Summary -->
  <section id="selected-orders" class="hidden p-8 max-w-3xl mx-auto">
    <h2 class="text-xl font-semibold mb-4">Selected Orders</h2>
    <ul id="selected-orders-list" class="bg-white shadow p-4 rounded divide-y"></ul>
    <div class="text-right mt-4">
      <button onclick="alert('Orders processed successfully!')" class="bg-green-500 text-white p-2 rounded">Confirm</button>
    </div>
  </section>
        </div>
    </div>
</x-app-layout> 
<script>
    // Copy selected value from dropdown to input
    document.getElementById("integration-select").addEventListener("change", function () {
      document.getElementById("integration-name").value = this.value;
    });

    function hideAllSections() {
      document.querySelectorAll("section").forEach(sec => sec.classList.add("hidden"));
    }

    function goToApiConfig() {
      hideAllSections();
      document.getElementById("api-config").classList.remove("hidden");
    }

    function goToDashboard() {
      hideAllSections();
      document.getElementById("dashboard").classList.remove("hidden");
    }

    function goToOrdersList() {
      hideAllSections();
      document.getElementById("orders-list").classList.remove("hidden");
    }

    function goToSelectedOrders() {
      hideAllSections();
      document.getElementById("selected-orders").classList.remove("hidden");

      const selected = document.querySelectorAll('.order-checkbox:checked');
      const summary = document.getElementById('selected-orders-list');
      summary.innerHTML = '';

      selected.forEach(checkbox => {
        const orderText = checkbox.parentNode.textContent.trim();
        const li = document.createElement('li');
        li.className = 'py-2';
        li.textContent = orderText;
        summary.appendChild(li);
      });
    }

    function validateAndGoToOrdersList() {
        const apiPassword = document.getElementById('api-password').value.trim();
        const domainName = document.getElementById('domain-name').value.trim();

        if (!apiPassword || !domainName) {
            alert('API password and domain name are required!');
            return;
        }
        goToOrdersList();
    }
  </script>